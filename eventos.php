<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link rel="stylesheet" href="/ss/estilo.css"> -- no funciono-->
    <!-- bootstrap.com -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>SS - Eventos </title>

    <!--Esto no va aqui va en un archivo aparte-->
    <style>
        body {
            background-image: url("img/body.jpg");
        }
        
        td {
            align-content: center;
            width: auto;
        }
        
        h1.sansserif {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .selectcontrol {
            background-color: rgb(255, 255, 255);
            /*fondo del input*/
            color: rgb(0, 0, 10);
            /*color de la letra*/
            border: 3px solid rgb(206, 203, 203);
            /*borde*/
            font-weight: bold;
            /*gruesos o delgados de la letra */
            width: auto;
            /*ancho*/
            height: auto;
            /*largo*/
            margin: 20px 3px 15px 10px;
            /* arriba derecha abajo izquierda*/
            /*espacio de afuera*/
            border-radius: 5px;
            /* borde con la esquinas redondas*/
            font-size: 12px;
            /*tamaño de la letra - puede ser en px o em (em es que multiplica por los px por defectos del navegador (12 * 2em / 1em) )*/
            font-family: Arial, Helvetica, sans-serif;
            /* tipo de letra - si el navegador no tiene la primera letra toma la segunda y sino toma la tercera*/
        }
        
        .selectcontrol {
            background-color: rgb(255, 255, 255);
            /*fondo del input*/
            color: rgb(0, 0, 10);
            /*color de la letra*/
            border: 3px solid rgb(206, 203, 203);
            /*borde*/
            font-weight: bold;
            /*gruesos o delgados de la letra */
            width: auto;
            /*ancho*/
            height: auto;
            /*largo*/
            margin: 2px 5px;
            /* arriba derecha abajo izquierda*/
            /*espacio de afuera*/
            border-radius: 5px;
            /* borde con la esquinas redondas*/
            font-size: 12px;
            /*tamaño de la letra - puede ser en px o em (em es que multiplica por los px por defectos del navegador (12 * 2em / 1em) )*/
            font-family: Arial, Helvetica, sans-serif;
            /* tipo de letra - si el navegador no tiene la primera letra toma la segunda y sino toma la tercera*/
        }
        
        .inputevento {
            background-color: rgb(255, 255, 255);
            /*fondo del input*/
            color: rgb(0, 0, 10);
            /*color de la letra*/
            border: 3px solid rgb(206, 203, 203);
            /*borde*/
            font-weight: bold;
            /*gruesos o delgados de la letra */
            width: auto;
            /*ancho*/
            height: auto;
            /*largo*/
            margin: 20px 3px 15px 10px;
            /* arriba derecha abajo izquierda*/
            /*espacio de afuera*/
            border-radius: 5px;
            /* borde con la esquinas redondas*/
            font-size: 12px;
            /*tamaño de la letra - puede ser en px o em (em es que multiplica por los px por defectos del navegador (12 * 2em / 1em) )*/
            font-family: Arial, Helvetica, sans-serif;
            /* tipo de letra - si el navegador no tiene la primera letra toma la segunda y sino toma la tercera*/
        }
    </style>
    <!--Valida campos en blanco-->
    <script>
        function validar_formulario() {
            if (
                document.form1.desc_circuito.value == '' ||
                document.form1.desc_lugar.value == '' ||
                document.form1.inicio.value == '' ||
                document.form1.fin.value == '' ||
                document.form1.desc_evento.value == '' ||
                document.form1.st_actuacion.value == '0' ||
                document.form1.olas.value == '0' ||
                document.form1.duracion_heat.value == '0'
            ) {
                alert(" * Los Campos son Obligatorios por favor verifique")
            } else {
                document.form1.submit();
            }
        }
    </script>
    <!--Que los campos de texto inserte en mayuscula-->
    <script type="text/javascript">
        function upperCase() {
            var x = document.form1.desc_evento.value
            document.form1.desc_evento.value = x.toUpperCase()
        }
    </script>
    <!--Que los campos de numeros no permita letras -->
    <script>
        function soloNumeros(e) {
            var key = window.Event ? e.which : e.keyCode
            return (key >= 48 && key <= 57)
        }
    </script>
</head>
<body>
<fieldset class="well">
                            <legend>
                                <br>
                                <h3>Categorias</h3>
                            </legend>
                            <table border="0" align="center" width="500">
                                <tr>
                                    <td>
                                        <strong>Modalidad</strong>
                                    </td>
                                    <td>
                                        <strong>Rango de Edades</strong>
                                    </td>
                                    <td>
                                        <strong>G&eacute;nero</strong>
                                    </td>
                                </tr>
                                <?php
                                include "categoria_dupli.php";
                                ?>
                            </table>
                        </fieldset>
</body>
</html>