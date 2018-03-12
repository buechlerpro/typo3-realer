<?php
namespace Buepro\Realer\Service;

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
use TYPO3\CMS\Extbase\Mvc\Web\Routing\UriBuilder;


class GeneralService implements SingletonInterface
{

    static function getService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('Buepro\Realer\Servic\GeneralService');
    }


}