const mysql = require('mysql');
 
 
var local = mysql.createConnection({
  database: 'bddlocal',
  host: "localhost",
  user: "root",
  password: ""
});
 
loacal.connect(function(err1) {
  if (err1) throw err1;
  console.log("Local db connected!");
});



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
