<?php    
    class crud{

        private $db;

        function __construct($conn)
        {   
            $this->db = $conn;
        }

        public function insert_data($Name,$Class,$Roll_No,$Email,$Password){
            try {
                $sql = "INSERT INTO student_info(Name,Class,Roll_No,Email,Password) VALUES (:Name,:Class,:Roll_No,:Email,:Password)";
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
            $sql = "SELECT * FROM student_info where `Email`='$email' and `Password` = '$password';";
            $result = $this->db->query($sql);

            return $result;
        }

        public function loginconfirm_admin($email,$password)
        {
            # code...
            $sql = "SELECT * FROM admin_info where `Email`='$email' and `Password` = '$password';";
            $result = $this->db->query($sql);

            return $result;
        }

        public function student_info($id)
        {
            $sql = "SELECT * FROM student_info where `S_No`='$id';";
            $result = $this->db->query($sql);

            return $result;
        }

        public function students_data()
        {
            $sql = "SELECT * FROM `student_info`;";
            $result = $this->db->query($sql);

            return $result;
        }

        public function delete_data($id)
        {
            $sql = "DELETE FROM `student_info` WHERE `S_No`='$id';";
            $result = $this->db->query($sql);
        }

        public function class_count()
        {
            $sql = "SELECT DISTINCT(Class) FROM `student_info`;";
            $result = $this->db->query($sql);

            return $result;
        }

        public function student_count($class)
        {
            

            $sql = "SELECT COUNT(Class) FROM `student_info` WHERE `Class`='$class';";
            $student_count = $this->db->query($sql);

            return $student_count;
        }





    }

        

?>