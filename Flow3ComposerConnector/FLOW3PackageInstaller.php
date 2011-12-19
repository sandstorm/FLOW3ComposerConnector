<?php

namespace Flow3ComposerConnector;
class FLOW3PackageInstaller extends \Composer\Installer\LibraryInstaller {

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
    	var_dump($packageType);
        return ($packageType === 'FLOW3Package');
    }
}
