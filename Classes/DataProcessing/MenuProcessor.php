<?php

namespace Buepro\Realer\DataProcessing;

/***
 *
 * This file is part of the "Real estate publisher" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Roman Büchler <rb@buechler.pro>
 *
 ***/


use TYPO3\CMS\Core\SingletonInterface;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;


/**
 * Class MenuProcessor
 *
 * Possible TS:
 *
 *  10 = FLUIDTEMPLATE
 *  10 {
 *     ...
 *     dataProcessing.10 = Buepro\Realer\DataProcessing\MenuProcessor
 *     dataProcessing.10 {
 *        menuTargetPageUid = 73
 *        menuPid = 73
 *        menuPrecedingSiblingUid = 76
 *     }
 *     ...
 * }
 *
 * @package Buepro\Realer\DataProcessing
 */
class MenuProcessor extends \TYPO3\CMS\Frontend\DataProcessing\MenuProcessor implements SingletonInterface
{

    /**
     * propertyRepository
     *
     * @var \Buepro\Realer\Domain\Repository\PropertyRepository
     */
    protected $propertyRepository = null;

    /**
     * uriBuilder
     *
     * @var \TYPO3\CMS\Extbase\Mvc\Web\Routing\UriBuilder
     */
    protected $uriBuilder = null;

    /**
     * Object type specified through the url request
     *
     * @var int
     */
    private $requestedObjectType = 0;

    public function __construct()
    {
        parent::__construct();

        $this->allowedConfigurationKeys[] = 'menuTargetPageUid';
        $this->allowedConfigurationKeys[] = 'menuPid';
        $this->allowedConfigurationKeys[] = 'menuPrecedingSiblingUid';

        // get property repository
        $objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Extbase\Object\ObjectManager');
        $this->propertyRepository = $objectManager->get('Buepro\Realer\Domain\Repository\PropertyRepository');

        // create uriBuiler
        $configurationManager = $objectManager->get('TYPO3\CMS\Extbase\Configuration\ConfigurationManager');
        $contentObjectRenderer = $objectManager->get('TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer');
        $configurationManager->setContentObject($contentObjectRenderer);
        $this->uriBuilder = $objectManager->get('TYPO3\CMS\Extbase\Mvc\Web\Routing\UriBuilder');
        $this->uriBuilder->injectConfigurationManager($configurationManager);

        // set user requested object type
        $request = GeneralUtility::_GET('tx_realer_propertylisting');
        $this->requestedObjectType = isset($request['objectType']) ? (int)$request['objectType'] : 0;
    }


    /**
     * Create the property items to be inserted into the menu
     *
     * @param int $menuTargetPageUid is the uid from the page where the plugin is located
     * @return array
     */
    private function getPropertyItems(int $menuTargetPageUid)
    {
        $items = [];
        $propertyTypes = $this->propertyRepository->getPropertyTypes();
        if ($menuTargetPageUid) $this->uriBuilder->setTargetPageUid($menuTargetPageUid);
        foreach ($propertyTypes as $propertyType) {
            $items[] = [
                'title'   => $propertyType['objectTypeText'],
                'link'    => $this->uriBuilder->uriFor('list', ['objectType' => $propertyType['objectType']],
                    'Property', 'realer', 'propertylisting'),
                'target'  => null,
                'active'  => $propertyType['objectType'] == $this->requestedObjectType ? 1 : 0,
                'current' => $propertyType['objectType'] == $this->requestedObjectType ? 1 : 0,
                'spacer'  => 0
            ];
        };
        return $items;
    }


    /**
     * Merges the property menu to the existing menu defined by the siblings.
     *
     * @param array $siblings
     * @param int $menuTargetPageUid defines the page where the plugin is located
     * @param int $menuPrecedingSiblingUid defines the page preceding the property menu. Is optional.
     * @return void
     */
    private function attachPropertyItemsToSiblings(array &$siblings, int $menuTargetPageUid, int $menuPrecedingSiblingUid = 0)
    {
        // unset state from sibling
        if ($this->requestedObjectType) {
            foreach ($siblings as &$sibling) {
                $sibling['active'] = 0;
                $sibling['current'] = 0;
            }
        };

        // init variables
        $oldSiblings = $siblings;
        $siblings = [];
        $siblingsInserted = false;

        // try to insert property menu after preceding menu item
        foreach ($oldSiblings as $sibling) {
            $siblings[] = $sibling;
            if (isset($sibling['data']['uid']) && $sibling['data']['uid'] == $menuPrecedingSiblingUid) {
                $siblings = array_merge($siblings,$this->getPropertyItems($menuTargetPageUid));
                $siblingsInserted = true;
            }
        }

        // in case no preceding sibling was found the property menu is attached to the last sibling
        if (!$siblingsInserted) {
            $siblings = array_merge($siblings,$this->getPropertyItems($menuTargetPageUid));
        }
    }


