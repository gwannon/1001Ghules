#!/bin/bash

php ./tools/generateDocs.php 1001Ghules
chromium --no-sandbox --headless --gpu --no-pdf-header-footer --print-to-pdf=./temp.pdf ./index1001Ghules.html
echo "Metas"
pdftk 'temp.pdf' update_info_utf8 'metas1001Ghules.txt' output '1001Ghules.pdf'
rm metas1001Ghules.txt
rm temp.pdf
mv ./index1001Ghules.html ./index.html