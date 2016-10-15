from MA147C1Q1 import addVectors
import unittest

class TestStringMethods(unittest.TestCase):
    
    def test_c(self):
        self.assertEqual(addVectors([1, 2], [3, 2, 1]), [])
    
    def test_a(self):
        self.assertEqual(addVectors([1, 2, 3], [3, 2, 1]), [4, 4, 4])

if __name__ == '__main__':
    unittest.main()