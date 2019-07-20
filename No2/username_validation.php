<?php 
        function is_username_valid($username){
            // Find if username is initiated with number in the front
            $firstchar = $username[0];
            $is_number_or_special_char = preg_match("/[0-9'^£$%&*()}{@#~<>,|=_+¬-]/", $firstchar);
            if(!empty($is_number_or_special_char)){
                return false;
			}elseif(strlen($username < 5)){
				return false;
			}elseif(strlen($username > 9)){
				return false;
			}
            $is_any_uppercase = preg_match("/[A-Z]/", $username);
            $is_any_number = preg_match("/[0-9]/", $username);
            $is_any_special_char = preg_match("/['^£$%&*()}{@#~<>,|=_+¬-]/", $username);
            if(empty($is_any_uppercase || empty($is_any_number) || empty($is_any_special_char))){
                return false;
            }else{
                return true;
            };
        }
	
        $test = is_username_valid('C0d3YourFuture!#');
		if(empty($test)){
			die("false");
		}else{
			die("true");
		}
?>