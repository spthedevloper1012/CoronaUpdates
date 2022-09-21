<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'coronadb';

$con = mysqli_connect($server, $user, $password, $db);
if($con){
    ?>
<script>
    alert('Successful Connection');
</script>
    <?php
}else{
    ?>
    <script>
    alert('UnSuccessful Connection');
</script>
    <?php
}
?>
