define(function (require, exports, module) {'use strict';

var Blockly = require('./_blockly')

require('./js');
require('./php');
require('./dart');
require('./lua');
require('./python');

module.exports = Blockly;
});
