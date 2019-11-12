const mysql = require('mysql');
 
 
var local = mysql.createConnection({
  database: 'bddlocal',
  host: "localhost",
  user: "root",
  password: ""
});
 
local.connect(function(err1) {
  if (err1) throw err1;
  console.log("Local db connected!");
});

module.exports = local;