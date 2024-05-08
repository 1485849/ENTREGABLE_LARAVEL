<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        header {
            background-color: 	#800080;
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
        <h1> Productos de tecnologia</h1>
    </header>

    <div class="container">
        <h2 class="title">Últimos Productos</h2>
        <section>
        
        <div class="articles">
            
            <div class="post">
                <img src="https://compusystemperu.com/wp-content/uploads/2021/10/X515E-I5-1.jpg" alt="Producto 1" width="100" height="100">
                <h3>Laptop Asus</h3>
                <p>Descripción del Producto 1</p>
                <p>Precio: $999.9</p>
                <button>Agregar al Carrito</button>
            </div>
            
            <div class="post">
                <img src="https://home.ripley.com.pe/Attachment/WOP_5/2004277231769/2004277231769_2.jpg" alt="Producto 2" width="100" height="100">
                <h3>IMPRESORA MULTIFUNCIONAL INALÁMBRICA EPSON ECOTANK L3250</h3>
                <p>Impresora multifuncional EcoTank L3250 de Epson. Costo de impresión ultra bajo. Tecnología Heat-Free.</p>
                <p>S/ 749</p>
                <button>Agregar al Carrito</button>
            </div>
            
            <div class="post">
                <img src="https://rimage.ripley.com.pe/home.ripley/Attachment/MKP/3770/PMP00003559145/full_image-1.png" alt="Producto 3" width="100" height="100">
                <h3>IMPRESORA EPSON ECOTANK L1250 INALÁMBRICA WIFI</h3>
                <p>Marca: Epson Modelo: L1250 Numero de parte: C11CJ71303 Funciones: Solo impresión (No copia, ni escanea)</p>
                <p>Precio: $3.99</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://home.ripley.com.pe/Attachment/WOP_5/2004277231745/2004277231745_2.jpg" alt="Producto 3" width="100" height="100">
                <h3>IMPRESORA MULTIFUNCIONAL INALÁMRICA EPSON ECOTANK L4260</h3>
                <p>Impresora multifuncional EcoTank L4260 de Epson. Costo de impresión ultra bajo. Tecnología Heat-Free. Epson te respalda totalmente para que pueda imprimir sin preocupaciones.</p>
                <p>S/ 999</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://ripleype.imgix.net/https%3A%2F%2Fmedia-prod-use-1.mirakl.net%2FSOURCE%2F520a5f649ff54e829d208f9765bb892a?w=750&h=555&ch=Width&auto=format&cs=strip&bg=FFFFFF&q=60&trimcolor=FFFFFF&trim=color&fit=fillmax&ixlib=js-1.1.0&s=85a6578b5eb4e219b3e28b90ccabc100" alt="Producto 3" width="100" height="100">
                <h3>IMPRESORA EPSON L4260 WIFI DUPLEX MULTIFUNCIONAL + 4 TINTAS T504 (BKCMY)</h3>
                <p>La mas completa gama de impresoras y multifuncionales EcoTank de sistema contínuo EPSON, las encuentras en Ripley.com</p>
                <p>S/ 1,339</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://ripleype.imgix.net/https%3A%2F%2Fmedia-prod-use-1.mirakl.net%2FSOURCE%2F4ff038eb24804ddca8051d0b08e8bdaa?w=750&h=555&ch=Width&auto=format&cs=strip&bg=FFFFFF&q=60&trimcolor=FFFFFF&trim=color&fit=fillmax&ixlib=js-1.1.0&s=381bc03742e8855cb5fbfbecf80a365c" alt="Producto 3" width="100" height="100">
                <h3>IMPRESORA MULTIFUNCIONAL LASER BROTHER DCP-1602</h3>
                <p>Marca: Brother Modelo: DCP-1602 Tecnología de impresión: Láser Tipo: Monocromático (Imprime solo en negro) Funciones: Imprime, copia, escanea</p>
                <p>S/ 499</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://rimage.ripley.com.pe/home.ripley/Attachment/MKP/1720/PMP00003044881/imagen2-1.jpeg" alt="Producto 3" width="100" height="100">
                <h3>IMPRESORA MULTIFUNCIONAL HP SMART TANK 580 COLOR WIFI BLUETOOTH SMART APP</h3>
                <p>Impresora Todo-en-Uno HP Smart Tank 580, manténgase conectado y siga imprimiendo con el Wi-Fi con reparación automática; Hasta 12.000 páginas en negro o 6000 páginas en color.</p>
                <p>S/ 559</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://static.wixstatic.com/media/d1fe03_f7abb026c0964e09b57a51523948dee0~mv2.webp" alt="Producto 3" width="100" height="100">
                <h3>Fotocopiadora RICOH C3503 Multifunción A3 a Color Láser </h3>
                <p></p>
                <p>S/. 5 800</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://static.wixstatic.com/media/d1fe03_e03d7dfed97e4aea9d5b7399deb9229a~mv2.webp" alt="Producto 3" width="100" height="100">
                <h3>Fotocopiadora RICOH C3504 Multifunción A3 a Color Láser</h3>
                <p>MultifunciónTamaño A3, A4, F4, A5, A6 2 Bandejas  Marca: RICOH Año de Fabricación: 2020 Remanufacturada</p>
                <p>S/. 7 800</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://static.wixstatic.com/media/d1fe03_ed413e3ea88c45a2b8b5b66b737e6068~mv2.png/v1/fill/w_500,h_500,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/d1fe03_ed413e3ea88c45a2b8b5b66b737e6068~mv2.png" alt="Producto 3" width="100" height="100">
                <h3>Fotocopiadora Ricoh MP301 Monocromática Semi Nueva </h3>
                <p>Fotocopiadora Monocromática en A4 y Oficio, idelales para Oficinas de volumen regular de trabajo o negocios de copiados, ya que cuenta con tóner de bajo costo y alto rendimiento de aproximadamente 7000 páginas por cartucho de tóner, fácil de cambiar y fácil de operar.CONDICIÓN: Semi Nueva Garantía: 1 año</p>
                <p>s/. 1 200</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://static.wixstatic.com/media/d1fe03_c2b9a6a1ce514e4da506dc744e444578~mv2.jpg/v1/fill/w_500,h_375,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/d1fe03_c2b9a6a1ce514e4da506dc744e444578~mv2.jpg" alt="Producto 3" width="100" height="100">
                <h3>Fotocopiadora RICOH C5503 Multifunción A3 a Color Láser</h3>
                <p>Fotocopiadora RICOH Color Laser Multifunción Tamaño A3, A4, F4, A5, A6 2 Bandejas  Marca: RICOH Remanufacturada</p>
                <p>S/. 6 600</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://static.wixstatic.com/media/d1fe03_84ea920070774e2983b0e8732b69ea42~mv2.png/v1/fill/w_500,h_500,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/d1fe03_84ea920070774e2983b0e8732b69ea42~mv2.png" alt="Producto 3" width="100" height="100">
                <h3>Fotocopiadora Brother L3551 Color Nuevo</h3>
                <p>Fotocopiadora BROTHER L3151 , Láser Color Nuevo, Garantía 1 año</p>
                <p>S/. 1980</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://static.wixstatic.com/media/d1fe03_4935720db0b749a491f4ef386eb7e9ad~mv2.png/v1/fill/w_500,h_667,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/d1fe03_4935720db0b749a491f4ef386eb7e9ad~mv2.png" alt="Producto 3" width="100" height="100">
                <h3>Fotocopiadora Ricoh MP305 Monocromática Nueva</h3>
                <p>Fotocopiadora RICOH MP305+, Monocromática, Laser</p>
                <p>S/. 4 700</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://d598hd2wips7r.cloudfront.net/catalog/product/cache/74c1057f7991b4edb2bc7bdaa94de933/4/s/4sb24a_2.png" alt="Producto 3" width="100" height="100">
                <h3>Impresora Multifuncional HP Smart Tank 530 Inalámbrica</h3>
                <p>Impresión sin cartucho de alta calidad: conexiones más veloces,[2] impresión móvil sencilla[3] y fax.[1]</p>
                <p>S/ . 700</p>
                <button>Agregar al Carrito</button>
            </div>
            <div class="post">
                <img src="https://falabella.scene7.com/is/image/FalabellaPE/882958605_1?wid=1500&hei=1500&qlt=70" alt="Producto 3" width="100" height="100">
                <h3>Asus Vivobook 15x Intel Core I5-1235u 8gb 512gb Ssd 15.6" Fhd</h3>
                <p>Procesador: Intel Core i5
Modelo tarjeta de video: Intel UHD Graphics
Tamaño de la pantalla: 15.6 pulgadas
Disco duro: No tiene
Disco duro sólido: 512GB</p>
                <p>S/. 1 999</p>
                <button>Agregar al Carrito</button>
            </div>
            <div class="post">
                <img src="https://falabella.scene7.com/is/image/FalabellaPE/882926982_1?wid=1500&hei=1500&qlt=70" alt="Producto 3" width="100" height="100">
                <h3>Laptop Asus Intel Core i3 8GB 256GB SSD Vivobook Go 15 12° Gen 15.6"</h3>
                <p>Procesador: Intel Core i3
Tamaño de la pantalla: 15
Disco duro: 256GB SSD
Disco duro sólido: 256GB SSD
Núcleos del procesador: Octa Core</p>
                <p>S/. 1 499</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://falabella.scene7.com/is/image/FalabellaPE/882959594_1?wid=1500&hei=1500&qlt=70" alt="Producto 3" width="100" height="100">
                <h3>Laptop Lenovo AMD Ryzen 5 16GB 512GB Serie 7520U 15.6</h3>
                <p>Procesador: AMD Ryzen 5
                   Tamaño de la pantalla: 15
                    Disco duro: 512GB SSD
                    Disco duro sólido: 512GB SSD
                   Núcleos del procesador: Quad core</p>
                <p>S/. 2 199</p>
                <button>Agregar al Carrito</button>
            </div> 

            <div class="post">
                <img src="" alt="Producto 3" width="100" height="100">
                <h3>Lampara de Luna</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="" alt="Producto 3" width="100" height="100">
                <h3>Luz Proyector</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://d598hd2wips7r.cloudfront.net/catalog/product/cache/74c1057f7991b4edb2bc7bdaa94de933/4/s/4sb24a_2.png" alt="Producto 3" width="100" height="100">
                <h3>Impresora Multifuncional HP Smart Tank 530 Inalámbrica</h3>
                <p>Impresión sin cartucho de alta calidad: conexiones más veloces,[2] impresión móvil sencilla[3] y fax.[1]</p>
                <p>S/ . 700</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="" alt="Producto 3" width="100" height="100">
                <h3>Figura de Animes</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="" alt="Producto 3" width="100" height="100">
                <h3>Cortador de Cabello</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="" alt="Producto 3" width="100" height="100">
                <h3>Ventilador Inalambrico</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="" alt="Producto 3" width="100" height="100">
                <h3>Collar de Metal</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="" alt="Producto 3" width="100" height="100">
                <h3>Altavoz Lenovo</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="" alt="Producto 3" width="00" height="100">
                <h3>Cubo Rubick</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="" alt="Producto 3" width="100" height="100">
                <h3>Gafas Negras</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>
            <div class="post">
                <img src="" alt="Producto 3" width="100" height="100">
                <h3>Consola de VIdeojuegos</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="" alt="Producto 3" width="100" height="100">
                <h3>Chaqueta senderismo</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>
            <div class="post">
                <img src="" alt="Producto 3" width="100" height="100">
                <h3>Zapatillas Adidas</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="" alt="Producto 3" width="100" height="100">
                <h3>Protector de Pantalla</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="" alt="Producto 3" width="100" height="100">
                <h3>Chaleco Moldeador </h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="" alt="Producto 3" width="100" height="100">
                <h3>Tablet Samsung</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            
            
            <!-- Añade más productos según sea necesario -->
        </div>
    </section>
    </div>
</body>
</html>




    
    
    


    