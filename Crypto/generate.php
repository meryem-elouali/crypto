<?php 
                $u=$_POST['u'];
                $p=$_POST['p'];
                for($i=0;$i<8;$i++){
                  $A[$i]=$_POST[$i];
                  $B[$i]=($p*$A[$i])%$u;
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
                <h3>Key Generated</h3>
                                <form action=<?php echo 'index2.php?p='.$p.'&u='.$u.'&0='.$B[0].'&1='.$B[1].'&2='.$B[2].'&3='.$B[3].'&4='.$B[4].'&5='.$B[5].'&6='.$B[6].'&7='.$B[7] ?> method="post">
                                    <div class="user-details">
                                    <div class="input-box">
                                    <span class="details">Private key</span><br><br>
                                    <h4>A=(
                                    <?php for($i=0;$i<count($A);$i++) echo $A[$i].' ' ;?>
                                    )</h4><br>
                                    <?php echo '<h4>u='.$u.'</h4><br><h4>p='.$p.'</h4>';?>
                                    </div>
                                    <div class="input-box">
                                   <span class="details">Public key(B)</span>
                                    <table border="groove">
                                    <tr><td>A</td><td>p*ai(mod u )</td><td>B</td></tr>
                                    <?php for($i=0;$i<count($A);$i++) echo '<tr><td>'.$A[$i].'</td><td>'.$p.'*'.$A[$i].'mod('.$u.')</td><td>'.$B[$i].'</td></tr>';?>
                                    </table>
                                   </div>
                                    </div>
                                    <div class="button">
                                    <input type="submit" value="Share the public key">
                                    
                                    </div>
                            </form>
                          </div>
                          </div>
</body>
</html>
