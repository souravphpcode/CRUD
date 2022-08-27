<?php
include 'db.php';
/*Insert into Database Student*/
function adduser($user){
   $nam=$user['name'];
   $roll=$user['roll'];
   $em=$user['email'];
   $ph=$user['phone'];
   $add=$user['add'];
   $nu=$user['pass'];
   $e_p=md5($nu);
   //  $con=$GLOBALS['con'];
    $sql="insert into reg(name,roll,email,ph,addr,pass) values(?,?,?,?,?,?)";
    $st=$GLOBALS['con']->prepare($sql);
    $st->bind_param("ssssss",$nam,$roll,$em,$ph,$add,$e_p);
        if($st->execute()){
        return true;
    }
    else{
        return false;
    }
}
/*Login Form*/
function login($user){
   $con=$GLOBALS ['con'];
   $name=$user['name'];
   $em=$user['email'];
   $pass=$user['pass'];
   $e_p=md5($pass);
   $sql="select name,email,pass from reg where name=? and email=? and pass=?";
   $st=$con->prepare($sql);
       $st->bind_param("sss",$name,$em,$e_p);
       if($st->execute()){
           $rs=$st->get_result();
           if($rs->num_rows>0){ 
               // return $rs->fetch_assoc()['id'];
               return true;
           }
           else
           {
               return false;
           }
       }
}
 /*show data base data For Student*/
 function getUser(){
   $con=$GLOBALS['con'];
   $sql="select * from reg";
   $res=$con->query($sql);
   $users=array();
   if($res->num_rows>0){
       while($row=$res->fetch_assoc()){
       $users[]=$row;
       }
   }
   return $users;
}
/*Delete Student */
function delUser($id){
   $con=$GLOBALS['con'];
   $sql="delete from reg where id=?";
   $st=$con->prepare($sql);
   $st->bind_param("i",$id);
   if($st->execute()){
       return true;
   }
   else{
       return false;
   }
}
function getUsers($id){
$con=$GLOBALS['con'];
$sql="select * from reg where id=?";
$st=$con->prepare($sql);
$st->bind_param("i",$id);
if($st->execute()){
    $result=$st->get_result();
    if($result->num_rows > 0){
        if($row=$result->fetch_assoc()){
            return $row;
        }
    }
}
else{
    echo $con->error;
}

}

/*update into Database Student*/
 function upuser($user){
    $con=$GLOBALS['con'];
    $nam=$user['name'];
    $roll=$user['roll'];
    $em=$user['email'];
    $ph=$user['phone'];
    $add=$user['add'];
    $id=$user['id'];
    $sql="update reg set name=?,roll=?,email=?,ph=?,addr=? where id=?";
    $st=$con->prepare($sql);
    $st->bind_param("sssssi",$nam,$roll,$em,$ph,$add,$id);
    if($st->execute()){
        return true;
    }
    else{
        echo $con->error;
    }
}
?>