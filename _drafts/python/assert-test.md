---
layout:      grid12-article
title:       Python - assert() e test()
description: 
---



Test()
---

{% highlight python %}
def test(expression1, expression2):
    if expression1 == expression2:
        return 'Pass'
    else:
        return 'Fail'
{% endhighlight %}

{% highlight python %}
# http://code.google.com/edu/languages/google-python-class/
def test(got, expected):
  if got == expected:
    prefix = ' OK '
  else:
    prefix = '  X '
  print("%s got: %s expected: %s" % (prefix, repr(got), repr(expected)))
{% endhighlight %}


{% highlight python %}
import sys

def test(did_pass):
    """  Print the result of a test.  """
    linenum = sys._getframe(1).f_lineno   # Get the caller's line number.
    if did_pass:
        msg = "Test at line {0} ok.".format(linenum)
    else:
        msg = ("Test at line {0} FAILED.".format(linenum))
    print(msg)

def test_suite():
    """ Run the suite of tests for code in this module (this file).
    """
    test(absolute_value(17) == 17)
    test(absolute_value(-17) == 17)
    test(absolute_value(0) == 0)
    test(absolute_value(3.14) == 3.14)
    test(absolute_value(-3.14) == 3.14)

test_suite()        # Here is the call to run the tests
{% endhighlight %}


{% highlight python %}
def test(actual, expected):
    """ Compare the actual to the expected value,
        and print a suitable message.
    """
    import sys
    linenum = sys._getframe(1).f_lineno   # get the caller's line number.
    if (expected == actual):
        msg = "Test on line {0} passed.".format(linenum)
    else:
        msg = ("Test on line {0} failed. Expected '{1}', but got '{2}'."
                                     . format(linenum, expected, actual))
    print(msg)
{% endhighlight %}




http://stackoverflow.com/questions/6913023/test-function-in-python-book-how-to-think-like-a-computer-scientist
http://openbookproject.net/thinkcs/python/english3e/fruitful_functions.html








assert()
---
	

The assert statement has two forms.

The simple form, assert <expression>, is equivalent to

if __​debug__:
    if not <expression>: raise AssertionError

The extended form, assert <expression1>, <expression2>, is equivalent to

if __​debug__:
    if not <expression1>: raise AssertionError, <expression2>




assert (number > 0), 'Only positive numbers are allowed!'



