const express = require('express');
const router = express.Router();



    //com list 
router.get('/', (req, res, next) => {
    res.status(200).json({
        message:"Get pour les com"
    });
});

    //Add a com
router.post('/', (req, res, next) => {
    res.status(201).json({
        message:"Post pour les com"
    });
});

    //Gather a com by id
router.get('/:comId', (req, res, next) => {
    const id = req.params.comId;
    res.status(200).json({
        message:"Get pour com par id", 
        id: id
    });
});

    //Get a com liste wrotten by an author with the userId
router.get('/author/:userId', (req, res, next) => {
    const id = req.params.userId;
    res.status(200).json({
        message:"Get pour com par userId", 
        id: id
    });
});

    //Get a com liste related with the imgId
router.get('/img/:imgId', (req, res, next) => {
    const id = req.params.userId;
    res.status(200).json({
        message:"Get pour com par imgId", 
        id: id
    });
});

    //Get a com liste related with the articleId
router.get('/article/:articleId', (req, res, next) => {
    const id = req.params.userId;
    res.status(200).json({
        message:"Get pour com par articleId", 
        id: id
    });
});

    //Patch a com using his id
router.patch('/:comId', (req, res, next) => {
    const id = req.params.comId;
    res.status(201).json({
        message:"Patch pour un com par id",
        id: id
    });
});

    //Delete com using his id
router.delete('/:comId', (req, res, next) => {
    const id = req.params.comId;
    res.status(200).json({
        message:"Delete com par id",
        id: id
    });
});

module.exports = router;