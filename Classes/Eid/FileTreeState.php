<?php

namespace BeechIt\FalSecuredownload\Eid;

use BeechIt\FalSecuredownload\Service\LeafStateService;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\Utility\EidUtility;

class FileTreeState
{
    public function main()
    {
        $folder = GeneralUtility::_GP('folder');
        if (!empty($folder)) {
            $open = (bool)GeneralUtility::_GP('open');

            /** @var $leafStateService LeafStateService */
            $leafStateService = GeneralUtility::makeInstance('BeechIt\\FalSecuredownload\\Service\\LeafStateService');
            $leafStateService->saveLeafStateForUser($GLOBALS['TSFE']->fe_user->user, $folder, $open);
        }
    }
}
