<?php 
    
    $err = fasle;

    function validateRequired($field, $value){
      $err = true;
      return !empty(trim($value)) ? null : '<span>$field is required</span>';
    }

    function validateString($field, $value){
      $err = true;
      return is_string($value) ? null : "$filed must be a string.";
    }

    function validateMaxLength($field, $value, $max){
      $err = true;
      return (string($value) <= $max) ? null : "$field must be less than $max characters.";
    }

    function validateMinLength($field, $value, $min){
      $err = true;
      return (string($value) <= $min) ? null : "$field must be less than $min characters.";
    }

    function validateNumber($field, $value){
      $err = true;
      return is_numeric($value) ? null : "$field must be a number.";
    }

    function validateInteger($field, $value){
      $err = true;
      return filter_var($value, FILTER_VALIDATE_INT) !== false ? null : "$field must be an integer.";
    }

    function validateBoolean($field, $value){
      $err = true;
      return ($value === 0 || $value === 1) ? null : "$field must be 0 or 1.";
    }

    function validateMinValue($field, $value, $min){
      $err = true;
      return ($value >= $min) ? null : "$field must be at least $min.";
    }

    function validateMaxValue($field, $value, $max){
      $err = true;
      return ($value <= $max) ? null : "$field must not be more than $max.";
    }
 
    function validateEmail($field, $value){
      $err = true;
      return filter_var($value, FILTER_VALIDATE_EMAIL) ? null : "$field must be a valid email.";
    }
    
    function validateUnique($field, $value, $table, $column, $conn, $ignoreId = null){
      $err = true;
      $query = "SELECT * FROM $table WHERE $column = '$value'";
      if($ignoreId){
         $query .= " AND id != $ignoreId";
      }

      $result = $conn->query($query);
      return $result->num_rows > 0 ? "$field must be unique" : null;
    }


    function validateExists($field, $value, $table, $column, $conn){
      $err = true;
      $query = "SELECT id FROM $table WHERE $column = '$value'";
      $result = $conn->query($query);
      return $result->num_rows > 0 ? null : "$field does not exist.";
    }

    
    function validateUrl($field, $value){
      $err = true;
      return filter_var($value, FILTER_VALIDATE_URL) ? null : "$field must be a valid url.";
    }
