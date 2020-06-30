<?php

/*
 * This file is part of the package Buepro/Realer.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Buepro\Realer\Controller;

use Buepro\Realer\Domain\Repository\PropertyRepository;

/**
 * PropertyController
 */
class PropertyController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * propertyRepository
     *
     * @var PropertyRepository
     */
    protected $propertyRepository = null;

    /**
     * @param PropertyRepository $propertyRepository
     */
    public function injectPropertyRepository(PropertyRepository $propertyRepository)
    {
        $this->propertyRepository = $propertyRepository;
    }

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
        }
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
