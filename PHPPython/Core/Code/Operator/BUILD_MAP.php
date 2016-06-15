<?php
namespace PHPPython\Code\Operator;
require_once __DIR__ . '/../../../Object/Dictionary.php';

class BUILD_MAP extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BUILD_MAP(0x000068)
     * @return ?
     */
    public function exec () {
        $dictionaryLength = $this->_binaryReader->readShort();

        // add empty dictionary object
        \StackPool::add(new \PHPPython\Object\Dictionary());
    }
}
