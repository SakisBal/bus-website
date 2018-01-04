var express = require('express');
var router = express.Router();


/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index');
});
router.get('/toyr-yp', function(req, res, next) {
  res.render('index');
});
router.get('/loip-yp', function(req, res, next) {
  res.render('index');
});
router.get('/nea', function(req, res, next) {
  res.render('index');
});
router.get('/epik', function(req, res, next) {
  res.render('index');
});

module.exports = router;
