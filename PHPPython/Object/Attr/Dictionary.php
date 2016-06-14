<?php

namespace PHPPython\Object\Attr;
require_once __DIR__ . '/../../Object/Attr.php';

/**
 * This class supported python Attr.
 */
class Dictionary extends \PHPPython\Object\Attr {

    public function iteritems () {
        var_dump($this);
        exit();
    }

    public function has_key ($keyName) {
        return isset($this->getParent()->getArrayCopy()[$keyName]);
    }

}
