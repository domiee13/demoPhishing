<?php
// header ('http://localhost/fbLoginClone/');
if(isset($_POST['submit'])){
  echo "Form submitted <br>";
  echo "Email: " . $_POST['email'] . "<br>";
  echo "Password: " . $_POST['password'] . "<br>";
  echo "Congratulation!! You have been phished. Cya!";
}
?>