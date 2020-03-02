<form action="index.php" method="post">
<input name="name" placeholder="NAME"><br>
<input name="password" placeholder="PASSWORD"><br>
<input type="submit" value="LOGIN OR SIGNUP">
</form>
<?php
  $name=$_POST["name"];
  $password=$_POST["password"];
  $user=file_get_contents($name.".txt");
  $password=str_replace("a","^",$password);
  $password=str_replace("b","°",$password);
  $password=str_replace("c","@",$password);
  $password=str_replace("d","§",$password);
  $password=str_replace("e","<",$password);
  $password=str_replace("f",">",$password);
  $password=str_replace("g","",$password);
  $password=str_replace("h","/",$password);
  $password=str_replace("i","?",$password);
  $password=str_replace("j","`",$password);
  $password=str_replace("k","&",$password);
  $password=str_replace("l","{",$password);
  $password=str_replace("m","´",$password);
  $password=str_replace("n","(",$password);
  $password=str_replace("o",")",$password);
  $password=str_replace("p","[",$password);
  $password=str_replace("q","]",$password);
  $password=str_replace("r","\ ",$password);
  $password=str_replace("s","ß",$password);
  $password=str_replace("t","'",$password);
  $password=str_replace("u","{",$password);
  $password=str_replace("v","}",$password);
  $password=str_replace("w","*",$password);
  $password=str_replace("x","#",$password);
  $password=str_replace("y","|",$password);
  $password=str_replace("z","+",$password);
  if($name==""||$password==""){
    echo "No clear fills";
  }
  else if ($user==$password){
    echo "LOGGED IN";
    echo "<meta http-equiv='refresh' content='4;URL=".$name.".php'>";
  }
  else if(($user == "")==false){
    echo "Wrong password";
  }
  else if((strpos($name,".")||strpos($name,",")||strpos($name,":")||strpos($name,";")||strpos($name,"<")||strpos($name,">")||strpos($name,"|")||strpos($name,"/")||strpos($user,"^"))){
    echo "Not possible letters";
  }
  else{
    echo "Creating user<br>";
    echo "Log in";
    $user=@fopen($name.".txt","w");
    fwrite($user,$password);
    $user=@fopen($name.".php","w");
    fwrite($user,'<frameset rows="*,4*">
<frame src="Chat.php">
<frame src="'.$name.'Menu.php">
</frameset>');
$user=@fopen($name."Build","w");
    fwrite($user,"<table><td><form action='".$name."Menu.php' method='post'><button name=\"hosp\" value=1 type=\"submit\" style=\"background-color:white;border:none\"><img style=\"width:40px;height:40px\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAI8AAADMCAIAAADFzWcGAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAPnSURBVHhe7dzdTuNKEABhct7/ndkcNfKyie049vx0dapuiAQX8XzpYSTQ3L6/v78MUjWt2+0WL0p+Cv/7+Vqihere79dlqqNVkuehUrP10N2vGGERrR2VSmAVtF56lAHDaz1LrJ4Ga4CxtbYMqoKBtVZXf3EqCUbV2qeK6oEhtY5QRcXAeFrHqaJKYDCtc6tcBoyktbW+O4O1VAMMo3WFKjr+k2ljaF2n2oo1XgCthlT0/TC7VvOpQoOl1uq0iFywvFo7y3d6sJagYEm1ulJFRLCMWgOoIhxYOq1hVBELLPUp43c9qCIQWK7/J3xeo2Fvb5Un1eLcSzRbcz/OiAnLopXho50fLIVWnl0oOdh8rTxUUWawyVrZqKK0YDO1clJFOcGmaWWmilK9mWiOVn6qreaO1wQtEFW2/XC0Fm6qUoEN1Zq7jZwuD9g4ra3HyzxYS0nABmmhqaIMYBNOGUsgqmg62Ait1efBUUVzwbprVaKKJoL11apHFc0C66hVlSqaAtZLqzZVNB6si9YnUEWDwdprfQ5VNBKssdanUUXDwFpqfSZVNAasmdYnU0UDwNpoSRX1fuQGWlLt13C8rmq1nfQCdd0PW54ylj58sPqBXdJyD9yqE9h5Lan26wF2UkuqIzUHO6Ml1fHagr2tJdW7NQR7T0uqc7UCe0NLqis1ATuqJdX1roMd0pKqVRfBXmtJ1bYrYC+0pOrRabA9Lan6dQ5sU0uq3p0AW9eSakzvLunrU0Yk1bB2xmtF6+XuaQ17az981HIPHN9xsH+0pJrVQbC/WlLN7QjYj5ZUGXoJ9v9tkgWolkco8Anb4Vj5xj0oVVQYbOUEX+Bp6W0RPGpJlaRViJXZsrSpRUotUmqRUouUWqTUIqUWKbVIqUVKLVJqkVKLlFqk1CKlFim1SKlFSi1SapFSi5RapNQipRYptUipRUotUmqRUouUWqTUIqUWKbVIqUVKLVJqkVKLlFqk1CKlFim1SKlFSi1SapFSi5RapB5vLdy58W71ikM70cFrBZ9vyTw6W1I17PRiuhOSUovUUS1vcG3Y6cV845SRtuffxj+v4J0/ZViG1CKlFim1SKlFSi1SapFSi5RapNQipRYptUipRUotUmqRUouUWqTUIqUWKbVIqUVKLVJqkVKLlFqk1CKlFim1SKlFSi1SapFSi5RapNQipRYptUipRUotUmqRUouUWqTUIqUWKbVIqUVKLVJqkVKLlFqk1CKlFim1SKlFqoLW70uqy1xYvVqFG8ar5g3j7NQipRYptUipRUotUmqRUouUWqTUIqUWKbVIqUVKLbMO+RcTWGqRUouUWpy+vv4A7ITDmNCcNuAAAAAASUVORK5CYII=\"></button></form></td>

<td><form action='".$name."Menu.php' method='post'><input name=\"barr\" value=1 hidden>
<button name=\"barr\" value=1 type=\"submit\" style=\"background-color:white;border:none\"><img style=\"width:40px;height:40px\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHoAAABpCAIAAAB6eaCGAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAK0SURBVHhe7ZvBcoMwDERD//+fUyV42kkMwZallWLvu7TkANJjRza02e73+42g+Hrd27aV33qI6vordesUXwJQ8U26nSx/wFzOd+jGi64xEfVTfiYmg2vBpIzs6b5sUlG/Wty4q9S6z7x41NxyD2bWfdg/stq6gPGrJ53d4a6dyKg7g+uW2aIgne60uTapIZFuEZ3WtRVZdB+KFmZyLQTr3hMtlONXJnMt2GwE/3y1nO1M7huBrg8rtBE1fpZGfe0Eit6pO7IqKd3OJNy1K4l0i+i5XQvxunfLQjmemtHZrRvcyeX6zW5j3ROE1M+1kG6pnBvqhkLdUIZ069bJlbFMN9fJSzhMoFA3FOqGQt1Q9Lrne56sMW+K6f4HsK+lbijUDYW6oSh1r/D47rH426R7ysd3DzhMCpjEUDcU6i5wmETiNFs0uld4fHeC6YZC3VA0/2cSMkx0S1ljbfXJnZpKrVun+JK6YFxHvacGBMHJcjt+ukdnt21lIjrctSuJlsq5Re+MDhOrdF+6VlxIff/8hkkK3WdePNpuuQdZdNe1jld22L9fwzUeATpjaHZP4BpM5FKZwfVhDX6E6V4t1zsBukV0WtfeNaB1H4oWps/1TofuN1Ndgp6BflCOX1nEteCY7iL4SfnoiEDXnwvzoGPfbV5ceKjrjrxLCtuZJBwggJI6dFtVI+cBNJaTvnSPaNotC+V4SbpfUQntQzy53LdGANVqdM8Bfp0UwpbKbGBiR91QqBvKorrNH9kaYbqhUPcD2PaMuqFQN5QVdUetkwLTDYW6oS92qBsKdUOhbijL6ca/434Bfb2FEdUcJlCoGwp1Q6FuKI8/DQcv1vNSi2W6oVA3FOqGQt1QqBsKdUOhbijUDYW6oVA3FOqGQt1Y+EIKBl9RoaFuKNQNhbqhrPtFvwBut18SR1xqqPDhOgAAAABJRU5ErkJggg==\"></button></form></td>");
$user=@fopen($name."deadsold.txt","w");
    fwrite($user,0);
$user=@fopen($name."Fish","w");
    fwrite($user,3000);
$user=@fopen($name."Level","w");
    fwrite($user,0);
$user=@fopen($name."Menu.php","w");
    fwrite($user,'<hr>
<hr>
<hr>
<div style="text-align:center">
<h1><form action="card.php" method=\'post\'>
<button name="name" type="submit" value="'.$name.'" style="border-radius:5">Map</button>You</h1></form>
<hr>
</div>
<?php
$hosp=$_POST["hosp"];
$barr=$_POST["barr"];
$forr=$_POST["forr"];
$fish=$_POST["fish"];
$ston=$_POST["ston"];
$L=file_get_contents("'.$name.'Level");
if($hosp=="1"){
  $H=file_get_contents("'.$name.'deadsold.txt");
  $W=file_get_contents("'.$name.'Wood");
  $S=file_get_contents("'.$name.'Stone");
  $F=file_get_contents("'.$name.'Fish");
  $L=file_get_contents("'.$name.'Level");
  if($H-10<0||$W-10<0||$S-10<0||$F-10<0){

  }
  else{
    $h=@fopen("'.$name.'deadsold.txt","w");
    fwrite($h,$H-10);
    $w=@fopen("'.$name.'Wood","w");
    fwrite($w,$W-10);
    $H=file_get_contents("'.$name.'sold.txt");
    $h=@fopen("'.$name.'sold.txt","w");
    fwrite($h,$H+10*$L);
    $w=@fopen("'.$name.'Stone","w");
    fwrite($w,$S-10);
    $w=@fopen("'.$name.'Fish","w");
    fwrite($w,$F-10);
  }
}
if($barr==1){
  $W=file_get_contents("'.$name.'Wood");
  $S=file_get_contents("'.$name.'Stone");
  $F=file_get_contents("'.$name.'Fish");
  if($W-10<0||$S-10<0||$F-10<0){

  }
  else{
    $H=file_get_contents("'.$name.'sold.txt");
    $h=@fopen("'.$name.'sold.txt","w");
    fwrite($h,$H+1*$L);
    $w=@fopen("'.$name.'Wood","w");
    fwrite($w,$W-10);
    $w=@fopen("'.$name.'Stone","w");
    fwrite($w,$S-10);
    $w=@fopen("'.$name.'Fish","w");
    fwrite($w,$F-10);
  }
}
if($forr==1){
  $H=file_get_contents("'.$name.'Wood");
  $h=@fopen("'.$name.'Wood","w");
  fwrite($h,$H+9*$L);
}
if($fish==1){
  $H=file_get_contents("'.$name.'Fish");
  $h=@fopen("'.$name.'Fish","w");
  fwrite($h,$H+9*$L);
}
if($ston==1){
  $H=file_get_contents("'.$name.'Stone");
  $h=@fopen("'.$name.'Stone","w");
  fwrite($h,$H+9*$L);
}
?>
<table>
<td style="width:calc(100% - 50px)">
<?php
  include "'.$name.'Build";
?>
</td>
<td style="text-align:right;width:50px">
<?php
  $W=file_get_contents("'.$name.'Wood");
  $S=file_get_contents("'.$name.'Stone");
  $F=file_get_contents("'.$name.'Fish");
  include "Wood";
  echo $W;
  echo "<br>";
  include "Ston";
  echo $S;
  echo "<br>";
  include "Fish";
  echo $F;
if($fish==2){
  $W=file_get_contents("'.$name.'Wood");
  $S=file_get_contents("'.$name.'Stone");
  $F=file_get_contents("'.$name.'Fish");
  if($W-1000<0||$S-1000<0){

  }
  else{
  $w=@fopen("'.$name.'Wood","w");
  fwrite($w,$W-1000);
  $s=@fopen("'.$name.'Stone","w");
  fwrite($s,$S-1000);
  $f=@fopen("'.$name.'Fish","w");
  fwrite($f,$F-1000);
  $level=file_get_contents("'.$name.'Level");
  $lev=@fopen("'.$name.'Level","w");
  fwrite($lev,$level+1/3);
  $build=file_get_contents("'.$name.'Build");
  $building=@fopen("'.$name.'Build","w");
  fwrite($building,$build.\'<td><form action="'.$name.'Menu.php" method="post"><button name="fish" value=1 type="submit" style="background-color:white;border:none"><img style="width:40px;height:40px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHsAAABrCAIAAADYc2qzAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAO6SURBVHhe7dHbduQgDETR/P9PZ5jmKEu0wRa+yBhrP01UEnFqfn6Dr2jcWzTuLRr3Fo17i8a9RePeonFv0bi3Zzf+I/j5CR7cOGUrBGObqvGEbGCzNZ4Qj2rCxjOWxvPgxhPabWBpMDM3nrE6jGc3ntDrKlbH8IrGE7YH8PjGE0o14OBWczZeHWb55EYzNJ5Qp6gO/+T0LnM2nrTmWU5vMUnjCV0Kph+MSmTupm08IfhgVCLzNU/jCUUKpoJpiczRzI0nBIJpiczLVI0ntCiYKgQKgZfJG08IFAKFwMVsjSe0KJiWyARTF9E4CK43f+MJQYlMML3ehI0ntCiYlsgE0+tF42B6vZc2TqAQXC8a/4+pizkbT+hSMBVMBVMXb2yckULgIhr3buB1jfOzQuDl7Y0zdfSuxvlByXNPL2qcfyl509mcjdOoqA6TPHf2lsb5l5I3/b2i8SX27hCNe3tj4yzd5HWNs3GfCRun2ho2bhWNe3tR48R3q3wHH6gQPAQfXSI7Ay8qBDbf27zRg8th8FklMhtuenBpcELjm3jaBb+yRKYQnId3DTwat+MjduGJm/ARBh7//29Adwb1VZ4JNa1+cnWbuhtno0Q2C/6qBeIGlrbsb5BVAw6GwWf14HIVq1uaezyzhe3z8G4/7k/F0wYcGGys8p4BBw/HH9ODSzPrAc9vYfuZ+Bs6cWzWccBvsOHmIfhog+VyfsHOesDz/bgfEp9ow81djVeHK/L+IPgmG24EU4XAbGfjCcEHIwMO7sAX2HCzQCyY9ui44ZcIpgqBDTcX45eZcdbGnmDaY3/jCcECsRlnJ+HRfty3sacQ9Oi74fcIpm3sdeK4B5cH8NAqVgXTTh1n/B6FYBWrY+NbV7GqEHTaPuP5Gja2sH03vuaDkWDaxp5C0G/tkrcbWDLgQKkOL5K/4QuZYFrDRolsF9MHLbFnxplgKpieh3fb2BNMF4gXiHepHPNqG3s9uFQIFogP4KFVrCoECsEC8V7f97zawFInjktke/FKA0urWBVMFYIS2QHfT/Bwiawf9wvEh/HcAnEbewqBYKoQHFY8xNsKQT/uG1haxepevFLDhkKgEAimZyje4nnBtB/3DSy1sXcMby0Ql8gUAoXgsOIh3g7H0GZDNH4JCq2Jxi9BoTXfGRfhGNqsqWfchV0osWEjDqeLxr1F496icW/RuLdo3Fs07i0a9xaNe4vGvUXj3qJxb9G4t2jcWzTuLRr3Fo17i8a9RePeonFv0bi3aNxbNO4tGvf1+/sPOkQ4pZk0R0oAAAAASUVORK5CYII="></button></form></td>\');
  }
}

if($forr==2){
  $W=file_get_contents("'.$name.'Wood");
  $S=file_get_contents("'.$name.'Stone");
  $F=file_get_contents("'.$name.'Fish");
  if($F-1000<0||$S-1000<0){

  }
  else{
  $w=@fopen("'.$name.'Wood","w");
  fwrite($w,$W-1000);
  $s=@fopen("'.$name.'Stone","w");
  fwrite($s,$S-1000);
  $f=@fopen("'.$name.'Fish","w");
  fwrite($f,$F-1000);
  $level=file_get_contents("'.$name.'Level");
  $lev=@fopen("'.$name.'Level");
  fwrite($lev,$level+1/3,"w");
  $build=file_get_contents("'.$name.'Build");
  $building=@fopen("'.$name.'Build","w");
  fwrite($building,$build.\'<td><form action="'.$name.'Menu.php" method="post"><button name="forr" value=1 type="submit" style="background-color:white;border:none"><img style="width:40px;height:40px" src="data:image/png;base64,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"></button></form></td>\');
  }
}

if($ston==2){
  $W=file_get_contents("'.$name.'Wood");
  $S=file_get_contents("'.$name.'Stone");
  $F=file_get_contents("'.$name.'Fish");
  if($W-1000<0||$F-1000<0){

  }
  else{
  $w=@fopen("'.$name.'Wood","w");
  fwrite($w,$W-1000);
  $s=@fopen("'.$name.'Stone","w");
  fwrite($s,$S-1000);
  $f=@fopen("'.$name.'Fish","w");
  fwrite($f,$F-1000);
  $level=file_get_contents("'.$name.'Level");
  $lev=@fopen("'.$name.'Level","w");
  fwrite($lev,$level+1/3);
  $build=file_get_contents("'.$name.'Build");
  $building=@fopen("'.$name.'Build","w");
  fwrite($building,$build.\'<td><form action="'.$name.'Menu.php" method="post"><button name="ston" value=1 type="submit" style="background-color:white;border:none"><img style="width:40px;height:40px" src="data:image/png;base64,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"></button></form></td>\');
  }
}

?>
</td>
</tr>
<tr style="text-align:center">
<h1>Building</h1>
</tr><tr>
<td><form action="" method="post">
<button name="ston" value="2">Add Mountain</button>
</form><td>
<td><form action="" method="post">
<button name="forr" value="2">Add Forrest</button>
</form><td>
<td><form action="" method="post">
<button name="fish" value="2">Add Bay</button>
</form><td>');
$user=@fopen($name."sold.txt","w");
    fwrite($user,0);
$user=@fopen($name."Stone","w");
    fwrite($user,3000);
$user=@fopen($name."Wood","w");
    fwrite($user,3000);
$user=@fopen("card.php","a+");
fwrite($user,'<?php
  $name=$_POST["name"];
  $level=file_get_contents("'.$name.'Level");
  echo \'<form action="" method="post">
  <input name="name" value="\'.$name.\'" hidden><button name="'.$name.'" type="submit" value="'.$name.'">'.$name.'<br>\'.$level.\'</button></form>\';
  $'.$name.'=$_POST["'.$name.'"];
  if ($'.$name.'=="'.$name.'"){
    echo \'<h1><div style="text-align:center"><form action="\'.$name.\'Menu.php"><button name="name" value="\'.$name.\'" type="submit">Home</button>'.$name.'</form></h1>\';
    echo "<table style=\'width:100%\'>";
    echo "<tr><td style=\'width:50%\'><b>Level:</b>".$level."</td>";
    echo "<td style=\'width:50%\'><b>Money:</b>".file_get_contents("'.$name.'Stone")."</td></tr></table>";
    echo "<div style=\'text-align:center\'><b>Army:</b>".file_get_contents("'.$name.'sold.txt")."</div>";
  echo \'<form action="" method="post">
  <input name="name" value="\'.$name.\'" hidden><button name="'.$name.'attack" type="submit" value="'.$name.'">Attack</button></form>\';
  }
  $name=$_POST["name"];
  $'.$name.'attack=$_POST["'.$name.'attack"];
  if($'.$name.'attack=="'.$name.'"){
    $'.$name.'sold=file_get_contents("'.$name.'sold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$'.$name.'sold*2){
      $'.$name.'deadsold=file_get_contents("'.$name.'deadsold.txt");
      $'.$name.'sol=@fopen("'.$name.'deadsold.txt","w");
      fwrite($'.$name.'sol,$'.$name.'deadsold+$'.$name.'sold);
      $'.$name.'sold=@fopen("'.$name.'sold.txt","w");
      fwrite($'.$name.'sold,0);
      $'.$name.'ston=file_get_contents("'.$name.'Stone");
      $'.$name.'stone=@fopen("'.$name.'Stone","w");
      fwrite($'.$name.'stone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$'.$name.'ston);
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
      $'.$name.'ston=file_get_contents("'.$name.'Stone.txt");
      $'.$name.'stone=@fopen("'.$name.'Stone","w");
      fwrite($'.$name.'stone,$'.$name.'ston+$userston);
    }
  }
?>');
$instruction="<tr><th style='width:400'>GUIDE (Daniton)</th><td style='width:800'>|The first update is free</td></tr><tr><th style='width:400'>GUIDE (Daniton)</th><td style='width:800'>|If you steal from someone, you will have as much money as the other player had before</td></tr><tr><th style='width:400'>GUIDE (Daniton)</th><td style='width:800'>|For updates and co join the support server: <a href='https://discord.gg/CMrkMW'>https://discord.gg/CMrkMW</a></td></tr><tr><th style='width:400'>GUIDE (Cody)</th><td style='width:800'>|I recommend adding one of each resource (1 mountain, 1 forest, and 1 bay) which costs 3000 of each resource in the end (1000 each). If you invest in only one building, you will be short of any resource needed to advance. Once you have everything in order, know that other players can steal from you. You can find the size of your army by checking on the map, and then checking your name. Your army can be upgraded by clicking on the flag-looking icon ('barracks') which costs 10 of each resource. Your army may be hurt overtime from attacks, so the icon to the left of the barracks, the house with the plus, is a hospital! You can heal your soldiers there. Good luck!</td></tr>";
$instructions=file_get_value("Chat.txt");
$chat=@fopen("Chat.txt","w");
fwrite($chat,$instruction.$instructions);
}
?>
