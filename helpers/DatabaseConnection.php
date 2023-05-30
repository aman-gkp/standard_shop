<?php



include_once('configuration.php');

class DatabaseConnection {
  

   
    public function connect() {
        $config = new Configuration();
        $this->connection = new mysqli($config->host, $config->username, $config->password, $config->database);

        if ($this->connection->connect_error) {
            die('Connection failed: ' . $this->connection->connect_error);
        }

        return $this->connection;
    }



    public function close() {
        if ($this->connection) {
            $this->connection->close();
        }
    }
}



?>