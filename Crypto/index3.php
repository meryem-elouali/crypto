<?php 
    $cf=$_GET['cf'];
    $p=$_GET['p'];
    $p1=$_GET['p1'];
    $u=$_GET['u'];
  for($i=0;$i<8;$i++){
    $A[$i]=$_GET[$i];
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
    <h3>Decrypt Form</h3>
    <h5>Yahouza,your private key: A=<?php  echo '('; for($i=0;$i<8;$i++) echo $A[$i].' ,' ; echo ');  u='.$u.' ;  p='.$p.' ;  p<sup>-1</sup>='.$p1 ;?></h5>
                    <form action=<?php echo 'decrypt.php?cf='.$cf.'&p1='.$p1.'&p='.$p.'&u='.$u.'&0='.$A[0].'&1='.$A[1].'&2='.$A[2].'&3='.$A[3].'&4='.$A[4].'&5='.$A[5].'&6='.$A[6].'&7='.$A[7] ?> method="post">
                        <div class="user-details">
                        <div class="input-box">
                            <span class="details">Message chiffré C</span>
                            <input type="text" placeholder="Enter your chiffer tex" value=<?php echo $cf;?> required>
                        </div>
                        <div class="input-box">
                            <span class="details">Message clair M</span>
                            <input type="text" placeholder="your message"  disabled>
                        </div>
                        </div>
                        <div class="button">
                        <input type="submit" value="decrypt">
                        </div>
                </form>
              </div> 
  </div>
</body>
</html>
