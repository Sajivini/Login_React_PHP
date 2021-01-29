<?PHP
require_once("DBConfig.php");
$username = $_POST['username'];
$password = $_POST['password'];

$loginqry = "SELECT * FROM `details` WHERE `username`='$username' AND `password`= '$password'";
$qry = Mysqli_query($dbConnect,$loginqry );

if(Mysqli_num_rows($qry)>0){
    
    $userObj = mysqli_fetch_assoc($qry);
    $response['Status'] = true;
    $response['Message'] = "Login Sucessfully";
    $response['data'] = $userObj;
}else{
    $response['Status'] = false;
    $response['Message'] = "Login failed";
}


header('Content-Type: application/json; charset=UTF-8');
echo json_encode($response);

//Its login API connecting methodd
//thanxxx
//ytesxcvgjnnj ,kknnnnn
//iytedcvhb

?>
