<?PHP
require_once("DBConfig.php");

$name1 = $_POST['name'];
$username1 = $_POST['username'];
$password1 = $_POST['password'];
$email1 = $_POST['email'];

$error1;
if(empty($name1)){
    $error1 = "Name is required";
}elseif(empty($username1)){
    $error1 = "userName is required";
}elseif(empty($password1)){
    $error1 = "password is required";
}elseif(empty($email1)){
    $error1 = "Email is required";
}else{

    $already1 = Mysqli_query($dbConnect, "SELECT * FROM `details` WHERE `email`= $email1");
    if(Mysqli_num_rows($already1)==0){


    $insertQrynew = "INSERT INTO `details`(`name`, `username`, `password`, `email`) 
    VALUES ('$name1','$username1','$password1','$email1')";
    
   $sqlQurey1 = Mysqli_query($dbConnect, $insertQrynew);
   if($sqlQurey1){
    $UserIdnew = Mysqli_insert_id($dbConnect);   
    $response1['Status'] = true;
    $response1['Message'] = "Registred Sucessfully";
    $response1['UserId'] = $UserIdnew;
   
   }else{
    $response1['Status'] = false;
    $response1['Message'] = "Registred failed";
   }
   }else{
    $response1['Status'] = false;
    $response1['Message'] = "Login page again";
   }

}


header('Content-Type: application/json; charset=UTF-8');
echo json_encode($response1);
?>