Our goal is a consistent 96%+ UnitTest coverage.

These Tests are build with PhpUnit. 

When submitting code, there must be
unit tests with the code. These tests will be reviewed
for code-coverage, insufficient coverage may result in
a change being rejected.

Keep in mind that it is often much easier to write Unit
tests for code which had tests in mind. Additionally, 
good UnitTests tend to enforce better code.
 
Remember, that a single UnitTest class, should have one
test for every _use case_ of the method being tested.
This will often mean that there will be multiple test 
methods for each method of the object being tested.

**I.E.:**

* Possible tests
    * testFixObjectNull
    * testFixObjectOdd
    * testFixObjectNotBroken
    * testFixObjectBroken
    * testFixObjectNotFixable
* For
    * myObject::fixObject( $object )
 