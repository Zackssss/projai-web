const sql = require('./MySqlCo');

var User = function(user){
    this.nom = user.nom;
    this.prenom = user.prenom;
    this.centre = user.centre;
    this.mail = user.mail;
    this.mdp = user.mdp;
    this.role = user.role;
};

    //Get a user
router.get('/:usersId', (req, res, next) => {
    User.getUserById(req.params.usersId, function(err, user) {
        if (err)
          res.send(err);
        res.status(200).json(user);
      });
});

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

    //Delete a user
router.delete('/:usersId', (req, res, next) => {
    User.deleteUser( req.params.usersId, function(err, user) {
        if (err)
          res.send(err);
        res.json({ message: 'User successfully deleted' });
      });
});

module.exports = User;