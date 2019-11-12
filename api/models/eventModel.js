const lclsql = require('C:/Users/Thierry Bissel/Documents/GitHub/projai-web/BDDConnectionLocal.js');
const usrsql = require('C:/Users/Thierry Bissel/Documents/GitHub/projai-web/BDDConnectionUser.js');

var Event = function(event){
    this.nom_evenement = event.nom_evenement;
    this.association = event.association;
    this.description_evenement = event.description_evenement;
    this.date = event.date;
    this.reccurence = event.reccurence;
    this.date_creation = event.date_creation;
    this.user_id = event.user_id;
};

    //Show the list of event
Event.getAllEvents = function (result) {
    lclsql.query("Select * from evenement", function(err, res){
        if(err) {
            console.log("error: ", err);
            result(err, null);
        }
        else{
            console.log('event : ', res);
            result(null, res);
        }
    })
    
}

    //Create a event
Event.createEvent = function (newevent, result) {
    lclsql.query("INSERT INTO evenement set ?", newevent, function(err, res){
        if(err) {
            console.log("error: ", err);
            result(err, null);
        }
        else{
            console.log(res.insertId);
            result(null, res.insertId);
        }
    })
    
}

    //Show one event using his id
Event.getEventById = function (eventId, result) {
    lclsql.query("Select * from evenement where id_evenement = ? ",eventId, function(err, res){
        if(err) {
            console.log("error: ", err);
            result(err, null);
        }
        else{
            console.log(res);
            result(null, res);
        }
    })
    
}

    //Show one event using his author id
    Event.getEventByuserId = function (userId, result) {
        lclsql.query("Select * from evenement where user_id = ? ",userId, function(err, res){
            if(err) {
                console.log("error: ", err);
                result(err, null);
            }
            else{
                console.log(res);
                result(null, res);
            }
        })
        
    }

    //Update a event using his id
Event.updateEventById = function (id, event, result) {
    lclsql.query("UPDATE evenement set ? where id_evenement=?",[event, id], function(err, res){
        if(err) {
            console.log("error: ", err);
            result(err, null);
        }
        else{
            result(null, res);
        }
    })
    
}

    //Delete a event using his id
Event.deleteEvent = function (id, result) {
    lclsql.query("delete from evenement where id_evenement = ?",[id], function(err, res){
        if(err) {
            console.log("error: ", err);
            result(err, null);
        }
        else{
           
            result(null, res);
        }
    })
    
}

module.exports = Event;