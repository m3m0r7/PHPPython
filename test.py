# -*- coding: utf-8 -*-
import glob
print glob.glob('PHPPython/Core/Code/Operator/*')
tuple = (1, 2, 3, 4, 9, 6, 1, 100);
print ("Hello World!");
for i in tuple:
    print i
    if i == 9:
        print ("is 9");
    elif i == 100:
        print ("is 100");


dictTest = {"test1" : 123, "test2" : 321, "test3" : 456};
print dictTest;
print len(dictTest);
print "test1" in dictTest;
print dictTest["test1"];
print dictTest.has_key("test1");
print dictTest.has_key("test2");
print dictTest.has_key("test9999");
print dictTest.__php_info__;
print dictTest.__php_hash__;
print dictTest.__hash__;

for key, value in dictTest.iteritems():
    print key, value

def callMeTest(l, b):
    l.append(100)
    l.append(200)
    l.extend([
        11,
        22,
        33,
        9090
    ])
    l.pop()
    l.append(9090)
    print l;
    l.reverse()
    l.append(333);
    print l;
    print b;

    print 1+2
    print 2**3
    print 3/1
    print 3-2
    print 3*99
    for i in l:
        print i+2
        print i**3
        print i/1
        print i-2
        print i*99

# callMeTest function
callMeTest([100, 200, 300, 400], [2, 3]);
