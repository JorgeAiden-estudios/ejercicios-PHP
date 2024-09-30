<!DOCTYPE html>
<!--
Realiza un programa que pida la temperatura media que ha hecho en cada mes de un determinado
año y que muestre a continuación un diagrama de barras horizontales con esos datos. Las barras
del diagrama se pueden dibujar a base de la concatenación de una imagen.

Creado por Juan Jose Fernandez Romero
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Diagrama de barras y temperatura</title>
        
        <style>
            
            input {
                display: inline-block;
                width: 40px;
            }
            
            #enviar {
                margin-top: 20px;
                margin-bottom: 20px;
                width: 70px;
            }
            
            span {
                
                display: inline-block;
                width: 200px;
                
            }
            
            div {
                
                display: inline-block;
                
            }
            
            .mes {
                
                width: 100px;
                
            }
            
            .bajasTemperaturas {
                
                display: inline-block;
                width: 2px;
                height: 6px;
                background-color: cyan;
                
            }
            
            .temperaturasMedias {

                display: inline-block;
                width: 2px;
                height: 6px;
                background-color: yellow;
                
            }
            
            .altasTemperaturas {
                
                display: inline-block;
                width: 2px;
                height: 6px;
                background-color: red;
                
            }
            
            .bajoCero {
                
                display: inline-block;
                width: 2px;
                height: 6px;
                background-color: blue;
                
            }
            
        </style>
    </head>
    <body>
        <!-- Dejo esto porque si no tiene que ser un COÑAZO hacerlo a mano -->
        <h3>Crea un diagrama dependiendo de la Temperatura</h3>
        <p>Introduce la media de temperatura de cada mes</p>
        
        <form action="index.php" method="post">
          <span><span class="mes">Enero: </span><input type="number" name="mes1" placeholder="0" max="999" autofocus>ºC</span>
          <span><span class="mes">Febrero: </span><input type="number" name="mes2" max="999" placeholder="0">ºC</span><br>
          <span><span class="mes">Marzo: </span><input type="number" name="mes3" placeholder="0" max="999">ºC</span>
          <span><span class="mes">Abril: </span><input type="number" name="mes4" max="999" placeholder="0">ºC</span><br>
          <span><span class="mes">Mayo: </span><input type="number" name="mes5" max="999" placeholder="0">ºC</span>
          <span><span class="mes">Junio: </span><input type="number" name="mes6" max="999" placeholder="0">ºC</span><br>
          <span><span class="mes">Julio: </span><input type="number" name="mes7" max="999" placeholder="0">ºC</span>
          <span><span class="mes">Agosto: </span><input type="number" name="mes8" max="999" placeholder="0">ºC</span><br>
          <span><span class="mes">Septiembre: </span><input type="number" name="mes9" max="999" placeholder="0">ºC</span>
          <span><span class="mes">Octubre: </span><input type="number" name="mes10" max="999" placeholder="0">ºC</span><br>
          <span><span class="mes">Noviembre: </span><input type="number" name="mes11" max="999" placeholder="0">ºC</span>
          <span><span class="mes">Diciembre: </span><input type="number" name="mes12" max="999" placeholder="0">ºC</span><br>
          <input type="submit" id="enviar" name="submit" value="¡Enviar!">
        </form>
        

    </body>
</html>
