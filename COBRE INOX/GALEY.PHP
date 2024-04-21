<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Imágenes</title>
    <style>
        /* Estilos generales */
        /* Estilos generales */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #ffcc80;
            /* Nuevo color de fondo */
        }

        /* Título */
        h1 {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
            color: #333;
        }

        .cobre {
            color: red;
            /* Cambiar el color a rojo */
        }

        .gallery {
            max-width: 800px;
            margin: 20px auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 10px;
            opacity: 0;
            /* Inicialmente, la galería está oculta */
            animation: fadeIn 1s forwards;
            /* Animación de entrada */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .item {
            position: relative;
            width: 100%;
            padding-top: 100%;
            /* Para mantener la relación de aspecto 1:1 */
        }

        .item img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 8px;
            cursor: pointer;
            transition: transform 0.3s ease;
            object-fit: cover;
            /* Ajusta automáticamente la imagen dentro de su contenedor manteniendo la relación de aspecto */
        }

        .item img:hover {
            transform: scale(1.05);
        }

        /* Overlay */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 999;
            transition: opacity 0.3s ease;
        }

        .overlay.active {
            display: flex;
        }

        .overlay img {
            max-width: 80%;
            max-height: 80%;
            border-radius: 8px;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
        }

        /* Estilos responsivos */
        @media screen and (max-width: 768px) {
            .gallery {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            }
        }
    </style>
</head>

<body>
    <?php include 'template\cabecera.php'; ?>

    <h1>Galería <span class="cobre">Cobré</span> Inox</h1> <!-- Título -->

    <div class="gallery">
        <div class="item">
            <img src="Nueva carpeta\img\186229588_1426531427679599_7133647084816188222_n_clipdrop-background-removal_clipdrop-enhance.png" alt="Imagen 1">
        </div>
        <div class="item">
            <img src="Nueva carpeta\img\187540569_1426526087680133_4042891853548660439_n.jpg" alt="Imagen 2">
        </div>
        <div class="item">
            <img src="Nueva carpeta\img\223947434_1474595796206495_8632820481406800420_n (1).jpg" alt="Imagen 3">
        </div>
        <div class="item">
            <img src="Nueva carpeta\img\231500910_1478627799136628_2917592261291341917_n.jpg" alt="Imagen 3">
        </div>
        <div class="item">
            <img src="Nueva carpeta\img\245126421_1527137550952319_8742424739505835962_n.jpg" alt="Imagen 3">
        </div>
        <div class="item">
            <img src="Nueva carpeta\img\291562330_1713918255607580_1068208103440774427_n.jpg" alt="Imagen 3">
        </div>
        <div class="item">
            <img src="Nueva carpeta\img\291592884_1713917812274291_959433264099211835_n.jpg" alt="Imagen 3">
        </div>
        <div class="item">
            <img src="Nueva carpeta\img\291713080_1713920722274000_215097775719179662_n.jpg" alt="Imagen 3">
        </div>
        <div class="item">
            <img src="Nueva carpeta\img\291799560_1713917838940955_522171803964550202_n.jpg" alt="Imagen 3">
        </div>
        <div class="item">
            <img src="Nueva carpeta\img\291859198_1713918925607513_5504953211469720177_n.jpg" alt="Imagen 3">
        </div>
        <div class="item">
            <img src="Nueva carpeta\img\355755302_6330070277110797_8827630389684974979_n.jpg" alt="Imagen 3">
        </div>
        <div class="item">
            <img src="Nueva carpeta\img\356961964_6528908567170186_1110076051113762307_n.jpg" alt="Imagen 3">
        </div>
        <div class="item">
            <img src="Nueva carpeta\img\slider.jpeg" alt="Imagen 3">
        </div>
        <div class="item">
            <img src="Nueva carpeta\img\slider2.jpeg" alt="Imagen 3">
        </div>
        <div class="item">
            <img src="Nueva carpeta\img\WhatsApp Image 2023-08-29 at 2.19.17 PM (1).jpeg" alt="Imagen 3">
        </div>
        <div class="item">
            <img src="Nueva carpeta\img\WhatsApp Image 2023-08-29 at 2.19.17 PM.jpeg" alt="Imagen 3">
        </div>
        <div class="item">
            <img src="Nueva carpeta\img\WhatsApp Image 2023-08-29 at 2.19.18 PM (2).jpeg" alt="Imagen 3">
        </div>
        <div class="item">
            <img src="Nueva carpeta\img\WhatsApp Image 2023-08-29 at 2.19.18 PM.jpeg" alt="Imagen 3">
        </div>
        <div class="item">
            <img src="Nueva carpeta\img\WhatsApp Image 2023-08-29 at 2.19.19 PM (3).jpeg" alt="Imagen 3">
        </div>

        <div class="item">
            <img src="Nueva carpeta\img\WhatsApp Image 2023-08-29 at 2.19.18 PM (2).jpeg" alt="Imagen 3">
        </div>



        <!-- Agrega más imágenes según sea necesario -->
    </div>

    <div class="overlay" onclick="closeOverlay()">
        <img src="" alt="Imagen">
    </div>

    <script>
        const items = document.querySelectorAll('.item');
        const overlay = document.querySelector('.overlay');

        items.forEach(item => {
            item.addEventListener('click', () => {
                const imgSrc = item.querySelector('img').src;
                overlay.querySelector('img').src = imgSrc;
                overlay.classList.add('active');
            });
        });

        function closeOverlay() {
            overlay.classList.remove('active');
        }
    </script>
    <?php include 'template\footer.PHP'; ?>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>