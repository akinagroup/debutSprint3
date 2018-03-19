<!doctype html>
<html lang="fr">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>les tabs  </title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    var tabs = $( "#tabs" ).tabs();
    tabs.find( ".ui-tabs-nav" ).sortable({
      axis: "x",
      stop: function() {
        tabs.tabs( "refresh" );
      }
    });
  } );
  </script>
</head>
<style>
body{
    background-image:url("amin.jpg");
}
.container{
    background color: gray;
    border-radius:3px;
    width:500px;
    height:400px;
    margin-right :30%;
    margin-left :30%;
 
    background-size: cover;
}
</style>

<body>
 <div class="container">
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">categorie</a></li>
    <li><a href="#tabs-2">sous categorie</a></li>
    
  </ul>
  <div id="tabs-1">
    <p>nom categorie:</p>
    <p>nombre de categorie:</p>
  </div>
  <div id="tabs-2">
  <p>nom sous categorie:</p>
    <p>nombre sous categorie:</p>
  
  </div>
  </div>
</div>
 
 
</body>
</html>