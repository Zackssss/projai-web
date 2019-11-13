const lclsql = require('C:/Users/Thierry Bissel/Documents/GitHub/projai-web/BDDConnectionLocal.js');
const usrsql = require('C:/Users/Thierry Bissel/Documents/GitHub/projai-web/BDDConnectionUser.js');

var Img = function(img){
    this.chemin = img.chemin;
    this.visibilte_image = img.visibilte_image;
    this.appreciation = img.appreciation;
    this.user_id = img.user_id;
    this.id_evenement = img.id_evenement;
};

    //Show the list of Img
Img.getAllImgs = function (result) {
    lclsql.query("Select * from image", function(err, res){
        if(err) {
            console.log("error: ", err);
            result(err, null);
        }
        else{
            console.log('img : ', res);
            result(null, res);
        }
    })
    
}

    //Create a img
Img.createImg = function (newimg, result) {
    lclsql.query("INSERT INTO image set ?", newimg, function(err, res){
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

    //Show one img using his id
Img.getImgById = function (imgId, result) {
    lclsql.query("Select * from image where id_image = ? ",imgId, function(err, res){
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

    //Show one img using his author id
    Img.getImgByuserId = function (userId, result) {
        lclsql.query("Select * from image where user_id = ? ",userId, function(err, res){
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

    Img.getImgByeventId = function (eventId, result) {
        lclsql.query("Select * from image where id_evenement = ? ",eventId, function(err, res){
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

    //Update a img using his id
Img.updateImgById = function (id, img, result) {
    lclsql.query("UPDATE image set ? where id_image=?",[img, id], function(err, res){
        if(err) {
            console.log("error: ", err);
            result(err, null);
        }
        else{
            result(null, res);
        }
    })
    
}

    //Delete a img using his id
Img.deleteImg = function (id, result) {
    lclsql.query("delete from commentaire where id_image = ?",[id], function(err, res){
        if(err) {
            console.log("error: ", err);
            result(err, null);
        }
    })
    lclsql.query("delete from image where id_image = ?",[id], function(err, res){
        if(err) {
            console.log("error: ", err);
            result(err, null);
        }
        else{
           
            result(null, res);
        }
    })
    
}

module.exports = Img;