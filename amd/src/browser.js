define(function (require, exports, module) {const Blockly = require('./lib/blockly_compressed_browser');

Blockly.setLocale = function (locale) {
  if (typeof locale.default === 'function') {
    Blockly.Msg = Object.assign(Blockly.Msg, locale.default());
  } else {
    Blockly.Msg = Object.assign(locale, Blockly.Msg)();
  }
}

Blockly.setLocale(require('./lib/i18n/en'));

Blockly.Blocks = Object.assign(Blockly.Blocks, require('./lib/blocks_compressed_browser')(Blockly));

Blockly.JavaScript = require('./lib/javascript_compressed')(Blockly);
Blockly.Lua = require('./lib/lua_compressed')(Blockly);
Blockly.Dart = require('./lib/dart_compressed')(Blockly);
Blockly.PHP = require('./lib/php_compressed')(Blockly);
Blockly.Python = require('./lib/python_compressed')(Blockly);

module.exports = Blockly;
});
