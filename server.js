const http = require('http');
const app = require('./app');
const lclsql = require('./BDDConnectionLocal');
const usrsql = require('./BDDConnectionUser');

const port = process.env.PORT || 8080;

const server = http.createServer(app, usrsql, lclsql);

server.listen(port);