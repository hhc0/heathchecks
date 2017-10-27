	<?php 

function check()
{
$servers =array(
		array("hostname" => "PVSRPSDCAP201UK","IP"=>"172.31.60.186",
	"datacenter"=>"SDC","status"=>"Down",
	"URL"=>"http://pvsrpsdcap201uk.global.sever.org/dashboard/"),
	
	
		array("hostname" => "PVSRPSDCAP202UK","IP"=>"172.31.60.187",
	"datacenter"=>"SDC","status"=>"Down",
	"URL"=>"http://pvsrpsdcap202uk.global.sever.org/dashboard/"),
	
	
	
		array("hostname" => "PVSRPSDCAP209UK","IP"=>"172.31.62.252",
	"datacenter"=>"SDC","status"=>"Down",
	"URL"=>"http://pvsrpsdcap209uk.global.sever.org/dashboard/"),
	
	
	
		array("hostname" => "PVSRPSDCAP210UK","IP"=>"172.31.62.253",
	"datacenter"=>"SDC","status"=>"Down",
	"URL"=>"http://pvsrpsdcap210uk.global.sever.org/dashboard/"),
	
	
	
	
		array("hostname" => "PVSRPWDCAP203UK","IP"=>"172.17.94.40",
	"datacenter"=>"WDC","status"=>"Down",
	"URL"=>"http://PVSRPWDCAP203UK.global.sever.org/dashboard/"),
	
	
	
		array("hostname" => "PVSRPWDCAP204UK","IP"=>"172.17.94.41",
	"datacenter"=>"WDC","status"=>"Down",
	"URL"=>"http://PVSRPWDCAP204UK.global.sever.org/dashboard/"),
	
	
	
		array("hostname" => "PVSRPWDCAP211UK","IP"=>"172.17.95.92",
	"datacenter"=>"WDC","status"=>"Down",
	"URL"=>"http://PVSRPWDCAP211UK.global.sever.org/dashboard/"),
	
	
	
		array("hostname" => "PVSRPWDCAP212UK","IP"=>"172.17.95.93",
	"datacenter"=>"WDC","status"=>"Down",
	"URL"=>"http://PVSRPWDCAP212UK.global.sever.org/dashboard/"),
		);



$i=0;
foreach($servers as $server)	
{	
	// Setup cURL
    $ch = curl_init($server['URL']);
    // Send the request
	curl_setopt($ch, CURLOPT_NOBODY  , true);
    $response = curl_exec($ch);
    $info = curl_getinfo($ch);
	// Check for errors
	if (($info['http_code']=="404") || ($info['http_code']=="500") || ($info['http_code']=="0")) {  
		$servers[$i]['status'] = "Bad";
	}
	else 
	{
		$servers[$i]['status'] = "Good";
	}
    curl_close($ch);  
	$i++;   
}
	return $servers;
}


/*echo'<table border=1>'; 
	foreach(check() as $server)
	{
		echo'<tr><td>'.$server['hostname'].'</td><td>'.$server['IP'].'</td><td>'.$server['datacenter'].'</td><td>'.$server['status'].'</td></tr>';
	}
	
  echo'</table>'; */

?>































