const express = require('express');
const router = express.Router();



    //event list 
router.get('/', (req, res, next) => {
    res.status(200).json({
        message:"Get pour event"
    });
});

    //Add an event
router.post('/', (req, res, next) => {
    res.status(201).json({
        message:"Post pour event"
    });
});

    //Gather an event by id
router.get('/:eventtId', (req, res, next) => {
    const id = req.params.eventId;
    res.status(200).json({
        message:"Get pour event par id", 
        id: id
    });
});

    //Get an event liste wrotten by an author with the userId
router.get('/author/:userId', (req, res, next) => {
    const id = req.params.userId;
    res.status(200).json({
        message:"Get pour event par userId", 
        id: id
    });
});

    //Patch an event using his id
router.patch('/:eventId', (req, res, next) => {
    const id = req.params.eventId;
    res.status(201).json({
        message:"Patch pour event par id",
        id: id
    });
});

    //Patch an event using his id
router.delete('/:eventId', (req, res, next) => {
    const id = req.params.eventId;
    res.status(200).json({
        message:"Delete event par id",
        id: id
    });
});

module.exports = router;