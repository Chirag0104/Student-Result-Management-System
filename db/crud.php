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
            $sql = "SELECT * FROM `student_info` ORDER BY `Class` ASC, `Roll_No` ASC;";
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
            $sql = "SELECT DISTINCT(Class) FROM `student_info` ORDER BY `Class` ASC;";
            $result = $this->db->query($sql);

            return $result;
        }

        public function student_count($class)
        {
            

            $sql = "SELECT COUNT(Class) FROM `student_info` WHERE `Class`='$class';";
            $student_count = $this->db->query($sql);

            return $student_count;
        }


        public function subject_data($SName,$Class){
            try {
                $sql = "INSERT INTO subject_info(Subject,Class) VALUES (:Name,:Class)";
                $statement = $this->db->prepare($sql);
                $statement->bindparam(':Name',$SName);
                $statement->bindparam(':Class',$Class);
                $statement->execute();
                if($statement) 
                {
                     echo '<script type="text/javascript">';
                     echo ' alert("Subject added successfully")';  // showing an alert box.
                     echo '</script>';

                 }

                return True;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function fetch_data()
        {
            # code...
            $sql = "SELECT * FROM subject_info ORDER BY `Class` ASC;";
            $result = $this->db->query($sql);

            return $result;
        }

        public function delete_subject($subject,$Class)
        {
            $sql = "DELETE FROM `subject_info` WHERE `Subject`='$subject' and `Class`='$Class';";
            $result = $this->db->query($sql);
        }

        public function fetch_subject($Class)
        {
            # code...
            $sql = "SELECT * FROM subject_info WHERE `Class`='$Class';";
            $result = $this->db->query($sql);

            return $result;
        }

        public function fetch_student($Class)
        {
            # code...
            $sql = "SELECT * FROM student_info WHERE `Class`='$Class';";
            $result = $this->db->query($sql);

            return $result;
        }

        public function result_update($SName,$Class,$Subject,$Marks){
            try {
                $sql = "INSERT INTO result(Name,Class,Subject,Marks) VALUES (:Name,:Class,:Subject,:Marks)";
                $statement = $this->db->prepare($sql);
                $statement->bindparam(':Name',$SName);
                $statement->bindparam(':Class',$Class);
                $statement->bindparam(':Subject',$Subject);
                $statement->bindparam(':Marks',$Marks);
                $statement->execute();
                if($statement) 
                {
                     echo '<script type="text/javascript">';
                    //  echo ' alert("Result declared successfully")';  // showing an alert box.
                     echo '</script>';

                 }

                return True;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function view_result()
        {
            # code...
            $sql = "SELECT DISTINCT `Class`,`Name` FROM result ORDER BY `Class` ASC ";
            $result = $this->db->query($sql);

            return $result;
        }

        public function aggregate_result($Name,$Class)
        {
            # code...
            $sql = "SELECT SUM(Marks) AS Total_Marks FROM result WHERE `Name`='$Name' and `Class`='$Class'";
            $result = $this->db->query($sql);

            return $result;
        }

        public function fetch_subject_2($Class)
        {
            # code...
            $sql = "SELECT `Subject` FROM subject_info WHERE `Class`='$Class';";
            $result = $this->db->query($sql);

            return $result;
        }

        public function fetch_result_2($Class,$Name)
        {
            # code...
            $sql = "SELECT `Subject`,`Marks` FROM result WHERE `Class`='$Class' and `Name`='$Name';";
            $result = $this->db->query($sql);

            return $result;
        }

        public function update_data($Name,$Class,$Roll_No,$Email,$Password,$S_No){
           
                $sql = "UPDATE `student_info` SET `Name`='$Name',`Class`='$Class',`Roll_No`='$Roll_No',`Email`='$Email',`Password`='$Password' WHERE `S_No`='$S_No'";
                $result = $this->db->query($sql);
        }

        public function fetch_student_3($S_No)
        {
            # code...
            $sql = "SELECT * FROM student_info WHERE `S_No`='$S_No';";
            $result = $this->db->query($sql);

            return $result;
        }



    }

        

?>