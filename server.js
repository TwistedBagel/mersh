var express = require('express');
var bodyParser = require('body-parser');
var morgan = require('morgan');
var app = express();

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());
app.set('view engine', 'ejs');
app.use(express.static(__dirname + '/public'));
app.use(morgan('dev'));

app.get('/', function(req, res) {
    res.render('pages/index');
});

app.get('/flexnav', function(req, res) {
  res.render('pages/flexnav/index');
});

app.get('/grids', function(req, res) {
  res.render('pages/grids/index');
});

app.get('/squares', function(req, res) {
  res.render('pages/squaresIndex');
})

app.get('/midterm', function(req, res) {
  res.render('pages/midterm/index');
});

app.post('/mail', function(req, res) {
  const fName = req.body.fName;
  const email = req.body.email;
  const msg = req.body.message;

  res.render(
    'mail',
    {
      name: fName,
      mail: email,
      content: msg,
    }
  )
})

let port = process.env.PORT;
if (port == null || port == "") {
  port = 8080;
}

app.listen(port, function() {
    console.log(`port ${port}`);
});