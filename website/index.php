<!Doctype html>
 <html lang ="en">
<head>
    <meta charset = "UTF-8">
    <meta name ="viewport" content ="width=device-width initial-scale=1.0" >
    <title>Document</title>
</head>
<body>   

<form action="" method="POST" >
  <table> 
      <tr>
          <td>Name:</td>
          <td><input type="text" name="u_name"></td>
      </tr> 
      <tr>
       <td>Email:</td>      
      <td><input type="text" name="u_pass"></td>
      </tr>
      <td>Email:</td>      
      <td><input type="text" name="u_pass"></td>
      </tr>
      <tr>

        <td></td>
     <td><input type="submit" name="u_login"></td>
      </tr>
</table>
</form>


<?php

$u_name = $_POST['u_name'];
$u_pass = $_POST['u_pass'];


echo $u_name;
echo $u_pass;
?>

</body>
</html>



