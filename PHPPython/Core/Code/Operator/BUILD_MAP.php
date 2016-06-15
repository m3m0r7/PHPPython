<?php
namespace PHPPython\Code\Operator;
require_once __DIR__ . '/../../../Object/PythonDictionary.php';

class BUILD_MAP extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BUILD_MAP(0x000068)
     * @return ?
     */
    public function exec () {
        $dictionaryLength = $this->_binaryReader->readShort();

        // add empty dictionary object
        $this->_stacks[] = new \PHPPython\Object\PythonDictionary();
    }
}
