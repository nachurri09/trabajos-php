<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Trabajos Practicos PHP - Sanchez Ignacio</title>
    <style>
        /* Estilos generales de la pagina */
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #e9ecef;
            margin: 0;
            padding: 20px;
            color: #212529;
        }

        .main-wrapper {
            width: 90%;
            max-width: 800px;
            margin: 20px auto;
            background-color: #ffffff;
            border: 1px solid #ced4da;
            padding: 25px;
        }

        h1 {
            font-size: 24px;
            color: #0d6efd;
            margin-top: 0;
            border-bottom: 2px solid #0d6efd;
            padding-bottom: 8px;
        }

        .datos-alumno {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 20px;
        }

        /* Lista de archivos */
        .lista-archivos {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .lista-archivos li {
            padding: 10px 12px;
            border-bottom: 1px solid #dee2e6;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .lista-archivos li:nth-child(even) {
            background-color: #f8f9fa;
        }

        .nombre-archivo {
            font-weight: bold;
            font-size: 14px;
            color: #333333;
        }

        .btn-descargar {
            background-color: #0d6efd;
            color: #ffffff;
            text-decoration: none;
            padding: 5px 12px;
            font-size: 13px;
            border-radius: 3px;
        }

        .btn-descargar:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>
<body>

    <div class="main-wrapper">
        <h1>Trabajos Practicos de PHP</h1>
        <div class="datos-alumno">
            <strong>Alumno:</strong> Sanchez Ignacio | <strong>Curso:</strong> 4A
        </div>

        <p>Seleccionar el archivo deseado para iniciar la descarga:</p>

        <!-- Lista completa de entregas -->
        <ul class="lista-archivos">
            <li>
                <span class="nombre-archivo">Tareadedowhile.php</span>
                <a href="Tareadedowhile.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">while.php</span>
                <a href="while.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">do_while.php</span>
                <a href="do_while.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">do_while_2.php</span>
                <a href="do_while_2.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">for.php</span>
                <a href="for.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">for_2.php</span>
                <a href="for_2.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">for2.php</span>
                <a href="for2.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">for2_2.php</span>
                <a href="for2_2.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">foreach.php</span>
                <a href="foreach.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">foreach_2.php</span>
                <a href="foreach_2.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">foreach2.php</span>
                <a href="foreach2.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">foreach2_2.php</span>
                <a href="foreach2_2.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">break_continue.php</span>
                <a href="break_continue.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">break_continue2.php</span>
                <a href="break_continue2.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">break_continue3.php</span>
                <a href="break_continue3.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">match.php</span>
                <a href="match.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">match2.php</span>
                <a href="match2.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">switch.php</span>
                <a href="switch.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">switch2.php</span>
                <a href="switch2.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">funciones.php</span>
                <a href="funciones.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">funciones_2.php</span>
                <a href="funciones_2.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">funciones2.php</span>
                <a href="funciones2.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">funciones3.php</span>
                <a href="funciones3.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">funciones_string.php</span>
                <a href="funciones_string.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">funciones_string_2.php</span>
                <a href="funciones_string_2.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">funciones_string2.php</span>
                <a href="funciones_string2.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">funciones_string3.php</span>
                <a href="funciones_string3.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">funciones_string4.php</span>
                <a href="funciones_string4.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">include.php</span>
                <a href="include.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">incluir_funciones.php</span>
                <a href="incluir_funciones.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">incluir_funciones2.php</span>
                <a href="incluir_funciones2.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">require.php</span>
                <a href="require.php" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">index.html</span>
                <a href="index.html" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">index2.html</span>
                <a href="index2.html" download class="btn-descargar">Descargar</a>
            </li>
            <li>
                <span class="nombre-archivo">nav.html</span>
                <a href="nav.html" download class="btn-descargar">Descargar</a>
            </li>
        </ul>
    </div>

</body>
</html>