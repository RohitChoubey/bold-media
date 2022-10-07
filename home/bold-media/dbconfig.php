
<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "newswash";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

class DBController {
    // Database Connection Properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = "newswash";

    // connection property
    public $db = null;

    // call constructor
    public function __construct()
    {
        $this->db = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->db->connect_error){
            echo "Fail " . $this->db->connect_error;
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    // for mysqli closing connection
    protected function closeConnection(){
        if ($this->db != null ){
            $this->db->close();
            $this->db = null;
        }
    }
}