const mysql = require('mysql');
 
 
var con1 = mysql.createConnection({
  database: 'mytestdb1',
  host: "localhost",
  user: "root",
  password: ""
});
 
con1.connect(function(err1) {
  if (err1) throw err1;
  console.log("BDD1 connected!");
});



var con2 = mysql.createConnection({
    database: 'mytestdb2',
    host: "localhost",
    user: "root",
    password: ""
  });
   
  con2.connect(function(err2) {
    if (err2) throw err2;
    console.log("BDD2 connected!");
  });
