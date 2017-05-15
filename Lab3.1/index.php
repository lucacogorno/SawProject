<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type="text/javascript" src="login.js"></script>
         
    </head>

    <body>

        <?php
           if (!isset($_COOKIE['loginCookie'])) {
            session_start();
            if (!isset($_SESSION['username'])) {
                
            } else {
                header('Location:index1.php');
            }
        } else {
            session_start();
            $_SESSION['username'] = $_COOKIE['loginCookie'];
            header('Location:index1.php');
        }
        ?>
        
        
        
        <div class="imgContainer">
        <ul class="menuUl">
                <li class="menuLiLogo"> CONCEPTSAW </li>
                <li class="menuLi"><a class="menuLiA" href="index.php">Home</a></li>
                <li class="menuLi"><a class="menuLiA" href="index.php">News</a></li>
                <li class="menuLi"><a class="menuLiA" href="index.php">Contact</a></li>
                <li class="menuLi"><a class="menuLiA" href="index.php">About</a></li>
            </ul>
        <button class="menuLiLogin" onclick="window.location='Sign.php';"> Sign in</button> 
        <img src="Image/fotosh.jpg" style='height: 100%; width: 100%; object-fit: cover'/>
             </div>
        <div class="mapContainer" id="map"></div>
    <script>

      function initMap() {
        var myLatLng = {lat: -25.363, lng: 131.044};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: myLatLng
        });

    

        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var marker = new google.maps.Marker({
                position: pos,
                map: map,
                title: 'You are here!'
              });
         	
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
          infoWindow.setPosition(pos);
          infoWindow.setContent(browserHasGeolocation ?
                                'Error: The Geolocation service failed.' :
                                'Error: Your browser doesn\'t support geolocation.');
          infoWindow.open(map);
        }
      
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWkQjIWvtKsDOhC7PAWwgm8zxUWKurTM&callback=initMap">
    </script>

    </body>
</html>