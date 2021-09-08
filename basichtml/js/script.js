function myFunction() {
  var x = document.getElementById("Topnav");
  if (x.className === "nav-bar") {
    x.className += " responsive";
  } else {
    x.className = "nav-bar";
  }
}



// $("#slideshow > div:gt(0)").hide();
setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
}, 3000);
