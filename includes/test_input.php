<?php
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data,ENT_QUOTES);
   return $data;
}
?>