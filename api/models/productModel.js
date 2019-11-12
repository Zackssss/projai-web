const lclsql = require('C:/Users/Thierry Bissel/Documents/GitHub/projai-web/BDDConnectionLocal.js');
const usrsql = require('C:/Users/Thierry Bissel/Documents/GitHub/projai-web/BDDConnectionUser.js');

var Product = function(product){
    this.nom_produit = product.nom_produit;
    this.description_produit = product.description_produit;
    this.prix = product.prix;
    this.nbr_de_vente = product.nbr_de_vente;
};

    //Show the list of product
Product.getAllProducts = function (result) {
    lclsql.query("Select * from produit", function(err, res){
        if(err) {
            console.log("error: ", err);
            result(err, null);
        }
        else{
            console.log('product : ', res);
            result(null, res);
        }
    })
    
}

    //Create a product
Product.createProduct = function (newproduct, result) {
    lclsql.query("INSERT INTO produit set ?", newproduct, function(err, res){
        if(err) {
            console.log("error: ", err);
            result(err, null);
        }
        else{
            console.log(res.insertId);
            result(null, res.insertId);
        }
    })
    
}

    //Show one product using his id
Product.getProductById = function (productId, result) {
    lclsql.query("Select * from produit where id_produit = ? ",productId, function(err, res){
        if(err) {
            console.log("error: ", err);
            result(err, null);
        }
        else{
            console.log(res);
            result(null, res);
        }
    })
    
}

    //Update a product using his id
Product.updateProductById = function (id, product, result) {
    lclsql.query("UPDATE produit set ? where id_produit=?",[product, id], function(err, res){
        if(err) {
            console.log("error: ", err);
            result(err, null);
        }
        else{
            result(null, res);
        }
    })
    
}

    //Delete a product using his id
Product.deleteProduct = function (id, result) {
    lclsql.query("delete from produit where id_produit = ?",[id], function(err, res){
        if(err) {
            console.log("error: ", err);
            result(err, null);
        }
        else{
           
            result(null, res);
        }
    })
    
}

module.exports = Product;