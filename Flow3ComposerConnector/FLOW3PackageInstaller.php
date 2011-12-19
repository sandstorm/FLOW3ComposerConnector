<?php

namespace Flow3ComposerConnector;

use Composer\Package\PackageInterface;

class FLOW3PackageInstaller extends \Composer\Installer\LibraryInstaller {

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
    	var_dump($packageType, ($packageType === 'flow3-package'));
        return ($packageType === 'flow3-package');
    }

        /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
    	var_dump("getInstallPath called");
		$extra = $package->getExtra();
		if (!isset($extra['packageKey'])) {
			throw new \Exception("extra[packageKey] must be set for FLOW3 packages");
		}
		if (!isset($extra['suggestedLocation'])) {
			throw new \Exception("extra[suggestedLocation] must be set for FLOW3 packages");
		}
		$path = 'Packages/' . $extra['suggestedLocation'] . '/' . $extra['packageKey'];
        var_dump($path);
        return $path;
    }
}
