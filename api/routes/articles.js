const express = require('express');
const router = express.Router();



    //Articles list 
router.get('/', (req, res, next) => {
    res.status(200).json({
        message:"Get pour produits"
    });
});

    //Add an article
router.post('/', (req, res, next) => {
    res.status(201).json({
        message:"Post pour produits"
    });
});

    //Gather an article by id
router.get('/:articletId', (req, res, next) => {
    const id = req.params.articleId;
    res.status(200).json({
        message:"Get pour article par id", 
        id: id
    });
});

    //Patch an article using his id
router.patch('/:articleId', (req, res, next) => {
    const id = req.params.articleId;
    res.status(201).json({
        message:"Patch pour article par id",
        id: id
    });
});

    //Patch an article using his id
router.delete('/:articleId', (req, res, next) => {
    const id = req.params.articleId;
    res.status(200).json({
        message:"Delete article par id",
        id: id
    });
});

module.exports = router;