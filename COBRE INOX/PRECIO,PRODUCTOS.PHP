<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termas Solares Arequipa</title>
    <link rel="stylesheet" href="styles.css">
    <?php include 'template\cabecera.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Estilos adicionales */
body {
    font-family: Arial, sans-serif;
    background-color: #f3f3f3;
    margin: 0;
    padding: 0;
}

.venta-container {
    max-width: 1200px;
    margin: 20px auto;
    padding: 0 20px;
}

h1 {
    text-align: center;
    color: #333;
}

.producto-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
    margin-top: 20px;
}

.producto {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: calc(33.33% - 20px);
    margin-bottom: 20px;
    opacity: 0; /* Inicialmente oculto */
    animation: fadeIn 0.5s forwards; /* Animación de entrada */
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.producto img {
    max-width: 100%;
    border-radius: 8px;
    margin-bottom: 10px;
}

.producto-titulo {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 10px;
}

.producto-descripcion {
    font-size: 1rem;
    color: #666;
    margin-bottom: 15px;
}

.precio {
    font-weight: bold;
    font-size: 1.2rem;
    color: #007bff;
}

.consulta-btn {
    background-color: #25d366;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 8px 16px;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
}

.consulta-btn i {
    margin-right: 5px;
}

.consulta-btn:hover {
    background-color: #128C7E;
}

/* Estilos para modo responsivo */
@media (max-width: 768px) {
    .producto {
        width: calc(50% - 20px);
    }
}

@media (max-width: 576px) {
    .producto {
        width: calc(100% - 20px);
    }
}

    </style>
</head>
<body>
    <div class="venta-container">
        <h1>Termas Solares Arequipa</h1>
        <div class="producto-container">
            <div class="producto">
                <img src="Nueva carpeta\img 2\Diseño sin título (6).png" alt="Termo de 90 litros">
                <h2 class="producto-titulo">Capacidad: 90 Lts.</h2>
                <p class="producto-descripcion">2/3 Duchas por día</p>
                <p class="precio">S/950</p>
                <a class="consulta-btn" href="https://wa.me/tunumero"><i class="fab fa-whatsapp"></i> Consultar</a>
            </div>
            <div class="producto">
                <img src="Nueva carpeta\img 2\img venta.png" alt="Termo de 120 litros">
                <h2 class="producto-titulo">Capacidad: 120 Lts.</h2>
                <p class="producto-descripcion">3/4 Duchas por día</p>
                <p class="precio">S/1500</p>
                <a class="consulta-btn" href="https://wa.me/+51945809532"><i class="fab fa-whatsapp"></i> Consultar</a>
            </div>
            <div class="producto">
                <img src="Nueva carpeta\img 2\Agregar un título.png" alt="Termo de 150 litros">
                <h2 class="producto-titulo">Capacidad: 150 Lts.</h2>
                <p class="producto-descripcion">4/5 Duchas por día</p>
                <p class="precio">S/2100</p>
                <a class="consulta-btn" href="https://wa.me/tunumero"><i class="fab fa-whatsapp"></i> Consultar</a>
            </div>
            <div class="producto">
                <img src="Nueva carpeta\img 2\ventas 180.png" alt="Termo de 180 litros">
                <h2 class="producto-titulo">Capacidad: 180 Lts.</h2>
                <p class="producto-descripcion">5/6 Duchas por día</p>
                <p class="precio">S/2500</p>
                <a class="consulta-btn" href="https://wa.me/tunumero"><i class="fab fa-whatsapp"></i> Consultar</a>
            </div>
            <div class="producto">
                <img src="Nueva carpeta\img 2\img ventas2.png" alt="Termo de 240 litros">
                <h2 class="producto-titulo">Capacidad: 240 Lts.</h2>
                <p class="producto-descripcion">7/8 Duchas por día</p>
                <p class="precio">S/2800</p>
                <a class="consulta-btn" href="https://wa.me/tunumero"><i class="fab fa-whatsapp"></i> Consultar</a>
            </div>
            <div class="producto">
                <img src="Nueva carpeta\img 2\venta de 300lt.png" alt="Termo de 300 litros">
                <h2 class="producto-titulo">Capacidad: 300 Lts.</h2>
                <p class="producto-descripcion">9/10 Duchas por día</p>
                <p class="precio">S/3200</p>
                <a class="consulta-btn" href="https://wa.me/tunumero"><i class="fab fa-whatsapp"></i> Consultar</a>
            </div>
        </div>
    </div>
    <?php include 'template\footer.PHP'; ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
