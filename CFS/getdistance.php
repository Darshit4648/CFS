 
<?php
      include('connect.php');
      $data = $_GET['datavalue'];
      $c_id=$_COOKIE["c_id"];
       //echo $data;
           $qry2="select * from farmer where f_id='$data'";  
            $rs2=mysqli_query($con,$qry2);
             $data2=mysqli_fetch_assoc($rs2);
                 $latitude2=$data2['latitude'];
                  $longitude2=$data2['longitude'];   
           
      $qry="select * from company where c_id='$c_id'";
      $rs=mysqli_query($con,$qry);
      $data=mysqli_fetch_assoc($rs);
            $latitude1=$data["latitude"];
           $longitude1=$data["longitude"];
          
            function getDistance($latitude1, $longitude1, $latitude2, $longitude2)
       {
           $earthRadius= 6371;
           $latfrom=deg2rad($latitude1);
           $lonfrom=deg2rad($longitude1);
           $latto=deg2rad($latitude2);
           $lonto=deg2rad($longitude2);

           $latdelta=$latto - $latfrom;
         $londelta=$lonto - $lonfrom;

           $angle = 2 * asin(sqrt(pow(sin($latdelta / 2),2) + cos($latfrom) * cos($latto) * pow(sin($londelta / 2),2)));
           return $angle * $earthRadius;
       } 
       $distance = getDistance($latitude1,$longitude1,$latitude2,$longitude2);
         //$distance=0; 
       $dis=round($distance,2);

             echo "<div class='form-group'>";
            echo "<label>Distance (KM):</label>";
            echo "<input type='text' class='form-control' id='distance' name='txtdist' placeholder='Enter your Material Name' value='".$dis."' required readonly>";
            echo "</div>";

         
 
       
?>

