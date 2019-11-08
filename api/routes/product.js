const express = require('express');
const router = require.Router();

router.get('/', (req, res, next) => {
    res.status(200).json({
        message:"Get pour produits"
    });
});

router.post('/', (req, res, next) => {
    res.status(201).json({
        message:"Post pour produits"
    });
});
