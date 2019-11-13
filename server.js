const http = require('http');
const app = require('./app');
const sql = require('./api/models/MySqlCo');

const port = process.env.PORT || 8080;

const server = http.createServer(app, sql);

server.listen(port);