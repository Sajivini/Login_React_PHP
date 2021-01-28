<?PHP
require_once("DBConfig.php");
$food_name = "poori";
$food_price = 250;
$insert = "INSERT INTO `food` (`Id`, `foodName`, `Price`, `Date`) VALUES ('05', '$food_name' ,'$food_price' ,'25/08/2020');";
$qry = Mysqli_query($dbConnect,$insert);
if($qry){
    $response['Status'] = true;
    $response['msg'] = "Insert sucessfully";
}else{
    $response['Status'] = false;
    $response['msg'] = "Insert failed";
}
header('Content-Type: application/json; charset=UTF-8');
echo json_encode($response);
?>