<?php

namespace Synac\Realer\DataProcessing;

/***
 *
 * This file is part of the "Real estate publisher" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Roman Büchler <rb@synac.com>, Synac Technology, S.L.
 *
 ***/


use TYPO3\CMS\Core\SingletonInterface;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;


/**
 * Class MenuProcessor
 *
 * Possible TS:
 *
 *  10 = FLUIDTEMPLATE
 *  10 {
 *     ...
 *     dataProcessing.10 = Synac\Realer\DataProcessing\MenuProcessor
 *     dataProcessing.10 {
 *        menuTargetPageUid = 73
 *        menuPid = 73
 *        menuPrecedingSiblingUid = 76
 *     }
 *     ...
 * }
 *
 * @package Synac\Realer\DataProcessing
 */
class MenuProcessor extends \TYPO3\CMS\Frontend\DataProcessing\MenuProcessor implements SingletonInterface
{

    /**
     * propertyRepository
     *
     * @var \Synac\Realer\Domain\Repository\PropertyRepository
     *
     */
    protected $propertyRepository = null;

    public function __construct()
    {
        parent::__construct();
        $this->allowedConfigurationKeys[] = 'menuTargetPageUid';
        $this->allowedConfigurationKeys[] = 'menuPid';
        $this->allowedConfigurationKeys[] = 'menuPrecedingSiblingUid';
        $objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Extbase\Object\ObjectManager');
        $this->propertyRepository = $objectManager->get('Synac\Realer\Domain\Repository\PropertyRepository');
    }


    /**
     * Create the property items to be inserted into the menu
     *
     * @param int $menuTargetPageUid
     * @return array
     */
    private function getPropertyItems(int $menuTargetPageUid)
    {
        $items = [];
        $propertyTypes = $this->propertyRepository->getPropertyTypes();
        $objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\ObjectManager::class);
        $uriBuilder = $objectManager->get(\TYPO3\CMS\Extbase\Mvc\Web\Routing\UriBuilder::class);
        if ($menuTargetPageUid) $uriBuilder->setTargetPageUid($menuTargetPageUid);
        foreach ($propertyTypes as $propertyType) {
            $items[] = [
                'title'   => $propertyType['objectTypeText'],
                'link'    => $uriBuilder->uriFor('list', ['objectType' => $propertyType['objectType']],
                    'Property', 'realer', 'objectlisting'),
                'target'  => null,
                'active'  => 0,
                'current' => 0,
                'spacer'  => 0
            ];
        };
        return $items;
    }


    /**
     * @param array $siblings
     * @param int $menuTargetPageUid
     * @param int $menuPrecedingSiblingUid
     */
    private function attachPropertyItemsToSiblings(array &$siblings, int $menuTargetPageUid, int $menuPrecedingSiblingUid)
    {
        $oldSiblings = $siblings;
        $siblings = [];
        $siblingsInserted = false;
        foreach ($oldSiblings as $sibling) {
            $siblings[] = $sibling;
            if (isset($sibling['data']['uid']) && $sibling['data']['uid'] == $menuPrecedingSiblingUid) {
                $siblings = array_merge($siblings,$this->getPropertyItems($menuTargetPageUid));
                $siblingsInserted = true;
            }
        }
        if (!$siblingsInserted) {
            $siblings = array_merge($siblings,$this->getPropertyItems($menuTargetPageUid));
        }
    }


    /**
     *
     *
     * @param array $items
     * @param int $menuTargetPageUid
     * @param int $menuPid
     * @param int $menuSiblingUid
     * @return void
     *
     */
    private function attachPropertyItems(array &$items, int $menuTargetPageUid, int $menuPid, int $menuPrecedingSiblingUid)
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
     * Process content object data
     *
     * @param ContentObjectRenderer $cObj The data of the content element or page
     * @param array $contentObjectConfiguration The configuration of Content Object
     * @param array $processorConfiguration The configuration of this processor
     * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
     * @return array the processed data as key/value store
     */
    public function process(ContentObjectRenderer $cObj,array $contentObjectConfiguration, array $processorConfiguration, array $processedData)
    {
        $result = parent::process($cObj, $contentObjectConfiguration, $processorConfiguration, $processedData);

        // proceed only if configuration is complete
        if (!isset($processorConfiguration['menuPid']) || !$processorConfiguration['menuPid']) {
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

