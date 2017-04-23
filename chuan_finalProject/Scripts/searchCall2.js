var webSericeUrl = "http://swapi.co/api/";
var listOfCategories = ["films/?search=", "people/?search=", "planets/?search=", "species/?search=", "starships/?search=", "vehicles/?search=", "vehicles/?search="];
var cartegoriesCounter;
//var commaCounter = 0;

function callWebService(incomingList, methodAndArguments, callBack)
{
  var requestUrl = webSericeUrl + incomingList + methodAndArguments;
  try
  {
    var asyncRequest = new XMLHttpRequest();
    asyncRequest.addEventListener("readystatechange", function(){ callBack(asyncRequest, methodAndArguments);}, false);
    asyncRequest.open("GET", requestUrl, true);
    asyncRequest.setRequestHeader("Accept", "application/json; charset=utf-8" );
    asyncRequest.send();
  }
  catch(e)
  {
    alert("Request Failed");
  }
}

function callExtraWebService(textName, methodAndArguments, callBack)
{
  try
  {
    var asyncRequest = new XMLHttpRequest();
    asyncRequest.addEventListener("readystatechange", function(){ callBack(asyncRequest, textName);}, false);
    asyncRequest.open("GET", methodAndArguments, true);
    asyncRequest.setRequestHeader("Accept", "application/json; charset=utf-8" );
    asyncRequest.send();
  }
  catch(e)
  {
    alert("Request Failed");
  }
}

function extraData(asyncRequest, textName)
{
  var data = parseLoad(asyncRequest);
  var listBox = document.getElementById("searchResults");
  if (typeof data === 'string')
    alert(data);
  else if (data)
    listBox.innerHTML += "<h2>"+textName+": "+data.name+"</h2><br>";
}

///checks to see the which is the right url, if not it gives you the right message////////////////////////////////////////
function mainData(asyncRequest, newText)
{
  var data = parseLoad(asyncRequest);
  if (typeof data === 'string')
  {
    alert(data);
    return;
  }
  else if (data)
  {
    if (data.count == 0 && cartegoriesCounter <= 5)
    {
      ++cartegoriesCounter;
      callWebService(listOfCategories[cartegoriesCounter], newText, mainData);
    }
    else
    {
      if(cartegoriesCounter == 0)
        displayFilmsData(data);
      else if(cartegoriesCounter == 1)
        displayPeopleData(data);
      else if(cartegoriesCounter == 2)
        displayPlanetsData(data);
      else if(cartegoriesCounter == 3)
        displaySpeciesData(data);
      else if(cartegoriesCounter == 4)
        displayStarshipsData(data);
      else if(cartegoriesCounter == 5)
        displayVehiclesData(data);
      else
      {
        alert("Either this doesn't exist in the WHOLE UNIVERSE or you typed it in wrong!!!");
        return;
      }
    }
  }
}

function parseLoad(asyncRequest)
{
  if(asyncRequest.readyState == 4 && asyncRequest.status == 200)
  {
    var data = JSON.parse(asyncRequest.responseText);
    return data;
  }
  else if (asyncRequest.status == 400)
    return "Code 400: Bad Request!";
  else if (asyncRequest.status == 401)
    return "Code 401: Unauthorized!";
  else if (asyncRequest.status == 403)
    return "Code 403: Forbidden!!!";
  else if (asyncRequest.status == 404)
    return "Code 404: Not Found!";
  else if (asyncRequest.status == 500)
    return "Code 500: Internal Server Error!";
}

///Displayes the data for the films///////////////////////////////////////////////////////////////////
function displayFilmsData(data)
{
  cartegoriesCounter = 0;
  var listBox = document.getElementById("searchResults");
  listBox.innerHTML = "";
  listBox.innerHTML = "<h2>Title: "+data.results[0].title+"</h2>"+
    "<br><h2>Episode: "+data.results[0].episode_id+"</h2><br>"+
    "<h2>Opening Crawl:</h2><br><p>"+data.results[0].opening_crawl+
    "<br><h2>Director: "+data.results[0].director+"</h2><br>"+
    "<h2>Producer(s): "+data.results[0].producer+"</h2>";
}

