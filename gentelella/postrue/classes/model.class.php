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
            $query = $this->db->prepare( " SELECT id FROM User WHERE email = ?" );
              if ($query->execute(array($email)))
            {
                
                $query->setFetchMode(PDO::FETCH_OBJ);
                $fetchedData = $query->fetch();
                return $fetchedData->id;
            
            
        }}
        
        public function getType($email)
        {
            $query = $this->db->prepare( " SELECT type FROM User WHERE email = ?" );
              if ($query->execute(array($email)))
            {
                
                $query->setFetchMode(PDO::FETCH_OBJ);
                $fetchedData = $query->fetch();
                return $fetchedData->type;
            
            
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
            $query = $this->db->prepare( " SELECT COUNT(`order`) FROM Exercise WHERE course_id = ?" );
            if ($query->execute(array($CourseId)))
            {

                $query->setFetchMode(PDO::FETCH_OBJ);
                $fetchedData = $query->fetch();
                return $fetchedData->id;


            }
        }

        public function getExercise($Exercise_id) {
            $query = $this->db->prepare( "SELECT * FROM `Exercise` WHERE `id`=?" );
            if ($query->execute(array($Exercise_id)))
            {

                $query->setFetchMode(PDO::FETCH_OBJ);
                $result = $query->fetch();
                return $result;

            }
        }

        public function getExercises($Course_id) {
            $query = $this->db->prepare( "SELECT * FROM `Exercise` WHERE `Course_id`=?" );
            if ($query->execute(array($Course_id)))
            {
                $exercises = array();

                $query->setFetchMode(PDO::FETCH_OBJ);
                while($row = $query->fetch()) {
                    array_push($exercises, $row);
                    //var_dump($row);
                }

                return $exercises;


            }
        } 
        
        public function getCourses($User_id) {
            $query = $this->db->prepare( "SELECT * FROM `Course` WHERE `User_id`=?" );
            if ($query->execute(array($User_id)))
            {
                $courses = array();

                $query->setFetchMode(PDO::FETCH_OBJ);
                while($row = $query->fetch()) {
                    array_push($courses, $row);
                }

                return $courses;


            }
        }

        public function getCourse($Course_id) {
            $query = $this->db->prepare( "SELECT * FROM `Course` WHERE `id`=?" );
            if ($query->execute(array($Course_id)))
            {

                $query->setFetchMode(PDO::FETCH_OBJ);
                $result = $query->fetch();

                return $result;

            }
        }

        public function CourseID($title) 
        {
            $query = $this->db->prepare( " SELECT id FROM Course WHERE title = ?" );
              if ($query->execute(array($title)))
            {
                
                $query->setFetchMode(PDO::FETCH_OBJ);
                $fetchedData = $query->fetch();
                return $fetchedData->id;
            
            
        }}

        public function addExercise($title, $content, $tasktitle, $taskdescription, $level, $User_id, $Course_id)
        {

            /* get other variables
            $sql = $this->db->prepare("SELECT COUNT(`order`) FROM Exercise;");
            $order = $sql->execute();
            */

            $query = $this->db->prepare("INSERT IGNORE INTO Exercise (`order`, `title`, `content`, `task title`, `task description`, `level`, `creation_timestamp`, `User_id`, `Course_id`) VALUES (?,?,?,?,?,?,?,?,?)");
            return $query->execute(array(1, $title, $content, $tasktitle, $taskdescription, $level, time(), $User_id, $Course_id));

        }

        public function updateExercise($id, $title, $content, $tasktitle, $taskdescription) {
            $query = $this->db->prepare("UPDATE `Exercise` SET `title`=?,`content`=?,`task title`=?,`task description`=? WHERE `id`=?");
            var_dump($query);
            return $query->execute(array($title, $content, $tasktitle, $taskdescription, $id));
        }
        
        public function Exercise_id($title) 
        {
            $query = $this->db->prepare( " SELECT id FROM Exercise WHERE title = ?" );
              if ($query->execute(array($title)))
            {
                
                $query->setFetchMode(PDO::FETCH_OBJ);
                $fetchedData = $query->fetch();
                return $fetchedData->id;
            
            
        }}
        
         public function Result($Exercise_id) 
        {
            $query = $this->db->prepare( " SELECT result FROM Answer WHERE Exercise_id = ?" );
              if ($query->execute(array($title)))
            {
                
                $query->setFetchMode(PDO::FETCH_OBJ);
                $fetchedData = $query->fetch();
                return $fetchedData->id;
            
            
        }}     
        

        
         public function Points_Get($User_id, $points) 
        {
            $query = $this->db->prepare( " SELECT points FROM Answer WHERE User_id = ?" );
              if ($query->execute(array($User_id)))
            {
                
                $query->setFetchMode(PDO::FETCH_OBJ);
                $fetchedData = $query->fetch();
                return $fetchedData->points;
            
            }
        }


        public function getUnitTestStatements($Exercise_id)
        {
            $query = $this->db->prepare( "SELECT * FROM `Unit Test Statement` WHERE `Exercise_id`=?" );
            if ($query->execute(array($Exercise_id)))
            {
                $unitTestStatements = array();

                $query->setFetchMode(PDO::FETCH_OBJ);
                while($row = $query->fetch()) {
                    array_push($unitTestStatements, $row);
//                    var_dump($row);
                }

                return $unitTestStatements;
            }
        }
        
         
        public function getUnitID($Exercise_id)
        {
            $query = $this->db->prepare( " SELECT id FROM User WHERE email = ?" );
              if ($query->execute(array($email)))
            {
                
                $query->setFetchMode(PDO::FETCH_OBJ);
                $fetchedData = $query->fetch();
                return $fetchedData->id;
            
            
        }}
        
        


        public function addUnitTestStatement($code, $order, $hint,$Exercise_id)
        {

            $query = $this->db->prepare("INSERT INTO `Unit Test Statement`(`code`, `order`, `hint`, `Exercise_id`) VALUES (?,?,?,?)");
            return $query->execute(array($code, $order, $hint, $Exercise_id));

        }

        public function addUnitTestStatements($array)
        {
            /*
            $length = sizeof($array);
            for ($i = 0; $i < $length; $i++)
            {
                addUnitTestStatement($array->code, $array->order, $array->hint,$array->Exercise_id);
            }
            */
        }
        
        public function Points_Insert($User_id, $points, $result, $Exercise_id) 
        {
            
           $query = $this->db->prepare("INSERT INTO Answer (`result`, `timestamp`, `points`, `Exercise_id`, `User_id`) VALUES (?,?,?,?,?)");
            return $query->execute(array($result, time(), $points, $Exercise_id, $User_id));
            
            
        }
        
        public function addUnit($code, $hint, $order, $Exercise_id)
        {

            /* get other variables
            $sql = $this->db->prepare("SELECT COUNT(`order`) FROM Exercise;");
            $order = $sql->execute();
            */

            $query = $this->db->prepare("INSERT IGNORE INTO `Unit Test Statement` (`code`, `hint`, `order`, `Exercise_id`) VALUES (?,?,?,?)");
            return $query->execute(array($code, $hint, $order, $Exercise_id));

        }
        
        public function getPoints($User_id)
        {
            $query = $this->db->prepare( " SELECT COUNT(`points`) FROM Answer WHERE User_id = ?" );
            if ($query->execute(array($User_id)))
            {

                $query->setFetchMode(PDO::FETCH_OBJ);
                $fetchedData = $query->fetch();
                
                return $fetchedData;


            }
        }
        

 
        
        


    
}
        
    
