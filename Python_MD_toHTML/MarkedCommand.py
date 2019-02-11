import argparse

import Marked

print(
    'Bienvenue\n sur\n marked Veuillez entrer -i [md] -u [html] !\n\n')

parser = argparse.ArgumentParser()

parser.add_argument("-i", '--input', help='Inserer le chemin du  .md')
parser.add_argument(
    "-u", '--output', help='Inserer le chemin du  .html')
args = parser.parse_args()

print(
    f' conversion  des fichiers \n\n')

Marked.convert(args.input, args.output)
