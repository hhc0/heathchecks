<?php
/*$usernanme="MPCDEV";
$password="gbttxmrvpmmjeyyc";


 $db = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = dvsrsrepdb002uk.dev.global.tesco.org)(PORT = 1521))(CONNECT_DATA =(SERVER = POOLED)(SERVICE_NAME =storeapps.dev.global.tesco.org)))";
        $conn = oci_pconnect($usernanme, $password, $db);
		if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

*/

 $conn = Db::getInstance();

define('APPTIMEZONE', "Europe/London");

$currentDate=new DateTime(null, new DateTimeZone(APPTIMEZONE));

//Default to get yesterday stats
date_modify($currentDate, '-1 day');

$fromdate=$currentDate->format('Y-m-d').' 00:00:00';

$todate=$currentDate->format('Y-m-d').' 23:59:59';


	if(isset($_POST['From'])   && isset($_POST['To'])  )
	{
    $fromdate=trim($_POST['From']).':00';
  	$todate=trim($_POST['To']).':00';
		
	}
				
			
			
			
	$dispfromdate=$fromdate;	
	$disptodate=$todate;	
   $fromdate="to_timestamp('" . $fromdate . "','YYYY-MM-DD HH24:MI:SS')";
   $todate="to_timestamp('" . $todate . "','YYYY-MM-DD HH24:MI:SS')";
		
	//$sql= "";
   $stid = oci_parse($conn,'Select COUNT(TPX_ID) from tbl_global_user WHERE CREATED_DATETIME <= trunc('.$todate.')');
oci_execute($stid);

//$stid1 = oci_parse($conn, 'Select COUNT(TPX_ID) from tbl_global_user WHERE CREATED_DATETIME <= trunc(sysdate)');
//oci_execute($stid1);

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   
    foreach ($row as $item) {
        
    }
   
}

		
$stid1 = oci_parse($conn, 'Select COUNT(TPX_ID) from tbl_global_user WHERE CREATED_DATETIME between '.$fromdate.' and '.$todate);
oci_execute($stid1);



while ($row = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS)) {
   
    foreach ($row as $item1) {
       
    }
   
}
		
$stid2 = oci_parse($conn, 'SELECT  count(distinct USER_SYS_ID)   from tbl_userlogin_history WHERE LOGIN_DATETIME between '.$fromdate.' and '.$todate);
oci_execute($stid2);




while ($row = oci_fetch_array($stid2, OCI_ASSOC+OCI_RETURN_NULLS)) {
   
    foreach ($row as $item2) {
       
    }
   
}
		
$stid3 = oci_parse($conn, 'SELECT COUNT(SESSION_ID) FROM tbl_userlogin_history WHERE LOGIN_DATETIME  between '.$fromdate.' and '.$todate);
oci_execute($stid3);




while ($row = oci_fetch_array($stid3, OCI_ASSOC+OCI_RETURN_NULLS)) {
   
    foreach ($row as $item3) {
       
    }
   
}
$stid4 = oci_parse($conn, 'SELECT count(*) from tbl_useractivity_log  WHERE Timestamp between '.$fromdate.' and '.$todate);
oci_execute($stid4);




while ($row = oci_fetch_array($stid4, OCI_ASSOC+OCI_RETURN_NULLS)) {
   
    foreach ($row as $item4) {
        
    }
   
}
	
$topfiveapphitsyest=[];	
$stid5 = oci_parse($conn, 'select rownum as "S.No.",application_name as "Application Name",count as "Total Count" 
from (select   application_name, count(application_name) as count from TBL_USERACTIVITY_LOG a, TBL_APPLICATION b,tbl_department c
where a.app_sys_id=b.app_sys_id and b.DEPT_SYS_ID=c.DEPT_SYS_ID and a.TIMESTAMP between '.$fromdate.' and '.$todate.' group by application_name order by count desc) where ROWNUM <= 5');

oci_execute($stid5);



while ($row = oci_fetch_array($stid5, OCI_ASSOC+OCI_RETURN_NULLS)) {
$topfiveapphitsyest[]=$row;
   
   
}
$topfiveoverhitsyest=[];		
$stid6 = oci_parse($conn, 'select rownum as "S.No.",application_name as "Application Name",count as "Total Count" 
from (select   application_name, count(application_name) as count from TBL_USERACTIVITY_LOG a, TBL_APPLICATION b,tbl_department c
where a.app_sys_id=b.app_sys_id and b.DEPT_SYS_ID=c.DEPT_SYS_ID and  a.TIMESTAMP <= '.$fromdate.' group by application_name order by count desc) where ROWNUM <= 5');

oci_execute($stid6);



while ($row = oci_fetch_array($stid6, OCI_ASSOC+OCI_RETURN_NULLS)) {
   $topfiveoverhitsyest[]=$row;
    

   
}
$topfivefavhitsyest=[];		
$stid7 = oci_parse($conn, 'select rownum as "S.No.",application_name as "Application Name",count as "Total Count" 
from (select application_name, count(application_name) as count from TBL_FAVOURITE_APPS a, TBL_APPLICATION b,tbl_department c 
where a.app_sys_id=b.app_sys_id and b.DEPT_SYS_ID=c.DEPT_SYS_ID  and  a.CREATED_DATETIME <= '.$fromdate.' group by application_name order by count desc)where ROWNUM <= 5');
oci_execute($stid7);



while ($row = oci_fetch_array($stid7, OCI_ASSOC+OCI_RETURN_NULLS)) {
   
    $topfivefavhitsyest[]=$row;
   
}
oci_close($conn);




?>
