<?php

  // is_blank('abcd')
  function is_blank($value='') {
    return !isset($value) || trim($value) == '';
  }

  // has_length('abcd', ['min' => 3, 'max' => 5])
  function has_length($value, $options=array()) {
    $length = strlen($value);
    if(isset($options['max']) && ($length > $options['max'])) {
      return false;
    } elseif(isset($options['min']) && ($length < $options['min'])) {
      return false;
    } elseif(isset($options['exact']) && ($length != $options['exact'])) {
      return false;
    } else {
      return true;
    }
  }

  // has_valid_email_format('test@test.com')
  function has_valid_email_format($value) {
    // Function can be improved later to check for
    // more than just '@'.
    return strpos($value, '@') !== false;
  }
  
  // has_valid_name_format('Loe-Garb's')
  function has_valid_name_format($value) {
    // regex for names in generals
    return preg_match("/^[A-Za-z_'.-]+$/ ", $value);
  }
  
   function is_valid_phone_number($value) {
    return preg_match("/^[0-9().-]+$/ ", $value);
  }

   function is_valid_country_id($value){
    if($value>0 && $value<2000){
      return true;
    }
  }
  
  function has_valid_code_format($value) {
    // regex for state code in generals
    return preg_match("/^[A-Za-z]+$/ ", $value);
  }
?>
