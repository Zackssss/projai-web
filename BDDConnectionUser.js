const mysql = require('mysql');
 
var userbase = mysql.createConnection({
    database: 'user',
    host: "localhost",
    user: "root",
    password: ""
  });
   
  userbase.connect(function(err2) {
    if (err2) throw err2;
    console.log("User base connected!");
  });


  module.exports = userbase;