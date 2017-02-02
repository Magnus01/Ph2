from something import string
import unittest
class TestStringMethods(unittest.TestCase):

	def test_ca(self):
	    self.assertIn("return", string)
	
if __name__ == '__main__':
	unittest.main()