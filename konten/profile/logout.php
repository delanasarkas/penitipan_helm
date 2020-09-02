<?php
session_start();
session_destroy();
echo "<script>alert('anda telah logout');window.location.href= '../../index.php';</script>";

?>