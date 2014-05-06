var page = require('webpage').create();
page.open('http://google.com/', function() {
  page.render('google_home.jpeg', {format: 'jpeg', quality: '100'})
  console.log("Success!");
  phantom.exit();
});