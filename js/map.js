<script>
            function myMap() {
            var mapOptions = {
                center: new google.maps.LatLng(51.5, -0.12),
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.HYBRID
            }
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            }
            </script>
            
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDR8P72HMX3zllKeeZt8X89dJWMEu0LSX8&callback=myMap" async defer></script>
			<div id="map" style="width:400px;height:400px;background:yellow"></div>