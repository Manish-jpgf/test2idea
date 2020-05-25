<?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'ideas');

$q = "select * from allideas order by rand() LIMIT 2";
$query =  mysqli_query($con,$q);


if(mysqli_num_rows($query) > 0){
    while($result = mysqli_fetch_array($query)){
        ?>
        <h3 class="fade-in h3">Start a <b><u><?php echo  $result['idea'] ?></u></b> business for <b><u><?php echo  $result['idea2'] ?></u></b>. </h3>
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