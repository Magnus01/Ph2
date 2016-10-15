def addVectors (v1, v2):
    
    sum = []

    if len(v1) != len(v2):
        print "\nVektorene har ikke samme dimensjon!\n"
    else:
        for i in range(len(v1)):
            sum.append(v1[i])
            
    return sum