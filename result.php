<html>
<head>
	<title></title>
</head>
<body>

  <?php
  $name=$_POST["name"];
  $number=$_POST["number"];
  $email=$_POST["email"];
  ?>

<table border="1 px" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <tr>
    <th>username</th>
    <th>phone no.</th> 
    <th>email</th>
  </tr>
  <tr>
    <td><?php echo $name ?></td>
    <td><?php echo $number?></td>
    <td><?php echo $email?></td>
  </tr>
  
</table>

</body>
</html>
