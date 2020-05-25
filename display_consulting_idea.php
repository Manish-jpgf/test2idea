<?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'ideas');

$q = "select * from consultingidea order by rand() LIMIT 2";
$query =  mysqli_query($con,$q);


if(mysqli_num_rows($query) > 0){
    while($result = mysqli_fetch_array($query)){
        ?>
        <h3 class="fade-in h3">For <b><u><?php echo  $result['idea1'] ?></u></b> I will <b><u><?php echo  $result['idea2'] ?></u></b> </b> in <b><u><?php echo  $result['idea3'] ?></u></b>. </h3>
        <?php
    }
}
?>

<style>

.fade-in{
    animation: fadeIn 2s;
}

@keyframes fadeIn{
    from {
        opacity: 0;
    }

    to{
        opacity: 1;
    }
}

</style>