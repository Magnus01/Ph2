from something import my_lst_str
from MA147C1Q1 import addVectors
import unittest
    
class TestStringMethods(unittest.TestCase):
    
    def test_a(self):
        self.assertIn("if", my_lst_str)
        
    def test_b(self):
        self.assertIn("len", my_lst_str)
        
    def test_c(self):
        self.assertIn("else", my_lst_str)
        
    def test_d(self):
        self.assertIn("for", my_lst_str)
    
    def test_e(self):
        self.assertIn("return", my_lst_str)
    
#    def test_f(self):
#        self.assertEqual(addVectors([1, 2], [3, 2, 1]), [])
#    
#    def test_g(self):
#        self.assertEqual(addVectors([1, 2, 3], [3, 2, 1]), [4, 4, 4])

    
if __name__ == '__main__':
    unittest.main()