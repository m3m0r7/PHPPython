<?php

namespace PHPPython;

class CodeObject {

    public $argcount      = null;
    public $nlocals       = null;
    public $stackSize     = null;
    public $flags         = null;
    public $code          = null;
    public $consts        = null;
    public $names         = null;
    public $namehashes    = [];
    public $varnames      = null;
    public $varnamehashes = [];
    public $freevars      = null;
    public $cellvars      = null;
    public $filename      = null;
    public $name          = null;
    public $firstlineno   = null;
    public $lnotab        = null;
}
