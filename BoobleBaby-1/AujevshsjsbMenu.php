<hr>
<hr>
<hr>
<div style="text-align:center">
<h1><form action="card.php" method='post'>
<button name="name" type="submit" value="Aujevshsjsb" style="border-radius:5">Map</button>You</h1></form>
<hr>
</div>
<?php
$hosp=$_POST["hosp"];
$barr=$_POST["barr"];
$forr=$_POST["forr"];
$fish=$_POST["fish"];
$ston=$_POST["ston"];
$L=file_get_contents("AujevshsjsbLevel");
if($hosp=="1"){
  $H=file_get_contents("Aujevshsjsbdeadsold.txt");
  $W=file_get_contents("AujevshsjsbWood");
  $S=file_get_contents("AujevshsjsbStone");
  $F=file_get_contents("AujevshsjsbFish");
  $L=file_get_contents("AujevshsjsbLevel");
  if($H-10<0||$W-10<0||$S-10<0||$F-10<0){

  }
  else{
    $h=@fopen("Aujevshsjsbdeadsold.txt","w");
    fwrite($h,$H-10);
    $w=@fopen("AujevshsjsbWood","w");
    fwrite($w,$W-10);
    $H=file_get_contents("Aujevshsjsbsold.txt");
    $h=@fopen("Aujevshsjsbsold.txt","w");
    fwrite($h,$H+10*$L);
    $w=@fopen("AujevshsjsbStone","w");
    fwrite($w,$S-10);
    $w=@fopen("AujevshsjsbFish","w");
    fwrite($w,$F-10);
  }
}
if($barr==1){
  $W=file_get_contents("AujevshsjsbWood");
  $S=file_get_contents("AujevshsjsbStone");
  $F=file_get_contents("AujevshsjsbFish");
  if($W-10<0||$S-10<0||$F-10<0){

  }
  else{
    $H=file_get_contents("Aujevshsjsbsold.txt");
    $h=@fopen("Aujevshsjsbsold.txt","w");
    fwrite($h,$H+1*$L);
    $w=@fopen("AujevshsjsbWood","w");
    fwrite($w,$W-10);
    $w=@fopen("AujevshsjsbStone","w");
    fwrite($w,$S-10);
    $w=@fopen("AujevshsjsbFish","w");
    fwrite($w,$F-10);
  }
}
if($forr==1){
  $H=file_get_contents("AujevshsjsbWood");
  $h=@fopen("AujevshsjsbWood","w");
  fwrite($h,$H+9*$L);
}
if($fish==1){
  $H=file_get_contents("AujevshsjsbFish");
  $h=@fopen("AujevshsjsbFish","w");
  fwrite($h,$H+9*$L);
}
if($ston==1){
  $H=file_get_contents("AujevshsjsbStone");
  $h=@fopen("AujevshsjsbStone","w");
  fwrite($h,$H+9*$L);
}
?>
<table>
<td style="width:calc(100% - 50px)">
<?php
  include "AujevshsjsbBuild";
?>
</td>
<td style="text-align:right;width:50px">
<?php
  $W=file_get_contents("AujevshsjsbWood");
  $S=file_get_contents("AujevshsjsbStone");
  $F=file_get_contents("AujevshsjsbFish");
  include "Wood";
  echo $W;
  echo "<br>";
  include "Ston";
  echo $S;
  echo "<br>";
  include "Fish";
  echo $F;
