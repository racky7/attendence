<?php
    class crud{
        //private database object
        private $db;

        //constructor to initiaize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }

        //function to insert a new record into the attendee database

        public function insertAttendee($fname, $lname, $dob, $gender, $email, $phone){
            try {

                //define sql statement to be executed
                $sql = "INSERT INTO attendee (firstName,lastName,DOB,Gender,email,phone) VALUES (:fname,:lname,:dob,:gender,:email,:phone) ";
                //prepare the sql statement to be executed
                $stmt = $this->db->prepare($sql);
                //bind all placeholders to the actual values
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':gender',$gender);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':phone',$phone);
                //execute statement
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                
            }

        } 

        public function editAttendee($id, $fname, $lname, $dob, $gender, $email, $phone){

            try {
                $sql = "UPDATE `attendee` SET `firstName`=:fname,`lastName`=:lname,`DOB`=:dob,`Gender`=:gender,`email`=:email,`phone`=:phone WHERE attendee_id = :id ";

                //prepare the sql statement to be executed
                $stmt = $this->db->prepare($sql);
                //bind all placeholders to the actual values

                $stmt->bindparam(':fname',$fname);
                    $stmt->bindparam(':id',$id);
                    $stmt->bindparam(':lname',$lname);
                    $stmt->bindparam(':dob',$dob);
                    $stmt->bindparam(':gender',$gender);
                    $stmt->bindparam(':email',$email);
                    $stmt->bindparam(':phone',$phone);
                    //execute statement
                    $stmt->execute();
                    return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
               }
            


        }


        public function getAttendees(){
           try {
            $sql = "SELECT * FROM `attendee` a inner join gender_add s on a.Gender = s.gender_id";
            $result = $this->db->query($sql);
            return $result;
           } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
           }

        }

        public function getAtteneeDetails($id){
            try {
                $sql = "select * from attendee a inner join gender_add s on a.Gender = s.gender_id where attendee_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
             $stmt->execute();

             $result = $stmt->fetch();
            return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
               }
            
        }

        public function getGender(){
            try {
                $sql = "SELECT * FROM `gender_add`";
            $result = $this->db->query($sql);
            return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
               }
            
        }

        public function deleteAttendee($id){
            try {
                $sql = "DELETE from attendee where attendee_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->execute();
            return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
               }

        }
        
    }


?>