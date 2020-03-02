<?php
  $name=$_POST["name"];
  $msg=$_POST["msg"];
  echo "<form action='Chat.php' method='post'>";
  echo "<input name='name' style='200px' value='".$name."' placeholder='USERNAME'>";
  echo "<input name='msg' style='width:calc(100% - 300px)' value='' placeholder='Type your message'>";
  echo "<input type='submit' style='width:100px'>";
  echo "</form>";
  if ($msg==""||$name==""){

  }
  else{
    $chat=file_get_contents("Chat.txt");
    $Chat=@fopen("Chat.txt","w");
    $Chat=@fopen("Chat.txt","a+");
    fwrite($Chat,"<tr>");
    fwrite($Chat,"<th style='width:400'>".$name."</th>");
    fwrite($Chat,"<td style='width:800'>|".$msg."</td>");
    fwrite($Chat,"</tr>");
    fwrite($Chat,$chat);
  }
  ?>
  <table>
  <?php
  include "Chat.txt";
  
?>