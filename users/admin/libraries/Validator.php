<?php 
class Validator{
	/*
	 *	Check Required Fields
	 */
	 public function isRequired($field_array){
		foreach($field_array as $field){
			if($_POST[''.$field.''] == ''){
				return false;
			}
		}
		return true;
	 }
	 
	  public function digit($require){
		foreach($require as $field){
			 if (!ctype_digit($_POST[''.$field.''])) {
			
				return false;
			}
		}
		return true;
	 }
	 
	 /*
	  *		Validate Email Field
	  */
	  public function isValidEmail($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			return true;
		} else {
			return false;
		}
	  }
	  
	    /*		Validate multiple Email Field */
	 
	  public function multiple_isValidEmail($emailArray){
		 foreach($emailArray as $email){
				if(filter_var($email, FILTER_VALIDATE_EMAIL)){
					return true;
				} else {
					return false;
				}
		 }
	  }
	  
	  /*
	   *	Check Password Match
	   */
	   public function passwordsMatch($pw1,$pw2){
		if($pw1 == $pw2){
			return true;
		} else {
			return false;
		}
	   }
}