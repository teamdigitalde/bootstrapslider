<?php
namespace TeamDigital\Bootstrapslider\Controller;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Tim Büschken <bueschken@team-digital.de>, team digital GmbH
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

/**
 * BootstrapsliderController
 */
class BootstrapsliderController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

    /**
     * BootstrapsliderRepository
     *
     * @var \TeamDigital\Bootstrapslider\Domain\Repository\BootstrapsliderRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $bootstrapsliderRepository = NULL;

    /**
     * Initializes the current action
     *
     * @return void
     */
    public function initializeAction() {
        // Only do this in Frontend Context
        if (!empty($GLOBALS['TSFE']) && is_object($GLOBALS['TSFE'])) {
            // We only want to set the tag once in one request, so we have to cache that statically if it has been done
            static $cacheTagsSet = FALSE;

            /** @var $typoScriptFrontendController \TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController  */
            $typoScriptFrontendController = $GLOBALS['TSFE'];
            if (!$cacheTagsSet) {
                $typoScriptFrontendController->addCacheTags(array('tx_teamdigital_domain_model_bootstrapslider'));
                $cacheTagsSet = TRUE;
            }
        }

    }

    /**
     * slider action
     *
     * @return void
     */
    public function sliderAction() {
        $contentObject = $this->configurationManager->getContentObject()->data;
        $sliders = $this->bootstrapsliderRepository->findByTtContent($contentObject['uid']);
//        $sliders = $this->bootstrapsliderRepository->findAll();

        // Standard Übergang ist "normal-slide"
        if(empty($this->settings['options']['uebergang'])) {
            $this->settings['options']['uebergang'] = 'slide';
        }

        // Übergänge und CSS-Klassen anpassen (Flexformeingaben werden hier überschrieben)
        if(!empty($this->settings['options']['items']) && $this->settings['options']['items'] == '1') {
            $this->settings['options']['itemWrap'] = 'col-xl-12';
        }
        if(!empty($this->settings['options']['items']) && $this->settings['options']['items'] == '2') {
            $this->settings['options']['itemWrap'] = 'zweiSpaltig';
            $this->settings['options']['uebergang'] = 'slide';
            $this->settings['options']['items'] = 'two-items';
        }
        if(!empty($this->settings['options']['items']) && $this->settings['options']['items'] == '3') {
            $this->settings['options']['itemWrap'] = 'dreiSpaltig';
            $this->settings['options']['uebergang'] = 'slide';
            $this->settings['options']['items'] = 'three-items';
        }
        if(!empty($this->settings['options']['items']) && $this->settings['options']['items'] == '4') {
            $this->settings['options']['itemWrap'] = 'vierSpaltig';
            $this->settings['options']['uebergang'] = 'slide';
            $this->settings['options']['items'] = 'four-items';
        }
        if(!empty($this->settings['options']['items']) && $this->settings['options']['items'] == '5') {
            $this->settings['options']['itemWrap'] = 'fuenfSpaltig';
            $this->settings['options']['uebergang'] = 'slide';
            $this->settings['options']['items'] = 'five-items';
        }
        if(!empty($this->settings['options']['items']) && $this->settings['options']['items'] == '6') {
            $this->settings['options']['itemWrap'] = 'sechsSpaltig';
            $this->settings['options']['uebergang'] = 'slide';
            $this->settings['options']['items'] = 'six-items';
        }
        if(empty($this->settings['options']['speed'])) {
            $this->settings['options']['speed'] = 5000;
        }

        $this->view->assignMultiple(array(
            'contentObject' => $contentObject,
            'options' => $this->settings['options'],
            'sliders' => $sliders,
            'count' => count($sliders->toArray())
        ));
    }

}
