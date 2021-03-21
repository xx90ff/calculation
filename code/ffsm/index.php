<?php
chdir('../');

if($_REQUEST['ct']==''){
$cts = 'ffsm_h5_index';
}
if($_REQUEST['ac']=='rtcaiyun' || $_REQUEST['ac']=='rtcaiyun_example'){
$cts = 'ffsm_sm_ssys';
}
$ctsff_arr=array('ssxo','ssjf','ssjs','ssjk','ssjj','sslg','ssnvp','ssnnp','ssvvp','sscwy','sssx','sscp');
if(in_array($_REQUEST['ac'], $ctsff_arr)){
	$cts = 'ffsm_sm_'.$_REQUEST['ac'];
}
require_once './index.php';


?>
