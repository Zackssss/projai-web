const express = require('express');
const router = express.Router();
var User = require('../models/userModel');

    //get user
router.get('/', (req, res, next) => {
    User.getAllUsers(function(err, user) {

        console.log('controller')
        if (err){
          res.send(err);
          console.log('res', user);
        }
        res.status(200).json(user);
      });
    });

    //post new user
router.post('/', (req, res, next) => {
    var new_user = new User(req.body);
  
  User.createUser(new_user, function(err, user) {
    
    if (err){
      res.send(err);
    }
    res.status(201).json(user);
  });
});

    //get user by id
router.get('/:usersId', (req, res, next) => {
    User.getUserById(req.params.usersId, function(err, user) {
        if (err)
          res.send(err);
        res.status(200).json(user);
      });
});

    //patch user by id
router.patch('/:usersId', (req, res, next) => {
    var user = new User(req.body);
    User.updateUserById(req.params.usersId, user, function(err, user) {
        if (err)
          res.send(err);
        res.status(201).json(user);
      });
});

    //delete user by id
router.delete('/:usersId', (req, res, next) => {
    User.deleteUser( req.params.usersId, function(err, user) {
        if (err)
          res.send(err);
        res.json({ message: 'User successfully deleted' });
      });
});


module.exports = router;