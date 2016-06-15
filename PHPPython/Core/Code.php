<?php

namespace PHPPython;

require_once __DIR__ . '/CodeObject.php';
require_once __DIR__ . '/../Exception/CodeException.php';
require_once __DIR__ . '/../Utility/BinaryReader.php';

class Code {

    private $_objects = null;

    /**
     * init python bytecode
     * @param string|fileResource disassemble python bytecode
     */
    public function __construct ($codeHandle = null) {
        if ($codeHandle instanceof \PHPPython\PHPPython) {
            $_codeHandle = (clone $codeHandle)->getHandle();
            $this->_objects = $this->_load($_codeHandle);
            return;
        } else if ($codeHandle instanceof \PHPPython\Code) {
            $_codeHandle = fopen('php://memory', 'wb');
            fwrite($_codeHandle, $codeHandle->code);
            rewind($_codeHandle);
            $this->_objects = $this->_load($this->_codeHandle);
            return;
        } else if ($codeHandle instanceof \PHPPython\CodeObject) {
            $this->_objects = clone $codeHandle;
            return;
        } else if (is_string($codeHandle)) {
            $_codeHandle = fopen('php://memory', 'wb');
            fwrite($_codeHandle, $codeHandle);
            rewind($_codeHandle);
            $this->_objects = $this->_load($this->_codeHandle);
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
        if ($key[0] !== '_' && isset($this->_objects->$key)) {
            return $this->_objects->$key;
        }
    }

    /**
     * [__call description]
     * @param  [type] $name      [description]
     * @param  [type] $arguments [description]
     * @return [type]            [description]
     */
    public function __call ($name, $arguments) {
        if (preg_match('/\Astore([A-Z][a-z0-9_]*)\Z/', $name, $methodName)) {
            $methodName = strtolower($methodName[1]);
            if ($methodName === 'namehashes') {
                $this->_objects->{$methodName}[$this->_objects->names[$arguments[0]]] = $arguments[1];
            }
        }
    }

    /**
     * check variant is set
     * @param  string  $key
     * @return boolean
     */
    public function __isset ($key) {
        return property_exists($this->_objects, $key) && $this->_objects->$key !== null;
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

                $objects = new CodeObject();

                $objects->argcount = $binaryReader->readLong();
                $objects->nlocals = $binaryReader->readLong();
                $objects->stackSize = $binaryReader->readLong();
                $objects->flags = $binaryReader->readLong();
                $objects->code = $this->_load($handle);
                $objects->consts = $this->_load($handle);
                $objects->names = $this->_load($handle);
                foreach ($objects->names as $name) {
                    $objects->namehashes[$name] = null;
                }
                $objects->varnames = $this->_load($handle);
                foreach ($objects->varnames as $name) {
                    $objects->varnamehashes[$name] = null;
                }
                $objects->freevars = $this->_load($handle);
                $objects->cellvars = $this->_load($handle);
                $objects->filename = $this->_load($handle);
                $objects->name = $this->_load($handle);
                $objects->firstlineno = $binaryReader->readLong();
                $objects->lnotab = $this->_load($handle);

                return $objects;
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
                throw new Exception\CodeException('Not implement marshal type "' . $marshalType . '"');
            case 'f':
                return $binaryReader->readDouble();
            case 'g':
                return $binaryReader->readDouble();
            case 'i':
                return $binaryReader->readLong();
            case 'I':
                return $binaryReader->readLong64();
            case 'x':
                throw new Exception\CodeException('Not implement marshal type "' . $marshalType . '"');
            case 'y':
                throw new Exception\CodeException('Not implement marshal type "' . $marshalType . '"');
            case 'l':
                return $binaryReader->readLong();
            case 'R':
                $ref = $binaryReader->readLong();

                // do nothing...
                return $ref;
            case 's':
                $size = $binaryReader->readLong();
                return $binaryReader->readByte($size);
            case 't':
                $size = $binaryReader->readLong();
                return $binaryReader->readByte($size);
            case 'u':
                throw new Exception\CodeException('Not implement marshal type "' . $marshalType . '"');
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
                throw new Exception\CodeException('Not implement marshal type "' . $marshalType . '"');
            case '{':
                throw new Exception\CodeException('Not implement marshal type "' . $marshalType . '"');
            case '<':
            case '>':
                throw new Exception\CodeException('Not implement marshal type "' . $marshalType . '"');
        }
    }

}
