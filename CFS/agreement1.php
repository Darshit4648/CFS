<?php
      include("connect.php");
      define('FPDF_FONTPATH','tfpdf/font');

      require('tfpdf.php');

    $f_id=$_GET["f_id"];         

    $qry="update acceptreq set notification=2 where f_id= '$f_id'";
    $rs1=mysqli_query($con,$qry);
    


    $sql="SELECT * FROM farmer INNER JOIN    acceptreq ON acceptreq.f_id = farmer.f_id INNER JOIN company ON company.c_id=acceptreq.c_id where acceptreq.f_id='$f_id'";
    $rs=mysqli_query($con,$sql);
     $today = date("d/m/Y"); 

   
    while($data=mysqli_fetch_assoc($rs))
    {
           $fname=$data["fname"];
           $cname=$data["companyname"];
           $csname=$data["companysname"];
            $address=$data["address"];
             $email=$data["email"];
             $fname=$data["fname"];
              $mobno=$data["mobno"];
              $farea=$data["farmarea"];
              $sno=$data["surveyno"];
              $cropname=$data["cropname"];
               $sdate=$data["sdate"];
                $preprice=$data["preagreedprice"];
                 $duration=$data["message"];
                 $dtime=$data["updated_at"];
 
    }


     class FPDF extends tFPDF
     {
     	function header(){

     		 //$this->image('image2.jpeg',10,6);
     		 $this->SetFont('Arial','B',19);
     		 $this->Ln();
     		 //$this->SetFont('Times','',12);
     		 $this->Cell(190,20,'Contract Farming Agreement',20,10,'C');
         $this->Image('image/contract farming.png',5,15,40,20);
         $this->Image('image/contract farming.png',160,15,40,20);
     	}
     	function footer(){
     		$this->SetY(-15);
     		$this->SetFont('Arial','',19);
                $this->Cell(190,20,'Contract Farming Agreement',30,20,'C');

     	}
     }
     
$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',14);
$pdf->SetY(35);
$pdf->SetX(80);
$pdf->Cell(20,6,'company Details : ',2,0,'B',0);

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',14);
$pdf->SetY(35);
$pdf->SetX(150);
$pdf->Cell(20,6,'Date :',2,0,'B',0);

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',14);
$pdf->SetY(92);
$pdf->SetX(80);
$pdf->Cell(20,6,'Farmer Details : ',2,0,'B',0);

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',14);
$pdf->SetY(155);
$pdf->SetX(80);
$pdf->Cell(20,6,'Contract Details : ',2,0,'B',0);

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',14);
$pdf->SetY(235);
$pdf->SetX(10);
$pdf->Cell(20,6,'Farmer Sign:__________________________________',2,0,'B',0);

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',14);
$pdf->SetY(245);
$pdf->SetX(10);
$pdf->Cell(20,6,'Company Supervisor Sign:______________________',2,0,'B',0);

  
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',14);
$pdf->SetY(50);
$pdf->SetX(10);
$pdf->Cell(20,6,'company Name : ',2,0,'B',0);

$pdf->SetY(60);
$pdf->SetX(10);
$pdf->Cell(20,6,'company Supervisor Name : ',2,0,'B',0);

$pdf->SetY(70);
$pdf->SetX(10);
$pdf->Cell(20,6,'Email ID : ',2,0,'B',0);

$pdf->SetY(80);
$pdf->SetX(10);
$pdf->Cell(20,6,'Address : ',2,0,'B',0);

$pdf->SetY(105);
$pdf->SetX(10);
$pdf->Cell(20,6,'Farmer Name : ',2,0,'B',0);

$pdf->SetY(115);
$pdf->SetX(10);
$pdf->Cell(20,6,'Mobile Number : ',2,0,'B',0);

$pdf->SetY(125);
$pdf->SetX(10);
$pdf->Cell(20,6,'Farm Area (In Hector) : ',2,0,'B',0);

$pdf->SetY(135);
$pdf->SetX(10);
$pdf->Cell(20,6,'survey Number : ',2,0,'B',0);

$pdf->SetY(145);
$pdf->SetX(10);
$pdf->Cell(20,6,'Crop Name : ',2,0,'B',0);

$pdf->SetY(170);
$pdf->SetX(10);
$pdf->Cell(20,6,'Starting Date : ',2,0,'B',0);

$pdf->SetY(180);
$pdf->SetX(10);
$pdf->Cell(20,6,'Contract Duration : ',2,0,'B',0);

$pdf->SetY(190);
$pdf->SetX(10);
$pdf->Cell(20,6,'preagreedprice (Per Quintal) : ',2,0,'B',0);

$pdf->SetY(200);
$pdf->SetX(10);
$pdf->Cell(20,6,'Contract Accepted Date And Time : ',2,0,'B',0);


$pdf->Ln();


$pdf->SetFont('Arial','B',14);
$pdf->SetY(35);
$pdf->SetX(170);
$pdf->Cell(20,6,$today,2,0,'B',0);

$pdf->SetFont('Arial','',12);
$pdf->SetY(50);
$pdf->SetX(51);
$pdf->Cell(20,6,$cname,2,0,'B',0);

$pdf->SetY(60);
$pdf->SetX(78);
$pdf->Cell(20,6,$csname,2,0,'B',0);

$pdf->SetY(70);
$pdf->SetX(34);
$pdf->Cell(20,6,$email,2,0,'B',0);

$pdf->SetY(80);
$pdf->SetX(34);
$pdf->Cell(20,6,$address,2,0,'B',0);

$pdf->SetY(105);
$pdf->SetX(45);
$pdf->Cell(20,6,$fname,2,0,'B',0);

$pdf->SetY(115);
$pdf->SetX(50);
$pdf->Cell(20,6,$mobno,2,0,'B',0);

$pdf->SetY(125);
$pdf->SetX(64);
$pdf->Cell(20,6,$farea,2,0,'B',0);

$pdf->SetY(135);
$pdf->SetX(50);
$pdf->Cell(20,6,$sno,2,0,'B',0);

$pdf->SetY(145);
$pdf->SetX(41);
$pdf->Cell(20,6,$cropname,2,0,'B',0);

$pdf->SetY(170);
$pdf->SetX(45);
$pdf->Cell(20,6,$sdate,2,0,'B',0);

$pdf->SetY(180);
$pdf->SetX(55);
$pdf->Cell(20,6,$duration,2,0,'B',0);

$pdf->SetY(190);
$pdf->SetX(80);
$pdf->Cell(20,6,$preprice,2,0,'B',0);

$pdf->SetY(200);
$pdf->SetX(95);
$pdf->Cell(20,6,$dtime,2,0,'B',0);
$pdf->Output();
?>

