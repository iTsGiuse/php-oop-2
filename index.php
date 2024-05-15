<?php 
    require_once __DIR__ . '/models/Dogs.php';
    require_once __DIR__ . '/models/Cats.php';

    $section= isset($_GET["userChoice"]) && $_GET["userChoice"] !== "active" ? $_GET["userChoice"] : false;
    $sectionDogs = null;
    $sectionCats = null;

    if ($section === 'dogs') {
        $sectionDogs = $section;
    } else if ($section === 'cats') {
        $sectionCats = $section;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Emporium</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center">Pet Emporium</h1>
                    </div>
                </div>
                <form method="GET">
                    <div class="row pt-2 align-items-center">
                       
                        <div class="col-2"></div>
                        <div class="col-7">
                            <select class="form-select" name="userChoice">
                                <option <?php echo $section === 'active' ? 'selected' : '' ?> value="active" selected>Scegli..</option>
                                <option <?php echo $section === $sectionDogs ? 'selected' : '' ?> value="dogs">Cani</option>
                                <option <?php echo $section === $sectionCats ? 'selected' : '' ?> value="cats">Gatti</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <button type="submit">Invia</button>
                        </div>
                    </div>
                </form>
            </div>
        </header>
        <main>
            <div class="container">
            <?php if($sectionDogs) { ?>
                <div class="row py-3">
                <?php foreach($dogs as $singleDog) { ?>
                    <div class="col-3">
                        <div class="card">
                            <img src="<?php echo $singleDog->photo ?>" class="card-img-top" alt="<?php echo $singleDog->name ?>">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $singleDog->name ?></h5>
                                <p class="card-text">Razza: <?php echo $singleDog->breed ?></p>
                                <p class="card-text"><?php echo $singleDog->age ?> anni</p>
                                <p class="card-text">Prezzo: <?php echo $singleDog->price ?>€</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
                <?php } ?>
                <?php if ($sectionCats) {?>
                <div class="row py-3">
                <?php foreach($cats as $singleCat) { ?>
                    <div class="col-3">
                        <div class="card">
                            <img src="<?php echo $singleCat->photo ?>" class="card-img-top" alt="<?php echo $singleCat->name ?>">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $singleCat->name ?></h5>
                                <p class="card-text">Razza: <?php echo $singleCat->breed ?></p>
                                <p class="card-text"><?php echo $singleCat->age ?> anni</p>
                                <p class="card-text">Prezzo: <?php echo $singleCat->price ?>€</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            <?php } ?>
            </div> 
        </main>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