if($fish==2){
  $W=file_get_contents("AujevshsjsbWood");
  $S=file_get_contents("AujevshsjsbStone");
  $F=file_get_contents("AujevshsjsbFish");
  if($W-1000<0||$S-1000<0){

  }
  else{
  $w=@fopen("AujevshsjsbWood","w");
  fwrite($w,$W-1000);
  $s=@fopen("AujevshsjsbStone","w");
  fwrite($s,$S-1000);
  $f=@fopen("AujevshsjsbFish","w");
  fwrite($f,$F-1000);
  $level=file_get_contents("AujevshsjsbLevel");
  $lev=@fopen("AujevshsjsbLevel","w");
  fwrite($lev,$level+1/3);
  $build=file_get_contents("AujevshsjsbBuild");
  $building=@fopen("AujevshsjsbBuild","w");
  fwrite($building,$build.'<td><form action="AujevshsjsbMenu.php" method="post"><button name="fish" value=1 type="submit" style="background-color:white;border:none"><img style="width:40px;height:40px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHsAAABrCAIAAADYc2qzAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAO6SURBVHhe7dHbduQgDETR/P9PZ5jmKEu0wRa+yBhrP01UEnFqfn6Dr2jcWzTuLRr3Fo17i8a9RePeonFv0bi3Zzf+I/j5CR7cOGUrBGObqvGEbGCzNZ4Qj2rCxjOWxvPgxhPabWBpMDM3nrE6jGc3ntDrKlbH8IrGE7YH8PjGE0o14OBWczZeHWb55EYzNJ5Qp6gO/+T0LnM2nrTmWU5vMUnjCV0Kph+MSmTupm08IfhgVCLzNU/jCUUKpoJpiczRzI0nBIJpiczLVI0ntCiYKgQKgZfJG08IFAKFwMVsjSe0KJiWyARTF9E4CK43f+MJQYlMML3ehI0ntCiYlsgE0+tF42B6vZc2TqAQXC8a/4+pizkbT+hSMBVMBVMXb2yckULgIhr3buB1jfOzQuDl7Y0zdfSuxvlByXNPL2qcfyl509mcjdOoqA6TPHf2lsb5l5I3/b2i8SX27hCNe3tj4yzd5HWNs3GfCRun2ho2bhWNe3tR48R3q3wHH6gQPAQfXSI7Ay8qBDbf27zRg8th8FklMhtuenBpcELjm3jaBb+yRKYQnId3DTwat+MjduGJm/ARBh7//29Adwb1VZ4JNa1+cnWbuhtno0Q2C/6qBeIGlrbsb5BVAw6GwWf14HIVq1uaezyzhe3z8G4/7k/F0wYcGGys8p4BBw/HH9ODSzPrAc9vYfuZ+Bs6cWzWccBvsOHmIfhog+VyfsHOesDz/bgfEp9ow81djVeHK/L+IPgmG24EU4XAbGfjCcEHIwMO7sAX2HCzQCyY9ui44ZcIpgqBDTcX45eZcdbGnmDaY3/jCcECsRlnJ+HRfty3sacQ9Oi74fcIpm3sdeK4B5cH8NAqVgXTTh1n/B6FYBWrY+NbV7GqEHTaPuP5Gja2sH03vuaDkWDaxp5C0G/tkrcbWDLgQKkOL5K/4QuZYFrDRolsF9MHLbFnxplgKpieh3fb2BNMF4gXiHepHPNqG3s9uFQIFogP4KFVrCoECsEC8V7f97zawFInjktke/FKA0urWBVMFYIS2QHfT/Bwiawf9wvEh/HcAnEbewqBYKoQHFY8xNsKQT/uG1haxepevFLDhkKgEAimZyje4nnBtB/3DSy1sXcMby0Ql8gUAoXgsOIh3g7H0GZDNH4JCq2Jxi9BoTXfGRfhGNqsqWfchV0osWEjDqeLxr1F496icW/RuLdo3Fs07i0a9xaNe4vGvUXj3qJxb9G4t2jcWzTuLRr3Fo17i8a9RePeonFv0bi3aNxbNO4tGvf1+/sPOkQ4pZk0R0oAAAAASUVORK5CYII="></button></form></td>');
  }
}

