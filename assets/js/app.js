window.$ = window.jQuery = require('jquery');
global.$ = global.jQuery = $;
require('../css/app.scss');
const jsQR = require("jsqr");
global.jsQR = jsQR;
global.DecodeQr = require('./decodeQr.js')
window.Noty = require('noty');
