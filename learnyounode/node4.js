var fs = require('fs');

fs.readFile(process.argv[2], function callback(err, data){
	var buffer = data;
	var str = buffer.toString();
	var length = str.split('\n');
	// or --> var length = data.toString().split('\n').length-1;
	console.log(length.length-1);
})