    /**
     * Attaches the property menu items to the existing menu.
     *
     * @param array $items represents the existing menu
     * @param int $menuTargetPageUid defines the page where the plugin is located
     * @param int $menuPid defines the parent page from the menu items
     * @param int $menuPrecedingSiblingUid defines the page preceding the property menu. Is optional.
     * @return void
     *
     */
    private function attachPropertyItems(array &$items, int $menuTargetPageUid, int $menuPid, int $menuPrecedingSiblingUid = 0)
    {
        if (count($items)) {
            // try to find a parent
            foreach ($items as $key => &$item) {
                if (isset($item['data']['uid']) && intval($item['data']['uid']) == $menuPid) {
                    // parent found -> attach items after sibling
                    if (!isset($item['children'])) {
                        $item['children'] = [];
                    };
                    $this->attachPropertyItemsToSiblings($item['children'],$menuTargetPageUid,$menuPrecedingSiblingUid);
                    $item['current'] = 0;
                } elseif (isset($item['children'])) {
                    // no parent found yet -> recursively check if parent is in subitems
                    $this->attachPropertyItems($item['children'],$menuTargetPageUid,$menuPid,$menuPrecedingSiblingUid);
                }
            }
            // items might contain siblings
            if (isset($items[0]['data']['pid']) && $items[0]['data']['pid'] == $menuPid) {
                $this->attachPropertyItemsToSiblings($items,$menuTargetPageUid,$menuPrecedingSiblingUid);
            }
        }
    }


    /**
     * Creates or completes the menu with the property types.
     * It is needed to configure the uid from the a page where the properties can be rendered.
     * In case no parent page has been defined just the property type items are gathered.
     * In case a valid parent page has been configured the property menu items are attached to the existing menu below
     * the parent page and after the configured sibling.
     *
     * @param ContentObjectRenderer $cObj The data of the content element or page
     * @param array $contentObjectConfiguration The configuration of Content Object
     * @param array $processorConfiguration The configuration of this processor
     * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
     * @return array the processed data as key/value store
     */
    public function process(ContentObjectRenderer $cObj,array $contentObjectConfiguration, array $processorConfiguration, array $processedData)
    {
        $this->contentObject = $cObj;
        $result = parent::process($cObj, $contentObjectConfiguration, $processorConfiguration, $processedData);

        // proceed only if configuration is complete
        if (!isset($processorConfiguration['menuTargetPageUid']) || !$processorConfiguration['menuTargetPageUid']) {
            return $result;
        }

        // proceed only if there are properties assigned to an objectType
        $propertyTypes = $this->propertyRepository->getPropertyTypes();
        if(!$propertyTypes || count($propertyTypes) == 0) {
            return $result;
        }

        // just return property menu in case no parent page has been defined
        if (!isset($processorConfiguration['menuPid']) || !$processorConfiguration['menuPid']) {
            if (isset($processorConfiguration['as']) && isset($result[$processorConfiguration['as']])) {
                $result[$processorConfiguration['as']] = $this->getPropertyItems($processorConfiguration['menuTargetPageUid']);
            } else {
                $result = $this->getPropertyItems($processorConfiguration['menuTargetPageUid']);
            };
            return $result;
        }

        // just proceed if a valid parent has been defined
        if (!$processorConfiguration['menuPid']) {
            return $result;
        }

        // attach property items to items defined in 'as' property (used in fluid)
        if (isset($processorConfiguration['as']) && isset($result[$processorConfiguration['as']])) {
            $menuItems = &$result[$processorConfiguration['as']];
            $menuTargetPageUid = isset($processorConfiguration['menuTargetPageUid']) ? intval($processorConfiguration['menuTargetPageUid']) : 0;
            $menuPid = intval($processorConfiguration['menuPid']);
            $menuPrecedingSiblingUid = isset($processorConfiguration['menuPrecedingSiblingUid']) ? intval($processorConfiguration['menuPrecedingSiblingUid']) : 0;
            $this->attachPropertyItems($menuItems,$menuTargetPageUid,$menuPid,$menuPrecedingSiblingUid);
        }

        return $result;
    }

}

