const express = require('express');
const router = express.Router();
var User = require('../models/user');
const bcrypt = require('bcrypt');
 

router.get('/register', (req, res, next) => {
    bcrypt.hash(req.body.email, 10, (err, hash) =>{
        if(err){
            return res.status(500).json({
                error: err                    
            });
        }
        else{
            const user = new User({
                email: req.body.email,
                password: hash
            });
            user.save()
                .then(result=>{
                    res.status(201).json({
                        message: 'user created'
                    });
                })
                .catch(err => {
                    console.log(err);
                    res.status(500).json({
                        error: err
                    })
                });
        }
    }) 
})

router.get('/login', (req, res, next) => {


})

module.exports = router;