# -*- coding: utf-8 -*-
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
print dictTest.has_key("test1");
print dictTest.has_key("test2");
print dictTest.has_key("test9999");

for key, value in dictTest.iteritems():
    print key, value
