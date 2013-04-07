<?php
    include 'header.php';


    $single = 'Single text';
    $double = "Double text";
?>
  <div>
   <strong><?php echo $double; ?></strong>
 </div>

 <?php   
    //echo $double;
    
    $arr1 = array('1', '2', '3', '4');
    
    
    $assoc = array("edno" => 1, "dve" => 2, "tri" => 3);
    
    // echo $assoc["tri"];  
    
    $one = "Edno";
    $two = "Dve";
    $three = "Tre";
    
    $concat = $one . ' ' . $two . ' ' . $three;
    
    echo $concat;
    
    
    $two_number = 2;
    $two_string = "2";
    
    $result = $two_number == $two_string ? true : false;
    
    if( $result ) {
    	echo "E te teka";
    } else {
    	echo "E inache!";
    }
    
    
   include 'footer.php';  
?>
