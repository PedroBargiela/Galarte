<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exposiciones</title>
    <link rel="stylesheet" href="/css/exhibitions.css">
    <link rel="stylesheet" href="/css/common.css">
</head>

<body>
    <header>
        <?= view('partials/header.php') ?>
    </header>
    <h1>EXPOSICIONES</h1>
    <img class="img-exhibitions" src="images/exhibitions.jpg" alt="Exposiciones">
    <hr>
    <h2>en activo</h2>
    <h2>desde xx/xx/xxxx</h2>
    <h2>hasta xx/xx/xxxx</h2>
    <div class="content-container">
        <div class="exhibition">
            <img src="/images/interea/Interea.jpg" alt="Interea Exp.">
            <div class="info right">
                <a href="exhibitions/exhibition1">
                    <h2>Interea</h2>
                </a>
                <p>Exposición de Alfonso Costa</p>
            </div>
        </div>
        <div class="exhibition reverse">
            <img src="/images/home/Rostro.jpg" alt="Latexo Exp.">
            <div class="info">
                <a href="exhibitions/exhibition2">
                    <h2>Latexo Do Labirinto</h2>
                </a>
                <p>Exposición de Antón Patiño</p>
            </div>
        </div>
        <div class="exhibition">
            <img src="/images/home/Casa.jpg" alt="Mar Hernández Exp.">
            <div class="info right">
                <a href="exhibitions/exhibition3">
                    <h2>A Derradeira</h2>
                </a>
                <p>Exposición de Mar Hernández</p>
            </div>
        </div>
        <div class="exhibition reverse">
            <img src="/images/home/Nube.jpg" alt="Ramón Conde Exp.">
            <div class="info">
                <a href="exhibitions/exhibition4">
                    <h2>Delirios</h2>
                </a>
                <p>Exposición de Ramón Conde</p>
            </div>
        </div>
        <div class="exhibition">
            <img src="/images/home/Serie.jpg" alt="Sandra Carvalho Exp.">
            <div class="info right">
                <a href="exhibitions/exhibition5">
                    <h2>EL INSTRUMENTO DE LA SOMBRA</h2>
                </a>
                <p>Exposición de Sandra Carvalho</p>
            </div>
        </div>
    </div>

    <div id="custom-cursor"></div>
    <script type="module" src="/js/common.js"></script>
</body>

</html>