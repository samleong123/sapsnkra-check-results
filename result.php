<?php
// define variable

$nokp = trim($_POST["nokp"]);
$kodsek = strtoupper(trim($_POST["kodsek"]));
$ting = strtoupper(trim($_POST["ting"]));
$kelas = strtoupper(trim($_POST["kelas"]));
$cboPep = strtoupper(trim($_POST["cboPep"]));

// define UserAgent 
$ua = $_SERVER["HTTP_USER_AGENT"];

// validation
$examtype = array("PPT","PAT","SPMC");
if (!in_array($cboPep,$examtype)){
   echo "<h1><strong>Invalid Exam Type , try again</strong></h1>";
   exit;
}

$url = "https://sapsnkra.moe.gov.my/ibubapa2/slipmr.php";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Content-Type: application/x-www-form-urlencoded",
   "User-Agent: $ua",
   "Referer: https://sapsnkra.moe.gov.my/ibubapa2/semak.php",
   "Origin: https://sapsnkra.moe.gov.my"
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = "nokp=$nokp&kodsek=$kodsek&ting=$ting&kelas=$kelas&cboPep=$cboPep";

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
preg_match_all('/<br><br>.*<\/table>/m',$resp,$matches);
$result = $matches[0][0];
$data = preg_replace('/..\/images/', 'https://sapsnkra.moe.gov.my/images', $result);
echo $data;



?>
