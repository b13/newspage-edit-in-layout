<?php

defined('TYPO3') or die('Access denied.');

(function () {
    // This palette is used to show in layout view
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'pages',
        'tx_newspage_layout',
        'title,abstract,--linebreak--,tx_newspage_date,tx_newspage_categories,--linebreak--,media,--linebreak--,slug;'
    );
})();
