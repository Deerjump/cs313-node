const express = require('express')
const path = require('path')
const { Pool } = require('pg')

var favicon = require('serve-favicon');

const pool = new Pool()

const PORT = process.env.PORT || 5000

function getThread(){
	pool.query('', [1], (err, res) => {
		if(err) {
			throw err
		}

	})
}

express()
  .use(express.static(path.join(__dirname, 'public')))
  .use(favicon(__dirname + '/public/images/favicon.ico'))
  .set('views', path.join(__dirname, 'views'))
  .set('view engine', 'ejs')
  .get('/', (req, res) => res.render('pages/index'))
  .get('/login', (req, res) => res.render('pages/login'))
  .get('/new-thread', (req, res) => res.render('pages/new-thread'))
  .get('/view-thread', (req, res) => res.render('pages/view-thread'))
  .get('/create-account', (req, res) => res.render('pages/create-account'))
  .listen(PORT, () => console.log(`Listening on ${ PORT }`))
