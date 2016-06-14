<?php

namespace PHPPython\Enum;
require_once __DIR__ . '/Enum.php';

class OpCode extends \PHPPython\Enum {
    const STOP_CODE						 = 0x0000;
    const POP_TOP						 = 0x0001;
    const ROT_TWO						 = 0x0002;
    const ROT_THREE						 = 0x0003;
    const DUP_TOP						 = 0x0004;
    const ROT_FOUR						 = 0x0005;
    const NOP						     = 0x0009;
    const UNARY_POSITIVE				 = 0x000A;
    const UNARY_NEGATIVE				 = 0x000B;
    const UNARY_NOT						 = 0x000C;
    const UNARY_CONVERT					 = 0x000D;
    const UNARY_INVERT					 = 0x000F;
    const LIST_APPEND					 = 0x0012;
    const BINARY_POWER					 = 0x0013;
    const BINARY_MULTIPLY				 = 0x0014;
    const BINARY_DIVIDE				  	 = 0x0015;
    const BINARY_MODULO					 = 0x0016;
    const BINARY_ADD					 = 0x0017;
    const BINARY_SUBTRACT				 = 0x0018;
    const BINARY_SUBSCR				     = 0x0019;
    const BINARY_FLOOR_DIVIDE			 = 0x001A;
    const BINARY_TRUE_DIVIDE			 = 0x001B;
    const INPLACE_FLOOR_DIVIDE			 = 0x001C;
    const INPLACE_TRUE_DIVIDE			 = 0x001D;
    const SLICE						     = 0x001E;
    const SLICE_1						 = 0x001F;
    const SLICE_2						 = 0x0020;
    const SLICE_3						 = 0x0021;
    const STORE_SLICE					 = 0x0028;
    const STORE_SLICE_1					 = 0x0029;
    const STORE_SLICE_2					 = 0x002A;
    const STORE_SLICE_3					 = 0x002B;
    const DELETE_SLICE					 = 0x0032;
    const DELETE_SLICE_1				 = 0x0033;
    const DELETE_SLICE_2				 = 0x0034;
    const DELETE_SLICE_3				 = 0x0035;
    const INPLACE_ADD					 = 0x0037;
    const INPLACE_SUBTRACT				 = 0x0038;
    const INPLACE_MULTIPLY				 = 0x0039;
    const INPLACE_DIVIDE				 = 0x003A;
    const INPLACE_MODULO				 = 0x003B;
    const STORE_SUBSCR		    		 = 0x003C;
    const DELETE_SUBSCR					 = 0x003D;
    const BINARY_LSHIFT				     = 0x003E;
    const BINARY_RSHIFT			      	 = 0x003F;
    const BINARY_AND				     = 0x0040;
    const BINARY_XOR					 = 0x0041;
    const BINARY_OR						 = 0x0042;
    const INPLACE_POWER					 = 0x0043;
    const GET_ITER						 = 0x0044;
    const PRINT_EXPR					 = 0x0046;
    const PRINT_ITEM					 = 0x0047;
    const PRINT_NEWLINE					 = 0x0048;
    const PRINT_ITEM_TO					 = 0x0049;
    const PRINT_NEWLINE_TO				 = 0x004A;
    const INPLACE_LSHIFT				 = 0x004B;
    const INPLACE_RSHIFT				 = 0x004C;
    const INPLACE_AND					 = 0x004D;
    const INPLACE_XOR					 = 0x004E;
    const INPLACE_OR					 = 0x004F;
    const BREAK_LOOP					 = 0x0050;
    const WITH_CLEANUP					 = 0x0051;
    const LOAD_LOCALS					 = 0x0052;
    const RETURN_VALUE					 = 0x0053;
    const IMPORT_STAR					 = 0x0054;
    const EXEC_STMT						 = 0x0055;
    const YIELD_VALUE					 = 0x0056;
    const POP_BLOCK						 = 0x0057;
    const END_FINALLY					 = 0x0058;
    const BUILD_CLASS					 = 0x0059;
    const STORE_NAME					 = 0x005A;
    const DELETE_NAME					 = 0x005B;
    const UNPACK_SEQUENCE				 = 0x005C;
    const FOR_ITER						 = 0x005D;
    const STORE_ATTR					 = 0x005F;
    const DELETE_ATTR					 = 0x0060;
    const STORE_GLOBAL					 = 0x0061;
    const DELETE_GLOBAL					 = 0x0062;
    const DUP_TOPX						 = 0x0063;
    const LOAD_CONST					 = 0x0064;
    const LOAD_NAME						 = 0x0065;
    const BUILD_TUPLE					 = 0x0066;
    const BUILD_LIST					 = 0x0067;
    const BUILD_SET			             = 0x0068;
    const BUILD_MAP						 = 0x0069;
    const LOAD_ATTR						 = 0x006A;
    const COMPARE_OP					 = 0x006B;
    const IMPORT_NAME					 = 0x006C;
    const IMPORT_FROM					 = 0x006D;
    const JUMP_FORWARD					 = 0x006E;
    const JUMP_IF_FALSE_OR_POP			 = 0x006F;
    const JUMP_IF_TRUE_OR_POP			 = 0x0070;
    const JUMP_ABSOLUTE					 = 0x0071;
    const POP_JUMP_IF_FALSE			     = 0x0072;
    const POP_JUMP_IF_TRUE				 = 0x0073;
    const LOAD_GLOBAL					 = 0x0074;
    const CONTINUE_LOOP					 = 0x0077;
    const SETUP_LOOP					 = 0x0078;
    const SETUP_EXCEPT					 = 0x0079;
    const SETUP_FINALLY					 = 0x007A;
    const LOAD_FAST						 = 0x007C;
    const STORE_FAST					 = 0x007D;
    const DELETE_FAST					 = 0x007E;
    const RAISE_VARARGS					 = 0x0082;
    const CALL_FUNCTION					 = 0x0083;
    const MAKE_FUNCTION					 = 0x0084;
    const BUILD_SLICE					 = 0x0085;
    const MAKE_CLOSURE					 = 0x0086;
    const LOAD_CLOSURE					 = 0x0087;
    const LOAD_DEREF					 = 0x0088;
    const STORE_DEREF					 = 0x0089;
    const CALL_FUNCTION_VAR				 = 0x008C;
    const CALL_FUNCTION_KW				 = 0x008D;
    const CALL_FUNCTION_VAR_KW			 = 0x008E;
    const EXTENDED_ARG					 = 0x008F;
}
