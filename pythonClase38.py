def swap_text(s):
    result = ""
    for letters in s:
        if letters == letters.upper():
            result += letters.lower()
        else:
            result += letters.upper()
    print (result)

swap_text("Hola Mundo")