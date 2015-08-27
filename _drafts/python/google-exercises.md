# coding: utf-8
import unittest

def word_count_dict(filename):
  word_count = {}  # Mapa de cada palavra contada
  # input_file = open(filename, 'r')
  input_file = filename
  # percorrer cada linha do arquivo...
  for line in input_file:
    words = line.split()
    # percorrer cada palavra da linha...
    for word in words:
      word = word.lower()
      # Caso espcial se nos estivermos vendo esta palavra pela primeira vez.
      if not word in word_count:
        word_count[word] = 1
      else:
        word_count[word] = word_count[word] + 1

  # input_file.close()  # Não estritamente necessário, mas é uma boa forma.
  return word_count 

class MyTest(unittest.TestCase):
  def test_foo(self):
    self.assertEqual( {'b': 1}, word_count_dict('B\n'))
    self.assertEqual( {'b': 2}, word_count_dict('Bb\nbbb'))
    self.assertEqual( {'b': 3}, word_count_dict('BbB'))

    self.assertEqual( {'a': 1, 'b': 1, 'l': 1, 'o': 1}, word_count_dict('bola'))
    self.assertEqual(  {'a': 2, 'b': 2, 'l': 2, 'o': 2}, word_count_dict('bola bola'))

if __name__ == '__main__':
    unittest.main()