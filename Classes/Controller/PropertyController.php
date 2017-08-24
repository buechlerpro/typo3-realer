<?php
namespace Synac\Realer\Controller;

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

/**
 * PropertyController
 */
class PropertyController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * propertyRepository
     * 
     * @var \Synac\Realer\Domain\Repository\PropertyRepository
     * @inject
     */
    protected $propertyRepository = null;

    /**
     * action list
     *
     * @param int $pageNumber
     * @return void
     */
    public function listAction($pageNumber = 0)
    {
        $this->view->assignMultiple([
            'properties' => $this->propertyRepository->findAll(),
            'settings' => $this->settings
        ]);
    }

    /**
     * action show
     * 
     * @param \Synac\Realer\Domain\Model\Property $property
     * @return void
     */
    public function showAction(\Synac\Realer\Domain\Model\Property $property)
    {
        $this->view->assign('property', $property);
    }
}
