def countdown(segundos):
    if segundos <=0:
        print ("Por favor indique un numero correcto")
    else:
        while segundos >= 0:
           print (segundos) 
           segundos = segundos - 1
        print ("La cuenta regresiva termino")
segundos = 0
countdown(segundos)