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

    //post user
router.post('/', (req, res, next) => {
    var new_user = new User(req.body);

  //handles null error 
   if(!new_user.user || !new_user.status){

            res.status(400).send({ error:true, message: 'Please provide user/status' });

        }
else{
  
  User.createUser(new_user, function(err, user) {
    
    if (err){
      res.send(err);
    }
    res.status(201).json(user);
  });
}
});

    //get user by id
router.get('/:usersId', (req, res, next) => {
    res.status(200).json({
        message:"Get pour utilisateurs par id"
    });
});

    //patch user by id
router.patch('/:usersId', (req, res, next) => {
    res.status(201).json({
        message:"Patch pour utilisateurs par id"
    });
});

    //delete user by id
router.delete('/:usersId', (req, res, next) => {
    res.status(200).json({
        message:"Delete pour utilisateurs par id"
    });
});


module.exports = router;