///Displaying the data for people//////////////////////////////////////////////////////////////////////////////////////
function displayPeopleData(data)
{
  cartegoriesCounter = 0;
  var listBox = document.getElementById("searchResults");
  listBox.innerHTML = "";
  listBox.innerHTML = "<h2>Name: "+data.results[0].name+"</h2>"+
    "<br><h2>height: "+data.results[0].height+" cm</h2><br>"+
    "<h2>Mass: "+data.results[0].mass+"</h2><br>"+
    "<h2>Hair Color: "+data.results[0].hair_color+"</h2><br>"+
    "<h2>Skin Color: "+data.results[0].skin_color+"</h2><br>"+
    "<h2>Eye Color: "+data.results[0].eye_color+"</h2><br>"+
    "<h2>Birth Year: "+data.results[0].birth_year+"</h2><br>"+
    "<h2>Gender: "+data.results[0].gender+"</h2><br>";
  callExtraWebService("Homeworld", data.results[0].homeworld, extraData);
  callExtraWebService("Species", data.results[0].species[0], extraData);
  for(var i=0; data.results[0].vehicles.length > i; ++i)
  {
    callExtraWebService("Vehicle", data.results[0].vehicles[i], extraData);
  }
  for(var j=0; data.results[0].starships.length > j; ++j)
  {
    callExtraWebService("Starship", data.results[0].starships[j], extraData);
  }
}

///Displaying the data for planets//////////////////////////////////////////////////////////////////////////////////////
function displayPlanetsData(data)
{
  cartegoriesCounter = 0;
  var listBox = document.getElementById("searchResults");
  listBox.innerHTML = "";
  listBox.innerHTML = "<h2>Name: "+data.results[0].name+"</h2>"+
    "<br><h2>Rotation Period: "+data.results[0].rotation_period+"</h2><br>"+
    "<h2>Orbital Period: "+data.results[0].orbital_period+"</h2><br>"+
    "<h2>Diameter: "+data.results[0].diameter+"</h2><br>"+
    "<h2>Climate: "+data.results[0].climate+"</h2><br>"+
    "<h2>Gravity: "+data.results[0].gravity+"</h2><br>"+
    "<h2>Terrain: "+data.results[0].terrain+"</h2><br>"+
    "<h2>Surface Water: "+data.results[0].surface_water+"</h2><br>"+
    "<h2>Population: "+data.results[0].population+"</h2><br>";
  for(var j=0; data.results[0].residents.length > j; ++j)
  {
    callExtraWebService("Resident", data.results[0].residents[j], extraData);
  }
}

///Displaying the data for species//////////////////////////////////////////////////////////////////////////////////////
function displaySpeciesData(data)
{
  cartegoriesCounter = 0;
  var listBox = document.getElementById("searchResults");
  listBox.innerHTML = "";
  listBox.innerHTML = "<h2>Name: "+data.results[0].name+"</h2>"+
    "<br><h2>Classification: "+data.results[0].classification+"</h2><br>"+
    "<h2>Designation: "+data.results[0].designation+"</h2><br>"+
    "<h2>Average Height: "+data.results[0].average_height+"</h2><br>"+
    "<h2>Skin Colors: "+data.results[0].skin_colors+"</h2><br>"+
    "<h2>Hair Colors: "+data.results[0].hair_colors+"</h2><br>"+
    "<h2>Eye Colors: "+data.results[0].eye_colors+"</h2><br>"+
    "<h2>Average Lifespan: "+data.results[0].average_lifespan+"</h2><br>"+
    "<h2>Language: "+data.results[0].language+"</h2><br>";
  for(var j=0; data.results[0].people.length > j; ++j)
  {
    callExtraWebService("This Specie includes", data.results[0].people[j], extraData);
  }
}

