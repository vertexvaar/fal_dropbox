<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

// Register accessToken wizard
if (1 !== version_compare(TYPO3_branch, '8.0')) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath(
        'access_token',
        'EXT:fal_dropbox/Classes/Wizards/AccessToken/'
    );
}