if($forr==2){
  $W=file_get_contents("AujevshsjsbWood");
  $S=file_get_contents("AujevshsjsbStone");
  $F=file_get_contents("AujevshsjsbFish");
  if($F-1000<0||$S-1000<0){

  }
  else{
  $w=@fopen("AujevshsjsbWood","w");
  fwrite($w,$W-1000);
  $s=@fopen("AujevshsjsbStone","w");
  fwrite($s,$S-1000);
  $f=@fopen("AujevshsjsbFish","w");
  fwrite($f,$F-1000);
  $level=file_get_contents("AujevshsjsbLevel");
  $lev=@fopen("AujevshsjsbLevel");
  fwrite($lev,$level+1/3,"w");
  $build=file_get_contents("AujevshsjsbBuild");
  $building=@fopen("AujevshsjsbBuild","w");
  fwrite($building,$build.'<td><form action="AujevshsjsbMenu.php" method="post"><button name="forr" value=1 type="submit" style="background-color:white;border:none"><img style="width:40px;height:40px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHoAAABpCAIAAAB6eaCGAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAinSURBVHhe7dg9dtRIFIZhh4QTErIcQkJCQkJCMkKWQMgSCFkSSyBk6ljvqyNX1ZVudTUycPQkHn33R+pyd49nHn5dTnQd96mu4z7Vv3zcX79+ffXq1UOjhF++fKHpXP/scZcD5XQD5dDL74Pus/ybx/39+/f//vuPc429ePHi5Lf5v3ncL1++5EQfHn7+/En6qFy+e/eO2qMzv1ue7bjLG3D7xXrfjzZLHx7ev39P9NTnz5/p0KdPn6j9Ts9z3N0P+70+2mU5Gx/2Xl37Ni+/mx8/flD+PZ7nuLcf9q6dD3j1sdhaPiLb5czEyqG/fv2a7sdfeXnjlzy6y86DZTzPcfPsftjbj/ai+wE//FWtom+SSjnxN2/eMPN44t0P39byK7nB7HFv3wXlHz5+/Jh5U5Bu3n3tR3seq3O+fftWDprJI6WTsUFTx334Lmgt585FcCLVBzxCt9qPCIW0Dx8+MKnq81EejML48sXUcec/1xEWNQ7f7DtfFMu5J79JtqqbdjdQe5bj5s6PT1a9ueh4tHN2dPw9eO7nPe7qMnpntedO4e8Rfb+XL8nMfzfc+IKrv5OWcH2U5TKy/RwQ/T3a7/dV5t+fN77g7bf227dvlzD/pZn8xfyB9v+lQlPsxhfM+sezLk9QhftK583/NvszLa+r4Dq21xH9l9UWremzXjDzG3ADkf5O5ZS42eRxZ/7Oo/XPOG62B2i6t6H/Z7DXwY7Y9tuAKIeZe2N7jL67YnXuuzF13FzvojWHmTTGjgZp2kXrnQx9kxR10/J9XZS/Illz03GTilSkOcyINEBTjL4cZjYoPCpntf1/GKS76qb1m2j79zy1XbSKVKQiTWDgKWo9dMToS2AgJ/lX1sG5LKjtolWkIhXpEbontEuWzRkMJOT/oj04lxZ9DcoiFalIj9A9oV2ybM5gIIGBhINz6aL1KWoiFalIj9A9oV2ybM5gIIGBhINzidC9QUGkIhVpAgO3ajcsazMYUDcsljyp7mbHEbo3KIhUpCLNYUbdMBKNZzAg0snXwk+x4wjdGxREKlKR5jAj0g0KPW11GclgQKSTr4WfYodIE/egIFKRijSHGZFuUOhpq8tIBgMinXwt/BQ7RJq4BwWRilSkOcyIdINCT1tdRjIYEOnka+Gn2CHSxD0oiFSkIs1hRqQbFHra6jKSwYBIJ18LP8UOkSbuQUGkIhVpDjMi3aDQ01aXkQwGRDr5Wvgpdog0cQ8KIhWpSJu8oLBBQaRPUWu0paU/gwGRTiws6m52iDRxDwoiFek9sDFAk7pJEgMinVhY1N3sEGniHhREKtJ7YGOAJnWTJAZEOrGwqLvZIdLEPSiIVKT3wMYATeomSQyIdGJhUXezQ6SJe1AQqUjvgY0BmtRNkhgQ6cTCou5mh0gT96AgUpEeyXQuCyM0qZskMSDSiYVF3c0OkSbuQUGkIhVpYm1BTaQBmtRNkhgQ6cTCou5mh0gT96AgUpGKNLG2oCbSAE3qJkkMiHRiYVF3s0OkiXtQEKlIRZpYW1ATaYAmdZMkBkQ6sbCou9kh0sQ9KIhUpCJNrC2oiTRAk7pJEgMinVhY1N3sEGniHhREKlKRJtYW1EQaoEndJIkBkU4sLOpudoi0yQ8xJlKR5h6dmkgDNKmbJDEg0omFRd3NDpE2+SHGRCrS3KNTE2mAJnWTJAZEOrGwqLvZIdImP8SYSEWae3RqIg3QpG6SxIBIJxYWdTc7RNrk+5jZoCDS3KNTE2mAJnWTJAZEOrGwqLvZIdIm38HAU9REmnt0aiIN0KRuksSASCcWFnU3O0Q6fW/KIs2NUxNpgCZ1kyQGRDqxsKi72SHS6XtTFmlunJpIAzSpm+yjr0F5fOFW3c0OkY7nFcoizY1TE2mAJnWTFVEOM4PPU6m72SHS8bxCWaS5cWoiDdCkbrLgOo2xweep1N3sEOl4XqEs0tw4NZEGaFKb3GzZX3At0py6mx0iHc8rlEWaG6cm0gBNapObLfsLrkWaU3ezQ6TjeYWySHPj1EQaoEltcmjZU3At0sHnqdTd7BDp9L0pizQ3Tk2kAZrUJjuWDStSkQ4+T2X2HlyLtEFZpLlxaiIN0KQ22bFsWJGKdPB5KrP34FqkDcoizY1TE2mAJnWTFZFIRSrSweepzN6Da5E2KIs0N05NpAGa1E1WRCIVqUgHn6cyew+uRdqgLNLcODWRBmhSN1kRiVSkIh18nsrsPbgWaYOySHPj1EQaoEndZEUkUpGKdPB5KrP34FqkDcoizY1TE2mAJnWTFZFIRSrSweepzN6Da5E2KIs0N05NpAGa1E1WRCIVqUgHn6cyew+uRdqgLNLcODWRBmhSN1kRiVSkIh18nsrsPbgWaYOySHPj1EQaoEndZEUkUpGKdPB5KrP34FqkDcoizY1TE2mAJnWTFZFIRSrSweepzN6Da5E2KIs0N05NpAGa1E1WRCIVqUgHn6cyew+uRdqgLNLcODWRBmhSN1kRiVSkIh18nsrsPbgWaYOySHPj1EQaoEndZEUkUpGKdPB5KrP34FqkDcoizY1TE2mAJnWTFZFIRSrSweepzN6Da5E2KIs0N05NpAGa1E1WRCIVqUgHn6cyew+uRdqgLNLcODWRBmhSN1kRiVSkIh18nsrsPbgWaYOySHPj1EQaoEndZEUkUpGKdPB5KrP34FqkDcoizY1TE2mAJnWTFZFIRSrSweepzN6Da5E2KIs0N05NpAGa1E1WRCIVqUgHn6cyew+uRdqgLNLcODWRBmhSN1kRiVSkIh18nsrsPbgWaYOySHPj1EQaoEndZEUkUpGKdPB5Kgf3uBzi4HKu474Dzi7hOu474OwSruO+A84uodPKjksOp5Yz1n2ZdB33qa7jPtV13Ke6jvtU13Gf6jruU13HfarruE91HfepruM+1XXcp7qO+1TXcZ/qOu5TXcd9quu4T3Ud96mu4z7Vddwn+vXrf/wHVsfOjMUCAAAAAElFTkSuQmCC"></button></form></td>');
  }
}

if($ston==2){
  $W=file_get_contents("AujevshsjsbWood");
  $S=file_get_contents("AujevshsjsbStone");
  $F=file_get_contents("AujevshsjsbFish");
  if($W-1000<0||$F-1000<0){

  }
  else{
  $w=@fopen("AujevshsjsbWood","w");
  fwrite($w,$W-1000);
  $s=@fopen("AujevshsjsbStone","w");
  fwrite($s,$S-1000);
  $f=@fopen("AujevshsjsbFish","w");
  fwrite($f,$F-1000);
  $level=file_get_contents("AujevshsjsbLevel");
  $lev=@fopen("AujevshsjsbLevel","w");
  fwrite($lev,$level+1/3);
  $build=file_get_contents("AujevshsjsbBuild");
  $building=@fopen("AujevshsjsbBuild","w");
  fwrite($building,$build.'<td><form action="AujevshsjsbMenu.php" method="post"><button name="ston" value=1 type="submit" style="background-color:white;border:none"><img style="width:40px;height:40px" src="data:image/png;base64,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"></button></form></td>');
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
</form><td>