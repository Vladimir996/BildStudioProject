angular.module('RainbowExample',['ngMaterial', 'ng360'])
    .controller("RainbowExampleController", function() {
        
        var vm = this;
        vm.rainbowConf = {
            range : { times : [5,10,15,20,25,30] },
            travelTime : 30,
            colorRange :  {
                  name: 'Green to Red',
                  id: 'default',
                  colors: ['#006837', '#39B54A', '#8CC63F', '#F7931E', '#F15A24', '#C1272D'],
                  opacities: [1, 1, 1, 1, 1, 1]
              }
        };
    
        // Coordinates to center the map
        var myLatlng = new google.maps.LatLng(52.525595, 13.393085);

        // Other options for the map, pretty much selfexplanatory
        var mapOptions = {
            zoom: 10,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        // Attach a map to the DOM Element, with the defined settings
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);

        // init the first marker
        marker = new google.maps.Marker({
            position: myLatlng,
            draggable: true,
            map: map
        });

        // each map get's it's own polygon layer
        var colorPolygonLayer = r360.googleMapsPolygonLayer(map);

        // attach the click listeners, action when drag finished
        google.maps.event.addListener(marker, 'dragend', function(event) {
            showPolygons(event.latLng.lat(), event.latLng.lng());
        });

        showPolygons(myLatlng.lat(), myLatlng.lng());

        function showPolygons(lat, lng) {

            var travelOptions = r360.travelOptions();
            // set the service API-key, this is a demo key
            // please sign up and get your own key
            travelOptions.setServiceKey('YWtKiQB7MiZETbCoVsG6');
            travelOptions.setServiceUrl('https://service.route360.net/germany/');
            travelOptions.addSource({ lat: lat, lng: lng });
            travelOptions.setTravelTimes([300, 600, 900, 1200, 1500, 1800]);
            travelOptions.setTravelType('transit');
            travelOptions.setDate('20150706');
            travelOptions.setTime('39000');

            // call the service
            r360.PolygonService.getTravelTimePolygons(travelOptions,
                function(polygons) {
                    colorPolygonLayer.update(polygons);
                },
                function(status, message) {
                    console.log("We are currently performing service \
              maintenance. The service will be available shortly.");
                }
            );
        }
    });    