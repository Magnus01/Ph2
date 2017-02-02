c = "Program Files (x86)"
cmd = "C:/%s/Ampps/www/Final/Ph2/Template/Python27/Punit/MA147C1Q1.txt" % c
#C:\Program Files (x86)\Ampps\www\PHASE2\Branch_master\Ph2\Template\Python27\Punit
data = open(cmd, "r")
#data = open('c:/Python27 MA147C1Q1.txt', "r")
#data = open("/../Ampps/www/Javanew/Ph2/Template/Python27/Punit/MA147C1Q1.txt", "r")
#data = open("/../xampp/htdocs/phase2/Template/Python27/Punit/MA147C1Q1.txt", "r")
lines = data.readlines()
data.close()

my_lst_str = ''.join(map(str, lines)).replace("\n", "").replace(" ", "")


#print my_lst_str

