<?php

namespace PHPPython\Code;
require_once __DIR__ . '/../../Enum/OpCode.php';
require_once __DIR__ . '/Operator.php';

class Invoker {

    protected $_code = null;

    public function __construct (\PHPPython\Code $code) {
        $this->_code = $code;

        // load opcodes
        foreach (glob(__DIR__ . '/Operator/*.php') as $operateFile) {
            require_once $operateFile;
        }
    }

    public function invoke () {
        $codeHandle = fopen('php://memory', 'wb');
        fwrite($codeHandle, $this->_code->code);
        rewind($codeHandle);
        $binaryReader = new \PHPPython\Utility\BinaryReader($codeHandle);

        $opcode = new \PHPPython\Enum\OpCode();
        $stacks = [];

        while (!$binaryReader->isTerminated()) {

            $readOpCode = ord($binaryReader->readByte());
            $mnemonic = '\\PHPPython\\Code\\Operator\\' . $opcode->getName($readOpCode);

            // exec operator
            $returnValue = (new $mnemonic($this, $stacks, $binaryReader))->exec();

            if ($readOpCode === \PHPPython\Enum\OpCode::RETURN_VALUE) {
                return $returnValue;
            }

        }
    }

    public function getCodeObject () {
        return $this->_code;
    }

}
