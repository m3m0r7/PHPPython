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
        if ($codeHandle instanceof \PHPPython\PHPPython) {
            $_codeHandle = (clone $codeHandle)->getHandle();
            $this->_load($_codeHandle);
            return;
        } else if ($codeHandle instanceof \PHPPython\Code) {
            $_codeHandle = fopen('php://memory', 'wb');
            fwrite($_codeHandle, $codeHandle->code);
            rewind($_codeHandle);
            $this->_load($this->_codeHandle);
            return;
        } else if (is_string($codeHandle)) {
            $_codeHandle = fopen('php://memory', 'wb');
            fwrite($_codeHandle, $codeHandle);
            rewind($_codeHandle);
            $this->_load($this->_codeHandle);
            return;
        }
        throw new Exception\CodeException('Error loading code');
    }

    /**
     * get private variant
     * @param  string $key
     * @return mixed
     */
    public function __get ($key) {
        // load magic vars
        if ($key[0] !== '_' && isset($this->{'_' . $key})) {
            return $this->{'_' . $key};
        }
    }

    public function __call ($name, $arguments) {
        if (preg_match('/\Astore([A-Z][a-z0-9_]*)\Z/', $name, $methodName)) {
            $methodName = '_' . strtolower($methodName[1]);
            $this->{$methodName}[$arguments[0]] = $arguments[1];
        }
    }

    /**
     * check variant is set
     * @param  string  $key
     * @return boolean
     */
    public function __isset ($key) {
        $key = '_' . $key;
        return property_exists($this, $key) && $this->$key !== null;
    }

    /**
     * dis assemble python bytecode
     * @return mixed
     */
    private function _load ($handle) {
        $binaryReader = new Utility\BinaryReader($handle);
        $marshalType = $binaryReader->readByte();
        switch ($marshalType) {
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
                return '.';
            case '0':
                return null;
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
                return $binaryReader->readDouble();
            case 'g':
                return $binaryReader->readDouble();
            case 'i':
                return $binaryReader->readLong();
            case 'I':
                return $binaryReader->readLong64();
            case 'x':
                // what ?
                return;
            case 'y':
                // what ?
                return;
            case 'l':
                return $binaryReader->readLong();
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
                // what ?
                return;
            case 'c':
                return $binaryReader->readByte();
            case '(':
                $tupleSize = $binaryReader->readLong();
                $tuple = [];
                while ($tupleSize > 0) {
                    $tuple[] = $this->_load($handle);
                    $tupleSize--;
                }
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
