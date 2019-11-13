const express = require('express');
const router = express.Router();
var Img = require('../models/imgModel');



    //Img list 
router.get('/', (req, res, next) => {
    Img.getAllImgs(function(err, img) {

        console.log('controller')
        if (err){
          res.send(err);
          console.log('res', img);
        }
        res.status(200).json(img);
      });
});

    //Add a img
router.post('/', (req, res, next) => {
    var new_img = new Img(req.body);
  
    Img.createImg(new_img, function(err, img) {
      
      if (err){
        res.send(err);
      }
      res.status(201).json(img);
    });
});

    //Gather a img by id
router.get('/:imgId', (req, res, next) => {
    Img.getImgById(req.params.imgId, function(err, img) {
        if (err)
          res.send(err);
        res.status(200).json(img);
      });
});

    //Get a img liste wrotten by an author with the userId
router.get('/author/:userId', (req, res, next) => {
    Img.getImgByuserId(req.params.userId, function(err, img) {
        if (err)
          res.send(err);
        res.status(200).json(img);
      });
});

    //Get a img liste related with the imgId
router.get('/event/:eventId', (req, res, next) => {
    Img.getImgByeventId(req.params.eventId, function(err, img) {
        if (err)
          res.send(err);
        res.status(200).json(img);
      });
});

    //Patch a img using his id
router.patch('/:imgId', (req, res, next) => {
    Img.updateImgById(req.params.imgId, new Img(req.body), function(err, img) {
        if (err)
          res.send(err);
        res.status(201).json(img);
    })
});

    //Delete img using his id
router.delete('/:imgId', (req, res, next) => {
    Img.deleteImg( req.params.imgId, function(err, img) {
        if (err)
          res.send(err);
        res.json({ message: 'Img successfully deleted' });
      });
});

module.exports = router;