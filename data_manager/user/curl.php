<!DOCTYPE html>
<html>
<head>
  <title>Student fee balance portal</title>
</head>
<body>


<style type="text/css">

  body{
    background-color: #84d2b5;
  }
  .content{
    width: 400px;
    height: 500px;
    margin: 10px auto;
    align-content: center;
    border: solid 1px;
    padding: 10px;
    background-color: #085d7d;
  }
</style>


<div class="content"> 
  




<?php

$url = "http://localhost:8080/school-new/school/getStudentAPI";

$admno = "";
$admno = $_POST['admno']; //3388

$body = "<?xml version='1.0'?>
        <soap:Envelope>
          <soap:Body>
            <Username type='xsi:string'> 
              jabbss 
            </Username> 
            <admNo type='xsi:string'> 
              ".$admno." 
            </admNo> 
          </soap:Body>
        </soap:Envelope>"; 

$headers = array( 
    'Content-Type: text/xml; charset="utf-8"', 
    'Content-Length: '.strlen($body), 
    'Accept: text/xml', 
    'Cache-Control: no-cache', 
    'Pragma: no-cache', 
    'SOAPAction: "customerSearch"'
); 

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_TIMEOUT, 60); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_USERAGENT, $defined_vars['HTTP_USER_AGENT']);

// Stuff I have added
curl_setopt($ch, CURLOPT_POST, true); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $body); 
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

$data = curl_exec($ch); 
//var_dump($data);
//echo $data;

$foo = new SimpleXMLElement($data);
$bar = json_decode(json_encode($foo));
//print_r($bar);

$vars = get_object_vars ($bar); 
foreach($vars as $key=>$value) {
  //var_dump($key, $value); 
}

?>

<h1> Fee balance portal </h1>


<form action="curltest3.php" method="POST"> 
 <b> Admission number: </b>
  <input type="text" name="admno">
  <input type="submit" value="Submit"> 
</form>


<br><br><br>

<?php

foreach($bar as $key=>$value) {
 // var_dump($value);
  foreach($value as $key=>$value2) {
   ?>
     <h3> <?php  echo $key. '----:' .$value2 . '<br>'; ?> </h3>
   <?php  
  }
}


?>


</div>


</body>
</html>