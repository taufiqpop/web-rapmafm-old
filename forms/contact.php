<?php
  if ($_POST["message"]){
    mail("perfectofplayers@gmail.com", "Ada Email Masuk Nih",
    $_POST["insert your message here"]. "From: an@email.address");
  }
?>