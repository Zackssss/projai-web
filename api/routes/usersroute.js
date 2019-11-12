const express = require('express');
const router = express.Router();
var user = require('..\controllers\UserController');

    //get user
router.get('/', (req, res, next) => {
    user.list_all_users;
});

    //post user
router.post('/', (req, res, next) => {
    res.status(201).json({
        message:"Post pour utilisateur"
    });
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