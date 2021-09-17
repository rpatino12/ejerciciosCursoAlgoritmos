def swap_letters(s):
  result = ""
  for letter in s:
    if letter == letter.upper():
      result += letter.lower()
    else:
      result += letter.upper()
  print (result)
swap_letters("yo NO escribo MAYUS ni minus")