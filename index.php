<?php
//require_once(__DIR__.'/../Auth/auth.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
#include_once("../../");
global $woocommerce;
date_default_timezone_set('America/Argentina/Buenos_Aires');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <title>Calm QR</title>

    <link rel="icon" href="https://calmessimple.com.ar/wp-content/uploads/2019/10/cropped-imageedit_1_8336802587-32x32.png" sizes="32x32">
    <link rel="icon" href="https://calmessimple.com.ar/wp-content/uploads/2019/10/cropped-imageedit_1_8336802587-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="https://calmessimple.com.ar/wp-content/uploads/2019/10/cropped-imageedit_1_8336802587-180x180.png">
    <link rel="apple-touch-icon" href="https://calmessimple.com.ar/wp-content/uploads/2019/10/cropped-imageedit_1_8336802587-180x180.png">

    <link rel="apple-touch-icon" sizes="57x57" href="https://calmessimple.com.ar/wp-content/uploads/2019/10/cropped-imageedit_1_8336802587-180x180.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://calmessimple.com.ar/wp-content/uploads/2019/10/cropped-imageedit_1_8336802587-180x180.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://calmessimple.com.ar/wp-content/uploads/2019/10/cropped-imageedit_1_8336802587-180x180.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://calmessimple.com.ar/wp-content/uploads/2019/10/cropped-imageedit_1_8336802587-180x180.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://calmessimple.com.ar/wp-content/uploads/2019/10/cropped-imageedit_1_8336802587-180x180.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://calmessimple.com.ar/wp-content/uploads/2019/10/cropped-imageedit_1_8336802587-180x180.png">
    <link rel="apple-touch-icon" sizes="128x128" href="https://calmessimple.com.ar/wp-content/uploads/2019/10/cropped-imageedit_1_8336802587-180x180.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://calmessimple.com.ar/wp-content/uploads/2019/10/cropped-imageedit_1_8336802587-180x180.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://calmessimple.com.ar/wp-content/uploads/2019/10/cropped-imageedit_1_8336802587-180x180.png">
    <link rel="apple-touch-icon" sizes="167x167" href="https://calmessimple.com.ar/wp-content/uploads/2019/10/cropped-imageedit_1_8336802587-180x180.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://calmessimple.com.ar/wp-content/uploads/2019/10/cropped-imageedit_1_8336802587-180x180.png">

    <meta name="msapplication-TileImage" content="https://calmessimple.com.ar/wp-content/uploads/2019/10/cropped-imageedit_1_8336802587-270x270.png">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script> 
    <script src="instascan.js"></script>
    <script src="https://kit.fontawesome.com/1b6c7b7c1b.js" crossorigin="anonymous"></script>

    <script src="barcode/exif.min.js"></script>
    <script src="barcode/BarcodeScanner.min.js"></script> 
    <script src="barcode/app.js?52"></script> -->

    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        body {
            margin: 0;
            font-family: 'Muli', Sans-serif;
        }
        
        .titulo {
            position: fixed;
            top: 20px;
            width: 100%;
            text-align: center;
            font-size: medium;
            font-weight: 600;
            color: #000;
        }
        
        .logo {
            width: 200px;
            left: 50%;
            margin-left: -100px;
            margin-top: 40%;
            position: fixed;
            z-index: -2;
        }
        
        .logosmall {
            width: 100px;
            left: 50%;
            margin-left: -50px;
            margin-top: 30px;
            position: fixed;
            z-index: -2;
        }

        .logoModal {
            width: 100px;
            height: 35px;
        }
        
        .botones {
            top: 80px;
            position: fixed;
            left: 50%;
            margin-left: -50px;
            width: 100px;
        }
        
        .qr {
            float: left;
        }
        
        #preview {
            position: fixed;
            z-index: -2;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
        }
        
        .filtro {
            position: fixed;
            z-index: -1;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            display: none;
        }
        
        .negativo {
            filter: invert(100%);
        }
        
        .filtro::after {
            content: "";
            /*display: block;*/
            width: 300px;
            height: 300px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: solid 300px rgba(0, 0, 0, 0.5);
            z-index: -1;
        }
        
        #codigo, #inputPistola {
            position: fixed;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            /*ackground-color: rgba(255, 255, 255, 0.25);*/
            border: none;
            border-bottom-color: gray;
            border-bottom-style: dotted;
            border-bottom-width: initial;
            display: none;
            font-size: 18pt;
            text-align: center;
            border-radius: 0px;
        }
        
        *:focus {
            outline: none;
        }
        
        #lista {
            border-radius: 30px;
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 0px;
            width: 100%;
            height: 50%;
            background-color: #fff;
            position: absolute;
            bottom: -45%;
            overflow-y: scroll;
            box-shadow: 0px -20px 20px 0px #80808080;
            padding-top: 10px;
        }
        
        .item {
            width: 90%;
            margin-left: 5%;
            padding: 5px 0px 5px 5px;
            border-bottom: 1px solid #cccccc;
        }
        
        .id {
            font-weight: bold;
        }
        
        .txt {
            font-size: small;
            color: gray;
        }
        
        .fa-minus-circle {
            color: #ef4335;
            float: right;
            font-size: 23px;
            margin-right: 15px;
            margin-top: -10px;
        }
        button{
            margin-left: 10%;
            width: 80%;
            height: 30px;
            margin-top: 10px;
            background: #FABD00;
            border: none;
            color: white;
            font-weight: bold;
            font-size: larger;
            border-radius: 5px;
        }
        button:disabled,
        button[disabled]{
            background-color: #cccccc;
            color: #666666;
        }

                /* The Modal (background) */
        .selectPistola {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .selectPistolaContent {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        }

        /* The Close Button */
        .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        }

        .close:hover,
        .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        }

    </style>
