<?php

namespace PHPPython\Code;

class BuiltInFunction {

    public static function len ($object) {
        if ($object instanceof \PHPPython\Object\Dictionary) {
            return $object->count();
        }
        if (is_string($object)) {
            return strlen($object);
        }
    }

    public static function hasFunction ($name) {
        static $_reflection = null;
        if ($_reflection === null) {
            $_reflection = new \ReflectionClass(__CLASS__);
        }
        return $_reflection->hasMethod($name);
    }

}
