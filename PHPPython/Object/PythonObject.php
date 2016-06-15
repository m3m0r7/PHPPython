<?php

namespace PHPPython\Object;

class PythonObject extends \ArrayObject {

    public function getAttr ($callee) {
        $attrName = '\\PHPPython\\Object\\Attr\\' . basename(str_replace('\\', '/', get_class($this)));
        return new $attrName($this, $callee);
    }

}
