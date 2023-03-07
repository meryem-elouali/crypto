<?php 
$A=[2,7,11,21,42,89,180,354];
$p=588;
$u=881;
function inverse_mod($p,$u){
$u0=$u;
$p0=$p;
$t0= 0;
$t=1;
$q=$u0/$p0;
$q=floor($q);
$r=$u0-($q* $p0);
while($r>0)
{
    $temp=$t0-($q*$t);
    if($temp>=0) $temp=$temp%$u;
    else  $temp=$u-((-$temp)%$u);
    $t0=$t;
    $t=$temp;
    $u0=$p0;
    $p0=$r;
    $q=$u0/$p0; 
    $q=floor($q);
    $r=$u0-($q* $p0);
}
if($p0!=1) return 0;
else  return $t;
}
$pmoins1= inverse_mod($p,$u);
$message=$_POST['message'];
$len=strlen($message);
$t1=$message[0];
$t2=substr($_POST['message'],1,2);;
for($i=0;$i<count($A);$i++){
$B[$i]=($p*$A[$i])%$u;
}
function strigToBinary($string)
{
    $characters = str_split($string);
 
    $binary = [];
    foreach ($characters as $character) {
        $data = unpack('H*', $character);
        $binary[] = base_convert($data[1], 16, 2);
    }
 
    return implode(' ', $binary);    
}
 
function cypher($binary,$Bp)
{
    $binaries = explode(' ', $binary);
        for($i=0;$i<count($Bp)-1;$i++){
         $num=(int)$binary[$i];
         $C[$i]=$num*$Bp[$i+1];
       }
    return array_sum($C);    
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Merkle & Hellman</title>
   </head>
<body>
  <div class="container">
    <div class="title">Merkle and Hellman algorithm</div>
    <div class="content">
                    <h3>Encrypt Form</h3>
                    <?php 
                        for($i=0;$i<$len;$i++){
                            $b[$i]=strigToBinary($message[$i]).PHP_EOL;
                            $c[$i]=cypher($b[$i],$B);
                            $cmodU[$i]=$c[$i]%$u;
                        }
                        $cf=implode(',', $cmodU);
                          //  $b1=strigToBinary($t1).PHP_EOL;
                          //  $b2=strigToBinary($t2).PHP_EOL;
                         // $c1=cypher($b1,$B);
                        //  $c2=cypher($b2,$B);
                         //   $c=$c1.','.$c2;?>
                    <form action="index3.php" method="post">
                        <div class="user-details">
                        <div class="input-box">
                            <span class="details">Message clair M</span>
                            <input type="text" placeholder="Enter your message " value=<?php echo $_POST['message']?> disabled>
                            <span class="details">Private key</span>
                            <span class="details">A=[2,7,11,21,42,89,180,354]</span>
                                <span class="details">P=<?php echo $p ?></span>
                                <span class="details">P<sup>-1</sup>=<?php echo $pmoins1 ?></span>
                                <span class="details">u=<?php echo $u ?></span>
                                <table border="groove">
                                    <tr><td>text</td><td>binary</td><td>cypher</td></tr>
                                    <?php   for($i=0;$i<$len;$i++)
                                        echo '<tr><td>'.$message[$i].'</td><td>'.$b[$i].'</td><td>'.$c[$i].'='.$cmodU[$i].'mod'.$u.'</td></tr>';
                                        ?>
                                </table>
                        </div>
                        <div class="input-box">
                            <span class="details">Message chiffré C</span>
                           
                            <input type="text" placeholder="chiffertex " value=<?php echo $cf;?> disabled>
                            <span class="details">Public key(B)</span>
                                <table border="groove">
                                    <tr><td>A</td><td>p*ai(mod u )</td><td>B</td></tr>
                                        <?php 
                                        for($i=0;$i<count($A);$i++)
                                        echo '<tr><td>'.$A[$i].'</td><td>'.$p.'*'.$A[$i].'mod('.$u.')</td><td>'.$B[$i].'</td></tr>';
                                        ?>
                                </table>
                        </div>
                        </div>
                        <div class="button">
                        <input type="submit" value="go to decrypt">
                        </div>
                </form>
    </div>
  </div>
</body>
</html>
