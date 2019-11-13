const express = require('express');
const router = express.Router();
var User = require('../models/user');
const bcrypt = require('bcrypt');
 

router.get('/register', (req, res, next) => {
    User.findAUser(req.body.mail, function(err, user) {
        if (err) {
            res.send(err);
        }
        if (res(mail) = req.body.mail){
            return res.status(409).json({
                message: "mail exists"
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
})

router.get('/login', (req, res, next) => {


})

module.exports = router;