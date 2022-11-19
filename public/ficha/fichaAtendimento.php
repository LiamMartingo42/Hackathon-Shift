<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../img/fila.png">
    <title>Seu Agendamento- Plataforma de Ordenação de Filas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/loader.css">


    <style>
        * {
            font-family: 'Poppins';
        }


        .login-page {
            width: 520px;
            margin: auto;
        }

        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 520px;
            margin: 0 auto 100px;
            border-radius: 15px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        .form input {
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .form button {
            text-transform: uppercase;
            outline: 0;
            background: #4CAF50;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
        }

        .form button:hover,
        .form button:active,
        .form button:focus {
            background: #43A047;
        }

        .form .bg-primary:hover{
            background-color: #0851bd !important;
        }

        .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 12px;
        }

        .form .message a {
            color: #4CAF50;
            text-decoration: none;
        }

        .form .register-form {
            display: none;
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }

        .container:before,
        .container:after {
            content: "";
            display: block;
            clear: both;
        }

        .container .info {
            margin: 50px auto;
            text-align: center;
        }

        .container .info h1 {
            margin: 0 0 15px;
            padding: 0;
            font-size: 36px;
            font-weight: 300;
            color: #1a1a1a;
        }

        .container .info span {
            color: #4d4d4d;
            font-size: 12px;
        }

        .container .info span a {
            color: #000000;
            text-decoration: none;
        }

        .container .info span .fa {
            color: #EF3B3A;
        }

        body {
            background: #eee;
        }


        .display-3 {
            color: #000;
        }

        .place {
            margin: 20px 0;
        }

        .address {
            margin: 0;
        }

        .hour, .date {
            font-size: 35px;
            display: block;
            color: #43A047;
            margin: 5px 0;
            font-weight: bold;
        }

        .hour {
            font-size: 30px !important;
        }

        .nomargin {
            margin: 0;
        }

        .code {
            text-decoration: none;
        }
    </style>

</head>

<body onload="byeLoad()">

<div id="loader">
<span class="loader"></span>
</div>
    <header class="py-5 text-center">
        <h3 class="display-3">
            Seu Agendamento
        </h3>
    </header>

    <div class="login-page">
        <div class="form">
            <h4 class="name">Ramon Domenick Fernandes</h4>

            <h3 class="place">Hospital Dia</h3>

            <p class="address">Av. Philadelpho Manoel Gouveia Neto, 29</p>

            <span class="date">20/11/2022</span>
            <span class="hour">09:00h</span>

            <h5 class="test mb-3">Exame de Hemograma Completo</h5>

            <p class="nomargin">Para mais detalhes acesse:</p>

            <div class="text-center">
                <img class="img-fluid" alt="QRCODE" src="../img/qrcode.png">
            </div>


            <a target="_blank" href="https://drive.google.com/file/d/1pHydbV5o7dofR8oyNUIayA1hMd2Ato0c/view?usp=share_link" class="code">Link do QR CODE</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="../js/loader.js"></script>


</body>

</html>
