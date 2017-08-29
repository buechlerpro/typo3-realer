<?php
namespace Synac\Realer\Service;

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
use TYPO3\CMS\Extbase\Mvc\Web\Routing\UriBuilder;


class GeneralService implements SingletonInterface
{

    static function getService()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('Synac\Realer\Servic\GeneralService');
    }


}