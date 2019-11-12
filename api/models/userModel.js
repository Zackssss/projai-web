const lclsql = require('../BDDConnectionLocal');
const usrsql = require('../BDDConnectionUser');

var User = function(user){
    this.user = user.user;
    this.status = user.status;
    this.created_at = new Date();
};

    //Show the list of user
User.getAllUser = function (result) {
    usrsql.query("", function(err, res){
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
    usrsql.query("",newuser, function(err, res){
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
User.showUser = function (userId, result) {
    usrsql.query("",userId, function(err, res){
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
User.updateUserbyId = function (id, user, result) {
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