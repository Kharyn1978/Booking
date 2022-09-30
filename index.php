<?php

session_start();

include("Template/home.html");

if(isset($_POST['viewTrips'])){

     $hotel = file_get_contents("hotelData.json");//open the json file_get_contents
     $hotel = json_decode($hotel); //decode the json file 

     $Userinput = array(

        'search'=> $_POST['search'],
        'room'=> $_POST['room'],
        'adults'=> $_POST['adults'],
        'children'=> $_POST['children'],

     ),

     //append the input

     $hotel = $Userinput->get('hotel');
     $hotel = json_encode($Userinput,JSON_PRETTY_PRINT); //second parameter display
       file_put_contents("hotelData.json",$hotel);

}

class hotel{

    // properties

    private $hotelName;
    private $roomRate;
    private $offerPrice;

    // setter method 

    public function comparePrices(string $hotelName, int $roomRate, int $offerPrice) {
          $this->hotelName = $hotelName ;
          $this->roomRate = $roomRate ;
          $this->offerPrice = $offerPrice ;
    }


    // getter method 

    public functtion getCheapest(){
       // echo $this -> hotelName.$this -> roomRate .$this -> offerPrice;
    }

}

$hotel_1 = new hotel();
$hotel_1 -> comparePrices("Duchesse Francaise",1500 ,750);
$hotel_1 -> getCheapest();

$hotel_2 = new hotel();
$hotel_2-> comparePrices("Chez Model", 500,450);
$hotel_2 -> getCheapest();

$hotel_3 = new hotel();
$hotel_3 -> comparePrices("Maison Cherel",1300,1196);
$hotel_3 -> getCheapest();

$hotel_4 = new hotel();
$hotel_4 -> comparePrices("Beach House", 1100,880);
$hotel_4-> getCheapest();






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
        <input type ="date" > <br>
    
        <label for ="check out date" >check out date</label>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
        <input type ="date" > <br>


      <input type="submit">
    
    </form>
    
   <?php

      $firstname = $_POST['firstname']. </br> ;
      $surnamme = $_POST['surname']. </br> ;
      $email = $_POST['email']. </br> ;
      $numbersOfDays = $_POST['numbersOfDays']. </br> ;
      $checkInDay = $_POST['checkInDay'] . </br> ;
      $checkOutDay = $_POST['checkOutDay']. </br> ;


    //   echo "<p>Hello $firstname .$surname.$email .$numberOfDays .$checkInDay.$checkOutDay</p>";
     echo $firstName;
    ?>

    <table>
         <tbody>

        <?php
        $hotel = file_get_contents("hotelData.json"); //fetch data from JSON file

        $hotel = json_decode($hotel); // decode it into the php array

        //Looping through each JSON property

        foreach($hotel as $row)
      
        echo 
        
        "

        <tr>


        <td>".$row->hotelName"</td>
        <td>".$row->roomRate"</td>
        <td>".$row->offerPrice"</td>

        </tr>
        "

       
   

    
    
    ?>

        </tbody>
    </table>




    