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
                    <form action="decrypt.php" method="post">
                        <div class="user-details">
                        <div class="input-box">
                            <span class="details">Message chiffré C</span>
                            <input type="text" placeholder="Enter your chiffer tex" required>
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
