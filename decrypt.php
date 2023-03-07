<?php 
$A=[3,7,11,25,51];
$p=37;
$pmoins1=0;
$u=131;
$t1='X';
$t2='X';
$b1='010101';
$b2='110011';

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
{
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
                    <form action="index.php" method="post">
                        <div class="user-details">
                        <div class="input-box">
                            <span class="details">Message chiffré C</span>
                            <input type="text" placeholder="chiffertex" >
                            <span class="details">Private key</span>
                            <span class="details">A=(3,7,11,25,51)</span>
                                <span class="details">P=<?php echo $p ?></span>
                                <span class="details">P<sup>-1</sup>=<?php echo $pmoins1 ?></span>
                                <span class="details">u=<?php echo $u ?></span>
                                <table border="groove">
                                    <tr><td>text</td><td>binary</td><td>cypher</td></tr>
                                    <tr><td><?php echo $t1 ?></td><td><?php echo strigToBinary($t1).PHP_EOL; ?></td><td>11</td></tr>
                                    <tr><td><?php echo $t2 ?></td><td><?php echo strigToBinary($t2).PHP_EOL; ?></td><td>11</td></tr>
                                </table>
                        </div>
                        <div class="input-box">
                            <span class="details">Message clair M</span>
                            <input type="text" placeholder="your message  " disabled>
                            <span class="details">Public key(B)</span>
                                <table border="groove">
                                    <tr><td>A</td><td>p*ai(mod u )</td><td>B</td></tr>
                                        <?php 
                                        for($i=0;$i<5;$i++)
                                        echo '<tr><td>'.$A[$i].'</td><td>'.$p.'*'.$A[$i].'mod('.$u.')</td><td>'.($p*$A[$i])%$u.'</td></tr>';
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
