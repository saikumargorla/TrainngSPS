 <?php 
 $serverName = "DESKTOP-P6C3DL5\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array( "Database" => "ERD","UID" =>"sps", "PWD"=>"sps");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$name = $_POST['u_name'];
$email = $_POST['email_id'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$knlang=$_POST['known_lang'];
$district=$_POST['districts'];
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}
 echo "You have registered successfully"; 
 $sql = "INSERT INTO RegForm (name,email_id,password,gender,known_lang,districts) VALUES (?,?,?,?,?,?)";
 $params = array($name,$email,$password,$gender,$knlang,$district);
 $stmt = sqlsrv_query( $conn, $sql,$params);
 ?>
