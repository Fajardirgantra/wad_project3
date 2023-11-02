<?php
$conn= mysqli_connect("localhost","root","","wad_project3");

$result = mysqli_query($conn,"SELECT * FROM student");
//var_dump($result);
//var_dump(mysqli_fetch_object($result));
//$data = mysqli_fetch_object($result);
//var_dump($data -> name);
?>



<!DOCTYPE html>
<html lang="en">
<style>
table, th, td {
  border:1px solid black;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
</head>
<body>
<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>nim</th>
    <th>adress</th>
  </tr>
  <?php while ( $data = mysqli_fetch_object($result)) {
    ?>
  
  <tr>
    <td><?php echo $data -> id ?></td>
    <td><?php echo $data -> name ?></td>
    <td><?php echo $data -> nim ?></td>
    <td><?php echo $data -> adress ?></td>
  </tr>
<?php
  }
  ?>
</table>
</body>
</html>