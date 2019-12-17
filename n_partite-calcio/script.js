function printData(data) {
  // data sono i dati in php
  var target = $("#container");
  var template = $("#match-template").html();
  var compiled = Handlebars.compile(template);
  for (var i=0;i<data.length;i++) {

    var match = data[i];
    var compiledMatch = compiled(match);
    target.append(compiledMatch);
  }
}
function getData() {
  $.ajax({
    url: "data.php",
    method: "GET",
    success: function(data) {
        printData(data);
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
