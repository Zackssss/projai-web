const express = require('express');
const app = express();
const morgan = require('morgan');
const bodyParser = require('body-parser');

const productsRoutes = require('./api/routes/productroute');
const usersRoutes = require('./api/routes/usersroute');
const eventsRoutes = require('./api/routes/eventsroute');
const comsRoutes = require('./api/routes/comsroute');

app.use(morgan('dev'));
app.use(bodyParser.urlencoded({extended: true}));
app.use(bodyParser.json());

app.use((req, res, next) => {
    res.header('Access-Control-Allow-Origins', '*');
    res.header('Access-Control-Allow-Header', 'Origin, X-Requested-With, Content-Type, Accept, Authorization'); 
    if (req.method === 'OPTION'){
        res.header('Access-Control-Allow-Methods', 'GET, POST, PATCH, DELETE');
        res.status(200).json({});
    }
    next();
})


    //Routes for normal requests
app.use('/products', productsRoutes);
app.use('/users', usersRoutes);
app.use('/events', eventsRoutes);
app.use('/coms', comsRoutes);




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