def addVectors (v1, v2):
    
    sum = []

    if len(v1) != len(v2):
        sum = []
    else:
        for i in range(len(v1)):
            sum.append(v1[i]+v2[i])
            
    return sum
    
addVectors([1, 2, 3], [3, 2, 1])
				