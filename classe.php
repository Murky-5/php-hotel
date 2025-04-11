<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>php-hotel</title>
    <style>
      body {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100vh;
      }
      form {
        position: sticky;
        top: 100px;
        left: calc(50% - 409.92/2);
        align-items: center;
        border: 1px solid black;
        border-radius: 10px;
        margin-bottom: 70px;
        background: grey;
        display: flex;
      }
      label {
        font-size: 20px;
        font-weight: bold;
        font-family: sans-serif;
        margin: 25px 5px 25px 20px;
      }
      input {
        border: 1px solid black;
        border-radius: 5px;
        margin: 25px 5px 25px 20px;
      }
      input:nth-child(2) {
        width: 15px;
        height: 15px;
      }
      hr {
        display: flex;
        flex-direction: column;
        height: calc(100% - 2px);
        border: 1px solid lightgrey;
        margin: 0 20px;
      }
      button {
        padding: 0 10px;
        border-radius: 5px;
        border: none;
        background-color:rgba(34, 33, 33, 0.78);
        color: white;
        font-size: 13px;
        cursor: pointer;
      }
      </style>
  </head>
  <form action="classe.php" method="GET">
    <label for="parcheggio">Parcheggio</label>
    <input type="checkbox" name="parcheggio" id="parcheggio" value="true" />
    <hr>
    <label for="stelle">stelle</label>
    <input type="number" placeholder="1-5" min="1" max="5" name="stelle" id="stelle" value="true" />
    <button type="submit">GO!</button>
  </form>
  <?php
  $submit = isset($_GET["parcheggio"]) ? $_GET["parcheggio"] : "";
  $vote = isset($_GET["stelle"]) ? $_GET["stelle"] == "" ? "" : $_GET["stelle"] : "";

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
       $int = (int)$vote;
      if ($submit && $int) {
          if ($hotel["vote"] == $int && $hotel["parking"] == true){
          echo $hotel["name"] . "</br>";
          echo $hotel["description"] . "</br>";
          echo "parcheggio: 👍 </br>";
          echo "Voto: " . $hotel["vote"] . "</br>";
          echo "Distanza dal centro: " . $hotel["distance_to_center"] . "</br> </br>";
        };
      } elseif ($hotel["parking"] == true) {
          echo $hotel["name"] . "</br>";
          echo $hotel["description"] . "</br>";
          echo "parcheggio: 👍 </br>";
          echo "Voto: " . $hotel["vote"] . "</br>";
          echo "Distanza dal centro: " . $hotel["distance_to_center"] . "</br> </br>";
      } elseif ($int) {
        if ($hotel["vote"] == $int){
          echo $hotel["name"] . "</br>";
          echo $hotel["description"] . "</br>";
          echo $hotel["parking"] > 0 ? "parcheggio: 👍" : "parcheggio: 👎" . "</br>";
          echo "Voto: " . $hotel["vote"] . "</br>";
          echo "Distanza dal centro: " . $hotel["distance_to_center"] . "</br> </br>";
        };
      } else {
          echo $hotel["name"] . "</br>";
          echo $hotel["description"] . "</br>";
          echo $hotel["parking"] > 0 ? "parcheggio: 👍" : "parcheggio: 👎" . "</br>";
          echo "Voto: " . $hotel["vote"] . "</br>";
          echo "Distanza dal centro: " . $hotel["distance_to_center"] . "</br> </br>";
      };
    };
  
  ?>
  <body>
  </body>
</html>
