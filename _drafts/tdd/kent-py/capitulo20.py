class TestCase:
    def __init__(self, name):
        self.name = name

    def setUp(self):
        self.wasSetUp = 1
            
#    def run(self, result):      # isto nao funcionou
#        result.testStarted()
    def run(self):
        self.setUp()
        method = getattr(self, self.name)
        method()
        self.tearDown()
        
    def tearDown(self):
        pass

class TestCaseTest(TestCase):
    def testTemplateMethod(self):
        test = WasRun("testMethod")
        test.run()
        assert("setUp testMethod tearDown" == test.log)

class WasRun(TestCase):
    def __init__(self, name):
        self.wasRun = None
        TestCase.__init__(self, name)
        
    def setUp(self):
        self.log = "setUp"
#        self.wasSetUp = 1 # <--------- esta he a flag

    def testMethod(self):
        self.log = self.log + " testMethod"

    def tearDown(self):
        self.log = self.log + " tearDown"

TestCaseTest("testTemplateMethod").run()

