<?php

class StackPool {

    private static $_stacks = [];

    public static function add ($value) {
        self::$_stacks[] = $value;
    }

    public static function set ($key, $value) {
        self::$_stacks[$key] = $value;
    }

    public static function pop () {
        return array_pop(self::$_stacks);
    }

    public static function current () {
        return current(self::$_stacks);
    }

    public static function size () {
        return sizeof(self::$_stacks);
    }

    public static function values () {
        return self::$_stacks;
    }

}
