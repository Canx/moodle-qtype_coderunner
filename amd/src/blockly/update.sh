#!/bin/bash
# This ugly script tries to update blockly version
CURR="$PWD"
TMP_DIR="$CURR/tmp/node_modules/blockly"

# install blockly throught npm in temp dir
mkdir -p ./tmp
cd ./tmp
npm install --prefix . blockly
cd $TMP_DIR

# Copy core blockly files
cp package.json index.js blockly.js blockly_compressed.js blocks.js blocks_compressed.js browser.js core-browser.js python.js python_compressed.js $CURR

# copy core-browser to core to avoid changing references in other files
#cp $CURR/core-browser.js $CURR/core.js
sed -i "s/core'/core-browser'/g" $CURR/python.js

# we need to merge extra strings that do not appear in blockly
cd $CURR/msg
langs=`ls *.more | cut -f 1 -d '.'`
for lang in $langs
do
    cp $TMP_DIR/msg/$lang.js $CURR/msg/
    sed -i "$(($(wc -l < $CURR/msg/$lang.js)-1)),\$d" $CURR/msg/$lang.js
    cat $CURR/msg/$lang.more >> $CURR/msg/$lang.js
    sed -i "s/core'/core-browser'/g" $CURR/msg/$lang.js
done

# copy media dir
mkdir -p $CURR/media
cp $TMP_DIR/media/* $CURR/media/

# replace ./javascript for ./python in browser.js
sed -i 's/javascript/python/g' $CURR/browser.js

# remove .js extension in define()
sed -i 's/\.js//g' $CURR/blockly.js
sed -i 's/\.js//g' $CURR/blocks.js
sed -i 's/\.js//g' $CURR/python.js
sed -i 's/\.js//g' $CURR/python_compressed.js
sed -i 's/\.js//g' $CURR/blocks_compressed.js

# delete tmp file
rm -rf $CURR/tmp
