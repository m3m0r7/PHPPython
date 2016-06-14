<?php

namespace PHPPython\Code;
require_once __DIR__ . '/../../Enum/OpCode.php';
require_once __DIR__ . '/Operator.php';

class Invoker {

    protected $_code = null;
    protected $_invokedOpCodes = [];

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
        $blockStacks = [];

        $codes = [];
        $startTimestamp = microtime(true);

        while (!$binaryReader->isTerminated()) {

            $readOpCode = ord($binaryReader->readByte());
            $mnemonic = $opcode->getName($readOpCode);
            $mnemonicFile = '\\PHPPython\\Code\\Operator\\' . $mnemonic;

            // exec operator
            $returnValue = (new $mnemonicFile($this, $stacks, $blockStacks, $binaryReader))->exec();

            $codes[] = [
                $binaryReader->position(),
                $readOpCode,
                $mnemonic,
                sizeof($stacks),
                sizeof($blockStacks),
                $mnemonicFile
            ];

            if ($readOpCode === \PHPPython\Enum\OpCode::RETURN_VALUE) {
                $this->_invokedOpCodes[] = array(
                    'codes' => $codes,
                    'timestamp' => microtime(true) - $startTimestamp
                );
                return $returnValue;
            }

        }
    }

    public function debug () {
        foreach ($this->_invokedOpCodes as $codes) {
            printf("Load time: %.fs\n", round($codes['timestamp'], 2));
            printf("PC\tOpCode\tMnemonic\tstack(s)\tblock stack(s)\n");
            foreach ($codes['codes'] as $code) {
                printf("#%04s\t0x%04X\t%s\t%d\t\t%d\n", $code[0], $code[1], $code[2], $code[3], $code[4]);
            }
        }
    }

    public function getCodeObject () {
        return $this->_code;
    }

}
