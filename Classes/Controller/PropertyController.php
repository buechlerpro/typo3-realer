<?php
namespace Buepro\Realer\Controller;

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

/**
 * PropertyController
 */
class PropertyController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * propertyRepository
     * 
     * @var \Buepro\Realer\Domain\Repository\PropertyRepository
     * @inject
     */
    protected $propertyRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        if (!$this->request->hasArgument('objectType')) {
            $objects = $this->propertyRepository->findAll();
        } else {
            $objects = $this->propertyRepository->findByObjectType($this->request->getArgument('objectType'));
        };
        $this->view->assignMultiple([
            'properties' => $objects,
            'settings' => $this->settings
        ]);
    }

    /**
     * action show
     * 
     * @param \Buepro\Realer\Domain\Model\Property $property
     * @return void
     */
    public function showAction(\Buepro\Realer\Domain\Model\Property $property)
    {
        $this->view->assign('property', $property);
    }
}
