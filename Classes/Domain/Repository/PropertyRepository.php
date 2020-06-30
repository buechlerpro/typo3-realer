<?php

/*
 * This file is part of the package Buepro/Realer.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Buepro\Realer\Domain\Repository;

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
 * The repository for Properties
 */
class PropertyRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * default ordering
     *
     * @var array
     */
    protected $defaultOrderings = [
        'has_priority' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING,
        'crdate' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING
    ];

    /**
     * Retrieves the property types having at least one property. The format is:
     * $result = [
     *     [objectType,objectCount,objectTypeText],...
     * ]
     *
     * @return array
     */
    public function getPropertyTypes()
    {
        $query = $this->createQuery();
        $query->setOrderings(['object_type' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING]);
        $query->statement('SELECT object_type as objectType,COUNT(*) as objectCount FROM tx_realer_domain_model_property WHERE hidden=0 AND deleted=0 GROUP BY object_type');
        $result = $query->execute(true);
        if ($result) {
            foreach ($result as &$item) {
                $item['objectTypeText'] = $GLOBALS['TSFE']->sL('LLL:EXT:realer/Resources/Private/Language/locallang_tca.xlf:property.object_type.' . $item['objectType']);
            }
        }
        return $result;
    }
}
