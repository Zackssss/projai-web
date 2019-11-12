const lclsql = require('C:/Users/Thierry Bissel/Documents/GitHub/projai-web/BDDConnectionLocal.js');
const usrsql = require('C:/Users/Thierry Bissel/Documents/GitHub/projai-web/BDDConnectionUser.js');

var User = function(user){
    this.nom = user.nom;
    this.prenom = user.prenom;
    this.centre = user.centre;
    this.mail = user.mail;
    this.mdp = user.mdp;
    this.role = user.role;
};

    //Show the list of user
User.getAllUsers = function (result) {
    usrsql.query("SELECT user_id, nom, prenom, centre, mail, role FROM user", function(err, res){
        if(err) {
            console.log("error: ", err);
            result(err, null);
        }
        else{
            console.log('User : ', res);
            result(null, res);
        }
    })
    
}

    //Create a user
User.createUser = function (newuser, result) {
    usrsql.query("INSERT INTO user set ?", newuser, function(err, res){
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

    //Show one user using his id
User.getUserById = function (userId, result) {
    usrsql.query("SELECT user_id, nom, prenom, centre, mail, role FROM user WHERE user_id = ? ",userId, function(err, res){
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

    //Update a user using his id
User.updateUserById = function (id, user, result) {
    usrsql.query("",[user.user, id], function(err, res){
        if(err) {
            console.log("error: ", err);
            result(err, null);
        }
        else{
            result(null, res);
        }
    })
    
}

    //Delete a user using his id
User.deleteUser = function (newuser, result) {
    usrsql.query("",[id], function(err, res){
        if(err) {
            console.log("error: ", err);
            result(err, null);
        }
        else{
           
            result(null, res);
        }
    })
    
}

module.exports = User;