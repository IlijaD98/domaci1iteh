<?php

session_start();


$mysqli=new mysqli('localhost','root','','liga') or die(mysqli_error($mysqli));

$update=false;
$naziv="";
$igraci="";
$drzava="";
$id=0;
$update1=false;
$domacin="";
$gost="";
$golDom=0;
$golGost=0;


//da li je pritisnuto dugme
if(isset($_POST['unesi'])){
    if (!isset($_POST['naziv']) || !isset($_POST['igraci']) || !isset($_POST['drzava']))  {
        
    header("location: index.php");
        return;

    }
    if ($_POST['naziv'] == '' || $_POST['igraci'] == '' || $_POST['drzava'] == '' ) {
        
    header("location: index.php");
        return;
    }
    $drzava=$_POST['drzava'];
    $naziv=$_POST['naziv'];
    $igraci=$_POST['igraci'];
    
    $mysqli->query("insert into tim(nazivTima,brojIgraca,drzava) values ('$naziv','$igraci','$drzava')") or die($mysqli->error);

    $SESSION['message']="Uspesno sacuvan tim";
    $SESSION['msg_type']="success";

    header("location: index.php");

}

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $mysqli->query("delete from tim where timID=$id") or die($mysqli->error());

    $SESSION['message']="Uspesno obrisan tim";
    $SESSION['msg_type']="danger";

    header("location: index.php");

}

if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $update=true;
    $result=$mysqli->query("select * from tim where timID=$id") or die($mysqli->error());
    if(count($result)==1){
        $row=$result->fetch_array();
        $naziv=$row['nazivTima'];
        $igraci=$row['brojIgraca'];
        $drzava=$row['drzava'];
    }

}
if(isset($_POST['update'])){

    $id=$_POST['id'];
    $drzava=$_POST['drzava'];
    $naziv=$_POST['naziv'];
    $igraci=$_POST['igraci'];

    $mysqli->query("update tim set nazivTima='$naziv',brojIgraca='$igraci',drzava='$drzava' where timID=$id")
    or die($mysqli->error());

    header("location: index.php");

}


//za utakmicu

if(isset($_POST['unesiMec'])){
   
    $domacin=$_POST['domacin'];
    $gost=$_POST['gost'];
    $golDomacin=$_POST['golDom'];
    $golGost=$_POST['golGost'];
    
    $mysqli->query("insert into mec(domacin,gost,golDomacin,golGost) values ('$domacin','$gost','$golDomacin','$golGost')") or die($mysqli->error);


    header("location: utakmice.php");

}


if(isset($_GET['deletee'])){
    $id=$_GET['deletee'];
    $mysqli->query("delete from mec where mecID=$id") or die($mysqli->error());

  

    header("location: utakmice.php");

}


if(isset($_GET['editt'])){
    $id=$_GET['editt'];
    $update1=true;
    $result=$mysqli->query("select * from mec where mecID=$id") or die($mysqli->error());
    if(count($result)==1){
        $row=$result->fetch_array();
        $domacin=$row['domacin'];
        $gost=$row['gost'];
        $golDom=$row['golDomacin'];
        $golGost=$row['golGost'];
    }


}


if(isset($_POST['update1'])){

    $id=$_POST['id1'];
    $domacin=$_POST['domacin'];
    $gost=$_POST['gost'];
    $golDom=$_POST['golDom'];
    $golGost=$_POST['golGost'];

    $mysqli->query("update mec set domacin='$domacin',gost='$gost',golDomacin='$golDom',golGost='$golGost' where mecID=$id")
    or die($mysqli->error());

    header("location: utakmice.php");

}



?>