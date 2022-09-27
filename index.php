<?php



$hotel = array {

    $hotel_1=>array{

        "Name"=>"Duchesse Francaise",
        "Discount"=> 50,
        "roorRate"  => 1500 , 
        "offerPrice"=>function() {
            $offerRate = this.roomrate * ((100 - this.discount)/100);
            return $offerRate;
        } 
    },

    $hotel_2=>array{

        "Name"=>"Chez Model",
        "Discount"=> 100,
        "roorRate"  => 500 , 
        "offerPrice"=>function() {
            $offerRate = this.roomrate * ((100 - this.discount)/100);
            return $offerRate;
        } 
    },

    $hotel_3=>array{

        "Name"=>"Maison Cherel",
        "Discount"=> 80,
        "roorRate"  => 1300 , 
        "offerPrice"=>function() {
            $offerRate = this.roomrate * ((100 - this.discount)/100);
            return $offerRate;
        } 
    },

    
    $hotel_4=>array{

        "Name"=>"Beach House",
        "Discount"=> 80,
        "roorRate"  => 1300 , 
        "offerPrice"=>function() {
            $offerRate = this.roomrate * ((100 - this.discount)/100);
            return $offerRate;
        } 
    };

}
?>



    
    <form action="index.php" method ="post">

        <label for ="firstname" >First Name </label >
        <input type ="text" name="firstname" required ="firstname"><br>
    
        <label for ="surname">surname</label>
        <input type="text"name="surname" required ="surname"><br>

        <label for ="email" >email </label >
        <input type ="text" name="email" required ="email"><br>
    
        
        <!-- "number of days > 0" -->

        <label for ="check in date" >check in date</label>
        <input type ="date" >
    
        <label for ="check out date" >check out date</label>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
        <input type ="date" >


      <input type="submit">
    
    </form>
    
   <?php

      $firstname = $_POST['firstname']. </br> ;
      $surnamme = $_POST['surname']. </br> ;
      $email = $_POST['email']. </br> ;
      $numbersOfDays = $_POST['numbersOfDays']. </br> ;
      $checkInDay = $_POST['checkInDay'] . </br> ;
      $checkOutDay = $_POST['checkOutDay']. </br> ;


    //   echo "<p>Hello $firstName .$lastNamme.$email .$numberOfDays .$checkInDay.$checkOutDay</p>";
     echo $firstName;
    ?>




    