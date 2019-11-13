const express = require('express');
const router = express.Router();
var User = require('../models/user');
const bcrypt = require('bcrypt');
 

router.post('/register', (req, res, next) => {
    User.findAUser(req.body.mail, function(err, user) {
        if (err) {
            res.send(err);
        }
        if (user.mail){
            return res.status(409).json({
                message: "mail allready exists"
            });
        }
        else{
            bcrypt.hash(req.body.password, 10, (err, hash) =>{
                if(err){
                    return res.status(500).json({
                        error: err                    
                    });
                }
                else{
                    var user = new User(req.body);
                }
            })
        }
    }); 
});

router.post('/login', (req, res, next) => {
    User.findAUser(req.body.mail, function(err, user) {
        if (err) {
            res.send(err);
        }
        if (user.mail){
            bcrypt.compare(req.body.password, user.password, (err, result) => {
                if (err){
                    return res.status(401).json({
                        message: "auth failed"
                    }); 
                }
                if (result){
                    return res.status.json({
                        message: 'Auth successful'
                    })
                }
            })
        }
        else{
            return res.status(401).json({
                message: "auth failed"
            });            
        }
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