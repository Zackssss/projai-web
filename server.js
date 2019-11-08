const http = require('http');
const app = require('./app');
const BDDco = require('./BDDConnection');

const port = process.env.PORT || 8080;

const server = http.createServer(app, BDDco);

server.listen(port);