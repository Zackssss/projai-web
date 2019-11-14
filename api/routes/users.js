const express = require('express');
const router = express.Router();
var User = require('../models/user');
const bcrypt = require('bcrypt');
 

router.post('/register', (req, res, next) => {
    User.findAUser(req.body.mail, function(err, user) {
        if (err) {
            res.send(err);
        }
        if (user.length){
            return res.status(409).json({
                message: "mail allready exists"
            });
        }
        else{
            bcrypt.hash(req.body.mdp, 5, (err, hash) =>{
                if(err){
                    return res.status(500).json({
                        error: err                
                    });
                }
                else{
                    var new_user = new User({
                        nom: req.body.nom,
                        prenom: req.body.prenom,
                        centre: req.body.centre,
                        mail: req.body.mail,
                        mdp: hash,
                        role: req.body.role
                    });
                    User.createUser(new_user, function(err, user) {
    
                        if (err){
                          res.send(err);
                        }
                        res.status(201).json(user);
                      });              
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
        if (user.length){
            bcrypt.compare(req.body.mdp, user.mdp, (err, result) => {
                if (err){
                    return res.status(401).json({
                        message: "auth failed 1"
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
                message: "auth failed 2"
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