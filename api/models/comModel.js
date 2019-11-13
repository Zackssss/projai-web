const lclsql = require('C:/Users/Thierry Bissel/Documents/GitHub/projai-web/BDDConnectionLocal.js');
const usrsql = require('C:/Users/Thierry Bissel/Documents/GitHub/projai-web/BDDConnectionUser.js');

var Com = function(com){
    this.texte = com.texte;
    this.visibilite_commentaire = com.visibilite_commentaire;
    this.user_id = com.user_id;
    this.id_image = com.id_image;
};

    //Show the list of com
Com.getAllComs = function (result) {
    lclsql.query("Select * from commentaire", function(err, res){
        if(err) {
            console.log("error: ", err);
            result(err, null);
        }
        else{
            console.log('com : ', res);
            result(null, res);
        }
    })
    
}

    //Create a com
Com.createCom = function (newcom, result) {
    lclsql.query("INSERT INTO commentaire set ?", newcom, function(err, res){
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

    //Show one com using his id
Com.getComById = function (comId, result) {
    lclsql.query("Select * from commentaire where id_commentaire = ? ",comId, function(err, res){
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

    //Show one com using his author id
    Com.getComByuserId = function (userId, result) {
        lclsql.query("Select * from commentaire where user_id = ? ",userId, function(err, res){
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

    Com.getComByimgId = function (imgId, result) {
        lclsql.query("Select * from commentaire where id_image = ? ",imgId, function(err, res){
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

    //Update a com using his id
Com.updateComById = function (id, com, result) {
    lclsql.query("UPDATE commentaire set ? where id_commentaire=?",[com, id], function(err, res){
        if(err) {
            console.log("error: ", err);
            result(err, null);
        }
        else{
            result(null, res);
        }
    })
    
}

    //Delete a com using his id
Com.deleteCom = function (id, result) {
    lclsql.query("delete from commentaire where id_commentaire = ?",[id], function(err, res){
        if(err) {
            console.log("error: ", err);
            result(err, null);
        }
        else{
           
            result(null, res);
        }
    })
    
}

module.exports = Com;