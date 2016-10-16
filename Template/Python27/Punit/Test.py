from MA147C1Q1 import addVectors
import unittest

data = open("../Ampps/www/Ph2/Template/Python27/Punit/MA147C1Q1.txt", "r")
lines = data.readlines()
data.close()

my_lst_str = ''.join(map(str, lines)).replace(" ", "").replace("\n", "")

print my_lst_str
    
class TestStringMethods(unittest.TestCase):
    
    def test_b(self):
        self.assertIn("if", my_lst_str)
    
    def test_c(self):
        self.assertEqual(addVectors([1, 2], [3, 2, 1]), [])
    
    def test_a(self):
        self.assertEqual(addVectors([1, 2, 3], [3, 2, 1]), [4, 4, 4])

    
if __name__ == '__main__':
    unittest.main()
