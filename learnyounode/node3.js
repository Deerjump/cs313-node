var fs = require('fs');

buffer = fs.readFileSync(process.argv[2]);
var str = buffer.toString();
var length = str.split('\n');
console.log(length.length - 1);
