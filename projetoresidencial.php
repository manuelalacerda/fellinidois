<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felinni</title>

    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="css/slick.css">

    <link rel="stylesheet" href="css/slick-theme.css">

    <link rel="stylesheet" href="css/estilo.css">

    <link rel="stylesheet" href="css/responsivo.css">


</head>

<body class="concreto">

    <?php require_once('conteudo/topo.php'); ?>

    <div class="site">

        <div class="projetoresidencial">
            <h1>Projetos Residencial</h1>
        </div>

        <a class="gallery-link" href="admin/img/logobranca.png" data-caption="Legenda da Imagem 1">
            <img class="gallery-img" src="admin/img/logobranca.png" alt="Imagem 1">
        </a>
        <a class="gallery-link" href="admin/img/logopreta.png" data-caption="Legenda da Imagem 2">
            <img class="gallery-img" src="admin/img/logopreta.png" alt="Imagem do banner tamanho 1920 x 700 cor azul claro">
        </a>
        <a class="gallery-link" href="admin/img/logoriginal.png" data-caption="Legenda da Imagem 3">
            <img class="gallery-img" src="admin/img/logoriginal.png" alt="Imagem do banner tamanho 1920px">
        </a>

        <div class="lightbox">
            <span class="close-button" onclick="hideLightbox()">&times;</span>
            <img id="lightbox-img" src="" alt="">
            <span class="arrow-button left" onclick="prevImage()">&#10094;</span>
            <span class="arrow-button right" onclick="nextImage()">&#10095;</span>
        </div>
    </div>
    <?php require_once('conteudo/rodape.php'); ?>

    <script>
        var images = document.querySelectorAll('.gallery-link');
        var lightbox = document.querySelector('.lightbox');
        var lightboxImg = document.getElementById('lightbox-img');
        var currentIndex = 0;
        var intervalID;

        images.forEach(function(image, index) {
            image.addEventListener('click', function(event) {
                event.preventDefault();
                currentIndex = index;
                showImage(image.getAttribute('href'));
            });
        });

        function showImage(src) {
            lightboxImg.src = src;
            lightbox.style.display = 'flex';
            setTimeout(function() {
                lightboxImg.style.opacity = '1';
            }, 100);
            // Inicia o intervalo para passagem automática das imagens
            startInterval();
        }

        function hideLightbox() {
            lightboxImg.style.opacity = '0';
            setTimeout(function() {
                lightbox.style.display = 'none';
            }, 500);
            // Limpa o intervalo quando o lightbox é fechado
            clearInterval(intervalID);
        }

        function nextImage() {
            currentIndex = (currentIndex + 1) % images.length;
            showImage(images[currentIndex].getAttribute('href'));
        }

        function prevImage() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            showImage(images[currentIndex].getAttribute('href'));
        }

        function startInterval() {
            clearInterval(intervalID); // Limpa o intervalo existente
            var intervalo = 3000; // Intervalo em milissegundos (3 segundos)
            intervalID = setInterval(nextImage, intervalo);
        }
    </script>

    <!--Biblioteca-->

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!--tirou Type/ trocou o arquivo para js-->

    <script src="js/slick.min.js"></script>

    <!--trocou a pasta para js/ chamou animacoes-->

    <script src="js/animacoes.js"></script>

</body>

</html>