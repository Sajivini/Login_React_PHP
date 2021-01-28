<?PHP
require_once("DBConfig.php");
$qry = "SELECT * FROM `food`";
$sqlExl = Mysqli_query($dbConnect,$qry) or die(Mysqli_error($dbConnect));
if(Mysqli_num_rows($sqlExl>'0')){
    $i=0;
    while($val = mysqli_fetch_assoc($sqlExl)){
        $Food[$i] ["Id"] = $val ['Id'];
        $Food[$i] ["food_name"] = $val ['foodName'];
        $Food[$i] ["food_price"] = $val ['Price'];
        $Food[$i] ["date"] = $val ['Date'];
        $i = $i+1; 
        

    }
    $response['Status'] = true ;
    $response['msg'] = "Insert successed";
    $response['data'] = "$Food";
}else{
    $response['Status'] = false ;
    $response['msg'] = "Insert failed";
   
}
header('Content-Type: application/json; charset=UTF-8');
echo json_encode($response);
?>