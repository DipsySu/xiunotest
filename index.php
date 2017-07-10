

 <!-- <?php include "header.html"; ?> -->

<?php 
	$conf =  include "conf.php"; 
	include './xiunophp/xiunophp.min.php';


$v = db_find_one('admin_user',array('name'=>'admin'));
$j = json_encode($v);
echo $j.'</br>';


$arr  = array(
'title' => '超级无敌管理员',
'status' => '1',
'sort' => '100',
'description' => '史上最不帅的男人',
'rules' => '1,4,7'
);

$arr2 = array(
'id' => array('>'=> 10)
);
$insert = db_update('group',$arr2,$arr);

if ($insert == false) {
	echo $err;
} else {
	echo "result :".$insert;
}





?>


<!-- <?php include "header.html"; ?> -->