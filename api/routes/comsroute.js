const express = require('express');
const router = express.Router();
var Com = require('../models/comModel');



    //com list 
router.get('/', (req, res, next) => {
    Com.getAllComs(function(err, com) {

        console.log('controller')
        if (err){
          res.send(err);
          console.log('res', com);
        }
        res.status(200).json(com);
      });
});

    //Add a com
router.post('/', (req, res, next) => {
    var new_com = new Com(req.body);
  
    Com.createCom(new_com, function(err, com) {
      
      if (err){
        res.send(err);
      }
      res.status(201).json(com);
    });
});

    //Gather a com by id
router.get('/:comId', (req, res, next) => {
    Com.getComById(req.params.comId, function(err, com) {
        if (err)
          res.send(err);
        res.status(200).json(com);
      });
});

    //Get a com liste wrotten by an author with the userId
router.get('/author/:userId', (req, res, next) => {
    Com.getComByuserId(req.params.userId, function(err, com) {
        if (err)
          res.send(err);
        res.status(200).json(com);
      });
});

    //Get a com liste related with the imgId
router.get('/img/:imgId', (req, res, next) => {
    Com.getComByimgId(req.params.imgId, function(err, com) {
        if (err)
          res.send(err);
        res.status(200).json(com);
      });
});

    //Patch a com using his id
router.patch('/:comId', (req, res, next) => {
    Com.updateComById(req.params.comId, new Com(req.body), function(err, com) {
        if (err)
          res.send(err);
        res.status(201).json(com);
    })
});

    //Delete com using his id
router.delete('/:comId', (req, res, next) => {
    Com.deleteCom( req.params.comId, function(err, com) {
        if (err)
          res.send(err);
        res.json({ message: 'Com successfully deleted' });
      });
});

module.exports = router;