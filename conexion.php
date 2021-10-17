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

        public function user_data($loginuser,$conn)
        {
            $sql = "SELECT * FROM user WHERE username =  '" . $loginuser."' ";
            $result = $conn ->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row; } 
            else {
                return "0";
            }
        }

        public function user_sesions($loginuser,$conn)
        {
            $sql = "SELECT id, duration FROM sesion WHERE user = '" . $loginuser."' ORDER BY date DESC LIMIT 1";
            $result = $conn ->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row; } 
            else {
                echo "No data";
            }
        }

        public function user_game($loginuser,$conn)
        {
            $sql = "SELECT * FROM game WHERE sesion = '" . $loginuser."'";
            $result = $conn ->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row; } 
            else {
                echo "No data";
            }
        }

        public function all_sesion($loginuser,$conn){
            $sql = "SELECT id, date FROM sesion WHERE user = '" . $loginuser."'";
            $result = $conn ->query($sql);
            return $result;
        }

        public function total_time($loginuser,$conn){
            $sql = "SELECT SUM(duration) AS 'total' FROM sesion WHERE user= '" . $loginuser."'";
            $result = $conn ->query($sql);
            $row = $result->fetch_assoc();
            $total = $row['total'];
            return $total;
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
