const sql = require('./MySqlCo');

var User = function(user){
    this.nom = user.nom;
    this.prenom = user.prenom;
    this.centre = user.centre;
    this.mail = user.mail;
    this.mdp = user.mdp;
    this.role = user.role;
};

