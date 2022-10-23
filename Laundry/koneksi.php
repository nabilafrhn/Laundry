<?php
$conn=mysqli_connect('localhost','root','','Laundry'); //menghubungkan dengan database
/* check connection */
if (mysqli_connect_errno()) { //jika error
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}else{ 
    echo "";
}
