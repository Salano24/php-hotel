<?php

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
      <!-- Bootstrap CSS v5.2.1 -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
<style>
    body{
        background-color: darkkhaki ;
    }

    .card-header{
        background-color: green;
    }

    .card{
        border: 0;
    }
</style>
</head>
<body>

<h1 class="text-center mt-5 fw-bold text-success">HOTELS BOOLEAN</h1>
   <div class="container mt-5">
    <div class="row">
    <?php foreach ($hotels as $hotel) : ?>
                <div class="col-4">
                    <div class="card text-center mb-3 text-light fw-bold">
                        <div class="card-header ">
                            <h3 class="card-title"><?php echo $hotel['name']; ?></h3>
                        </div>
                        <div class="card-body bg-success bg-gradient">
                            <div class="description"><?php echo $hotel['description']; ?></div>
                            <div class="parking">Parcheggi disponibili: <?php echo $hotel['parking']; ?></div>
                            <div class="rating">Valutazione: <?php echo $hotel['vote']; ?>/5</div>
                            <div class="center_distance">Distanza dal centro: <?php echo $hotel['distance_to_center']; ?> Km</div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
    </div>
   </div>

</body>
</html>