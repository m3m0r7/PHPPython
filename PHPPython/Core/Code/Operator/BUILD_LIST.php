<?php
namespace PHPPython\Code\Operator;
require_once __DIR__ . '/../../../Object/PythonList.php';

class BUILD_LIST extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BUILD_LIST(0x000067)
     * @return ?
     */
    public function exec () {
        $count = $this->_binaryReader->readShort();
        $list = new \PHPPython\Object\PythonList();

        for ($i = 0; $i < $count; $i++) {
            $list->append(array_pop($this->_stacks));
        }

        $this->_stacks[] = $list;
    }
}
