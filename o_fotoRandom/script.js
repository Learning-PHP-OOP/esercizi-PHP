
function printRandomElement(elements) {

  var indRnd = Math.floor(Math.random() * elements.length);

  var elemRnd = elements[indRnd];

  var target = $("#container");
  var template = $("#ad-template").html();
  var compiled = Handlebars.compile(template);

  var compiledAd = compiled(elemRnd);
  target.append(compiledAd);
}

function getData() {
 $.ajax({
   url: "getAllAds.php",
   method: "GET",
   success: function(data) {
       printRandomElement(data);
       console.log("data", data);
   },
   error: function(error) {
     console.log("error", error);
   }
 });
}

function init() {
  getData();
}
$(document).ready(init);
