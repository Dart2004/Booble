<?php
  $name=$_POST["name"];
  $level=file_get_contents("DanitonLevel");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="Daniton" type="submit" value="Daniton">Daniton<br>'.$level.'</button></form>';
  $Daniton=$_POST["Daniton"];
  if ($Daniton=="Daniton"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button name="name" value="'.$name.'" type="submit">Home</button>Daniton</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("DanitonStone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("Danitonsold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="Danitonattack" type="submit" value="Daniton">Attack</button></form>';
  }
  $name=$_POST["name"];
  $Danitonattack=$_POST["Danitonattack"];
  if($Danitonattack=="Daniton"){
    $Danitonsold=file_get_contents("Danitonsold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$Danitonsold*2){
      $Danitondeadsold=file_get_contents("Danitondeadsold.txt");
      $Danitonsol=@fopen("Danitondeadsold.txt","w");
      fwrite($Danitonsol,$Danitondeadsold+$Danitonsold);
      $Danitonsold=@fopen("Danitonsold.txt","w");
      fwrite($Danitonsold,0);
      $Danitonston=file_get_contents("DanitonStone");
      $Danitonstone=@fopen("DanitonStone","w");
      fwrite($Danitonstone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$Danitonston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $Danitonston=file_get_contents("DanitonStone.txt");
      $Danitonstone=@fopen("DanitonStone","w");
      fwrite($Danitonstone,$Danitonston+$userston);
    }
  }
?><?php
  $name=$_POST["name"];
  $level=file_get_contents("FishieLevel");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="Fishie" type="submit" value="Fishie">Fishie<br>'.$level.'</button></form>';
  $Fishie=$_POST["Fishie"];
  if ($Fishie=="Fishie"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button name="name" value="'.$name.'" type="submit">Home</button>Fishie</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("FishieStone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("Fishiesold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="Fishieattack" type="submit" value="Fishie">Attack</button></form>';
  }
  $name=$_POST["name"];
  $Fishieattack=$_POST["Fishieattack"];
  if($Fishieattack=="Fishie"){
    $Fishiesold=file_get_contents("Fishiesold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$Fishiesold*2){
      $Fishiedeadsold=file_get_contents("Fishiedeadsold.txt");
      $Fishiesol=@fopen("Fishiedeadsold.txt","w");
      fwrite($Fishiesol,$Fishiedeadsold+$Fishiesold);
      $Fishiesold=@fopen("Fishiesold.txt","w");
      fwrite($Fishiesold,0);
      $Fishieston=file_get_contents("FishieStone");
      $Fishiestone=@fopen("FishieStone","w");
      fwrite($Fishiestone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$Fishieston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $Fishieston=file_get_contents("FishieStone.txt");
      $Fishiestone=@fopen("FishieStone","w");
      fwrite($Fishiestone,$Fishieston+$userston);
    }
  }
?><?php
  $name=$_POST["name"];
  $level=file_get_contents("fishieLevel");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="fishie" type="submit" value="fishie">fishie<br>'.$level.'</button></form>';
  $fishie=$_POST["fishie"];
  if ($fishie=="fishie"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button name="name" value="'.$name.'" type="submit">Home</button>fishie</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("fishieStone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("fishiesold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="fishieattack" type="submit" value="fishie">Attack</button></form>';
  }
  $name=$_POST["name"];
  $fishieattack=$_POST["fishieattack"];
  if($fishieattack=="fishie"){
    $fishiesold=file_get_contents("fishiesold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$fishiesold*2){
      $fishiedeadsold=file_get_contents("fishiedeadsold.txt");
      $fishiesol=@fopen("fishiedeadsold.txt","w");
      fwrite($fishiesol,$fishiedeadsold+$fishiesold);
      $fishiesold=@fopen("fishiesold.txt","w");
      fwrite($fishiesold,0);
      $fishieston=file_get_contents("fishieStone");
      $fishiestone=@fopen("fishieStone","w");
      fwrite($fishiestone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$fishieston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $fishieston=file_get_contents("fishieStone.txt");
      $fishiestone=@fopen("fishieStone","w");
      fwrite($fishiestone,$fishieston+$userston);
    }
  }
?><?php
  $name=$_POST["name"];
  $level=file_get_contents("CodyLevel");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="Cody" type="submit" value="Cody">Cody<br>'.$level.'</button></form>';
  $Cody=$_POST["Cody"];
  if ($Cody=="Cody"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button name="name" value="'.$name.'" type="submit">Home</button>Cody</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("CodyStone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("Codysold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="Codyattack" type="submit" value="Cody">Attack</button></form>';
  }
  $name=$_POST["name"];
  $Codyattack=$_POST["Codyattack"];
  if($Codyattack=="Cody"){
    $Codysold=file_get_contents("Codysold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$Codysold*2){
      $Codydeadsold=file_get_contents("Codydeadsold.txt");
      $Codysol=@fopen("Codydeadsold.txt","w");
      fwrite($Codysol,$Codydeadsold+$Codysold);
      $Codysold=@fopen("Codysold.txt","w");
      fwrite($Codysold,0);
      $Codyston=file_get_contents("CodyStone");
      $Codystone=@fopen("CodyStone","w");
      fwrite($Codystone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$Codyston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $Codyston=file_get_contents("CodyStone.txt");
      $Codystone=@fopen("CodyStone","w");
      fwrite($Codystone,$Codyston+$userston);
    }
  }
?><?php
  $name=$_POST["name"];
  $level=file_get_contents("rtgeLevel");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="rtge" type="submit" value="rtge">rtge<br>'.$level.'</button></form>';
  $rtge=$_POST["rtge"];
  if ($rtge=="rtge"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button name="name" value="'.$name.'" type="submit">Home</button>rtge</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("rtgeStone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("rtgesold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="rtgeattack" type="submit" value="rtge">Attack</button></form>';
  }
  $name=$_POST["name"];
  $rtgeattack=$_POST["rtgeattack"];
  if($rtgeattack=="rtge"){
    $rtgesold=file_get_contents("rtgesold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$rtgesold*2){
      $rtgedeadsold=file_get_contents("rtgedeadsold.txt");
      $rtgesol=@fopen("rtgedeadsold.txt","w");
      fwrite($rtgesol,$rtgedeadsold+$rtgesold);
      $rtgesold=@fopen("rtgesold.txt","w");
      fwrite($rtgesold,0);
      $rtgeston=file_get_contents("rtgeStone");
      $rtgestone=@fopen("rtgeStone","w");
      fwrite($rtgestone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$rtgeston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $rtgeston=file_get_contents("rtgeStone.txt");
      $rtgestone=@fopen("rtgeStone","w");
      fwrite($rtgestone,$rtgeston+$userston);
    }
  }
?><?php
  $name=$_POST["name"];
  $level=file_get_contents("treLevel");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="tre" type="submit" value="tre">tre<br>'.$level.'</button></form>';
  $tre=$_POST["tre"];
  if ($tre=="tre"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button name="name" value="'.$name.'" type="submit">Home</button>tre</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("treStone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("tresold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="treattack" type="submit" value="tre">Attack</button></form>';
  }
  $name=$_POST["name"];
  $treattack=$_POST["treattack"];
  if($treattack=="tre"){
    $tresold=file_get_contents("tresold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$tresold*2){
      $tredeadsold=file_get_contents("tredeadsold.txt");
      $tresol=@fopen("tredeadsold.txt","w");
      fwrite($tresol,$tredeadsold+$tresold);
      $tresold=@fopen("tresold.txt","w");
      fwrite($tresold,0);
      $treston=file_get_contents("treStone");
      $trestone=@fopen("treStone","w");
      fwrite($trestone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$treston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $treston=file_get_contents("treStone.txt");
      $trestone=@fopen("treStone","w");
      fwrite($trestone,$treston+$userston);
    }
  }
?><?php
  $name=$_POST["name"];
  $level=file_get_contents("TiLuLevel");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button style="color:gold;background-color:silver;border-top-left-radius:17px;border-top-right-radius:5px" name="TiLu" type="submit" value="TiLu">TiLu<br>'.$level.'</button></form>';
  $TiLu=$_POST["TiLu"];
  if ($TiLu=="TiLu"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button name="name" value="'.$name.'" type="submit">Home</button>TiLu</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("TiLuStone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("TiLusold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="TiLuattack" type="submit" value="TiLu"><img src="https://cdn.discordapp.com/attachments/682517521739677698/682873875000066048/pixil-frame-0.png"></button></form>';
  }
  $name=$_POST["name"];
  $TiLuattack=$_POST["TiLuattack"];
  if($TiLuattack=="TiLu"){
    $TiLusold=file_get_contents("TiLusold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$TiLusold*4.5){
      $TiLudeadsold=file_get_contents("TiLudeadsold.txt");
      $TiLusol=@fopen("TiLudeadsold.txt","w");
      fwrite($TiLusol,$TiLudeadsold+$TiLusold);
      $TiLusold=@fopen("TiLusold.txt","w");
      fwrite($TiLusold,0);
      $TiLuston=file_get_contents("TiLuStone");
      $TiLustone=@fopen("TiLuStone","w");
      fwrite($TiLustone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$TiLuston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $TiLuston=file_get_contents("TiLuStone.txt");
      $TiLustone=@fopen("TiLuStone","w");
      fwrite($TiLustone,$TiLuston+$userston);
    }
  }
?><?php
  $name=$_POST["name"];
  $level=file_get_contents("AujevshsjsbLevel");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="Aujevshsjsb" type="submit" value="Aujevshsjsb">Aujevshsjsb<br>'.$level.'</button></form>';
  $Aujevshsjsb=$_POST["Aujevshsjsb"];
  if ($Aujevshsjsb=="Aujevshsjsb"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button name="name" value="'.$name.'" type="submit">Home</button>Aujevshsjsb</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("AujevshsjsbStone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("Aujevshsjsbsold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="Aujevshsjsbattack" type="submit" value="Aujevshsjsb">Attack</button></form>';
  }
  $name=$_POST["name"];
  $Aujevshsjsbattack=$_POST["Aujevshsjsbattack"];
  if($Aujevshsjsbattack=="Aujevshsjsb"){
    $Aujevshsjsbsold=file_get_contents("Aujevshsjsbsold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$Aujevshsjsbsold*2){
      $Aujevshsjsbdeadsold=file_get_contents("Aujevshsjsbdeadsold.txt");
      $Aujevshsjsbsol=@fopen("Aujevshsjsbdeadsold.txt","w");
      fwrite($Aujevshsjsbsol,$Aujevshsjsbdeadsold+$Aujevshsjsbsold);
      $Aujevshsjsbsold=@fopen("Aujevshsjsbsold.txt","w");
      fwrite($Aujevshsjsbsold,0);
      $Aujevshsjsbston=file_get_contents("AujevshsjsbStone");
      $Aujevshsjsbstone=@fopen("AujevshsjsbStone","w");
      fwrite($Aujevshsjsbstone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$Aujevshsjsbston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $Aujevshsjsbston=file_get_contents("AujevshsjsbStone.txt");
      $Aujevshsjsbstone=@fopen("AujevshsjsbStone","w");
      fwrite($Aujevshsjsbstone,$Aujevshsjsbston+$userston);
    }
  }
?><?php
  $name=$_POST["name"];
  $level=file_get_contents("123Level");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="_123" type="submit" value="123">123<br>'.$level.'</button></form>';
  $_123=$_POST["_123"];
  if ($_123=="123"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button name="name" value="'.$name.'" type="submit">Home</button>123</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("123Stone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("123sold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="123attack" type="submit" value="123">Attack</button></form>';
  }
  $name=$_POST["name"];
  $_123attack=$_POST["123attack"];
  if($_123attack=="123"){
    $_123sold=file_get_contents("123sold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$_123sold*2){
      $_123deadsold=file_get_contents("123deadsold.txt");
      $_123sol=@fopen("123deadsold.txt","w");
      fwrite($_123sol,$_123deadsold+$_123sold);
      $_123sold=@fopen("123sold.txt","w");
      fwrite($_123sold,0);
      $_123ston=file_get_contents("123Stone");
      $_123stone=@fopen("123Stone","w");
      fwrite($_123stone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$_123ston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $_123ston=file_get_contents("123Stone.txt");
      $_123stone=@fopen("123Stone","w");
      fwrite($_123stone,$_123ston+$userston);
    }
  }
?><?php
  $name=$_POST["name"];
  $level=file_get_contents("BlackieLevel");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="Blackie" type="submit" value="Blackie">Blackie<br>'.$level.'</button></form>';
  $Blackie=$_POST["Blackie"];
  if ($Blackie=="Blackie"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button name="name" value="'.$name.'" type="submit">Home</button>Blackie</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("BlackieStone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("Blackiesold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="Blackieattack" type="submit" value="Blackie">Attack</button></form>';
  }
  $name=$_POST["name"];
  $Blackieattack=$_POST["Blackieattack"];
  if($Blackieattack=="Blackie"){
    $Blackiesold=file_get_contents("Blackiesold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$Blackiesold*2){
      $Blackiedeadsold=file_get_contents("Blackiedeadsold.txt");
      $Blackiesol=@fopen("Blackiedeadsold.txt","w");
      fwrite($Blackiesol,$Blackiedeadsold+$Blackiesold);
      $Blackiesold=@fopen("Blackiesold.txt","w");
      fwrite($Blackiesold,0);
      $Blackieston=file_get_contents("BlackieStone");
      $Blackiestone=@fopen("BlackieStone","w");
      fwrite($Blackiestone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$Blackieston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $Blackieston=file_get_contents("BlackieStone.txt");
      $Blackiestone=@fopen("BlackieStone","w");
      fwrite($Blackiestone,$Blackieston+$userston);
    }
  }
?><?php
  $name=$_POST["name"];
  $level=file_get_contents("test1Level");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="test1" type="submit" value="test1">test1<br>'.$level.'</button></form>';
  $test1=$_POST["test1"];
  if ($test1=="test1"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button name="name" value="'.$name.'" type="submit">Home</button>test1</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("test1Stone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("test1sold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="test1attack" type="submit" value="test1">Attack</button></form>';
  }
  $name=$_POST["name"];
  $test1attack=$_POST["test1attack"];
  if($test1attack=="test1"){
    $test1sold=file_get_contents("test1sold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$test1sold*2){
      $test1deadsold=file_get_contents("test1deadsold.txt");
      $test1sol=@fopen("test1deadsold.txt","w");
      fwrite($test1sol,$test1deadsold+$test1sold);
      $test1sold=@fopen("test1sold.txt","w");
      fwrite($test1sold,0);
      $test1ston=file_get_contents("test1Stone");
      $test1stone=@fopen("test1Stone","w");
      fwrite($test1stone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$test1ston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $test1ston=file_get_contents("test1Stone.txt");
      $test1stone=@fopen("test1Stone","w");
      fwrite($test1stone,$test1ston+$userston);
    }
  }
?><?php
  $name=$_POST["name"];
  $level=file_get_contents("Nat#4853Level");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="Nat#4853" type="submit" value="Nat#4853">Nat#4853<br>'.$level.'</button></form>';
  $Nat4853=$_POST["Nat#4853"];
  if ($Nat4853=="Nat#4853"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button name="name" value="'.$name.'" type="submit">Home</button>Nat#4853</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("Nat#4853Stone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("Nat#4853sold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="Nat#4853attack" type="submit" value="Nat#4853">Attack</button></form>';
  }
  $name=$_POST["name"];
  $Nat4853attack=$_POST["Nat#4853attack"];
  if($Nat4853attack=="Nat#4853"){
    $Nat4853sold=file_get_contents("Nat#4853sold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$Nat4853sold*2){
      $Nat4853deadsold=file_get_contents("Nat#4853deadsold.txt");
      $Nat4853sol=@fopen("Nat#4853deadsold.txt","w");
      fwrite($Nat4853sol,$Nat4853deadsold+$Nat4853sold);
      $Nat4853sold=@fopen("Nat#4853sold.txt","w");
      fwrite($Nat4853sold,0);
      $Nat4853ston=file_get_contents("Nat#4853Stone");
      $Nat4853stone=@fopen("Nat#4853Stone","w");
      fwrite($Nat4853stone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$Nat4853ston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $Nat4853ston=file_get_contents("Nat#4853Stone.txt");
      $Nat4853stone=@fopen("Nat#4853Stone","w");
      fwrite($Nat4853stone,$Nat4853ston+$userston);
    }
  }
?><?php
  $name=$_POST["name"];
  $level=file_get_contents("asdLevel");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="asd" style="border-top-left-radius:17px;border-top-right-radius:5px;color:gold;background-color:silver" type="submit" value="asd">asd<br>'.$level.'</button></form>';
  $asd=$_POST["asd"];
  if ($asd=="asd"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button name="name" value="'.$name.'" type="submit">Home</button>asd</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("asdStone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("asdsold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="asdattack" type="submit" value="asd"  ><img src="https://cdn.discordapp.com/attachments/682517521739677698/682873875000066048/pixil-frame-0.png"></button></form>';
  }
  $name=$_POST["name"];
  $asdattack=$_POST["asdattack"];
  if($asdattack=="asd"){
    $asdsold=file_get_contents("asdsold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$asdsold*2){
      $asddeadsold=file_get_contents("asddeadsold.txt");
      $asdsol=@fopen("asddeadsold.txt","w");
      fwrite($asdsol,$asddeadsold+$asdsold);
      $asdsold=@fopen("asdsold.txt","w");
      fwrite($asdsold,0);
      $asdston=file_get_contents("asdStone");
      $asdstone=@fopen("asdStone","w");
      fwrite($asdstone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$asdston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $asdston=file_get_contents("asdStone.txt");
      $asdstone=@fopen("asdStone","w");
      fwrite($asdstone,$asdston+$userston);
    }
  }
?><?php
  $name=$_POST["name"];
  $level=file_get_contents("DartLevel");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="Dart" type="submit" value="Dart">Dart<br>'.$level.'</button></form>';
  $Dart=$_POST["Dart"];
  if ($Dart=="Dart"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button name="name" value="'.$name.'" type="submit">Home</button>Dart</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("DartStone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("Dartsold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button name="Dartattack" type="submit" value="Dart">Attack</button></form>';
  }
  $name=$_POST["name"];
  $Dartattack=$_POST["Dartattack"];
  if($Dartattack=="Dart"){
    $Dartsold=file_get_contents("Dartsold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$Dartsold*2){
      $Dartdeadsold=file_get_contents("Dartdeadsold.txt");
      $Dartsol=@fopen("Dartdeadsold.txt","w");
      fwrite($Dartsol,$Dartdeadsold+$Dartsold);
      $Dartsold=@fopen("Dartsold.txt","w");
      fwrite($Dartsold,0);
      $Dartston=file_get_contents("DartStone");
      $Dartstone=@fopen("DartStone","w");
      fwrite($Dartstone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$Dartston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $Dartston=file_get_contents("DartStone.txt");
      $Dartstone=@fopen("DartStone","w");
      fwrite($Dartstone,$Dartston+$userston);
    }
  }
?>