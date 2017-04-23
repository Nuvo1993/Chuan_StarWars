var webSericeUrl = "http://swapi.co/api/";
var listOfFilms = [];
var listOfPeople = [];
var listOfPlanets = [];
var listOfSpecies = [];
var listOfStarships = [];
var listOfVehicles = [];

function callWebService(methodAndArguments, callBack)
{
  var requestUrl = webSericeUrl + methodAndArguments;
  try
  {
    var asyncRequest = new XMLHttpRequest();
    asyncRequest.addEventListener("readystatechange", function(){ callBack(asyncRequest);}, false);
    asyncRequest.open("GET", requestUrl, true);
    asyncRequest.setRequestHeader("Accept", "application/json; charset=utf-8" );
    asyncRequest.send();
  }
  catch(e)
  {
    alert("Request Failed");
  }
}

///Displaying the data for films//////////////////////////////////////////////////////////////////////////////////////
function filmsData(asyncRequest)
{
  var data = parseLoad(asyncRequest);
  if (typeof data === 'string')
    alert(data);
  else
    displayFilmsData(data);
}

function displayFilmsData(data)
{
  var listBox = document.getElementById("searchResults");
  listBox.innerHTML = "";
  listBox.innerHTML = "<p>Title: "+data.results[0].title+"</p>"+
    "<br><h2>Episode: "+data.results[0].episode_id+"</h2><br>"+
    "<p>Opening Crawl:</><br><p>"+data.results[0].opening_crawl+
    "<br><h2>Director: "+data.results[0].director+"</h2><br>"+
    "<p>Producer(s): "+data.results[0].producer+"</p>";
}

///Displaying the data for people//////////////////////////////////////////////////////////////////////////////////////
function peopleData(asyncRequest)
{
  var data = parseLoad(asyncRequest);
  if (typeof data === 'string')
    alert(data);
  else
    displayPeopleData(data);
}

function displayPeopleData(data)
{
  var listBox = document.getElementById("searchResults");
  listBox.innerHTML = "";
  listBox.innerHTML = "<h2>Name: "+data.results[0].name+"</h2>"+
    "<br><h2>height: "+data.results[0].height+"</h2><br>"+
    "<p>Mass: "+data.results[0].mass+"</p><br>"+
    "<p>Hair Color: "+data.results[0].hair_color+"</p><br>"+
    "<p>Skin Color: "+data.results[0].skin_color+"</p><br>"+
    "<p>Eye Color: "+data.results[0].eye_color+"</><br>"+
    "<p>Birth Year: "+data.results[0].birth_year+"</p><br>"+
    "<p>Gender: "+data.results[0].gender+"</p><br>";
}

///Displaying the data for planets//////////////////////////////////////////////////////////////////////////////////////
function planetsData(asyncRequest)
{
  var data = parseLoad(asyncRequest);
  if (typeof data === 'string')
    alert(data);
  else
    displayPlanetsData(data);
}

function displayPlanetsData(data)
{
  var listBox = document.getElementById("searchResults");
  listBox.innerHTML = "";
  listBox.innerHTML = "<h2>Name: "+data.results[0].name+"</h2>"+
    "<br><h2>Rotation Period: "+data.results[0].rotation_period+"</h2><br>"+
    "<p>Orbital Period: "+data.results[0].orbital_period+"</p><br>"+
    "<p>Diameter: "+data.results[0].diameter+"</p><br>"+
    "<p>Climate: "+data.results[0].climate+"</p><br>"+
    "<p>Gravity: "+data.results[0].gravity+"</p><br>"+
    "<p>Terrain: "+data.results[0].terrain+"</p><br>"+
    "<p>Surface Water: "+data.results[0].surface_water+"</p><br>"+
    "<p>Population: "+data.results[0].population+"</p><br>";
}

///Displaying the data for species//////////////////////////////////////////////////////////////////////////////////////
function speciesData(asyncRequest)
{
  var data = parseLoad(asyncRequest);
  if (typeof data === 'string')
    alert(data);
  else
    displaySpeciesData(data);
}

function displaySpeciesData(data)
{
  var listBox = document.getElementById("searchResults");
  listBox.innerHTML = "";
  listBox.innerHTML = "<h2>Name: "+data.results[0].name+"</h2>"+
    "<br><h2>Classification: "+data.results[0].classification+"</h2><br>"+
    "<p>Designation: "+data.results[0].designation+"</p><br>"+
    "<h2>Average Height: "+data.results[0].average_height+"</h2><br>"+
    "<h2>Skin Colors: "+data.results[0].skin_colors+"</h2><br>"+
    "<h2>Hair Colors: "+data.results[0].hair_colors+"</h2><br>"+
    "<h2>Eye Colors: "+data.results[0].eye_colors+"</h2><br>"+
    "<h2>Average Lifespan: "+data.results[0].average_lifespan+"</h2><br>"+
    "<h2>Language: "+data.results[0].language+"</h2><br>";
}

///Displaying the data for starships//////////////////////////////////////////////////////////////////////////////////////
function starshipsData(asyncRequest)
{
  var data = parseLoad(asyncRequest);
  if (typeof data === 'string')
    alert(data);
  else
    displayStarshipsData(data);
}

