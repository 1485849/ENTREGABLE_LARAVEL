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
            background-color: 	#8B0000;
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
                <img src="https://falabella.scene7.com/is/image/FalabellaPE/18612566_1?wid=800&hei=800&qlt=70" alt="Producto 1" width="100" height="100">
                <h3>Set de Bolígrafos de Gel</h3>
                <p>Paquete de 12 bolígrafos de gel de varios colores.</p>
                <p>Precio: $9.99</p>
                <button>Agregar al Carrito</button>
            </div>
            
            <div class="post">
                <img src="https://falabella.scene7.com/is/image/FalabellaPE/gsc_126925580_4746801_1?wid=1500&hei=1500&qlt=70" alt="Producto 2" width="100" height="100">
                <h3>Agenda Semanal</h3>
                <p>Agenda de tamaño medio con diseño semanal y espacio para notas.</p>
                <p>Precio: $12.99</p>
                <button>Agregar al Carrito</button>
            </div>
            
            <div class="post">
                <img src="https://irp.cdn-website.com/d9aba119/dms3rep/multi/caja-para-archivos.png" alt="Producto 3" width="100" height="100">
                <h3>Caja de Archivo</h3>
                <p>Caja de archivo resistente para almacenar documentos.</p>
                <p>Precio: $19.99</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://img.kwcdn.com/product/1eed512a38/d461def5-0253-4380-bbc8-c4822842514d_800x800.jpeg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp" alt="Producto 4" width="100" height="100">
                <h3>Lápices HB</h3>
                <p>Juego de 20 lápices HB de madera.</p>
                <p>Precio: $7.49</p>
                <button>Agregar al Carrito</button>
            </div>
            
            <div class="post">
                <img src="https://m.media-amazon.com/images/I/815DzaIaldL._AC_UF894,1000_QL80_.jpg" alt="Producto 5" width="100" height="100">
                <h3>Portaminas</h3>
                <p>Portaminas recargable con agarre ergonómico.</p>
                <p>Precio: $5.99</p>
                <button>Agregar al Carrito</button>
            </div>
            
            <div class="post">
                <img src="https://via.placeholder.com/150" alt="Producto 6" width="100" height="100">
                <h3>Calculadora Científica</h3>
                <p>Calculadora científica con funciones trigonométricas.</p>
                <p>Precio: $15.99</p>
                <button>Agregar al Carrito</button>
            </div>

            <!-- Agrega más productos de útiles de escritorio según sea necesario -->
            <div class="post">
                <img src="https://production-tailoy-repo-magento-statics.s3.amazonaws.com/imagenes/872x872/productos/i/c/a/calcula-cientif-casio-fx-991lacw-65708-default-1.jpg" alt="Producto 7" width="100" height="100">
                <h3>Notas Adhesivas</h3>
                <p>Paquete de 100 hojas de notas adhesivas de varios colores.</p>
                <p>Precio: $3.99</p>
                <button>Agregar al Carrito</button>
            </div>
            
            <div class="post">
                <img src="https://promart.vteximg.com.br/arquivos/ids/921455-1000-1000/134742.jpg?v=637558523893000000" alt="Producto 8" width="100" height="100">
                <h3>Cinta Adhesiva Transparente</h3>
                <p>Rollo de cinta adhesiva transparente de alta resistencia.</p>
                <p>Precio: $2.49</p>
                <button>Agregar al Carrito</button>
            </div>
            
            <div class="post">
                <img src="https://production-tailoy-repo-magento-statics.s3.amazonaws.com/imagenes/872x872/productos/i/t/i/tijera-7-pulgadas-para-oficina-10120-default-1.jpg" alt="Producto 9" width="100" height="100">
                <h3>Tijeras de Oficina</h3>
                <p>Tijeras de acero inoxidable con mango ergonómico.</p>
                <p>Precio: $4.99</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://oechsle.vteximg.com.br/arquivos/ids/14057250-1000-1000/image-bb76b5b948fc4a59b6eb97a9c524b167.jpg?v=638141003357600000" alt="Producto 10" width="100" height="100">
                <h3>Organizador de Escritorio</h3>
                <p>Organizador de escritorio con compartimentos ajustables.</p>
                <p>Precio: $11.99</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
    <img src="https://promart.vteximg.com.br/arquivos/ids/7571394-1000-1000/image-4890bd85c56c4ff99b70dd1207bfeb0e.jpg?v=638336962913930000" alt="Producto 11" width="100" height="100">
    <h3>Estuche de Marcadores</h3>
    <p>Estuche con 24 marcadores de colores variados.</p>
    <p>Precio: $10.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://production-tailoy-repo-magento-statics.s3.amazonaws.com/imagenes/872x872/productos/i/g/r/grapas-266-x-5000-1220-default-1.jpg" alt="Producto 12" width="100" height="100">
    <h3>Grapas Metálicas</h3>
    <p>Paquete de 1000 grapas metálicas para grapadoras estándar.</p>
    <p>Precio: $3.49</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://production-tailoy-repo-magento-statics.s3.amazonaws.com/imagenes/872x872/productos/i/m/a/masking-1-12-x-40-yds-pegafan-388-default-1.jpg" alt="Producto 13" width="100" height="100">
    <h3>Cinta masketing</h3>
    <p>Rollo de cinta adhesiva masketing de 3/4 de pulgada.</p>
    <p>Precio: $1.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://http2.mlstatic.com/D_NQ_NP_799253-MPE73836464257_012024-O.webp" alt="Producto 14" width="100" height="100">
    <h3>Carpeta de Archivo Expansible</h3>
    <p>Carpeta de archivo expansible con solapas y cierre de goma.</p>
    <p>Precio: $6.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://production-tailoy-repo-magento-statics.s3.amazonaws.com/imagenes/872x872/productos/i/p/e/pegamento-barra-x-21gr-artesco-2173-default-1.jpg" alt="Producto 15" width="100" height="100">
    <h3>Pegamento en Barra</h3>
    <p>Pegamento en barra lavable y no tóxico.</p>
    <p>Precio: $2.49</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSzVxU3garhUOPUjJDsYYv_QymowlR7sQ8Y3qTYtS-xg&s" alt="Producto 16" width="100" height="100">
    <h3>Carpeta de Presentación</h3>
    <p>Carpeta de presentación de cartón rígido con bolsillos internos.</p>
    <p>Precio: $8.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://www.faber-castell.com.pe/-/media/Products/Product-Repository/Whiteboard-Marker/24-25-99-Equipment/380100-Board-eraser-assorted-colours/Images/380100_10_PM1.ashx?bc=ffffff&as=0&h=900&w=900&sc_lang=es-PE&hash=327DB1E48056156ED268956037F2EA21" alt="Producto 17" width="100" height="100">
    <h3>Borrador de Pizarra</h3>
    <p>Borrador de pizarra magnética con superficie de fieltro.</p>
    <p>Precio: $4.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://comercial-li.com.pe/cdn/shop/products/003174_458x458.jpg?v=1615558770" alt="Producto 18" width="100" height="100">
    <h3>Clips Binder</h3>
    <p>Clips binder de metal en forma de paloma, juego de 36 unidades.</p>
    <p>Precio: $5.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://m.media-amazon.com/images/I/71xaYpBbKTL._AC_UF894,1000_QL80_.jpg" alt="Producto 19" width="100" height="100">
    <h3>Portafolio de Documentos</h3>
    <p>Portafolio de documentos de plástico con solapa y cierre de broche.</p>
    <p>Precio: $7.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://plazavea.vteximg.com.br/arquivos/ids/28647035-512-512/20237846.jpg" alt="Producto 20" width="100" height="100">
    <h3>Resaltadores</h3>
    <p>Paquete de 5 resaltadores de colores surtidos.</p>
    <p>Precio: $4.49</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://cdnx.jumpseller.com/la-cali/image/39082049/Cuaderno_De_Notas_Primavera_A7_X_60_Hojas_Ni_a__5_.png?1693429736" alt="Producto 21" width="100" height="100">
    <h3>Cuaderno de Notas</h3>
    <p>Cuaderno de notas con tapa dura y hojas rayadas.</p>
    <p>Precio: $3.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://valka.pe/web/image/product.template/1702/image_1024?unique=c8cf6d2" alt="Producto 22" width="100" height="100">
    <h3>Lápices de Colores</h3>
    <p>Juego de 24 lápices de colores en estuche de metal.</p>
    <p>Precio: $9.99</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://www.ofimarket.pe/cdn/shop/products/PR03240.jpg?v=1627864785" alt="Producto 23" width="100" height="100">
    <h3>Tijeras de Oficina</h3>
    <p>Juego de 3 tijeras de oficina con mangos ergonómicos.</p>
    <p>Precio: $6.49</p>
    <button>Agregar al Carrito</button>
</div>

<div class="post">
    <img src="https://www.ofimarket.pe/cdn/shop/products/pr05109.jpg?v=1627662859" alt="Producto 24" width="100" height="100">
    <h3>Pizarra Blanca Magnética</h3>
    <p>Pizarra blanca magnética de tamaño mediano con marco de aluminio.</p>
    <p>Precio: $14.99</p>
    <button>Agregar al Carrito</button>
</div>


            <!-- Aquí puedes agregar más productos de útiles de escritorio según sea necesario -->
            
        </div>
    </section>
    </div>
</body>
</html>
