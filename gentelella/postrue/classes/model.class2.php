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


        public function signIn( $email, $password )
        {
            $query = $this->db->prepare( " SELECT email, password 
                                        FROM User 
                                        WHERE email = ?
                                    " );
            if ($query->execute(array($email)))
            {
                $query->setFetchMode(PDO::FETCH_OBJ);
                $fetchedData = $query->fetch();
                console_log(isset($fetchedData->password));
                $digest = isset($fetchedData->password) ? $fetchedData->password : null;
                if (!is_null($digest)) {
                    console_log($password . " " . " PASSWORD REAL");
                    console_log($digest . " " . " DIGEST");
                    
                    console_log(crypt($password, $digest) . " " . "PASSWORD digest and crypt");
                    console_log(crypt($digest) . " " . "digest");
                    console_log(crypt($password) . " " . "PASSWORD ");
                    console_log(crypt(1) . " " . "1");
                    console_log(crypt("1", $digest) . " " . "1 string and digest");
                    console_log(crypt(1, $digest) . " ". "1 and digest");
//                    return $digest === $password;
                    
//                    console_log($digest);
//                    console_log(crypt($password, $digest));
                    return $digest === crypt($password, $digest);
//                   
                    
                }else{
                    return false;
                }
            }else{
                return false;
            }

        }

        public function emailAlreadyUsed( $email )
        {
            $query = $this->db->prepare("SELECT COUNT(*) AS num FROM users WHERE user_email = ?");
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


        
      
        public function addUser($email, $password)
        {
            if (!empty($email) && !empty($password)) {
                $query = $this->db->prepare("INSERT INTO users (user_email, user_password, date_signed_up)  VALUES(?,?,?) ");
                return $query->execute(array($email, $this->hash_password($password), time()));
            }else{
                return false;
            }
        }
    }
