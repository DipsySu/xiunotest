

 <!-- <?php include "header.html"; ?> -->

<?php 
	$conf =  include "conf.php"; 
	include './xiunophp/xiunophp.min.php';


$arr = array('1',1,2,3,4,4,5,6,6,'',21);
$r = array_addslashes($arr);
print_r($r);




function fillterempty(){
    $arr = array(0,1,2,3,4,4,'',5,6,6,'',21);
    $r = array_filter_empty($arr);
    var_dump($r) ;

}

function returnvalue(){

    $arr = db_find_one('admin_user',array('name'=>'admin'));

    echo  array_value($arr,'id');
}


function insertdb(){
    $arr = array(
        'title' => '超级无敌管理员',
        'status' => '1',
        'sort' => '100',
        'description' => '史上最不帅的男人',
        'rules' => '1,4,7'
    );
}



function createdb(){
    $arr = array(
        'title' => '超级无敌管理员',
        'status' => '1',
        'sort' => '100',
        'description' => '史上最不帅的男人',
        'rules' => '1,4,7'
    );
    $create = db_create('admin_user',$arr);
    if ($create == false){
        echo $errstr;
    }else{
        echo 'create: $create';
    }

}


function replacedb(){

    $arr  = array(
        'id' => 10,
        'title' => '超级无敌管理员',
        'status' => '1',
        'sort' => '100',
        'description' => '史上最不帅的男人',
        'rules' => '1,4,7'
    );

    $insert = db_replace('group',$arr2,$arr);

    if ($insert == false) {
        echo $errstr;
    } else {
        echo "result :".$insert;
    }

}

function updatedb(){

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
        echo $errstr;
    } else {
        echo "result :".$insert;
    }


}


?>


<!-- <?php include "header.html"; ?> -->