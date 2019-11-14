const express = require('express');
const router = express.Router();
var User = require('../models/user');
const bcrypt = require('bcrypt');
const jwt = require('jsonwebtoken');
const checkAuth = require('../middleware/check-auth');

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
            bcrypt.hash(req.body.mdp, 10, (err, hash) =>{
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
            bcrypt.compare(req.body.mdp, user[0].mdp, (err, result) => {
                if (err){
                    return res.status(401).json(user); 
                }
                if (result){
                    const token = jwt.sign({
                        mail: user[0].mail,
                        usersId: user[0].user_id,
                        role: user[0].role
                    }, "GroupeProjet",{
                        expiresIn: "1h"
                    })
                    return res.status(201).json({
                        user: user,
                        token: token
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

    //patch user by id
router.patch('/:usersId', checkAuth, (req, res, next) => {
    var user = new User(req.body);
            User.updateUserById(req.params.usersId, user, function(err, user) {
        if (err)
          res.send(err);
        res.status(201).json(user);
    });
});


    //delete user by id
router.delete('/:usersId', checkAuth, (req, res, next) => {
    User.deleteUser( req.params.usersId, function(err, user) {
        if (err)
          res.send(err);
        res.json({ message: 'User successfully deleted' });
      });
});

module.exports = router;