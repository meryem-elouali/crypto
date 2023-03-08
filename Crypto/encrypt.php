<?php 
$p=$_GET['p'];
$pmoins1=$_GET['p1'];
$u=$_GET['u'];
for($i=0;$i<8;$i++){
    $A[$i]=$_GET[$i];
    $B[$i]=($p*$A[$i])%$u;
  }
//$A=[2,7,11,21,42,89,180,354];
//$p=588;
//$u=881;
//$pmoins1= inverse_mod($p,$u);
$message=$_POST['message'];
$len=strlen($message);
$t1=$message[0];
$t2=substr($_POST['message'],1,2);;
//for($i=0;$i<count($A);$i++){
//$B[$i]=($p*$A[$i])%$u;
//}
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
                    <form action=<?php echo 'index3.php?cf='.$cf.'&p1='.$pmoins1.'&p='.$p.'&u='.$u.'&0='.$A[0].'&1='.$A[1].'&2='.$A[2].'&3='.$A[3].'&4='.$A[4].'&5='.$A[5].'&6='.$A[6].'&7='.$A[7] ?>  method="post">
                        <div class="user-details">
                        <div class="input-box">
                            <span class="details">Message clair M</span>
                            <input type="text" placeholder="Enter your message " value=<?php echo $_POST['message']?> disabled>
                                <table border="groove">
                                    <tr><td>text</td><td>binary</td><td>cypher</td></tr>
                                    <?php   for($i=0;$i<$len;$i++)
                                        echo '<tr><td>'.$message[$i].'</td><td>'.$b[$i].'</td><td>'.$c[$i].'='.$cmodU[$i].'mod'.$u.'</td></tr>';
                                        ?>
                                </table>
                        </div>
                        <div class="input-box">
                            <span class="details">Message chiffré C</span>
                           
                            <input type="text" placeholder="chiffertex " value=<?php echo $cf;?> disabled><br><br>
                            <span class="details">Public key(B,u)<br></span>
                                        <?php 
                                        echo 'B=(';
                                        for($i=0;$i<count($B);$i++)
                                        echo ','.$B[$i]; 
                                        echo ')<br>u='.$u;
                                        ?>
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
