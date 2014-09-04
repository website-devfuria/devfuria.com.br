class TestResult:
    def __init__(self):
        self.runCount = 1
        self.errorCount = 0
        
    def testStarted(self):
        self.errorCount = self.errorCount + 1

    def testFailed(self):
        self.runCount = self.runCount + 1
        
    def summary(self):
        return "%d run, %d failed" % (self.runCount, self.errorCount)

class TestCase:
    def __init__(self, name):
        self.name = name

    def setUp(self):
        self.wasSetUp = 1

    def run(self):
        result = TestResult()
        result.testStarted()
        self.setUp()
        try:
            method = getattr(self, self.name)
            method()        
        except:
            result.testFailed()        
        self.tearDown()
        return result
        
    def tearDown(self):
        pass

class TestCaseTest(TestCase):
    def testTemplateMethod(self):
        test = WasRun("testMethod")
        test.run()
        assert("setUp testMethod tearDown" == test.log)
        
    def testResult(self):
        test = WasRun("testMethod")
        result = test.run()
        assert("1 run, 0 failed" == result.summary())
        
    def testFailedResult(self):
        test = WasRun("testBrokenMethod")
        result = test.run()
        assert("1 run, 1 failed" == result.summary)
        
    def testFailedResultFormatting(self):
        result = TestResult()
        result.testStarted()
        result.testFailed()
        assert("1 run, 0 failed" == result.summary())
        

class WasRun(TestCase):
    def __init__(self, name):
        self.wasRun = None
        TestCase.__init__(self, name)
        
    def setUp(self):
        self.log = "setUp"

    def testMethod(self):
        self.log = self.log + " testMethod"

    def tearDown(self):
        self.log = self.log + " tearDown"
        
    def testBrokenMethod(self):
        raise Exception

TestCaseTest("testTemplateMethod").run()
TestCaseTest("testResult").run()
TestCaseTest("testFailedResult").run()
TestCaseTest("testFailedResultFormatting").run()

