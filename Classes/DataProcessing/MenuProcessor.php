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

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentDataProcessor;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;


/**
 * Class MenuProcessor
 *
 * Possible TS:
 *
 *  10 = FLUIDTEMPLATE
 *  10 {
 *     ...
 *     dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\MenuProcessor
 *     dataProcessing.10 {
 *         ...
 *         dataProcessing.10 = Synac\Realer\DataProcessing\MenuProcessor
 *         dataProcessing.10 {
 *             testConfig = testConfigValue
 *         }
 *     }
 *     ...
 * }
 *
 * @package Synac\Realer\DataProcessing
 */
class MenuProcessor implements DataProcessorInterface
{
    /**
     * Process content object data
     *
     * @param ContentObjectRenderer $cObj The data of the content element or page
     * @param array $contentObjectConfiguration The configuration of Content Object
     * @param array $processorConfiguration The configuration of this processor
     * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
     * @return array the processed data as key/value store
     */
    public function process(ContentObjectRenderer $cObj, array $contentObjectConfiguration, array $processorConfiguration, array $processedData)
    {
        return $processedData;
    }

}