<?php

if(isset($_POST['submit'])){

$username = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$symp = $_POST['coronasym'];
$msg = $_POST['msg'];

$chk = "";

foreach($symp as $chk1){
    $chk .= $chk1."," ;
}
$insertquery = "insert into coronacase(user, email, mobile, symp, message) 
values('$username', '$email', '$mobile', '$chk', '$msg');";

$query = mysqli_query($con, $insertquery);

if($query){
    ?>
<script>
    alert('Successful inserted');
</script>
    <?php
}else{
    ?>
    <script>
    alert('UnSuccessful inserted');
</script>
    <?php
}
}
?>