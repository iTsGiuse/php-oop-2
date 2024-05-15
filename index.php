<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Emporium</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>
    <div id="app">
        <header>
            <div class="container">
                <h1 class="text-center">Pet Emporium</h1>
                <nav>
                    <ul class="d-flex justify-content-center align-items-center py-2 ">
                        <li class="me-2"><button @click="showSection('dogs')">Cani</button></li>
                        <li><button @click="showSection('cats')">Gatti</button></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="row" v-if="activeSection === 'dogs' || activeSection === 'cats'" >
                    <div class="col-2">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Nome Cane</h5>
                                <p class="card-text">Boh</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
<script type="text/javascript" src="/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>