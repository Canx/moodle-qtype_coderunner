define(['require', 'exports', 'module',
       'qtype_coderunner/lib/blockly_compressed_browser',
       'qtype_coderunner/lib/blocks_compressed_browser',
       'qtype_coderunner/lib/javascript_compressed',
       'qtype_coderunner/lib/i18n/en'],
function (require, exports, module, Blockly, Blocks, Javascript, Locale) {
//const Blockly = require('./lib/blockly_compressed_browser');

Blockly.setLocale = function (locale) {
  if (typeof locale.default === 'function') {
    Blockly.Msg = Object.assign(Blockly.Msg, locale.default());
  } else {
    Blockly.Msg = Object.assign(locale, Blockly.Msg)();
  }
};

//Blockly.setLocale(require('./lib/i18n/en'));
Blockly.setLocale(Locale);

//Blockly.Blocks = Object.assign(Blockly.Blocks, require('./lib/blocks_compressed_browser')(Blockly));
Blockly.Blocks = Object.assign(Blockly.Blocks, Blocks(Blockly));

//Blockly.JavaScript = require('./lib/javascript_compressed')(Blockly);
Blockly.JavaScript = Javascript(Blockly);
//Blockly.Lua = require('./lib/lua_compressed')(Blockly);
//Blockly.Dart = require('./lib/dart_compressed')(Blockly);
//Blockly.PHP = require('./lib/php_compressed')(Blockly);
//Blockly.Python = require('./lib/python_compressed')(Blockly);

module.exports = Blockly;
});
