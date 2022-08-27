<?php
include 'dao.php';
/*for registration*/
/*Add to database */
    if(isset($_POST['REGISTER'])){
        $nam=$_POST['fname'];
        $em=$_POST['femail'];
        $roll=$_POST['rname'];
        $ph=$_POST['pname'];
        $add=$_POST['aname'];
        $nu=$_POST['fpassword'];
        $user=array("name"=>$nam,"roll"=>$roll,"email"=>$em,"phone"=>$ph,"add"=>$add,"pass"=>$nu);
        $re=adduser($user);
        if($re){
         //  session_start();
         //  $_SESSION['n']=$nam;
          header("Location:logi.php");
        }
        else{
          header("Location:404.php");
        }
    }
    /*for Login*/
/*For check Password Database */
if(isset($_POST['login'])){
   $nam=$_POST['fname'];
   $em=$_POST['femail'];
   $nu=$_POST['fpassword'];
   $user=array("name"=>$nam,"email"=>$em,"pass"=>$nu);
   $p=login($user);
   if($p>0){
      session_start();
      $_SESSION['n']=$nam;
      // $_SESSION['i']=$p;
     header("location:disp.php");
 }
 else{
   header("location:404.php");
 }
}

/*Show Database Data For Student*/
$u=getUser();
 /*Delete Student*/
 if(isset($_POST['d'])){
   $id=$_POST['id'];
   delUser($id);
   header("Location:disp.php");
 }

/*Edit Student*/
if(isset($_POST['e'])){
  $id=$_POST['id'];
  getUsers($id);
  header("Location:edit.php");
}
 /*Update to database */
 if(isset($_POST['up'])){
  $nam=$_POST['fname'];
  $em=$_POST['femail'];
  $roll=$_POST['rname'];
  $ph=$_POST['pname'];
  $add=$_POST['aname'];
  $id=$_POST['id'];
  $user=array("name"=>$nam,"roll"=>$roll,"email"=>$em,"phone"=>$ph,"add"=>$add,"id"=>$id);
  
  $re=upuser($user);
  if($re){
    header("Location:disp.php");
  }
  else{
    header("Location:404.php");
  }
}



   ?>