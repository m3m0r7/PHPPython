<?php
namespace PHPPython\Code\Operator;

class IMPORT_NAME extends \PHPPython\Code\Operator {
    /**
     * executable python opcode IMPORT_NAME(0x00006B)
     * @return ?
     */
    public function exec () {
        $address = $this->_binaryReader->readShort();
        $name = 'Python' . ucfirst($this->_invoker->getCodeObject()->names[$address]);
        require_once __DIR__ . '/../../../Object/' . $name . '.php';
        $name = '\\PHPPython\\Object\\' . $name;

        $fromlist = array_pop($this->_stacks);
        $level = array_pop($this->_stacks);

        $this->_stacks[] = new $name();
    }
}
