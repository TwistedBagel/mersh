var express = require('express');
var bodyParser = require('body-parser');
var app = express();

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());
app.set('view engine', 'ejs');
app.use(express.static(__dirname + '/public'));

app.get('/', function(req, res) {
    res.render('pages/index');
});

let port = process.env.PORT;
if (port == null || port == "") {
  port = 8080;
}

app.listen(port, function() {
    console.log(`port ${port}`);
});