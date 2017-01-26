<?php

    /*
     The model class will be used to create functions that can help us interact with our database
    */

    class Model 
    {

        private $errors = array();

        public function __construct( $dbh )
        {
            $this->db = $dbh->db;
        }

        /**
        */
        public function validateForm( $data )
        {

            // Verify if all fields are filled
            foreach ($data as $index => $value) {
                if ( empty($value) || trim($value) == '' ) 
                {
                    $this->errors['error_'.$index] =  'Please fill the '.$index.' field.';
                }
            }
            // We return false if there is no error, otherwise we return the errors
            return sizeof($this->errors) == 0 ? false : $this->errors;

        }


        public function hash_password( $password )
        {
            if (!empty($password)) {
                $jeton = "";
                $salt_chars = array_merge(range('A','Z'), range('a','z'), range(0,9));
                for($i = 0; $i < 22; $i++) {
                  $jeton .= $salt_chars[array_rand($salt_chars)];
                }
                return crypt($password, sprintf('$2y$%02d$', 7) . $jeton);

            }else{
                return false;
            }
        }
        
        public function getId($email) 
        {
            $query = $this->db->prepare( " SELECT id 
                                        FROM User
                                        WHERE email = ?
                                    " );
              if ($query->execute(array($email)))
            {
                
                $query->setFetchMode(PDO::FETCH_OBJ);
                $fetchedData = $query->fetch();
                return $fetchedData->id;
            
            
        }}


        public function signIn( $email, $password )
        {
            $query = $this->db->prepare( " SELECT email, password, id 
                                        FROM User
                                        WHERE email = ?
                                    " );
            
         
            if ($query->execute(array($email)))
            {
                
                $query->setFetchMode(PDO::FETCH_OBJ);
                $fetchedData = $query->fetch();
              
                
//                console_log($fetchedData->id . "fetchedData");
//                    
                
                $digest = isset($fetchedData->password) ? $fetchedData->password : null;
                if (!is_null($digest)) {
//                    return $digest === crypt($password);
                    return $digest === crypt($password, $digest);
                   
                }else{
                    return false;

                }
            }else{
                return false;
            
            }

        }
        
         
        

        public function emailAlreadyUsed( $email )
        {
            $query = $this->db->prepare("SELECT COUNT(*) AS num FROM User WHERE email = ?");
            if ($query->execute(array($email)))
            {
                $query->setFetchMode(PDO::FETCH_OBJ);
                $fetchedData = $query->fetchAll();

                $total = isset($fetchedData[0]) ? $fetchedData[0]->num : null;
                return $total != 0;
            }else{
                return false;
            }
        }


        public function addUser($email, $password, $type, $name, $surname)
        {
            if (!empty($email) && !empty($password)) {
                $query = $this->db->prepare("INSERT INTO User (email, password, type, name, surname)  VALUES(?,?,?,?,?) ");
                return $query->execute(array($email, $this->hash_password($password), $type, $name, $surname));
            }else{
                return false;
            }
        }
        
         public function addCourse($id, $title, $description, $User_id)
        {
          
                $query = $this->db->prepare("INSERT IGNORE INTO Course (id, title, description, creation_timestamp, User_id )  VALUES(?,?,?,?,?) ");
                return $query->execute(array($id, $title, $description, time(), $User_id));
           
                
        }


        public function getExerciseOrder($CourseId)
        {
            $query = $this->db->prepare( " SELECT COUNT(order) FROM Exercise WHERE course_id = ?" );
            if ($query->execute(array($CourseId)))
            {

                $query->setFetchMode(PDO::FETCH_OBJ);
                $fetchedData = $query->fetch();
                return $fetchedData->id;


            }
        }

        public function addExercise($title, $content, $tasktitle, $taskdescription, $level, $User_id, $Course_id)
        {

            // get other variables
            $sql = this->db->prepare("SELECT COUNT(order) FROM Exercise;");
            $order = $sql->execute();

            $query = $this->db->prepare("INSERT INTO Exercise (order, title, content, task title, task description, level, creation_timestamp, User_id, Course_id) VALUES (?,?,?,?,?,?,?,?,?)");
            return $query->execute(array($order, $title, $content, $tasktitle, $taskdescription, $level, time(), $User_id, $Course_id));

        }
        
    }
