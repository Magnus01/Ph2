#Change this to your specific location or else it does not work
data = open("/../Ampps/www/Javanew/Ph2/Template/Python27/Punit/MA147C1Q1.txt", "r")
#data = open("/../xampp/htdocs/phase2/Template/Python27/Punit/MA147C1Q1.txt", "r")
lines = data.readlines()
data.close()

my_lst_str = ''.join(map(str, lines)).replace(" ", "").replace("\n", "")

#print my_lst_str