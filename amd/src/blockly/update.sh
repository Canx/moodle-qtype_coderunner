#!/bin/bash
# This ugly script tries to update blockly version
CURR="$PWD"
TMP_DIR="$CURR/tmp/node_modules/blockly"

# delete current package.json
rm $CURR/package.json

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
cd $TMP_DIR/msg
cp ./en.js ./es.js ./fr.js $CURR/msg/
sed -i "$(($(wc -l < $CURR/msg/en.js)-1)),\$d" $CURR/msg/en.js
sed -i "$(($(wc -l < $CURR/msg/es.js)-1)),\$d" $CURR/msg/es.js
sed -i "$(($(wc -l < $CURR/msg/fr.js)-1)),\$d" $CURR/msg/fr.js
cat $CURR/msg/en.more >> $CURR/msg/en.js
cat $CURR/msg/es.more >> $CURR/msg/es.js
cat $CURR/msg/fr.more >> $CURR/msg/fr.js
sed -i "s/core'/core-browser'/g" $CURR/msg/en.js
sed -i "s/core'/core-browser'/g" $CURR/msg/es.js
sed -i "s/core'/core-browser'/g" $CURR/msg/fr.js

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
