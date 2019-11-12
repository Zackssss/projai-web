const lclsql = require('../BDDConnectionLocal');
const usrsql = require('../BDDConnectionUser');

var User = function(user){
    this.user = user.user;
    this.status = user.status;
    this.created_at = new Date();
};

user.createuser = function (newuser, result) {
    usrsql.query("INSERT INTO",newuser, function(err, res){
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