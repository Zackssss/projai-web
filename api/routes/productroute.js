const express = require('express');
const router = express.Router();



    //Products liste
router.get('/', (req, res, next) => {
    res.status(200).json({
        message:"Get pour produits"
    });
});

    //Add a product
router.post('/', (req, res, next) => {
    res.status(201).json({
        message:"Post pour produits"
    });
});

    //Gather a product by id
router.get('/:productId', (req, res, next) => {
    const id = req.params.productId;
    res.status(200).json({
        message:"Get pour produits par id", 
        id: id
    });
});

    //Patch a product using his id
router.patch('/:productId', (req, res, next) => {
    const id = req.params.productId;
    res.status(201).json({
        message:"Patch pour produits par id",
        id: id
    });
});

    //Patch a product using his id
router.delete('/:productId', (req, res, next) => {
    const id = req.params.productId;
    res.status(200).json({
        message:"Delete produits par id",
        id: id
    });
});

module.exports = router;