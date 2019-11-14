const express = require('express');
const router = express.Router();
var User = require('../models/user');
const bcrypt = require('bcrypt');
const jwt = require('jsonwebtoken');
const checkAuth = require('../middleware/check-auth');
const passwordValidator = require('password-validator');

var schema = new passwordValidator();

schema
.is().min(6)                                    // Minimum length 8
.is().max(100)                                  // Maximum length 100
.has().uppercase()                              // Must have uppercase letters
.has().lowercase()                              // Must have lowercase letters
.has().digits()                                 // Must have digits
.has().not().spaces()                           // Should not have spaces


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
            if (schema.validate(req.body.mdp)){
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
            else{
                return res.status(500).json({
                    message: 'Password must have digit, caps and lowercase'
                })
            }
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
                        expiresIn: "12h"
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