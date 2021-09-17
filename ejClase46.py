def turn_on_candle(vela):
    if vela == "off":
        vela = "Vela on"
        print (vela)
    else:
        print ("No se conoce la condicion actual de la vela, por favor definir si esta apagada o prendida")
turn_on_candle("off")