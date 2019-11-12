var User = require('../models/userModel');





exports.update_a_user = function(req, res) {
  User.updateUserById(req.params.userId, new User(req.body), function(err, user) {
    if (err)
      res.send(err);
    res.json(user);
  });
};


exports.delete_a_user = function(req, res) {


  User.deleteUser( req.params.usersId, function(err, user) {
    if (err)
      res.send(err);
    res.json({ message: 'User successfully deleted' });
  });
};