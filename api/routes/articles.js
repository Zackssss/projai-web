const express = require('express');
const router = express.Router();



    //Articles list 
router.get('/', (req, res, next) => {
    res.status(200).json({
        message:"Get pour article"
    });
});

    //Add an article
router.post('/', (req, res, next) => {
    res.status(201).json({
        message:"Post pour article"
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

    //Get an article liste wrotten by an author with the userId
router.get('/author/userId', (req, res, next) => {
    const id = req.params.userId;
    res.status(200).json({
        message:"Get pour article par userId", 
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