///Displaying the data for starships//////////////////////////////////////////////////////////////////////////////////////
function displayStarshipsData(data)
{
  cartegoriesCounter = 0;
  var listBox = document.getElementById("searchResults");
  listBox.innerHTML = "";
  listBox.innerHTML = "<h2>Name: "+data.results[0].name+"</h2>"+
    "<br><h2>Model: "+data.results[0].model+"</h2><br>"+
    "<h2>Manufacturer: "+data.results[0].manufacturer+"</h2><br>"+
    "<h2>Cost in Credits: "+data.results[0].cost_in_credits+"</h2><br>"+
    "<h2>Length: "+data.results[0].length+"</h2><br>"+
    "<h2>Max Atmosphering Speed: "+data.results[0].max_atmosphering_speed+"</h2><br>"+
    "<h2>Crew: "+data.results[0].crew+"</h2><br>"+
    "<h2>passengers: "+data.results[0].passengers+"</h2><br>"+
    "<h2>Cargo Capacity: "+data.results[0].cargo_capacity+"</h2><br>"
    "<h2>Consumables: "+data.results[0].consumables+"</h2><br>"+
    "<h2>Hyperdrive Rating: "+data.results[0].hyperdrive_rating+"</h2><br>"+
    "<h2>MGLT: "+data.results[0].MGLT+"</h2><br>"+
    "<h2>Starship Class: "+data.results[0].starship_class+"</h2><br>";
  for(var j=0; data.results[0].pilots.length > j; ++j)
  {
    callExtraWebService("Pilot", data.results[0].pilots[j], extraData);
  }
}


///Displaying the data for vehicles//////////////////////////////////////////////////////////////////////////////////////
function displayVehiclesData(data)
{
  cartegoriesCounter;
  var listBox = document.getElementById("searchResults");
  listBox.innerHTML = "";
  listBox.innerHTML = "<h2>Name: "+data.results[0].name+"</h2>"+
    "<br><h2>Model: "+data.results[0].model+"</h2><br>"+
    "<h2>Manufacturer: "+data.results[0].manufacturer+"</h2><br>"+
    "<h2>Cost in Credits: "+data.results[0].cost_in_credits+"</h2><br>"+
    "<h2>Length: "+data.results[0].length+"</h2><br>"+
    "<h2>Max Atmosphering Speed: "+data.results[0].max_atmosphering_speed+"</h2><br>"+
    "<h2>Crew: "+data.results[0].crew+"</h2><br>"+
    "<h2>passengers: "+data.results[0].passengers+"</h2><br>"+
    "<h2>Cargo Capacity: "+data.results[0].cargo_capacity+"</h2><br>"
    "<h2>Consumables: "+data.results[0].consumables+"</h2><br>"+
    "<h2>Vehicle Class: "+data.results[0].vehicle_class+"</h2><br>";
  for(var j=0; data.results[0].pilots.length > j; ++j)
  {
    callExtraWebService("Pilot", data.results[0].pilots[j], extraData);
  }
}

///Removes the spaces of the text and adds the delimiter the plus sign////////////////////////////////
function spaces(str)
{
  var pos = str.indexOf(" ");
  var delStr = "";
  if(pos >= 0)
  {
    for(var i = 0; str.length > i; ++i)
    {
      delStr += str[i].replace(/\s/, '+');
    }
    return delStr;
  }
  else
    return str;

}

function search()
{
  var inputText = document.getElementById("searchBox").value;
  inputText = inputText.toLowerCase();
  var newText = spaces(inputText);
  var listBox = document.getElementById("searchResults");
  listBox.innerHTML = "";
  if(inputText == "")
    listBox.innerHTML = "Type Something in and see what happens!!!!!!!!";
  else
  {
    cartegoriesCounter = 0;
    callWebService(listOfCategories[0], newText, mainData);
  }
}
