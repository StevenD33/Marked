import markdown2
import re
import os
from os.path import splitext


link_patterns = [(re.compile(
    r'((([A-Za-z]{3,9}:(?:\/\/)?)(?:[\-;:&=\+\$,\w]+@)?[A-Za-z0-9\.\-]+(:[0-9]+)?|(?:www\.|[\-;:&=\+\$,\w]+@)[A-Za-z0-9\.\-]+)((?:\/[\+~%\/\.\w\-_]*)?\??(?:[\-\+=&;%@\.\w_]*)#?(?:[\.\!\/\\\w]*))?)'), r'\1')]

head = "<!DOCTYPE html>\n<html>\n<head>\n\t<meta charset='utf-8'/>\n\t<title>" + "Marked" + \
    "</title>\n\t\n</head>\n<body>\n"
finHead = "</body>\n</html>"

def convert(md_input, html_output):
    malist = os.listdir(f'./'+md_input)
    for i in malist:
        f = open(f'./{md_input}/{i}', "r")
        html = markdown2.markdown(
            f.read(), extras=["link-patterns"], link_patterns=link_patterns)
        nomFichier = os.path.splitext(i)[0]
        print(f'Le fichier "{nomFichier}" est convertie !')
        html_file = open(f'./{html_output}/{nomFichier}.html', 'w')
        html_file.write(head)
        html_file.write(html)
        html_file.write(finHead)

