
<?php

$str_json = file_get_contents('php://input');
$response = json_decode($str_json, true); // decoding received JSON to array
$name="none";$pass="none";

if(isset($response['name'])) $name = $response['name'];
if(isset($response['pass'])) $pass = $response['pass'];

$res_proejct=login_project($name,md5($pass));
$res_njit=login_njit($name,$pass);
print "<center><h2>".$res_proejct.' '.$res_njit."</h2></center>";


// curl backend
function login_project($name,$pass){
        $data = array('name' => $name,'pass' =>$pass);
        $url = "https://web.njit.edu/~ts355/download/";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $response = curl_exec($ch);
        curl_close ($ch);
        return $response;
}
// curl njit
function login_njit($name,$pass){
        $url = "https://cp4.njit.edu/cp/home/login";
        $data= array("user" => $name,"pass" =>$pass,"uuid" => "0xACA021");
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $response = curl_exec($ch);
        curl_close ($ch);
        if (strpos($response,"Failed Login")==false) return "NJIT Accept"
        return "NJIT Reject";
}

?>
