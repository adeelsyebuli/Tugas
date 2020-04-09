<?php
parse_str($_POST['dataform'], $hasil);

echo 'firstname : ' . $hasil['first_name'];
echo 'lastname  : ' . $hasil['last_name'];
echo 'username : ' . $hasil['user_name'];
echo 'email : ' . $hasil['email'];
echo 'address : ' . $hasil['address'];

//$hostname = "localhost";
//$username = "root";
//$password = "";
//$databaseName = "shopee";

$link = mysqli_connect("localhost","root","","shopee");
//$sql = "INSERT INTO percobaan ('first_name','last_name','user_name','email','address') VALUES ('$hasil','$hasil','$hasil','$hasil','$hasil')";
//$sql = "INSERT INTO percobaan ('first_name','last_name','user_name','email','address') VALUES ('$hasil[firstname]','$hasil[lastname]','$hasil[username]','$hasil[email]','$hasil[address]')";
$sql = "INSERT INTO `percobaan`(`first_name`, `last_name`, `user_name`, `email`, `address`) VALUES ('$hasil[first_name]','$hasil[last_name]','$hasil[user_name]','$hasil[email]','$hasil[address]')";

if(mysqli_query($link,$sql))
{
  echo "records added successfully.";}
  else
  {
    echo "ERROR: Could not able to execute $sql.".
    mysqli_error($link);
  }
mysqli_close($link);
?>
