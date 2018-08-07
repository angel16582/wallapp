<!DOCTYPE html>
<html>
<title>Demo|Lisenme</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>    
 
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>
      <script>
  $(function() {
    $( "#skills" ).autocomplete({
      source: 'search.php'
    });
  });
  </script>
<body class="w3-light-grey">

<!-- Navigation bar with social media icons -->
<div class="w3-bar w3-black w3-hide-small">
  <a href="https://www.facebook.com/lisenme/" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="https://twitter.com/LisenMee" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
  <a href="https://www.youtube.com/channel/UCEdC6Qk_DZ9fX_gUYFJ1tsA" class="w3-bar-item w3-button"><i class="fa fa-youtube"></i></a>
  <a href="https://plus.google.com/115714479889692934329" class="w3-bar-item w3-button"><i class="fa fa-google"></i></a>
  <a href="https://www.linkedin.com/in/lisen-me-b017a8137/" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>
</div>
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><a href="http://www.lisenme.com/"><img src="img/logo.jpg" alt="Girl Hat" style="width:20%" class="w3-padding-16"></a></h1>
    <h6>Welcome to our <span class="w3-tag">Tutorial</span></h6>
      
  </header>
  
  <!-- Image header -->
 

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l12 s12">
    
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        
          <h2 style="text-align: center";>Autocomplete textbox using jQuery, PHP and MySQL by Lisenme</h2>
          <br>
          <div class="ui-widget" style="text-align: center";>
             <label for="skills">Skills: </label>
           <input id="skills">
          </div>
            
      </div>
      
    </div>

  </div>

</div>

</body>
</html>







  


 
