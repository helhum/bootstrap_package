<?php

/*
 * This file is part of the package bk2k/bootstrap-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3_MODE') || die();

/***************
 * Add content element PageTSConfig
 */
ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/Page/ContentElement/Element/Bullets.tsconfig',
    'Bootstrap Package Content Element: Bullet List'
);
