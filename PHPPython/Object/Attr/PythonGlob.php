<?php
namespace PHPPython\Object\Attr;
require_once __DIR__ . '/../../Object/Attr.php';

class PythonGlob extends \PHPPython\Object\Attr {

    public function glob ($pathname) {
        return new \PHPPython\Object\PythonList(glob($pathname));
    }

    public function iglob ($pathname) {
        return new DirectoryIterator($pathname);
    }

}
