const express = require('express');
const app = express();

const productsRoutes = require('./api/routes/product');
const usersRoutes = require('./api/routes/users');

app.use('/products', productsRoutes);
app.use('/users', usersRoutes);

module.exports = app;