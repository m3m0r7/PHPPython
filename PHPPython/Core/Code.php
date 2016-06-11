<?php

namespace PHPPython;

require_once __DIR__ . '/../Exception/CodeException.php';
require_once __DIR__ . '/../Utility/BinaryReader.php';

class Code {

    private $_argcount      = null;
    private $_nlocals       = null;
    private $_stackSize     = null;
    private $_flags         = null;
    private $_code          = null;
    private $_consts        = null;
    private $_names         = null;
    private $_varnames      = null;
    private $_freevars      = null;
    private $_cellvars      = null;
    private $_filename      = null;
    private $_name          = null;
    private $_firstlineno   = null;
    private $_lnotab        = null;

    /**
     * init python bytecode
     * @param string|fileResource disassemble python bytecode
     */
    public function __construct ($codeHandle = null) {
        if ($codeHandle instanceof \PHPPython\PHPPython || $codeHandle instanceof \PHPPython\Code) {
            $this->_codeHandle = (clone $codeHandle)->getHandle();
            $this->_load($this->_codeHandle);
            return;
        } else if (is_string($codeHandle)) {
            $this->_codeHandle = fopen('php://memory', 'wb');
            fwrite($this->_codeHandle, $codeHandle);
            rewind($this->_codeHandle);
            $this->_load($this->_codeHandle);
            return;
        }
        throw new Exception\CodeException('Error loading code');
    }

    public function __get ($key) {
        // load magic vars
        if (isset($this->{'_' . $key})) {
            return $this->{'_' . $key};
        }
    }

    /**
     * dis assemble python bytecode
     * @return mixed
     */
    private function _load ($handle) {
        $binaryReader = new Utility\BinaryReader($handle);
        $this->_marshalType = $binaryReader->readByte();
        switch ($this->_marshalType) {
            case 'c':
                $this->_argcount = $binaryReader->readLong();
                $this->_nlocals = $binaryReader->readLong();
                $this->_stackSize = $binaryReader->readLong();
                $this->_flags = $binaryReader->readLong();
                $this->_code = $this->_load($handle);
                $this->_consts = $this->_load($handle);
                $this->_names = $this->_load($handle);
                $this->_varnames = $this->_load($handle);
                $this->_freevars = $this->_load($handle);
                $this->_cellvars = $this->_load($handle);
                $this->_filename = $this->_load($handle);
                $this->_name = $this->_load($handle);
                $this->_firstlineno = $binaryReader->readLong();
                $this->_lnotab = $this->_load($handle);

                // read nested code
                return;
            case '.':
                // coming soon...
                return;
            case '0':
                // coming soon...
                return;
            case 'N':
                return null;
            case 'T':
                return true;
            case 'F':
                return false;
            case 'S':
                // coming soon...
                return;
            case 'f':
                // coming soon...
                return;
            case 'g':
                // coming soon...
                return;
            case 'i':
                // coming soon...
                return;
            case 'I':
                // coming soon...
                return;
            case 'x':
                // coming soon...
                return;
            case 'y':
                // coming soon...
                return;
            case 'l':
                // coming soon...
                return;
            case 'R':
                // coming soon...
                return;
            case 's':
                $size = $binaryReader->readLong();
                return $binaryReader->readByte($size);
            case 't':
                $size = $binaryReader->readLong();
                return $binaryReader->readByte($size);
            case 'u':
                // coming soon...
                return;
            case '(':
                $tupleSize = $binaryReader->readLong();
                $tuple = [];
                while ($tupleSize > 0) {
                    $tuple[] = $this->_load($handle);
                    $tupleSize--;
                };
                return $tuple;
            case '[':
                // coming soon...
                return;
            case '{':
                // coming soon...
                return;
            case '<':
            case '>':
                // coming soon...
                return;
        }
    }

}
