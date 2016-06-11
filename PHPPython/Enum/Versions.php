<?php

namespace PHPPython\Enum;
require_once __DIR__ . '/Enum.php';

class Version extends \PHPPython\Enum {
    public static function get (int $version) {
        switch ($version) {
            case 20121:
                //1.5, 1.5.1, 1.5.2
                return '1.5';

            case 50428:
                //1.6
                return '1.6';

            case 50823:
                //2.0, 2.0.1
                return '2.0';

            case 60202:
                //2.1, 2.1.1, 2.1.2
                return '2.1';

            case 60717:
                //2.2
                return '2.2';

            case 62011:
                //2.3a0
                return '2.3';

            case 62021:
                //2.3a0
                return '2.3';

            case 62041:
                //2.4a0
                return '2.4';

            case 62051:
                //2.4a3
                return '2.4';

            case 62061:
                //2.4b1
                return '2.4';

            case 62071:
                //2.5a0
                return '2.5';

            case 62081:
                //2.5a0 (ast-branch)
                return '2.5';

            case 62091:
                //2.5a0 (with)
                return '2.5';

            case 62092:
                //2.5a0 (changed WITH_CLEANUP opcode)
                return '2.5';

            case 62101:
                //2.5b3 (fix wrong code: for x, in ...)
                return '2.5';

            case 62111:
                //2.5b3 (fix wrong code: x += yield)
                return '2.5';

            case 62121:
                //2.5c1 (fix wrong lnotab with for loops and
                return '2.5';

                                   # storing constants that should have been removed
            case 62131:
                //2.5c2 (fix wrong code: for x, in ... in listcomp/genexp)
                return '2.5';

            case 62151:
                //2.6a0 (peephole optimizations & STORE_MAP)
                return '2.6';

            case 62161:
                //2.6a1 (WITH_CLEANUP optimization)
                return '2.6';

            case 62171:
                //2.7a0 (optimize list comprehensions/change LIST_APPEND)
                return '2.7';

            case 62181:
                //2.7a0 (optimize conditional branches:
                return '2.7';

            # introduce POP_JUMP_IF_FALSE and POP_JUMP_IF_TRUE)
            case 62191:
                //2.7a0 (introduce SETUP_WITH)
                return '2.7';

            case 62201:
                //2.7a0 (introduce BUILD_SET)
                return '2.7';

            case 62211:
                //2.7a0 (introduce MAP_ADD and SET_ADD)
                return '2.7';

            case 3000:
                //3.000
                return '3.0';

            case 3010:
                //3.000 (removed UNARY_CONVERT)
                return '3.0';

            case 3020:
                //3.000 (added BUILD_SET)
                return '3.0';

            case 3030:
                //3.000 (added keyword-only parameters)
                return '3.0';

            case 3040:
                //3.000 (added signature annotations)
                return '3.0';

            case 3050:
                //3.000 (print becomes a function)
                return '3.0';

            case 3060:
                //3.000 (PEP 3115 metaclass syntax)
                return '3.0';

            case 3061:
                //3.000 (string literals become unicode)
                return '3.0';

            case 3071:
                //3.000 (PEP 3109 raise changes)
                return '3.0';

            case 3081:
                //3.000 (PEP 3137 make __file__ and __name__ unicode)
                return '3.0';

            case 3091:
                //3.000 (kill str8 interning)
                return '3.0';

            case 3101:
                //3.000 (merge from 2.6a0, see 62151)
                return '3.0';

            case 3103:
                //3.000 (__file__ points to source file)
                return '3.0';

            case 3111:
                //3.0a4 (WITH_CLEANUP optimization).
                return '3.0';

            case 3131:
                //3.0a5 (lexical exception stacking, including POP_EXCEPT)
                return '3.0';

            case 3141:
                //3.1a0 (optimize list, set and dict comprehensions)
                return '3.1';

            case 3151:
                //3.1a0 (optimize conditional branches)
                return '3.1';

            case 3160:
                //3.2a0 (add SETUP_WITH)
                return '3.2';

            case 3170:
                //3.2a1 (add DUP_TOP_TWO, remove DUP_TOPX and ROT_FOUR)
                return '3.2';

            case 3180:
                return '3.2';
            case 3200:
                return '3.3';
            case 3210:
                return '3.3';
            case 3220:
                return '3.3';
            case 3230:
                return '3.3';
            case 3250:
                return '3.4';
            case 3260:
                return '3.4';
            case 3270:
                return '3.4';
            case 3280:
                return '3.4';
            case 3290:
                return '3.4';
            case 3300:
                return '3.4';
            case 3310:
                return '3.4';
            case 3320:
                return '3.5';
            case 3330:
                return '3.5';
            case 3340:
                return '3.5';
            case 3350:
                return '3.5';
            case 3360:
                return '3.6';
            case 3361:
                return '3.6';
            case 3370:
                return '3.6';
        }
        throw new VersionException ('Undefine Version from magicnumber ' . $version);
    }
}
