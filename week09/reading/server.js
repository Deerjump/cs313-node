const express = require('express');

const app = express();

const posts = [
  {
    id: 1,
    author: 'John',
    title: 'Templating with EJS',
    body: 'Blog post number 1'
  },
  {
    id: 2,
    author: 'Drake',
    title: 'Express: Starting from the Bottom',
    body: 'Blog post number 2'
  },
  {
    id: 3,
    author: 'Emma',
    title: 'Streams',
    body: 'Blog post number 3'
  },
  {
    id: 4,
    author: 'Cody',
    title: 'Events',
    body: 'Blog post number 4'
  }
]

app.set('port',process.env.PORT || 5000)
	.use(express.static(__dirname+ '/public'))
	.set('view engine', 'ejs')
	.get('/', (req,res) =>{
		res.render('home');
	})
	.listen(5000)
	