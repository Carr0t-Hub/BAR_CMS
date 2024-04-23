<?php



class Migration
{
    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $conn;

    public function __construct($dbname = 'testdb', $host = 'localhost', $user = 'root', $pass = '')
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;
        $this->connect();
    }

    public function connect()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }



    public function create($table, $callback)
    {
        $startTime = microtime(true);

        $this->conn->select_db($this->dbname);

        $blueprint = new Blueprint();
        $callback($blueprint);

        $query = "CREATE TABLE IF NOT EXISTS $table (";
        $query .= implode(", ", $blueprint->getFields());
        $query .= ")";

        if ($this->conn->query($query) === true) {

            $endTime = microtime(true);
            echo "Table $table created successfully in database $this->dbname\n";
            echo "Time taken: " . ($endTime - $startTime) . " seconds\n";
            echo "--------------------------------------------\n";
        } else {
            echo "Error creating table: " . $this->conn->error . "\n";
        }
    }

    public function drop($table)
    {
        $this->conn->select_db($this->dbname);

        $query = "DROP TABLE IF EXISTS $table";

        if ($this->conn->query($query) === true) {
            echo "Table $table dropped successfully from database $this->dbname\n";
        } else {
            echo "Error dropping table: " . $this->conn->error . "\n";
        }
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}
