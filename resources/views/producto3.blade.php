<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Útiles de Escritorio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        header {
            background-color: 	#FF7F50;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .container {
            padding: 20px;
        }

        h2.title {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        .articles {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 0 -20px;
        }

        .post {
            width: calc(16.66% - 40px);
            margin: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .post:hover {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .post img {
            width: 100%;
            height: auto;
            display: block;
            border-bottom: 1px solid #eee;
        }

        .post h3 {
            font-size: 18px;
            margin: 15px 0;
            padding: 0 10px;
            text-align: center;
        }

        .post p {
            font-size: 14px;
            color: #666;
            padding: 0 10px;
            text-align: center;
        }

        .post button {
            display: block;
            width: 80%;
            margin: 15px auto;
            padding: 10px 0;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .post button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1> Útiles de Escritorio</h1>
    </header>

    <div class="container">
        <h2 class="title">Últimos Productos</h2>
        <section>
        
        <div class="articles">
            
        <div class="post">
    <img src="https://http2.mlstatic.com/D_NQ_NP_613064-MLU74123333715_012024-O.webp" alt="Producto 25" width="100" height="100">
    <h3>Papel A4 Blanco</h3>
    <p>Resma de papel blanco tamaño A4, 500 hojas.</p>
    <p>Precio: $5.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ34SfNjn-_-4OysAn4j3YmMJtadNNBRfyGYheW9j5LZQ&s" alt="Producto 26" width="100" height="100">
    <h3>Bloc de Notas Adhesivas</h3>
    <p>Bloc de notas adhesivas de varios colores y tamaños.</p>
    <p>Precio: $2.49</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://www.moo.com/es/design-templates/asset/images/packshots/5870/7417/0c0f1efe-b43c-443d-a363-bf6e2eeded41.png" alt="Producto 27" width="100" height="100">
    <h3>Papel de Carta con Diseño</h3>
    <p>Papel de carta con diseño floral, juego de 50 hojas.</p>
    <p>Precio: $4.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://production-tailoy-repo-magento-statics.s3.amazonaws.com/imagenes/872x872/productos/i/l/i/libreta-empastada-72h-cuadriculada-869-default-1.jpg" alt="Producto 28" width="100" height="100">
    <h3>Libreta Cuadriculada</h3>
    <p>Libreta cuadriculada tamaño carta, 100 hojas.</p>
    <p>Precio: $3.49</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTtfG2gsDcNwfJPbzCC4w6syjkZwg0pUsVh7dgEW9_iQ&s" alt="Producto 29" width="100" height="100">
    <h3>Papel de Envolver</h3>
    <p>Rollo de papel kraft para envolver, 30 metros.</p>
    <p>Precio: $6.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://i0.wp.com/peruflex.pe/wp-content/uploads/2020/05/papel-bond.jpg?resize=467%2C266&ssl=1" alt="Producto 30" width="100" height="100">
    <h3>Papel de Color</h3>
    <p>Papel de colores surtidos, tamaño carta, 100 hojas.</p>
    <p>Precio: $8.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://http2.mlstatic.com/D_Q_NP_772850-MLU73877520034_012024-O.webp" alt="Producto 31" width="100" height="100">
    <h3>Bloc de Notas de Borrador</h3>
    <p>Bloc de notas de borrador, 50 hojas cada uno.</p>
    <p>Precio: $1.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuc3koWy04Lu0qn1sgxCAA6QqS-mWq17B363zG_-Nwiw&s" alt="Producto 32" width="100" height="100">
    <h3>Papel de Acuarela</h3>
    <p>Bloque de papel de acuarela de calidad profesional, 20 hojas.</p>
    <p>Precio: $12.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6mSWDPHbMABdqE49xgFJqvosZ87QZ7Je6pSAsJ92OWA&s" alt="Producto 33" width="100" height="100">
    <h3>Papel para Origami</h3>
    <p>Papel para origami de 100 hojas, varios colores.</p>
    <p>Precio: $7.49</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://production-tailoy-repo-magento-statics.s3.amazonaws.com/imagenes/872x872/productos/i/p/a/papel-carbon-a-4-plus-azul-blsx10-5000130-default-1.jpg" alt="Producto 34" width="100" height="100">
    <h3>Papel de Calcar</h3>
    <p>Rollo de papel de calcar tamaño A3, 50 hojas.</p>
    <p>Precio: $9.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQ3d8CL8CZeTBXNbtRUE9ILzB4znLbVBKcyx4xt0uLgg&s" alt="Producto 35" width="100" height="100">
    <h3>Papelote de Color</h3>
    <p>Papelote de color tamaño A1, paquete de 10 hojas.</p>
    <p>Precio: $3.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkXkIa_Bm8BarcMs1cVju-4W5VDVAqp_SANbi4MgYi5A&s" alt="Producto 36" width="100" height="100">
    <h3>Cartulina Blanca</h3>
    <p>Cartulina blanca , paquete de 20 hojas.</p>
    <p>Precio: $5.49</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzQU-0fko9J2clSK3o_42SUxrJ5fG8HlCmWPq-MYDfWQ&s" alt="Producto 37" width="100" height="100">
    <h3>Cartulina Hilo de Colores</h3>
    <p>Cartulina hilo de colores surtidos, paquete de 50 hojas.</p>
    <p>Precio: $8.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://falabella.scene7.com/is/image/FalabellaPE/gsc_120259452_2621144_2?wid=800&hei=800&qlt=70" alt="Producto 38" width="100" height="100">
    <h3>Papel Fotográfico Brillante</h3>
    <p>Papel fotográfico brillante tamaño 4x6, paquete de 50 hojas.</p>
    <p>Precio: $14.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://production-tailoy-repo-magento-statics.s3.amazonaws.com/imagenes/872x872/productos/i/p/a/papel-adhesivo-blanco-brillante-a4-180gr-25h-15279-default-1.jpg" alt="Producto 39" width="100" height="100">
    <h3>Papel Adhesivo</h3>
    <p>paquete papel adhesivo para manualidades, </p>
    <p>Precio: $3.49</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://www.ofimarket.pe/cdn/shop/files/545561.jpg?v=1703187271" alt="Producto 40" width="100" height="100">
    <h3>Papel Dúplex</h3>
    <p>Papel dúplex tamaño A1, paquete de 10 hojas.</p>
    <p>Precio: $9.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://sodimac.scene7.com/is/image/SodimacPeru/4171365_01?wid=1500&hei=1500&qlt=70" alt="Producto 41" width="100" height="100">
    <h3>Papel Kraft</h3>
    <p>Papel kraft marrón, ideal para manualidades, paquete de 50 hojas.</p>
    <p>Precio: $7.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://d1rpfggbb8iuri.cloudfront.net/Custom/Content/Products/10/19/1019123_papel-vegetal-a3-29-7cmx42cm-92g-m-com-100-folhas_m11_638175708901254437.jpg" alt="Producto 42" width="100" height="100">
    <h3>Papel Vegetal</h3>
    <p>Papel vegetal tamaño carta, paquete de 50 hojas.</p>
    <p>Precio: $6.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://via.placeholder.com/150" alt="Producto 43" width="100" height="100">
    <h3>Papel de Seda</h3>
    <p>Papel de seda surtido de colores, paquete de 100 hojas.</p>
    <p>Precio: $10.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkha79siiKIMRASNLWC2E5kn8EhJfRW2jtoi45WCo5kw&s" alt="Producto 44" width="100" height="100">
    <h3>Papel Esmerilado</h3>
    <p>Papel esmerilado para manualidades, tamaño carta, paquete de 20 hojas.</p>
    <p>Precio: $4.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://production-tailoy-repo-magento-statics.s3.amazonaws.com/imagenes/872x872/productos/i/p/a/papel-celofan-cristal-plusx3-5000137-default-1.jpg" alt="Producto 45" width="100" height="100">
    <h3>Papel Celofán Transparente</h3>
    <p>Rollo de papel celofán transparente para envolver regalos, 10 metros.</p>
    <p>Precio: $2.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://papeleria-tecnica.net/images/2020/03/papel-para-acuarela-canson-xl.jpg" alt="Producto 46" width="100" height="100">
    <h3>Papel Acuarela</h3>
    <p>Bloque de papel acuarela de alta calidad, 20 hojas.</p>
    <p>Precio: $12.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0Ydrsp1pADr_tO2XMccgwTOCb8qaRjNsruNzFsfAUpg&s" alt="Producto 47" width="100" height="100">
    <h3>Papel Engomado</h3>
    <p>Hojas de papel engomado para etiquetas, paquete de 50 hojas.</p>
    <p>Precio: $4.49</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbwl3ApH1Mv8LjLmqFTrcSkyc9zFSYB_GQXrxB6rY_ZQ&s" alt="Producto 48" width="100" height="100">
    <h3>Papel Perforado</h3>
    <p>Bloque de papel perforado para anillado, 100 hojas.</p>
    <p>Precio: $6.99</p>
    <button>Agregar al Carrito</button>
</div>


            <!-- Aquí puedes agregar más productos de útiles de escritorio según sea necesario -->
            
        
    </section>
   
</body>
</html>
