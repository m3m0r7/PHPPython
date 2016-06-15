<?php
namespace PHPPython\Code\Operator;
require_once __DIR__ . '/../../../Object/Attr.php';

class LOAD_ATTR extends \PHPPython\Code\Operator {
    /**
     * executable python opcode LOAD_ATTR(0x000069)
     * @return ?
     */
    public function exec () {
        $address = $this->_binaryReader->readShort();
        $name = $this->_invoker->getCodeObject()->names[$address];
        $value = array_pop($this->_stacks);
        $this->_stacks[] = $value->getAttr($name);
    }
}
