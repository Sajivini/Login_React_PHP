<?PHP
$dbConnect = Mysqli_connect('localhost','root','','exam');
if($dbConnect){
    echo " database connected Successfully";
}else{
    die("Connection Failed :" .Mysqli_connect_error());
}
?>