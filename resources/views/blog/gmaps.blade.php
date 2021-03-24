<!DOCTYPE html>
<html>
<head>
	<title>Maps</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBcP8w0FlNk7tayf0ngJKZbbhHWOazKoPQ"></script>
 


  	<style type="text/css">
    	#mymap {
      		
      		width: 800px;
      		height: 1000px;
    	}
  	</style>

   
</head>
<body>
<div id="googleMap" style="width:100%;height:600px;"></div>
  <div id="mymap" style="width:100%;height:380px;"></div>



  <script>
        function initialize() {
             var locations = <?php print_r(json_encode($locations)) ?>;

            var propertiPeta = {
                center: new google.maps.LatLng(-6.880504312141647, 108.68070899654599),
                zoom: 9,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };                                                                                                                            

            var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
          
                 $.each( locations, function( index, value ){
           var contentString = "<p>Provinsi :</p>" + value.provinsi + "<p>Nama Peternakan :</p>" + value.nama_peternakan + "<p>Jenis Peternakan :</p>" + value.jenis_peternakan + "<p>Alamat :</p>" + value.alamat + value.lng;
                // membuat Marker
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(value.lat, value.lng),
                    map: peta
                });

                var infowindow = new google.maps.InfoWindow({
                    content: contentString,
                    position: new google.maps.LatLng(value.lat, value.lng),
                });

                    marker.addListener('click', function() {
                    // tampilkan info window di atas marker
                    infowindow.open(peta, marker);
                });


        });
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  


</body>
</html>