<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <style>
         body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #ffcccc; /* Fondo rosa */
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #fff;
            border-bottom: 2px solid #ddd;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .menu {
            display: flex;
            list-style-type: none;
            padding: 0;
        }

        .menu li {
            margin-right: 10px;
        }

        .menu li a {
            text-decoration: none;
            color: #333;
            padding: 10px;
            border-radius: 5px;
            background-color: #e6e6e6;
            transition: background-color 0.3s;
        }

        .menu li a:hover {
            background-color: #ccc;
        }

        /* Estilos para los productos */
        .articles {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            padding: 20px;
            margin-top: 20px;
        }

        .post {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 0 10px 20px; /* Espacio entre las categorías */
            max-width: 800px; /* Limitar el ancho de las categorías */
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }

        .post img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
            display: none; /* Ocultar la imagen en dispositivos que soporten CSS */
        }

        .post h3 {
            margin-top: 0;
            z-index: 1;
            position: relative;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.6); /* Sombra del texto para mejorar la legibilidad */
        }

        .post p {
            margin-bottom: 10px;
            z-index: 1;
            position: relative;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.6); /* Sombra del texto para mejorar la legibilidad */
        }

        .post button {
            padding: 20px; /* Ajuste del tamaño del botón */
            border: none;
            border-radius: 4px;
            background-color: #3897f0;
            color: #fff;
            cursor: pointer;
            z-index: 1;
            position: relative;
            font-size: 18px; /* Tamaño del texto dentro del botón */
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">Multiservicios Sanny</div>
        <ul class="menu">
            <li><a href="#">Registrarse</a></li>
            <li><a href="#">Iniciar sesión</a></li>
            <li><a href="#">Productos</a></li>
        </ul>
    </div>

    <section>
        <div class="title-container">
            <h2 class="title" style="text-align: center;">Categorías</h2>
        </div>
        
        <div class="articles">
            
        <div class="post" style="background-image: url('https://quecartucho.es/blog/wp-content/uploads/2018/02/mejores-impresoras.png');">
    <div class="overlay"></div>
    <h3>Tecnología</h3>
    <button onclick="window.location='{{ route("producto1") }}'">Ver Productos</button>
</div>

            
<div class="post" style="background-image: url('https://mantinni.com/wp-content/uploads/2019/06/utiles-de-oficina.jpg');">
    <div class="overlay"></div>
    <h3>Útiles de Escritorio</h3>
    <button onclick="window.location='{{ route("producto2") }}'">Ver Productos</button>
</div>

            
            <<div class="post" style="background-image: url('https://www.exposign.com.ar/wp-content/uploads/2017/04/papel1.jpg');">
    <div class="overlay"></div>
    <h3>Papelería</h3>
    <button onclick="window.location='{{ route("producto3") }}'">Ver Productos</button>
</div>

            
            <!-- Añade más categorías aquí -->
        </div>
    </section>
</body>
</html>
