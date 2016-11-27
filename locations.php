<html>
<head>
    <!--
    Page showcases the locations of eatFresh. Google API has been used in this page, putting markers for the
    locations in Windsor, Chatham, Lemington, Brampton, London and Cambridge. Angular JS has been used to provide
	search box for locating restaurant in the city entered by the user.
    -->
    <?php
    include "header.php";
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB1tbIAqN0XqcgTR1-FxYoVTVq6Is6lD98&sensor=false"></script>
    <script type="text/javascript">
        var locations = [
            ['eatFresh | Inspiring healthier habits', 43.683333, -79.766667, '45 West St, Brampton, ON L6X 1V8'],
            ['eatFresh | Inspiring healthier habits', 42.283333, -83.000000, '950 Grand Marais Rd E, Windsor, ON N8X 3J2'],
            ['eatFresh | Inspiring healthier habits', 42.9870, -81.2432, '451 Waterloo St, London, ON N6B 2P4'],
            ['eatFresh | Inspiring healthier habits', 43.3616, -80.3144, '73 Water St N, Cambridge, ON N1R 2L8'],
            ['eatFresh | Inspiring healthier habits', 42.052841, -82.599683, '6 Erie St S Leamington, ON N8H 3A7'],
            ['eatFresh | Inspiring healthier habits', 42.382224, -82.195090, '191 Keil Drive South, Chatham, ON N7M 6J5'],
            ['eatFresh | Inspiring healthier habits', 42.278869, -83.053150, '2001 Huron Church Road, Windsor, ON N9C 2L6'],
            ['eatFresh | Inspiring healthier habits', 42.309643, -83.064421, '2255 University Avenue West, Windsor, ON N9B 1E6']
        ];
        function initialize() {
            var myOptions = {
                center: {lat: 42.986950, lng: -81.243177},
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
        <p id="heading">Visit our locations</p>
        <div ng-app="myApp" ng-controller="namesCtrl">
            <input type="text" class="form-control" ng-model="test" placeholder="Enter your address here">
            <br><br>
            <ol>
                <li class="text" ng-repeat="x in names | filter:test">
                    {{x}}
                </li>
                <p class="text" ng-show="(names | filter:test).length == 0">Sorry, we are not present at your location</p>
            </ol>
        </div>
		<!-- Script for angular JS -->
        <script>
            angular.module('myApp', []).controller('namesCtrl', function($scope) {
                $scope.names = [
                    '45 West St, Brampton, ON',
                    '950 Grand Marais Rd E, Windsor, ON',
                    '451 Waterloo St, London, ON',
                    '73 Water St N, Cambridge, ON',
                    '6 Erie St S Leamington, ON',
                    '191 Keil Drive South, Chatham, ON',
                    '2001 Huron Church Road, Windsor, ON',
                    '2255 University Avenue West, Windsor, ON'
                ];
            });
        </script>
    </div>
</div>
<div class="form-group col-md-8">
    <div id="default" style="width:100%; height:550px"></div>
</div>
</body>
</html>

