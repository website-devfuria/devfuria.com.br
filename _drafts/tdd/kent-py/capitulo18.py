class TestCase:
    def __init__(self, name):
        self.name = name
        
    def run(self):
        method = getattr(self, self.name)
        method()

class TestCaseTest(TestCase):
    def testRunning(self):
        test = WasRun("testMethod")
        assert(not test.wasRun)
        test.run()
        assert(test.wasRun)

class WasRun(TestCase):
    def __init__(self, name):
        self.wasRun = None
        TestCase.__init__(self, name)
        
    def testMethod(self):
        self.wasRun = 1


TestCaseTest("testRunning").run()

