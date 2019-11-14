const sql = require('./MySqlCo');

var User = function(user){
    this.nom = user.nom;
    this.prenom = user.prenom;
    this.centre = user.centre;
    this.mail = user.mail;
    this.mdp = user.mdp;
    this.role = user.role;
};

User.findAUser = function (usermail, result) {
    sql.query("SELECT * FROM user WHERE mail = ? ",usermail, function(err, res){
        if(err) {
            console.log(res);
            result(res, null);
        }
        else{
            console.log(res);
            result(null, res);
        }
    })
}

    //Create a user
User.createUser = function (newuser, result) {
    sql.query("INSERT INTO user set ?", newuser, function(err, res){
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

User.deleteUser = function (id, result) {
    sql.query("delete from user where user_id = ?",[id], function(err, res){
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