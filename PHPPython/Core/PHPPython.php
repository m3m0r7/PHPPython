<?php

namespace PHPPython;

/**
 * Load requirement files
 */
require_once __DIR__ . '/Code.php';
require_once __DIR__ . '/../Enum/Versions.php';

class PHPPython {

    private $_handle            = null;
    private $_magicNumber       = null;
    private $_compiledTimestamp = null;

    public function __construct (string $file) {
        $this->_handle = fopen($file, 'rb');
        $this->_magicNumber = fread($this->_handle, 4);
        $this->_compiledTimestamp = fread($this->_handle, 4);
    }

    /**
     * get compiled python version
     * @return string return of python version
     */
    public function getVersion () {
        return Enum\Version::get(unpack('v', substr($this->_magicNumber, 0, 2))[1]);
    }

    public function getHandle () {
        return $this->_handle;
    }

}
