<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>php-hotel</title>
  </head>
  <form action="classe.php" method="GET">
        <button name="parcheggio" type="submit">🚗</button>
</form>
  <?php
  $submit = isset($_GET["parcheggio"]) ? true : false;
   $hotels = [

       [
           'name' => 'Hotel Belvedere',
           'description' => 'Hotel Belvedere Descrizione',
           'parking' => true,
           'vote' => 4,
           'distance_to_center' => 10.4
       ],
       [
           'name' => 'Hotel Futuro',
           'description' => 'Hotel Futuro Descrizione',
           'parking' => true,
           'vote' => 2,
           'distance_to_center' => 2
       ],
       [
           'name' => 'Hotel Rivamare',
           'description' => 'Hotel Rivamare Descrizione',
           'parking' => false,
           'vote' => 1,
           'distance_to_center' => 1
       ],
       [
           'name' => 'Hotel Bellavista',
           'description' => 'Hotel Bellavista Descrizione',
           'parking' => false,
           'vote' => 5,
           'distance_to_center' => 5.5
       ],
       [
           'name' => 'Hotel Milano',
           'description' => 'Hotel Milano Descrizione',
           'parking' => true,
           'vote' => 2,
           'distance_to_center' => 50
       ],
   ];

   foreach($hotels as $hotel) {
    foreach($hotel as $key => $value) {
      if ($key == "parking" && $value == false) {
        echo $key . ": " . $value . "</br>";
      } elseif ($key == "parking" && $value == $submit) {
        echo $hotel['name'] . "</br>";
        echo $hotel['description'] . "</br>";
        echo "parcheggio: 👍 </br>";
        echo "Voto: " . $hotel['vote'] . "</br>";
        echo "Distanza dal centro: " . $hotel['distance_to_center'] . "</br> </br>";
      } elseif ($submit == false) {
      echo $key . ": " . $value . "</br>";
    };};
   };
  
  ?>
  <body>
  </body>
</html>
