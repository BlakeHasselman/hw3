<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'blakeouc_hw3user', '$@Hce7q2PoYR', 'blakeouc_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
