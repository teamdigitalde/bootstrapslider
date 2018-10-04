<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
$GLOBALS['TCA']['tx_bootstrapslider_domain_model_bootstrapslider'] = array(
    'ctrl' => array(
        'title' => 'Team Digital Bootstrapslider',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'sortby' => 'sorting',
        'requestUpdate' => 'type',
        'versioningWS' => 2,
        'versioning_followPages' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'searchFields' => 'name,',
        'typeicon_classes' => [
            'default' => 'ext-bootstrapslider-image'
        ],
    ),
    'interface' => array(
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, headerFormat, image, description',
    ),
    'types' => array(
        '1' => array(
            'showitem' => 'l10n_diffsource, hidden;;1, name, headerFormat, image, description'
        ),
    ),
    'palettes' => array(
        '1' => array('showitem' => ''),
    ),
    'columns' => array(
        /*'tt_content' => array(
            'exclude' => 0,
            'label' => 'tt_content',
//            'l10n_mode' => 'exclude',
//            'l10n_display' => 'defaultAsReadonly',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'tt_content',
                'foreign_field' => 'tx_bootstrapslider_bootstrapslider',
                'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND sys_language_uid IN (-1,0) ',
                'maxitems' => 1,
            ),
        ),*/
        'tt_content' => [
            'label' => 'tt_content',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tt_content',
                //'foreign_table_where' => ...,
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 100,
            ],
        ],
        'hidden' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => array(
                'type' => 'check',
                'items' => array(
                    '1' => array(
                        '0' => 'LLL:EXT:cms/locallang_ttc.xlf:hidden.I.0'
                    )
                )
            )
        ),
        'starttime' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => array(
                'type' => 'input',
                'size' => '13',
                'max' => '20',
                'eval' => 'datetime',
                'default' => '0'
            ),
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ),
        'endtime' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => array(
                'type' => 'input',
                'size' => '13',
                'max' => '20',
                'eval' => 'datetime',
                'default' => '0',
                'range' => array()
            ),
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ),
        'sys_language_uid' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => array(
                'readOnly' => true,
                'type' => 'select',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => array(
                    array(
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1
                    ),
                    array(
                        'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
                        0
                    )
                )
            )
        ),
        'l10n_parent' => Array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
            'config' => Array(
                'type' => 'select',
                'items' => Array(
                    Array('', 0),
                ),
                'foreign_table' => 'tx_bootstrapslider_domain_model_bootstrapslider',
                'foreign_table_where' => 'AND tx_bootstrapslider_domain_model_bootstrapslider.uid=###REC_FIELD_l10n_parent### AND tx_bootstrapslider_domain_model_bootstrapslider.sys_language_uid IN (-1,0)',
            )
        ),
        'l10n_diffsource' => Array(
            'config' => array(
                'type' => 'passthrough'
            )
        ),
        'image' => array(
            'exclude' => 0,
            'label' => 'Bilder',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image_slide', array(
                'minitems' => 1,
                'maxitems' => 1,
                'appearance' => array(
                    'collapseAll' => 1,
                    'createNewRelationLinkTitle' => 'Bild auswählen',
                    'showAllLocalizationLink' => 1,
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'newRecordLinkTitle' => 'Neu',
                    'levelLinksPosition' => 'top',
                    'useSortable' => 0,
                    'enabledControls' => array(
                        'info' => 0,
                        'dragdrop' => 0,
                    )
                ),
            ),
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ),
        'name' => array(
            'exclude' => 0,
            'label' => 'Überschrift',
            'config' => array(
                'type' => 'input',
                'size' => '40',
                'max' => '40'
            ),
        ),
        'headerFormat' => array(
            'exclude' => 0,
            'label' => 'Typ',
            'config' => array(
                'type' => 'select',
                'default' => 'div',
                'items' => array(
                    array('Überschrift 2', 'h2'),
                    array('Überschrift 3', 'h3'),
                    array('Überschrift 4', 'h4'),
                    array('Überschrift 5', 'h5'),
                    array('Überschrift ohne H-Tag', 'div'),
                    array('Verborgen', 'verborgen'),
                ),
            ),
        ),
        'description' => array(
            'exclude' => 0,
            'label' => 'Beschreibung',
            'config' => array(
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'softref' => 'typolink_tag,images,email[subst],url',
            ),
            'defaultExtras' => 'richtext[]:rte_transform[mode=tx_examples_transformation-ts_css]',
        ),
    )
);
