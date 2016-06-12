<?php

namespace PHPPython\Utility;
require_once __DIR__ . '/../Exception/BinaryReaderException.php';

class BinaryReader {

    private $_handle = null;

    /**
     * reading binary code class
     * @param PHPPython\PHPPython|fileResource $handle set binary handles
     */
    public function __construct ($handle) {
        if (!is_resource($handle)) {
            throw new \PHPPython\Exception\BinaryReaderException ('Can\'t read this handle.');
        }
        $this->_handle = $handle;
    }

    /**
     * read binary
     * @param  integer $bytes read byte from value
     * @return string
     */
    public function readByte ($bytes = 1) {
        if ($bytes === 0) {
            return '';
        }
        return fread($this->_handle, $bytes);
    }

    /**
     * read short binary
     * @return int
     */
    public function readShort () {
        return $this->_unpackBinary('v', 2);
    }

    /**
     * read long binary
     * @return int
     */
    public function readLong () {
        return $this->_unpackBinary('V', 4);
    }

    /**
     * check file teminated
     */
    public function isTerminated () {
        return feof($this->_handle);
    }

    /**
     * [offset description]
     * @param [type] $newOffset [description]
     */
    public function offset ($newOffset) {
        fseek($this->_handle, $newOffset, SEEK_SET);
    }

    /**
     * [offset description]
     * @param [type] $newOffset [description]
     */
    public function seek ($newOffset) {
        fseek($this->_handle, $newOffset, SEEK_CUR);
    }

    /**
     * get bytestream current position
     * @return int
     */
    public function position () {
        return ftell($this->_handle);
    }

    /**
     * unpacking binary to string, short or int
     * @return mixed
     */
    private function _unpackBinary ($to, $length) {

        return unpack($to, fread($this->_handle, $length))[1];
    }

}
