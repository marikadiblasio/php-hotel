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
if(!empty($_GET["park"])){
    $park = ($_GET["park"] === 'true') ? true : false;
     var_dump($park);
     var_dump($_GET["park"]);
    $filteredHotels = [];
    // var_dump($filteredHotels);
    foreach($hotels as $hotel){
    if($hotel['parking'] == $park){
        $filteredHotels[] = $hotel;
    // var_dump($filteredHotels);

    }
    }
} else{
    $filteredHotels = $hotels;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css//style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-3">PHP Hotel</h1>
        <form class="d-flex justify-content-center align-items-center mb-3" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <select class="form-select w-25 me-3" name="park" id="park">
                <option value="">Parcheggio</option>
                <option value="true">Con parcheggio</option>
                <option value="false">Senza parcheggio</option>
            </select>
            <button class="btn btn-info" type="submit">Cerca</button>
        </form>
        <table class="table table-hover w-75 mx-auto">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th class="small">Parking</th>
                    <th class="small">Vote</th>
                    <th class="small">Distance to center</th>
                </tr>
            </thead>
            <tbody>
                <tr <?php foreach($filteredHotels as $hotel) { ?>>
                    <td class="fw-bold"><?php echo $hotel['name']; ?></td>
                    <td> <?php echo $hotel['description']; ?></td>
                    <td> <?php echo $hotel['parking']; ?></td>
                    <td> <?php echo $hotel['vote']; ?></td>
                    <td> <?php echo $hotel['distance_to_center']; ?></td>
                </tr <?php } ?>>
            </tbody>
        </table>
    </div>
</body>
</html>