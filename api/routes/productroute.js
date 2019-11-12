const express = require('express');
const router = express.Router();
var Product = require('../models/productModel');



    //Products liste
router.get('/', (req, res, next) => {
    Product.getAllProducts(function(err, product) {

        console.log('controller')
        if (err){
          res.send(err);
          console.log('res', product);
        }
        res.status(200).json(product);
      });
});

    //Add a product
router.post('/', (req, res, next) => {
    var new_product = new Product(req.body);
  
  Product.createProduct(new_product, function(err, product) {
    
    if (err){
      res.send(err);
    }
    res.status(201).json(product);
  });
});

    //Gather a product by id
router.get('/:productId', (req, res, next) => {
    Product.getProductById(req.params.productId, function(err, product) {
        if (err)
          res.send(err);
        res.status(200).json(product);
      });
});

    //Patch a product using his id
router.patch('/:productId', (req, res, next) => {
    Product.updateProductById(req.params.productId, new Product(req.body), function(err, product) {
        if (err)
          res.send(err);
        res.status(201).json(product);
      })
});

    //Patch a product using his id
router.delete('/:productId', (req, res, next) => {
    Product.deleteProduct( req.params.productId, function(err, product) {
        if (err)
          res.send(err);
        res.json({ message: 'User successfully deleted' });
      });
});

module.exports = router;