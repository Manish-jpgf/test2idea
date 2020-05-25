<?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'ideas');

extract($_POST);

if(isset($_POST['submit'])){

    $q = "insert into allideas (idea,idea2) values('$idea','$idea2')";

    $query  =  mysqli_query($con,$q);
    header('location:insert_idea.php');

}


if(isset($_POST['c_submit'])){

    $q = "insert into consultingidea (idea1,idea2,idea3) values('$c_idea','$c_idea2','$c_idea3')";

    $query  =  mysqli_query($con,$q);
    header('location:insert_idea.php');

}



?>