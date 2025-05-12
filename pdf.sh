#!/bin/bash

php ./tools/generateDocs.php Ambientacion1001Ghules
chromium --no-sandbox --headless --gpu --no-pdf-header-footer --print-to-pdf=./temp.pdf ./indexAmbientacion1001Ghules.html
echo "Metas Ambientacion"
pdftk 'temp.pdf' update_info_utf8 'metasAmbientacion1001Ghules.txt' output '1001Ghules.pdf'
mv indexAmbientacion1001Ghules.html index.html
rm metasAmbientacion1001Ghules.txt
rm temp.pdf

php ./tools/generateDocs.php Cuentos1001Ghules
chromium --no-sandbox --headless --gpu --no-pdf-header-footer --print-to-pdf=./temp.pdf ./indexCuentos1001Ghules.html
echo "Metas Cuentos"
pdftk 'temp.pdf' update_info_utf8 'metasCuentos1001Ghules.txt' output 'Cuentos1001Ghules.pdf'
rm metasCuentos1001Ghules.txt
rm indexCuentos1001Ghules.html
rm temp.pdf

php ./tools/generateDocs.php Recursos1001Ghules
chromium --no-sandbox --headless --gpu --no-pdf-header-footer --print-to-pdf=./temp.pdf ./indexRecursos1001Ghules.html
echo "Metas Recursos"
pdftk 'temp.pdf' update_info_utf8 'metasRecursos1001Ghules.txt' output 'Recursos1001Ghules.pdf'
rm metasRecursos1001Ghules.txt
rm indexRecursos1001Ghules.html
rm temp.pdf

php ./tools/generateDocs.php Bestiario1001Ghules
chromium --no-sandbox --headless --gpu --no-pdf-header-footer --print-to-pdf=./temp.pdf ./indexBestiario1001Ghules.html
echo "Metas Bestiario"
pdftk 'temp.pdf' update_info_utf8 'metasBestiario1001Ghules.txt' output 'Bestiario1001Ghules.pdf'
rm metasBestiario1001Ghules.txt
rm indexBestiario1001Ghules.html
rm temp.pdf