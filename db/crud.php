<?php    
    class crud{

        private $db;

        function __construct($conn)
        {   
            $this->db = $conn;
        }

        public function insert_data($Name,$Class,$Roll_No,$Email,$Password){
            try {
                $sql = "INSERT INTO student(Name,Class,Roll_No,Email,Password) VALUES (:Name,:Class,:Roll_No,:Email,:Password)";
                $statement = $this->db->prepare($sql);
                $statement->bindparam(':Name',$Name);
                $statement->bindparam(':Class',$Class);
                $statement->bindparam(':Roll_No',$Roll_No);
                $statement->bindparam(':Email',$Email);
                $statement->bindparam(':Password',$Password);

                $statement->execute();
                if($statement) 
                {
                     echo '<script type="text/javascript">';
                     echo ' alert("You have been successfully registered")';  // showing an alert box.
                     echo '</script>';
                 }

                return True;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function loginconfirm($email,$password)
        {
            # code...
            $sql = "SELECT * FROM student where `Email`='$email' and `Password` = '$password';";
            $result = $this->db->query($sql);

            return $result;
        }

        public function student_info($id)
        {
            $sql = "SELECT * FROM student where `S_No`='$id';";
            $result = $this->db->query($sql);

            return $result;
        }

    }

    

?>