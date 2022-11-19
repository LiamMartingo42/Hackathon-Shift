<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../img/fila.png">
    <title>Plataforma de Ordenação de Filas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="sweetalert2.min.css">


    <style>
        * {
            font-family: 'Poppins';
        }


        .display-3 {
            color: #000;
        }

        .logotipo {
            max-width: 100px;
            position: absolute;
            top: 50px;
            left: 50px;
        }

        .companyName {
            font-size: 35px;
            margin-left: 15px;
            margin-top: 25px;
        }

        .mwidth {
            max-width: 200px;
        }

        #submitButtons {
            text-align: right !important;
        }

        .padding {
            padding: 30px;
        }

        .bold {
            text-transform: uppercase;
            font-weight: bold;
        }

        .lastOne {
            position: absolute;
            bottom: 0px;
            right: 0px;
            background-color: #43A047;
            padding: 50px 35px 35px 50px;
            border-top-left-radius: 15px;
        }

        .leftOne {
            position: absolute;
            bottom: 0px;
            left: 10px;
        }

        @keyframes pulse {
            0% {
                transform: translateY(0px) scale(1.0);
            }

            50% {
                transform: translateY(-20px) scale(1.10);
                filter: drop-shadow(.5rem .5rem 1rem rgba(0,0,0,0.25));
            }

            100% {
                transform: translateY(0px) scale(1.0);
            }
        }

        .leftOne img {
            max-width: 150px;
            animation: pulse 5s infinite;
        }


        @keyframes rotation {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .rotate {
            animation: rotation 3s infinite;
        }
    </style>

    <link rel="stylesheet" href="../css/loader.css">

</head>

<body onload="byeLoad()">

    <div id="loader">
        <span class="loader"></span>
    </div>

    <div class="padding">

        <header class="text-center my-5 py-5">
            <div class="text-start d-flex justify-center align-items-center ">
                <img class="img-fluid logotipo rotate" alt="logotipo" src="../img/fila.png">
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <h3 class="display-6">
                    É A SUA VEZ
                </h3>

                <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                <lord-icon src="https://cdn.lordicon.com/pxxdikfn.json" trigger="loop" colors="outline:#121331,primary:#646e78,secondary:#b06835,tertiary:#4bb3fd,quaternary:#ffc738,quinary:#f9c9c0" style="width:100px;height:100px">
                </lord-icon>
            </div>

            <h1 class="display-1 mt-5 bold">
                Ramon Domenick Fernandes
            </h1>

            <div class="leftOne">
                <img class="img-fluid" alt="logotipo" src="../img/hospitalLogo.png">
            </div>


            <div class="lastOne">
                <h3>
                    Ultima Senha
                </h3>
                <h3 class="display-6 bold">
                    Lucas Augusto
                </h3>
            </div>

        </header>




    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="../js/loader.js"></script>


</body>

</html>