function displayStarshipsData(data)
{
  var listBox = document.getElementById("searchResults");
  listBox.innerHTML = "";
  listBox.innerHTML = "<h2>Name: "+data.results[0].name+"</h2>"+
    "<br><h2>Model: "+data.results[0].model+"</h2><br>"+
    "<p>Manufacturer: "+data.results[0].manufacturer+"</p><br>"+
    "<p>Cost in Credits: "+data.results[0].cost_in_credits+"</p><br>"+
    "<p>Length: "+data.results[0].length+"</p><br>"+
    "<p>Max Atmosphering Speed: "+data.results[0].max_atmosphering_speed+"</p><br>"+
    "<p>Crew: "+data.results[0].crew+"</p><br>"+
    "<p>passengers: "+data.results[0].passengers+"</p><br>"+
    "<p>Cargo Capacity: "+data.results[0].cargo_capacity+"</p><br>"
    "<p>Consumables: "+data.results[0].consumables+"</p><br>"+
    "<p>Hyperdrive Rating: "+data.results[0].hyperdrive_rating+"</p><br>"+
    "<p>MGLT: "+data.results[0].MGLT+"</p><br>"+
    "<p>Starship Class: "+data.results[0].starship_class+"</p><br>";
}


///Displaying the data for vehicles//////////////////////////////////////////////////////////////////////////////////////
function vehiclesData(asyncRequest)
{
  var data = parseLoad(asyncRequest);
  if (typeof data === 'string')
    alert(data);
  else
    displayVehiclesData(data);
}

function displayVehiclesData(data)
{
  var listBox = document.getElementById("searchResults");
  listBox.innerHTML = "";
  listBox.innerHTML = "<h2>Name: "+data.results[0].name+"</h2>"+
    "<br><h2>Model: "+data.results[0].model+"</h2><br>"+
    "<p>Manufacturer: "+data.results[0].manufacturer+"</p><br>"+
    "<p>Cost in Credits: "+data.results[0].cost_in_credits+"</p><br>"+
    "<p>Length: "+data.results[0].length+"</p><br>"+
    "<p>Max Atmosphering Speed: "+data.results[0].max_atmosphering_speed+"</p><br>"+
    "<p>Crew: "+data.results[0].crew+"</p><br>"+
    "<p>passengers: "+data.results[0].passengers+"</p><br>"+
    "<p>Cargo Capacity: "+data.results[0].cargo_capacity+"</p><br>"
    "<p>Consumables: "+data.results[0].consumables+"</p><br>"+
    "<p>Vehicle Class: "+data.results[0].vehicle_class+"</p><br>";
}


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
    if (listOfFilms.indexOf(inputText) >= 0)
      callWebService("films/?search="+newText, filmsData);
    else if (listOfPeople.indexOf(inputText) >= 0)
      callWebService("people/?search="+newText, peopleData);
    else if (listOfPlanets.indexOf(inputText) >= 0)
      callWebService("planets/?search="+newText, planetsData);
    else if (listOfSpecies.indexOf(inputText) >= 0)
      callWebService("species/?search="+newText, speciesData);
    else if (listOfStarships.indexOf(inputText) >= 0)
      callWebService("starships/?search="+newText, starshipsData);
    else if (listOfVehicles.indexOf(inputText) >= 0)
      callWebService("vehicles/?search="+newText, vehiclesData);
    else
      alert("Either this doesn't exist in the WHOLE UNIVERSE or you typed it in wrong! "+newText)
  }//end else
}

///This is loading all the names into arrays////////////////////////////////////////////////////////////////////////////////////
function callLoad(requestUrl, callBack, listItems)
{
  try
  {
    var asyncRequest = new XMLHttpRequest();
    asyncRequest.addEventListener("readystatechange", function(){ callBack(asyncRequest, listItems);}, false);
    asyncRequest.open("GET", requestUrl, true);
    asyncRequest.setRequestHeader("Accept", "application/json; charset=utf-8" );
    asyncRequest.send();
  }
  catch(e)
  {
    alert("Request Failed");
  }
}

function parseFilms(asyncRequest, listItems)
{
  var data = parseLoad(asyncRequest);
  if (typeof data === 'string')
    alert(data);
  else
  {
    for(var i = 0; i < data.results.length; ++i)
    {
      listItems.push((data.results[i].title).toLowerCase());
    }
  }
}

function parseNonFilms(asyncRequest, listItems)
{
  var listBox = document.getElementById("searchResults");
  var data = parseLoad(asyncRequest);
  if (typeof data === 'string')
    alert(data);
  else
  {
    for(var i = 0; i < data.results.length; ++i)
    {
      listItems.push((data.results[i].name).toLowerCase());
    }
    listBox.innerHTML = "";
    listBox.innerHTML = listOfPeople;
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

function loadArrays()
{
  callLoad("http://swapi.co/api/films/", parseFilms, listOfFilms);
  callLoad("http://swapi.co/api/people/", parseNonFilms, listOfPeople);
  callLoad("http://swapi.co/api/planets/", parseNonFilms, listOfPlanets);
  callLoad("http://swapi.co/api/species/", parseNonFilms, listOfSpecies);
  callLoad("http://swapi.co/api/starships/", parseNonFilms, listOfStarships);
  callLoad("http://swapi.co/api/vehicles/", parseNonFilms, listOfVehicles);
}
window.addEventListener("load", loadArrays, false);
