<?php

namespace PHPPython\Code;
require_once __DIR__ . '/../../Enum/OpCode.php';
require_once __DIR__ . '/Operator.php';

class Invoker {

    private $_code = null;

    public function __construct (\PHPPython\Code $code) {
        $this->_code = $code;

        // load opcodes
        foreach (glob(__DIR__ . '/Operator/*.php') as $operateFile) {
            require_once $operateFile;
        }
    }

    public function invoke () {
        $codeLength = strlen($this->_code->code);
        $opcode = new \PHPPython\Enum\OpCode();
        for ($i = 0; $i < $codeLength; $i++) {
            $byteCode = ord($this->_code->code[$i]);
            $mnemonic = '\\PHPPython\\Code\\Operator\\' . $opcode->getName($byteCode);
            (new $mnemonic($this))->exec();
        }
    }

}
