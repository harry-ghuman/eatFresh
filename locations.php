<?php
include "header.php";
?>
<html>
<head>
    <!--
    Page showcases the locations of eatFresh. Google API has been used in this page, putting markers for the
    locations in Windsor, Brampton, London and Cambridge.
    -->
    <script type="text/javascript"
            src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB1tbIAqN0XqcgTR1-FxYoVTVq6Is6lD98&sensor=false">
    </script>
    <script type="text/javascript">
        var locations = [
            ['eatFresh | Inspiring healthier habits', 43.683333, -79.766667, '45 West St, Brampton, ON L6X 1V8'],
            ['eatFresh | Inspiring healthier habits', 42.283333, -83.000000, '950 Grand Marais Rd E, Windsor, ON N8X 3J2'],
            ['eatFresh | Inspiring healthier habits', 42.9870, -81.2432, '451 Waterloo St, London, ON N6B 2P4'],
            ['eatFresh | Inspiring healthier habits', 43.3616, -80.3144, '73 Water St N, Cambridge, ON N1R 2L8']
        ];
        function initialize() {
            var myOptions = {
                center: {lat: 42.306366, lng: -83.066310},
                zoom: 7,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("default"),myOptions);
            setMarkers(map,locations)
        }
        function setMarkers(map,locations){
            var marker, i
            for (i = 0; i < locations.length; i++)
            {
                var loan = locations[i][0]
                var lat = locations[i][1]
                var long = locations[i][2]
                var add =  locations[i][3]

                latlngset = new google.maps.LatLng(lat, long);

                var marker = new google.maps.Marker({
                    map: map, title: loan , position: latlngset
                });
                map.setCenter(marker.getPosition())
                var content = "<h3>" + loan +  '</h3>'+add
                var infowindow = new google.maps.InfoWindow()

                google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){
                    return function() {
                        infowindow.setContent(content);
                        infowindow.open(map,marker);
                    };
                })(marker,content,infowindow));
            }
        }
    </script>
    <style>
        #heading{
            font-size: 50px;
            font-family: "Goudy Old Style";

        }
        .text{
            font-size: 20px;

        }
    </style>
</head>
<body onload="initialize()">
  <div class="form-group col-md-4">
      <div class="well">
          <p id="heading">visit our locations</p>
          <div class="text">
            <div class="row">
                <span class="badge">1</span>   45 West St, <strong>Brampton</strong>, ON L6X 1V8
            </div>
            <div class="row">
                <span class="badge">2</span>   950 Grand Marais Rd E, <strong>Windsor</strong>, ON N8X 3J2
            </div>
            <div class="row">
                <span class="badge">3</span>   451 Waterloo St, <strong>London</strong>, ON N6B 2P4
            </div>
            <div class="row">
                <span class="badge">4</span>   73 Water St N, <strong>Cambridge</strong>, ON N1R 2L8
            </div>
          </div>
      </div>
  </div>
  <div class="form-group col-md-8">
      <div id="default" style="width:100%; height:550px"></div>
  </div>
</body>
</html>
