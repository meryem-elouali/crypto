<?php 
    $p=$_GET['p'];
    $u=$_GET['u'];
   for($i=0;$i<8;$i++){
    $B[$i]=$_GET[$i];
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
    <h3>Encrypt Form</h3>
    <h5>Maryem,here is yahouza's public key: B=<?php  echo '('; for($i=0;$i<8;$i++) echo $B[$i].' ,' ; echo '); u='.$u ;?></h5>
                    <form action="encrypt.php" method="post">
                        <div class="user-details">
                        <div class="input-box">
                            <span class="details">Message clair M</span>
                            <input type="text" name="message" placeholder="Enter your message " required>
                        </div>
                        <div class="input-box">
                            <span class="details">Message chiffré C</span>
                            <input type="text" name="cypher" placeholder="chiffertex "  disabled>
                        </div>
                        </div>
                        <div class="button">
                        <input type="submit" value="Encrypt">
                        </div>
                </form>
              </div> 
  </div>
</body>
</html>