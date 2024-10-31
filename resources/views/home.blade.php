@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="header-title">Manuel Antonio Fuentes Ramirez</h1>
    <h1 class="header-subtitle">1890-21-10093</h1>
    <div class="header-subtitle1-container">
        <h1 class="header-subtitle1">Desarrollo Web</h1>
    </div>
@stop

@section('css')
    <style>
        /* Estilos para centrar y dar color y tamaño a los títulos */
        .header-title, .header-subtitle {
            text-align: center;
            color: #fcfcfc;
            margin: 0;
        }

        .content-header .header-title {
            font-size: 3rem; !important; /* Forza el tamaño del subtítulo */
        }
        }

        .content-header .header-subtitle {
            font-size: 3.5rem; !important; /* Forza el tamaño del subtítulo */
        }

        /* Centrado específico para .header-subtitle1 */
        .header-subtitle1-container {
            display: flex;
            align-items: center; /* Centra verticalmente */
            justify-content: center; /* Centra horizontalmente */
            min-height: 70vh; /* Ajusta la altura según el espacio deseado */
        }

        .content-header .header-subtitle1 {
            font-size: 8rem !important; /* Forza el tamaño del subtítulo */
            color: #fcffff;
}


        /* Aplica la imagen de fondo a la sección principal del contenido */
        .content-wrapper {
            background-image: url('https://i.blogs.es/0a94cd/dragon-ball-z-kai/1366_2000.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* Fondo blanco semitransparente para el contenido */
        .content {
            background-color: rgba(255, 255, 255, 0.4);
            padding: 20px;
            border-radius: 8px;
        }

        /* Opcional: Añadir un efecto de superposición */
        .content-wrapper::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        /* Asegura que el contenido esté encima de la superposición */
        .content, .content-header {
            position: relative;
            z-index: 2;
        }
    </style>
@stop
