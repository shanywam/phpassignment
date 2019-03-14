
<?php
{

    print("Welcome to Kenya Airways!<br/>");
    print("Kenya Airways is the pride of Kenya.<br/>");
    print("The only African Airline that is in the Skyline Airline Group .<br/>");

}
?>

<?php
   class Airline
   {
   function displayMessage()
     {
   print("Kenya Airways<br/>");
     }
   }

  $message= new Airline();
  $message ->displayMessage();

   class Founder
   {
   function displayMessage()
     {
   print("Shantee Nauru</br>");
     }
   }

   $message= new Founder();
   $message ->displayMessage();

   class Headquarters
   {
   function displayMessage()
     {
   print("Nairobi,Kenya</br>");
     }
   }

   $message= new Headquarters();
   $message ->displayMessage();

   class Aircrafts
   {
   function displayMessage()
     {
   print("ACD787,KLM747,JBD767,AD5A777,NGA787</br>");
     }
   }

   $message= new Aircrafts();
   $message ->displayMessage();

   class Revenue
   {
   function displayMessage()
     {
   print("US$130.729 billion</br>");
     }
   }

   $message= new Revenue();

   $message ->displayMessage();

   ?>

