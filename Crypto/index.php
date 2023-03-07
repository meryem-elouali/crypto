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
    <h3>Keys Generation</h3>
    <h5>Yahouza please enter your private key</h5>
                    <form action="generate.php" method="post">
                        <div class="user-details">
                        <div class="input-box">
                        <span class="details">A supercroissant</span>
                          <table>
                            <tr>
                              <td> 
                            <input type="text" name="0"   required>
                            </td>
                            <td> 
                            <input type="text" name="1"   required>
                            </td>
                            <td> 
                            <input type="text" name="2"   required>
                            </td>
                            <td> 
                            <input type="text" name="3"   required>
                            </td>
                            <td> 
                            <input type="text" name="4"   required>
                            </td>
                            <td> 
                            <input type="text" name="5"   required>
                            </td>
                            <td> 
                            <input type="text" name="6"   required>
                            </td>
                            <td> 
                            <input type="text" name="7"   required>
                            </td>
                          </tr>
                          </table>
                          <table>
                            <tr>
                              <td> 
                            <span class="details">Entier Modulo U</span>
                            <input type="text" name="u"   required>
                            </td>
                            <td> 
                            <span class="details">Le multiplicateur premier P</span>
                            <input type="text" name="p"   required>
                            </td>
                            </tr>
                          </table>
                        </div>
                        <div class="button">
                        <input type="submit" value="Generate the public key">
                        </div>
                        </div>
                </form>
              </div> 
  </div>
</body>
</html>
