module.exports = function (dir, extname, callback) {
	var fs = require('fs');
	var path = require('path');

	fs.readdir(dir, callback);
}