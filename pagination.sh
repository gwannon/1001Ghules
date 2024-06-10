#!/bin/bash

# USAGE:
# ./add_page_numbers.sh <inputpdf> <outputpdf>
#  
# A script to add page numbers to a PDF.
# Only works on letter size PDFs
# Tested only on Debian in 2018.

if ! which pdflatex > /dev/null; then
    echo "Dependencies not met: pdflatex not found"
fi

if ! which pdftk > /dev/null; then
    echo "Dependencies not met: pdftk not found"
fi

INPUT_PDF=${1}
OUTPUT_PDF=${2}

if ! [ -f $INPUT_PDF ]; then
  echo "File '${INPUT_PDF}' does not exist."
  exit -1
fi

TMP_PAGES_TEX='tmp_page_numbers.tex'
TMP_PAGES_PDF='tmp_page_numbers.pdf'
TMP_PAGES_AUX='tmp_page_numbers.aux'
TMP_PAGES_LOG='tmp_page_numbers.log'

echo "Processing input file: $INPUT_PDF"

NUM_PAGES=`pdftk $INPUT_PDF dump_data | grep NumberOfPages | cut -f 2 -d ' '`
echo "Page numbers in original PDF: $NUM_PAGES"

# Feel free to edit the file here:
echo "Creating latex file with just page numbers in it..."
(
# Edit the "letterpaper" string if you wish:
printf '\\documentclass[12pt, letterpaper]{article}\n'
printf '\\usepackage{lastpage}\n'
printf '\\usepackage{fancyhdr}\n'
printf '\\pagestyle{fancy}\n'
printf '\\fancyhf{}\n'
printf '\\usepackage[sfdefault]{roboto}\n'
printf '\\renewcommand{\\headrulewidth}{0pt}\n'
printf '\\usepackage{multido}\n'
printf '\\usepackage[hmargin=4.0cm,vmargin=0.5cm,nohead,nofoot]{geometry}\n'
# Edit this line if desired to change formatting
# printf '\\cfoot{Page \\thepage\\ of \\pageref{LastPage}}\n'
printf '\\cfoot{- \\thepage\\ -}\n'
printf '\\begin{document}\n'
printf '\\multido{}{'
printf "$NUM_PAGES"
printf '}{\\phantom{x}\\newpage}\n'
printf '\\end{document}\n'
) > $TMP_PAGES_TEX

# Run pdflatex TWICE; once isn't enough to make pg numbering perfect
pdflatex -interaction=batchmode $TMP_PAGES_TEX 1> /dev/null
pdflatex -interaction=batchmode $TMP_PAGES_TEX 1> /dev/null

# Now join the original and numbered PDFs together
pdftk $INPUT_PDF multistamp $TMP_PAGES_PDF output $OUTPUT_PDF

# And clean up the temp files
rm -f $TMP_PAGES_PDF $TMP_PAGES_TEX $TMP_PAGES_AUX $TMP_PAGES_LOG