</head>

<body>
    <img id='modalBtn' class="logosmall" src="logo.svg" type="button" data-toggle="modal" data-target="#myModal">
    
        
    <div class="container">
    

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Seleccione pistola</h4>
            </div>
            <div class="modal-body">
                <img data-dismiss="modal" src="logoDespacho.svg" class="logoModal" id="opcPickeo" onclick="cambiaAccion(1);" alt="">
                <img data-dismiss="modal" src="logoEnvio.svg" class="logoModal" id="opcEnvioInterno" onclick="cambiaAccion(2);" alt="">
                <img data-dismiss="modal" src="logoDesmatcheo.svg" class="logoModal" id="opcDesmatcheo" onclick="cambiaAccion(3);" alt="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        
        </div>
    </div>
    
    </div>
    
    <input type="tel" id="codigo" name="codigo" placeholder="codigo">
    <input type = "text" id="inputPistola" name = "inputPistola" placeholder = "Input Pistola" onkeydown = "checkInputPistola(this)" autofocus>
    <img onclick="checkInputPistola('Enter')" src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHZpZXdCb3g9IjAgMCAyMjYgMjI2Ij48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0Ljk3Miw0Ljk3Mikgc2NhbGUoMC45NTYsMC45NTYpIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9Im5vbnplcm8iIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSJub25lIiBzdHJva2UtbGluZWNhcD0iYnV0dCIgc3Ryb2tlLWxpbmVqb2luPSJub25lIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9IiIgc3Ryb2tlLWRhc2hvZmZzZXQ9IjAiIGZvbnQtZmFtaWx5PSJub25lIiBmb250LXdlaWdodD0ibm9uZSIgZm9udC1zaXplPSJub25lIiB0ZXh0LWFuY2hvcj0ibm9uZSIgc3R5bGU9Im1peC1ibGVuZC1tb2RlOiBub3JtYWwiPjxnIGZpbGw9IiMwMDAwMDAiIHN0cm9rZT0iI2NjY2NjYyIgc3Ryb2tlLXdpZHRoPSIxMCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+PHBhdGggZD0iTTE5NC4zNiw5LjA0YzEyLjQzLDAgMjIuNiwxMC4xNyAyMi42LDIyLjZ2MTYyLjcyYzAsMTIuNDMgLTEwLjE3LDIyLjYgLTIyLjYsMjIuNmgtMTYyLjcyYy0xMi40MywwIC0yMi42LC0xMC4xNyAtMjIuNiwtMjIuNnYtODEuMzZjMCwtMTIuNDMgMTAuMTcsLTIyLjYgMjIuNiwtMjIuNmg1OC43NnYtNTguNzZjMCwtMTIuNDMgMTAuMTcsLTIyLjYgMjIuNiwtMjIuNnpNOTkuNDQsMzEuNjR2NTguNzZjMCw0Ljk0Mzc1IC00LjA5NjI1LDkuMDQgLTkuMDQsOS4wNGgtNTguNzZjLTcuNTM5MjIsMCAtMTMuNTYsNi4wMjA3OCAtMTMuNTYsMTMuNTZ2ODEuMzZjMCw3LjUzOTIyIDYuMDIwNzgsMTMuNTYgMTMuNTYsMTMuNTZoMTYyLjcyYzcuNTM5MjIsMCAxMy41NiwtNi4wMjA3OCAxMy41NiwtMTMuNTZ2LTE2Mi43MmMwLC03LjUzOTIyIC02LjAyMDc4LC0xMy41NiAtMTMuNTYsLTEzLjU2aC04MS4zNmMtNy41MzkyMiwwIC0xMy41Niw2LjAyMDc4IC0xMy41NiwxMy41NnpNMTU2Ljc4NzUsNjguODc3MDNjMC45MzU3OCwwLjg4MjgxIDEuNDY1NDcsMi4xMzY0MSAxLjQxMjUsMy40NDI5N3Y1NC4yNGMwLDE3LjQyNjcyIC0xNC4yMTMyOCwzMS42NCAtMzEuNjQsMzEuNjRoLTY1LjgyMjVsMTkuMzUxMjUsMTkuMzUxMjVjMS44MDA5NCwxLjgwMDk0IDEuODAwOTQsNC42OTY1NiAwLDYuNDk3NWMtMS44MDA5NCwxLjgwMDk0IC00LjY5NjU2LDEuODAwOTQgLTYuNDk3NSwwbC0yNi42OTYyNSwtMjYuODM3NWMtMC4xNDEyNSwtMC4wODgyOCAtMC4yODI1LC0wLjE3NjU2IC0wLjQyMzc1LC0wLjI4MjVjLTAuMTA1OTQsLTAuMDg4MjggLTAuMTk0MjIsLTAuMTc2NTYgLTAuMjgyNSwtMC4yODI1Yy0wLjIxMTg4LC0wLjI2NDg0IC0wLjQwNjA5LC0wLjU0NzM0IC0wLjU2NSwtMC44NDc1YzAsLTAuMDUyOTcgMCwtMC4wODgyOCAwLC0wLjE0MTI1Yy0wLjA1Mjk3LC0wLjA4ODI4IC0wLjEwNTk0LC0wLjE5NDIyIC0wLjE0MTI1LC0wLjI4MjVjLTAuMDUyOTcsLTAuMDg4MjggLTAuMTA1OTQsLTAuMTk0MjIgLTAuMTQxMjUsLTAuMjgyNWMwLC0wLjA1Mjk3IDAsLTAuMDg4MjggMCwtMC4xNDEyNWMtMC4wNTI5NywtMC4wODgyOCAtMC4xMDU5NCwtMC4xOTQyMiAtMC4xNDEyNSwtMC4yODI1YzAsLTAuMDUyOTcgMCwtMC4wODgyOCAwLC0wLjE0MTI1YzAsLTAuMDg4MjggMCwtMC4xOTQyMiAwLC0wLjI4MjVjLTAuMDcwNjIsLTAuNDc2NzIgLTAuMDcwNjIsLTAuOTM1NzggMCwtMS40MTI1YzAuMDM1MzEsLTAuMTk0MjIgMC4wODgyOCwtMC4zODg0NCAwLjE0MTI1LC0wLjU2NWMwLjAzNTMxLC0wLjA4ODI4IDAuMDg4MjgsLTAuMTk0MjIgMC4xNDEyNSwtMC4yODI1YzAsLTAuMDUyOTcgMCwtMC4wODgyOCAwLC0wLjE0MTI1YzAuMDM1MzEsLTAuMDg4MjggMC4wODgyOCwtMC4xOTQyMiAwLjE0MTI1LC0wLjI4MjVjMC4xNTg5MSwtMC4zMDAxNiAwLjM1MzEyLC0wLjU4MjY2IDAuNTY1LC0wLjg0NzVjMC4wODgyOCwtMC4xMDU5NCAwLjE3NjU2LC0wLjE5NDIyIDAuMjgyNSwtMC4yODI1YzAuMjExODcsLTAuMjExODcgMC40NTkwNiwtMC40MDYwOSAwLjcwNjI1LC0wLjU2NWwyNi40MTM3NSwtMjYuNTU1YzAuNzIzOTEsLTAuNzA2MjUgMS42NzczNCwtMS4xNjUzMSAyLjY4Mzc1LC0xLjI3MTI1YzEuOTU5ODQsLTAuMzE3ODEgMy45MTk2OSwwLjY3MDk0IDQuNzg0ODQsMi40NzE4N2MwLjg4MjgxLDEuNzgzMjggMC40OTQzOCwzLjkzNzM0IC0wLjk3MTA5LDUuMjk2ODdsLTE5LjM1MTI1LDE5LjM1MTI1aDY1LjgyMjVjMTIuNTM1OTQsMCAyMi42LC0xMC4wNjQwNiAyMi42LC0yMi42di01NC4yNGMtMC4wNTI5NywtMi4xNTQwNiAxLjQzMDE2LC00LjA0MzI4IDMuNTMxMjUsLTQuNTJjMC4xNzY1NiwtMC4wNTI5NyAwLjM3MDc4LC0wLjEwNTk0IDAuNTY1LC0wLjE0MTI1YzEuMjg4OTEsLTAuMTIzNTkgMi41Nzc4MSwwLjMxNzgxIDMuNTMxMjUsMS4yMTgyOHoiPjwvcGF0aD48L2c+PHBhdGggZD0iTTAsMjI2di0yMjZoMjI2djIyNnoiIGZpbGw9Im5vbmUiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBzdHJva2UtbGluZWpvaW49Im1pdGVyIj48L3BhdGg+PGcgZmlsbD0iI2NjY2NjYyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIHN0cm9rZS1saW5lam9pbj0ibWl0ZXIiPjxwYXRoIGQ9Ik0xMTMsOS4wNGMtMTIuNDMsMCAtMjIuNiwxMC4xNyAtMjIuNiwyMi42djU4Ljc2aC01OC43NmMtMTIuNDMsMCAtMjIuNiwxMC4xNyAtMjIuNiwyMi42djgxLjM2YzAsMTIuNDMgMTAuMTcsMjIuNiAyMi42LDIyLjZoMTYyLjcyYzEyLjQzLDAgMjIuNiwtMTAuMTcgMjIuNiwtMjIuNnYtMTYyLjcyYzAsLTEyLjQzIC0xMC4xNywtMjIuNiAtMjIuNiwtMjIuNnpNMTEzLDE4LjA4aDgxLjM2YzcuNTM5MjIsMCAxMy41Niw2LjAyMDc4IDEzLjU2LDEzLjU2djE2Mi43MmMwLDcuNTM5MjIgLTYuMDIwNzgsMTMuNTYgLTEzLjU2LDEzLjU2aC0xNjIuNzJjLTcuNTM5MjIsMCAtMTMuNTYsLTYuMDIwNzggLTEzLjU2LC0xMy41NnYtODEuMzZjMCwtNy41MzkyMiA2LjAyMDc4LC0xMy41NiAxMy41NiwtMTMuNTZoNTguNzZjNC45NDM3NSwwIDkuMDQsLTQuMDk2MjUgOS4wNCwtOS4wNHYtNTguNzZjMCwtNy41MzkyMiA2LjAyMDc4LC0xMy41NiAxMy41NiwtMTMuNTZ6TTE1My4yNTYyNSw2Ny42NTg3NWMtMC4xOTQyMiwwLjAzNTMxIC0wLjM4ODQ0LDAuMDg4MjggLTAuNTY1LDAuMTQxMjVjLTIuMTAxMDksMC40NzY3MiAtMy41ODQyMiwyLjM2NTk0IC0zLjUzMTI1LDQuNTJ2NTQuMjRjMCwxMi41MzU5NCAtMTAuMDY0MDYsMjIuNiAtMjIuNiwyMi42aC02NS44MjI1bDE5LjM1MTI1LC0xOS4zNTEyNWMxLjQ2NTQ3LC0xLjM1OTUzIDEuODUzOTEsLTMuNTEzNTkgMC45NzEwOSwtNS4yOTY4N2MtMC44NjUxNiwtMS44MDA5NCAtMi44MjUsLTIuNzg5NjkgLTQuNzg0ODQsLTIuNDcxODdjLTEuMDA2NDEsMC4xMDU5NCAtMS45NTk4NCwwLjU2NSAtMi42ODM3NSwxLjI3MTI1bC0yNi40MTM3NSwyNi41NTVjLTAuMjQ3MTksMC4xNTg5MSAtMC40OTQzNywwLjM1MzEzIC0wLjcwNjI1LDAuNTY1Yy0wLjEwNTk0LDAuMDg4MjggLTAuMTk0MjIsMC4xNzY1NiAtMC4yODI1LDAuMjgyNWMtMC4yMTE4OCwwLjI2NDg0IC0wLjQwNjA5LDAuNTQ3MzQgLTAuNTY1LDAuODQ3NWMtMC4wNTI5NywwLjA4ODI4IC0wLjEwNTk0LDAuMTk0MjIgLTAuMTQxMjUsMC4yODI1YzAsMC4wNTI5NyAwLDAuMDg4MjggMCwwLjE0MTI1Yy0wLjA1Mjk3LDAuMDg4MjggLTAuMTA1OTQsMC4xOTQyMiAtMC4xNDEyNSwwLjI4MjVjLTAuMDUyOTcsMC4xNzY1NiAtMC4xMDU5NCwwLjM3MDc4IC0wLjE0MTI1LDAuNTY1Yy0wLjA3MDYyLDAuNDc2NzIgLTAuMDcwNjIsMC45MzU3OCAwLDEuNDEyNWMwLDAuMDg4MjggMCwwLjE5NDIyIDAsMC4yODI1YzAsMC4wNTI5NyAwLDAuMDg4MjggMCwwLjE0MTI1YzAuMDM1MzEsMC4wODgyOCAwLjA4ODI4LDAuMTk0MjIgMC4xNDEyNSwwLjI4MjVjMCwwLjA1Mjk3IDAsMC4wODgyOCAwLDAuMTQxMjVjMC4wMzUzMSwwLjA4ODI4IDAuMDg4MjgsMC4xOTQyMiAwLjE0MTI1LDAuMjgyNWMwLjAzNTMxLDAuMDg4MjggMC4wODgyOCwwLjE5NDIyIDAuMTQxMjUsMC4yODI1YzAsMC4wNTI5NyAwLDAuMDg4MjggMCwwLjE0MTI1YzAuMTU4OTEsMC4zMDAxNiAwLjM1MzEyLDAuNTgyNjYgMC41NjUsMC44NDc1YzAuMDg4MjgsMC4xMDU5NCAwLjE3NjU2LDAuMTk0MjIgMC4yODI1LDAuMjgyNWMwLjE0MTI1LDAuMTA1OTQgMC4yODI1LDAuMTk0MjIgMC40MjM3NSwwLjI4MjVsMjYuNjk2MjUsMjYuODM3NWMxLjgwMDk0LDEuODAwOTQgNC42OTY1NiwxLjgwMDk0IDYuNDk3NSwwYzEuODAwOTQsLTEuODAwOTQgMS44MDA5NCwtNC42OTY1NiAwLC02LjQ5NzVsLTE5LjM1MTI1LC0xOS4zNTEyNWg2NS44MjI1YzE3LjQyNjcyLDAgMzEuNjQsLTE0LjIxMzI4IDMxLjY0LC0zMS42NHYtNTQuMjRjMC4wNTI5NywtMS4zMDY1NiAtMC40NzY3MiwtMi41NjAxNiAtMS40MTI1LC0zLjQ0Mjk3Yy0wLjk1MzQ0LC0wLjkwMDQ3IC0yLjI0MjM0LC0xLjM0MTg4IC0zLjUzMTI1LC0xLjIxODI4eiI+PC9wYXRoPjwvZz48cGF0aCBkPSIiIGZpbGw9Im5vbmUiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBzdHJva2UtbGluZWpvaW49Im1pdGVyIj48L3BhdGg+PHBhdGggZD0iIiBmaWxsPSJub25lIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgc3Ryb2tlLWxpbmVqb2luPSJtaXRlciI+PC9wYXRoPjwvZz48L2c+PC9zdmc+"
     loading="lazy" style="width: 25px;height: 25px;position: fixed;top: 37%;left: 88%;">
    
    <div id="lista">
        <label id="labelDepositoTo" for="depositoTo" style="padding-left: 40px;">va a: </label>
        <select id="depositoTo" onchange="setDepositoTo()"></select>

        <hr style="width:50%; border-color: rgb(250,189,0); margin-top: 10px;">
        <div id="lista-ordenes">
            <!--
            <div class="item">
                <div class="id">#6487</div>
                <span class="txt">C140 x1</span>
                <i class="fas fa-minus-circle" onclick="this.parentElement.remove()"></i>
            </div>
            -->
        </div>
        
        <span id="spanItemsPickeados" style="margin-left: 40px">Cantidad de items pickeados: </span> 
        <span id="cantItemsPickeados" style>0</span>
        
        <button id="boton" type="button" onclick="postAjax(cambios);this.disabled=true;">Cargar!</button>
    </div>
    

    <?php
    
    function depositos() {
        global $wpdb; 
        $results = $wpdb->get_results('SELECT name, lat, lon, id FROM depos');
        return json_encode($results);
    }

    function getOrdenes() {
        $orders = [];
        $query = new WP_Query(array('post_type'=>'shop_order','post_status'=>'wc-partial-shipped', 'posts_per_page'=>-1));
        foreach ($query->posts as $orden) {
            $orders[$orden->ID]=$orden->post_status;
        }
        $query = new WP_Query(array('post_type'=>'shop_order','post_status'=>'wc-pickup', 'posts_per_page'=>-1));
        foreach ($query->posts as $orden) {
            $orders[$orden->ID]=$orden->post_status;
        }
        return $orders;
    }

    function getProductos() {
        global $wpdb; 
        $query = new WP_Query(array('post_type'=>'product'));
        return json_encode($query->posts);
    }

    function getVariationSku() {
        $productos = array();
        global $wpdb;
        $query = 'SELECT wc_variation_id, sku FROM products WHERE 1=1';
        $products = $wpdb->get_results($query);
        foreach ($products as $product) {
            $productos[$product->wc_variation_id] = $product->sku;
        }
        return $productos;
    }
    ?>


    <script type="text/javascript">
    
    const ACCION_PICKEO = 1;
    const ACCION_ENVIO_INTERNO = 2;
    const ACCION_DESMATCHEO = 3;
    
    var accion = {};
    
    var cambios = [];    
    var ordenes = <?php echo json_encode (getOrdenes()); ?>;
    var productos = <?php echo json_encode (getVariationSku()); ?>;
    var productosOrdenActiva = [];
    console.log(ordenes);
    console.log(productos);

    var qr = document.getElementById('inputPistola');
    
    
    iniciarQr();
    iniciaPickeo();
        
    function cambiaAccion (accion) {
        cambios = [];
        document.getElementById('lista-ordenes').innerHTML = "";
        document.getElementById("cantItemsPickeados").innerHTML=0;

        
        switch(accion) {
            case ACCION_PICKEO:
                iniciaPickeo();
            break;
            case ACCION_ENVIO_INTERNO:
                iniciaEnvioInterno();
            break;
            case ACCION_DESMATCHEO:
                iniciaDesmatcheo();
            break;
        }
    }
    

    function iniciaPickeo () {
        document.getElementById('modalBtn').src = "logoDespacho.svg";
        document.getElementById('lista-ordenes').display = "block";
        document.getElementById('opcPickeo').style.display = "none";
        document.getElementById('opcEnvioInterno').style.display = "inline";
        document.getElementById('opcDesmatcheo').style.display = "inline";
        document.getElementById("depositoTo").style.display = "none";
        document.getElementById("labelDepositoTo").style.display = "none";
        
    let actionPickingCallback = (json_leido) => {
        if (json_leido.type == "order" || json_leido.type == "pickup") {
            aniadirOrden(json_leido.order.id);
        } else if (json_leido.type == "product") {
            aniadirProducto(json_leido.product);
        }
    };
    accion.callback = actionPickingCallback;
    accion.url = "qr/guarda.php";
    }

    function iniciaEnvioInterno() {

        document.getElementById('modalBtn').src = "logoEnvio.svg";
        document.getElementById('lista-ordenes').display = "block";
        document.getElementById('opcPickeo').style.display = "inline";
        document.getElementById('opcEnvioInterno').style.display = "none";
        document.getElementById('opcDesmatcheo').style.display = "inline";

        if (!document.getElementById('depositoTo').hasChildNodes()){
            setDeposito();
        }

        document.getElementById("labelDepositoTo").style.display = "inline";
        document.getElementById("depositoTo").style.display = "inline";

        let actionEnvioInternoCallback = (json_leido) => {
            if (json_leido.type == "order" || json_leido.type == "pickup") {
                alert("accion activa: envio interno \nno hace falta leer orden");
            } else if (json_leido.type == "product") {
                envioInterno(json_leido.product);
            }
        };
        accion.callback = actionEnvioInternoCallback;
        accion.url = "enviointerno/guarda.php";
        cambios.valores = [];
    }

    function iniciaDesmatcheo () {
        if (!document.getElementById('depositoTo').hasChildNodes()){
            setDeposito();
        }
        document.getElementById('modalBtn').src = "logoDesmatcheo.svg";
        document.getElementById('lista').display = "none";
        document.getElementById('spanItemsPickeados').display = "none";
        document.getElementById('cantItemsPickeados').display = "none";
        document.getElementById('opcPickeo').style.display = "inline";
        document.getElementById('opcEnvioInterno').style.display = "inline";
        document.getElementById('opcDesmatcheo').style.display = "none";
        document.getElementById("labelDepositoTo").style.display = "none";
        document.getElementById("depositoTo").style.display = "none";

        let actionDesmatcheoCallback = (json_leido) => {
            if (json_leido.type == "order" || json_leido.type == "pickup") {
                alert("accion activa: desmatcheo \nno hace falta leer orden");
            } else if (json_leido.type == "product") {
                desmatchea(json_leido.product);
            }
        };
        accion.callback = actionDesmatcheoCallback;
    }

    function iniciarQr(){
        codigo.style.display = "none";
        qr.style.display = "block";
        inputPistola.focus();
        tmrFocusInputPistola = setInterval(function(){ inputPistola.focus()},3000);

    }
    
    function checkInputPistola(inputPistola){
        var strLeido;
        if (inputPistola.value != ""){
            if(event.key === 'Enter' || event.which == 13 || event.keyCode == 13 || inputPistola == 'Enter') {
                //workaround for pistolita bug not writing all the qr, cuando apreta enter no termino de escribir todo el string
                if(document.getElementById('inputPistola').value.slice(-2) != '}}' && document.getElementById('inputPistola').value.slice(-2) == '"}'){
                    document.getElementById('inputPistola').value += '}';
                }
                if(inputPistola === 'Enter') inputPistola = document.getElementById('inputPistola');
                strLeido = inputPistola.value;
                inputPistola.value = "";
                inputPistola.focus(); 
                accion.callback(JSON.parse(strLeido));
            }  
        }
    }

    function setProductosOrdenActiva(idOrden) {
        $(document).ready(function() {
            $.ajax({
            url: "https://calmessimple.com.ar/lab/joa/pistola-u/orderContent.php",
            type: "post",
            dataType: "text",
            data: {idOrden: idOrden},
            success: function (result) {
                console.log(result);
                productosOrdenActiva[idOrden] = addVariacionesAsSku(JSON.parse(result));
            }
            });
        });
    }

    function addVariacionesAsSku (jsonProductos){
        let variaciones = Object.keys(jsonProductos);
        let productosOrden = [];
        for (let variacion of variaciones){
            productosOrden[getSkuFromVariacion(variacion)] = jsonProductos[variacion];
        }
        return productosOrden;
    }
    
    function aniadirOrden(id) {
        if (ordenValida(id)){
            var item = document.createElement("div");
            item.setAttribute('class', 'item');
            item.setAttribute('id', id);
            item.innerHTML = "\
            <div class='id'>#" + id + "</div>\
            <i class='fas fa-minus-circle' onclick='borra(this);'></i>";
            document.getElementById("lista-ordenes").appendChild(item);
            setProductosOrdenActiva(id);
            cambios[id] = [];
        } else if (!(id in ordenes)) {
            alert("⛔ NO DESPACHAR ESTE PEDIDO ⛔\n (el pedido " + id + " no esta en partially)\nSeparalo y espera a que Customer te avise que hacer con el pedido");
            slackACustomer(id);
        } else if (id in cambios) {
            alert("esta orden ya fue pickeada");
        }
    }

    function ordenValida (ordenId){
        return (ordenId in ordenes) && !(ordenId in cambios);
    }

    function slackACustomer(id){
        $.ajax({
            url: 'https://calmessimple.com.ar/lab/slack',
                type: 'GET',
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJyb2xlIjoiYWRtaW4ifQ.9cmH0G17wDdiAmxoxlcoR3eBf53NS9nJiiwGrr0zds4');
                },
                data: {
                    'channel': '#control-de-envios',
                    'bot_name': 'Pickeo no partially',
                    'icon': ':rotating_light:',
                    'message': 'Estan tratando de pickear una orden que no esta en partially: ' + id
                },
                success: function () { },
                error: function () { },
            });
    }

    function aniadirProducto(jsonProducto) {
        let orden = getOrdenDeProducto(jsonProducto);
        if (orden) {
            if (productoValido(jsonProducto.id)) {
                cambios[orden].push(jsonProducto.id);
                
                document.getElementById(orden).innerHTML += "<span class='txt'>" + jsonProducto.id + "</span><br>";
                productosOrdenActiva[orden][getSku(jsonProducto.id)]--;
                document.getElementById("cantItemsPickeados").innerHTML++;
            
                if (ordenCompleta(orden)){    
                    document.getElementById(orden).style.backgroundColor = "#aaffaa";
                    document.getElementById(orden).style.borderRadius = "10px";
                }
            }else if (!productoValido(jsonProducto.id)) {
                alert("este producto ya fue pickeado");
            }
        } else if (!orden) {
            alert("este producto no pertenece a ninguna orden pickeada"); 
        }
    }

    function getOrdenDeProducto (jsonProducto) {
        let i = 0;
        let ordenes = [];
        let existe = false;
        sku = getSku(jsonProducto.id);
        if (sku) {
            ordenes = Object.keys(productosOrdenActiva);
            while((!existe) && i < ordenes.length){
                if (sku in productosOrdenActiva[ordenes[i]]) {
                    if (productosOrdenActiva[ordenes[i]][sku] > 0){
                        existe = ordenes[i];
                    } 
                } 
                if(!existe) {
                    i++;
                } 
            }
        }
        return existe
    }

    function productoValido (producto) {
        valido = true;
        for (let orden in cambios) {
            if (cambios[orden].includes(producto)) {
                valido = false;
            }
        }
        return valido;
    }

    function ordenCompleta (idOrden) {
        let cantRestante = 0;
        let productos = Object.keys(productosOrdenActiva[idOrden]);
        for (let producto of productos){
            let cant = productosOrdenActiva[idOrden][producto];
            cantRestante += cant;
        }
        return (cantRestante == 0)
    }

    function desmatchea (jsonProducto) {
        var rp = confirm("Estás a punto de desmatchear el DNI: " + jsonProducto.id+".\n¿Está seguro?");
        if (rp == true){
            cambios.dni = jsonProducto.id;
            $(document).ready(function() {
                $.ajax({
                url: "https://calmessimple.com.ar/lab/desmatcheo/unmatch.php",
                method: "POST",
                dataType: "text",
                data: {params: JSON.stringify(cambios)},
                success: function (result) {
                    console.log(result);
                }
                });
            });
        }
    }

    function envioInterno (jsonProducto) {
        if (cambios.valores.includes(jsonProducto.id)){
            alert("el producto " + jsonProducto.id + " ya fue cargado");
        } else {
            cambios.valores.push(jsonProducto.id);
            var item = document.createElement("div");
            item.setAttribute('class', 'item');
            item.setAttribute('id', jsonProducto.id);
            item.innerHTML = "\
                <div class='id'>#" + jsonProducto.id + "</div>\
                <i class='fas fa-minus-circle' onclick='borra(this);'></i>\
                ";
            document.getElementById("lista-ordenes").appendChild(item);
            console.log(cambios);
            document.getElementById("cantItemsPickeados").innerHTML++;
        }
    }

    function getSku (dni) {
        partesdni=dni.split("-");
        if((partesdni.length==6) && (partesdni[1]=='00114')){
            sku = partesdni[4];
        } else {
            sku = partesdni[3];
        }
        return sku;
    } 

    function getSkuFromVariacion (variacion){
        return productos[variacion];
    }

    function setDeposito (){
        let arrayDepos = new Array();
        window.navigator.geolocation.getCurrentPosition(function(pos) {
            let arrayDepos = <?php echo depositos() ?>;
            let i = 0;
            arrayDepos.sort((a, b) => {
                let adist = calcCrow(pos.coords.latitude, pos.coords.longitude, a.lat, a.lon);
                let bdist = calcCrow(pos.coords.latitude, pos.coords.longitude, b.lat, b.lon);
                return adist - bdist;
            });
            alert("estas en " + arrayDepos[0].name);
            cambios.deposito = arrayDepos[0].id;
            let select = document.getElementById("depositoTo");
            arrayDepos.forEach(deposito =>{
                var el = document.createElement("option");
                el.textContent = deposito.name;
                el.value = deposito.id;
                select.appendChild(el);
            });
        });
    }
    
    function setDepositoTo() {
        cambios.to = document.getElementById("depositoTo").value;
    }

    function calcCrow(lat1, lon1, lat2, lon2) {
      var R = 6371; // km
      var dLat = toRad(lat2-lat1);
      var dLon = toRad(lon2-lon1);
      var lat1 = toRad(lat1);
      var lat2 = toRad(lat2);

      var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
        Math.sin(dLon/2) * Math.sin(dLon/2) * Math.cos(lat1) * Math.cos(lat2); 
      var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
      var d = R * c;
      return d;
    }

    // Converts numeric degrees to radians
    function toRad(Value) {
        return Value * Math.PI / 180;
    }

    function borra(elemento){
        console.log("Borrando orden: " + elemento.parentElement.id);
        if(cambios[elemento.parentElement.id]){
            document.getElementById("cantItemsPickeados").innerHTML -= cambios[elemento.parentElement.id].length;
            delete cambios[elemento.parentElement.id];
        }
        elemento.parentElement.remove();
    }

    function postAjax(data) {
            var params = typeof data == 'string' ? data : Object.keys(data).map(
                    function(k){ return encodeURIComponent(k) + '=' + encodeURIComponent(data[k]) }
                ).join('&');

            var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
            
            url = 'https://calmessimple.com.ar/lab/';
            url += accion.url;
            
            xhr.open('POST', url);
            xhr.onreadystatechange = function() {
                if (xhr.readyState>3 && xhr.status==200) { success(xhr.responseText); }
            };
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send(params);
            cargado();
            return xhr;
        }

        function cargado(){
            var cambios = [];    
            var ordenes = <?php echo json_encode (getOrdenes()); ?>;
            var productos = <?php echo json_encode (getVariationSku()); ?>;
            var productosOrdenActiva = [];        
            document.getElementById('lista-ordenes').innerHTML = "";
            document.getElementById("cantItemsPickeados").innerHTML = 0;
            document.getElementById("boton").disabled = false;
            alert('Cargado!');            
        }

    </script>
</body>
</html>