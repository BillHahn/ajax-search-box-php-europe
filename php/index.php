<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified Bootstrap CSS and JS below, from http://getbootstrap.com/getting-started/#download -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"> -->

    <!-- Javascript libraries (JQuery, Bootstrap and bootstrap-3-typeahead) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $('input.typeahead').typeahead({
          minlength: 2,
          delay: 100,
          items: 10,
          source: function (query, process) {
            $.ajax({
              url: '/php/dataquery.php',
              type: 'GET',
              dataType: 'JSON',
              data: 'key=' + query,
              success: function(data) {
                //console.log(data);
                process(data);
              }
            });
          }
        });
      });
	</script>

</head>
  <body>
   <div class="page-header">
     <a href="">
       <img id="Node.js-DevLogo"
       src="https://storage.googleapis.com/bh-images/php-mysql-js-logos.jpg"
       alt="PHP version of Autocomplete - in GCP with GAE and MySQL backend!"
       width="250" height="75"
       style="cursor:pointer; cursor:hand; border:0"
       />
     </a>
        <h1>GCP Autocomplete Ajax UI: GAE + PHP + SQL Backend!</h1>
<!--        <br>
        <h1> Additional Change using Atom on the desktop!!! </h1> -->
    </div>

  <!-- The Typeahead Input Field on web page bound to Bootstrap Typeahead to query MySQL for autocomplete results. -->
    <div class="container">
      <input class="typeahead" type="text" data-provide="typeahead" autocomplete="off" placeholder="Type your Query">
      <br>
      <iframe width="800" height="450" src="https://m.google.com" frameborder="1" allowfullscreen></iframe>
      <!-- https://www.youtube.com/embed/0xTyGtu-Ryo?autoplay=1 -->
      <!-- https://www.youtube.com/embed/0xTyGtu-Ryo?t=0s&loop=1&autoplay=1&rel=0&controls=0 -->
      <!-- <input class="typeahead" type="text" data-provide="typeahead tt-query" autocomplete="off"> -->
    </div><!-- /.container -->
  </body>
</html>
