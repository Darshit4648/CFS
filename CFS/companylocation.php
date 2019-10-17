
<?php
     include("connect.php");
     include("header.php");
      $fcity=$_COOKIE["city"];
      
       $qry="SELECT * FROM company INNER JOIN    acceptreq ON acceptreq.c_id = company.c_id  where company.city='$fcity' && acceptreq.respondstatus='1' ";
     // $qry="select * from company where city='$fcity'";
      $rs=mysqli_query($con,$qry);
     
?>

 <html>
<head>
  
  <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
</head>
<body>
  <div id="map" style="height: 400px; width: 500px;">
</div>
<script type="text/javascript">
    var locations = [
      <?php if($data=mysqli_num_rows($rs) > 0){
            while($row =mysqli_fetch_assoc($rs)){
                echo '["'.$row['companyname'].'", '.$row['latitude'].', '.$row['longitude'].'],';
            }
        }
        ?>
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(22.2587, 71.1924),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
</body>
</html>
 <?php
       include("footer.php");
 ?>