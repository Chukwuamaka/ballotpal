const express = require('express'),
    app = express(),
    Datastore = require('nedb'),
    hostname = undefined,
    port = process.env.PORT || 3000;
// const router = express.Router();

app.listen(port, hostname, () => {
  console.log(`Server running at http://youripaddress:${port}/`);
});
app.use(express.static('public'));
app.use(express.json({limit: '1mb'}));

//"Handles Request from public/position.html"
//Save position being voted for and its related data
app.post('/position', (request, response) => {
  var initialData = request.body;
  db.database.update({position: initialData.position}, {$set: {User: initialData.User}, $inc: {A: initialData.A, B: initialData.B, C: initialData.C}}, {upsert: true});
  console.log(`Position posted successfully: ${initialData.position}`);
  response.send("Success");
});

//"Handles Request from public/vote.html"
//Submit Results
app.post('/submit', (request, response) => {
  var updatedData = request.body;
  db.database.update({position: updatedData.position}, {$set: {User: updatedData.User}, $inc: {A: updatedData.A, B: updatedData.B, C: updatedData.C}}, {});
  console.log(`Result submitted successfully`);
  response.send("Submitted Successfully");
});

//"Handles Request from public/admin/dashboard/position.html"
//Show the results for a particular position
app.post('/result', (request, response) => {
  db.database.findOne(request.body, (error, result) => {
    response.json(result);
  });
});

//"Handles Request from public/admin/dashboard/index.html"
//Show results for all positions
app.get('/results', (request, response) => {
  db.database.find({}, (error, results) => {
    response.json(results);
  });
});

//"Handles Request from public/admin/dashboard/position.html"
//Reset a particular position's results
app.post('/reset', (request, response) => {
  db.database.remove(request.body, {});
  console.log("Reset Successful");
  response.send(`Results for the ${request.body.position} has been successfully reset`);
});

//"Handles Request from public/admin/dashboard/index.html"
//Reset all positions
app.post('/resetAll', (request, response) => {
  db.database.remove(request.body, {multi: true});
  console.log("Reset Successful");
  response.send(`All results have been successfully reset`);
});

//"Handles Request from public/admin/index.html and public/index.html"
//Save user information to the database
app.post('/register', (request, response) => {
  db.users.insert(request.body);
  console.log(`${request.body.Name.Username} successfully registered`)
  response.send("Registration Successful");
});

//"Handles Request from public/admin/index.html, public/index.html, public/admin/login.html and public/login.html"
//Gets user information from the database
app.get('/login/authorize', (request, response) => {
  db.users.find({}, (error, results) => {
    response.json(results);
  });
});

const db = {};
db.database = new Datastore({filename: 'database.db', autoload: true});
db.users = new Datastore({filename: 'users.db', autoload: true});