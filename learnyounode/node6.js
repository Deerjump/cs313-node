var mymodule = require('./mymodule');

function callback(err, list){
	if(err){

	}
	else{
		var ext = '.' + process.argv[3];
		for (var i = 0; i < list.length; i++) {
			if(path.extname(list[i]) == ext){
				console.log(list[i]);
			}
		}
	}
}


mymodule(process.argv[2], process.argv[3]);