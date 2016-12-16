
<?php

$url = "http://localhost:8080/school-new/school/getStudentAPI";

$body = "<?xml version='1.0'?>
        <soap:Envelope>
          <soap:Body>
            <Username type='xsi:string'> 
              jabbss 
            </Username> 
            <admNo type='xsi:string'> 
              3388 
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

foreach($bar as $key=>$value) {
  foreach($value as $key=>$value2) {
   echo 'krey: '.$key. ', value:' .$value2 . '<br>';   
  }
}

?>




