const express = require('express');
const app = express();
const morgan = require('morgan');

const productsRoutes = require('./api/routes/product');
const usersRoutes = require('./api/routes/users');

app.use(morgan('dev'));

    //Routes for normal requests
app.use('/products', productsRoutes);
app.use('/users', usersRoutes);

    //Error routes
app.use((req, res, next) =>{
    const error = new Error('Not found');
    error.status = 404; 
    next(error);   
})

    //Error handeling
app.use((error, req, res, next)=>{
    res.status(error.status||500);
    res.json({
        error:{
            message: error.message
        }
    })
})

module.exports = app;