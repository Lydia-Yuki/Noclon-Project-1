<?Php
//error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);
//$dbhost_name = "localhost";
//$database = "prisonpro"; // Change your database nae
//$username = "root";          // Your database user id 
//$password = "";          // Your password

//////// Do not Edit below /////////
//try {
//$dbo = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
//} catch (PDOException $e) {
//print "Error!: " . $e->getMessage() . "<br/>";
//die();
//}

define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'prison');
   $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

?>