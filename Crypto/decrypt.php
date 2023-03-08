<?php 
   $cf=$_GET['cf'];
   $p=$_GET['p'];
   $pmoins1=$_GET['p1'];
   $u=$_GET['u'];
 for($i=0;$i<8;$i++){
   $A[$i]=$_GET[$i];
   $B[$i]=($p*$A[$i])%$u;
 }
 $characters = explode(',', $cf);
 $i=0;
 foreach ($characters as $character) {
    $cprime[$i]=($pmoins1*(int)$character)%$u;
    $i++;
  }
function glouton($entier,$n,$A){
    for($i=($n-1);$i>=0;$i--){
        if($entier>=$A[$i]){
            $entier=$entier-$A[$i];
            $b[$i]=1;
        }
        else{
            $b[$i]=0;  
        }
    }
    if($entier==0) return $b;
    else return -1;
} 
$len=count($characters);
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
 
function binaryToString($binary)
{   $binary=implode($binary);
    $binaries = explode(' ', $binary);
 
    $string = null;
    foreach ($binaries as $binary) {
        $string .= pack('H*', dechex(bindec($binary)));
    }
 
    return $string;    
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
   </head>
<body>
  <div class="container">
    <div class="title">Merkle and Hellman algorithm</div>
    <div class="content">
                    <h3>Decrypt Form</h3>
                    <?php 
                        for($i=0;$i<count($cprime);$i++){
                            $b[$i]=glouton($cprime[$i],8,$A);
                            for($j=0;$j<8;$j++) $trs[$j]=$b[$i][$j];
                            $t[$i]=binaryToString($trs);
                        }
                        ?>
                    <form action="index.php" method="post">
                        <div class="user-details">
                        <div class="input-box">
                            <span class="details">Message chiffré C</span>
                            <input type="text" placeholder="chiffertex" value=<?php echo $cf;?> disabled ><br><br><br>
                                <table border="groove">
                                    <tr><td>Cypher</td><td>p<sup>-1</sup>*Cmod(u)</td><td>Cprime</td></tr>
                                    <?php   for($i=0;$i<$len;$i++)
                                        echo '<tr><td>'.$characters[$i].'</td><td>'.$pmoins1.'*'.$characters[$i].'mod'.$u.'</td><td>'.$cprime[$i].'</td></tr>';
                                        ?>
                                </table>
                        </div>
                        <div class="input-box">
                            <span class="details">Message clair M</span>
                            <input type="text" placeholder="your message  " value=<?php echo implode($t);?> disabled>
                            <span class="details">A=<?php  echo '('; for($i=0;$i<8;$i++) echo $A[$i].' ,' ; echo ');  u='.$u.' ;  p='.$p.' ;  p<sup>-1</sup>='.$pmoins1 ;?></span>
                             <br>
                             <table border="groove">
                                    <tr><td>Cprime</td><td>message(M)</td><td>text</td></tr>
                                    <?php   
                                    for($i=0;$i<$len;$i++){
                                         echo '<tr><td>'.$cprime[$i].'</td><td>';
                                         for($j=0;$j<8;$j++) echo $b[$i][$j];
                                         echo '</td><td>'.$t[$i].'</td></tr>';
                                    }
                                        ?>
                            </table>
                        </div>
                        </div>
                        <div class="button">
                        <input type="submit" value="Home">
                        </div>
                </form>
    </div>
  </div>
</body>
</html>
