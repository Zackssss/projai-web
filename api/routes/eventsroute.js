const express = require('express');
const router = express.Router();
var Event = require('../models/eventModel');



    //event list 
router.get('/', (req, res, next) => {
    Event.getAllEvents(function(err, event) {

        console.log('controller')
        if (err){
          res.send(err);
          console.log('res', event);
        }
        res.status(200).json(event);
      });
});

    //Add an event
router.post('/', (req, res, next) => {
    var new_event = new Event(req.body);
  
  Event.createEvent(new_event, function(err, event) {
    
    if (err){
      res.send(err);
    }
    res.status(201).json(event);
  });
});

    //Gather an event by id
router.get('/:eventId', (req, res, next) => {
    Event.getEventById(req.params.eventId, function(err, event) {
        if (err)
          res.send(err);
        res.status(200).json(event);
      });
});

    //Get an event liste wrotten by an author with the userId
router.get('/author/:userId', (req, res, next) => {
    Event.getEventByuserId(req.params.userId, function(err, event) {
        if (err)
          res.send(err);
        res.status(200).json(event);
      });
});

    //Patch an event using his id
router.patch('/:eventId', (req, res, next) => {
    Event.updateEventById(req.params.eventId, new Event(req.body), function(err, event) {
        if (err)
          res.send(err);
        res.status(201).json(event);
      })
});

    //Patch an event using his id
router.delete('/:eventId', (req, res, next) => {
    Event.deleteEvent( req.params.eventId, function(err, event) {
        if (err)
          res.send(err);
        res.json({ message: 'Event successfully deleted' });
      });
});

module.exports = router;