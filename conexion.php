<?php 
    class Connection
    {
        private $server;
        private $user;
        private $pass;
        private $db;
        private $connection;

        public function __construct()
        {
            $this->server = "localhost";
            $this->user = "root";
            $this->pass = "";
            $this->db = "save_the_axo";
        }

        public function getConnection()
        {
            $this->connection = mysqli_connect($this->server, $this->user, $this->pass, $this->db) or die('"connection"');
            mysqli_set_charset($this->connection,"utf-8");
            return $this->connection;
        }

        public function __destruct()
        {
            if($this->connection)
            {
                mysqli_close($this->connection);
            }
        }
    }
?>
