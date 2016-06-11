<?php

namespace PHPPython;

require_once __DIR__ . '/../Enum/Opcodes.php';
require_once __DIR__ . '/../Exception/CodeException.php';
require_once __DIR__ . '/../Utility/BinaryReader.php';

class Code {

    private $_codeHandle    = null;
    private $_marshalType    = null;
    private $_argumentCount  = null;
    private $_localCount     = null;
    private $_stackSize      = null;
    private $_flags          = null;

    /**
     * init python bytecode
     * @param string|fileResource disassemble python bytecode
     */
    public function __construct ($codeHandle = null) {
        if ($codeHandle instanceof \PHPPython\PHPPython) {
            $this->_codeHandle = (clone $codeHandle)->getHandle();
            $this->_disAssemble();
            return;
        } else if (is_string($codeHandle)) {
            $this->_codeHandle = fopen('php://memory', 'wb');
            fwrite($this->_codeHandle, $codeHandle);
            rewind($this->_codeHandle);
            $this->_disAssemble();
            return;
        }
        throw new Exception\CodeException('Error loading code');
    }

    /**
     * dis assemble python bytecode
     * @return void
     */
    private function _disAssemble () {
        $binaryReader = new Utility\BinaryReader($this->_codeHandle);
        $this->_marshalType = $binaryReader->readByte();
        $this->_argumentCount = $binaryReader->readLong();
        $this->_localCount = $binaryReader->readLong();
        $this->_stackSize = $binaryReader->readLong();
        $this->_flags = $binaryReader->readLong();
    }

}
