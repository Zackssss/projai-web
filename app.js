const express = require('express');
const app = express();

const usersRoutes = require('./api/routes/users');

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