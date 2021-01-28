<?PHP
$user = array("name"=> "saji", "Id"=> "124536");
header('Content-Type: application/json; charset=UTF-8');

echo json_encode($user);
?>