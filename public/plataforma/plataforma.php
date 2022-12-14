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
    </style>

    <link rel="stylesheet" href="../css/loader.css">

</head>

<body onload="byeLoad()">

    <div id="loader">
        <span class="loader"></span>
    </div>

    <div class="padding">

    <header class="text-center">
        <div class="text-start d-flex justify-center align-items-center ">
            <img class="img-fluid logotipo" alt="logotipo" src="../img/hospitalLogo.png">
            <p class="companyName"> Hospital Dia </p>
        </div>
        <h3 class="display-6">
            Seja Bem-Vindo Liam
        </h3>


        <a class="botao absolute" href="../fila/fila.php" target="_blank">
            Visualizar Fila
        </a>
    </header>

    <!-- Button trigger modal -->
    <div class="text-center my-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgendamento">
            Cadastrar novo Agendamento
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalAgendamento" tabindex="-1" aria-labelledby="agendamento" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="agendamento">Cadastrar Agendamento</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-inline">
                        <label class="form-label" for="NomePaciente">
                            Nome:
                        </label>
                        <input placeholder="Insira o nome do paciente" class="form-control" name="NomePaciente" id="inputName" />

                        <label class="form-label mt-3" for="TelefonePaciente">
                            Telefone:
                        </label>
                        <input placeholder="Insira o telefone do paciente" name="TelefonePaciente" class="form-control" id="inputPhone" />
                        <hr>
                        <div class="tipoExame mt-3">

                            <h6>Tipo de Agendamento:</h6>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="exameImagem" name="exameImagem">
                                <label class="form-check-label" for="exameImagem">Realização de procedimento de imagem</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="coletaMaterial" name="coletaMaterial">
                                <label class="form-check-label" for="coletaMaterial">Coleta de material</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="vacinasGraves" name="vacinasGraves">
                                <label class="form-check-label" for="vacinasGraves">Aplicação de vacinas mais graves</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="entregaMaterial" name="entregaMaterial">
                                <label class="form-check-label" for="entregaMaterial">Entrega de material</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="vacinasNaoGraves" name="vacinasNaoGraves">
                                <label class="form-check-label" for="vacinasNaoGraves">Aplicação de vacinas não graves</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="exameRotina" name="exameRotina">
                                <label class="form-check-label" for="exameRotina">Exame de Rotina</label>
                            </div>

                        </div>
                        <hr>
                        <div class="d-flex align-items-center">
                            <input type="checkbox" id="pacientePrioritario" role="switch" class="form-check-input">
                            <h6 class="mt-3 ms-2">Paciente com Prioridade</h6>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="form-group col">
                                <label for="Data" class="form-label">Data do Exame:</label>
                                <input name="Data" id="inputDate" class="form-control" type="date" required />
                            </div>

                            <div class="form-group col ms-5">
                                <label for="Data" class="form-label">Horário do Exame:</label>
                                <input name="Data" id="inputHour" class="form-control" type="time" required />
                            </div>
                        </div>

                        <div id="submitButtons">
                            <button type="button" class="btn btn-primary mt-3" onclick="addNewContact()" data-bs-dismiss="modal">Agendar</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <h3 class="mb-5">Fila Atual</h3>
    <hr>
    <table id="displayContacts" class="table"></table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="../js/loader.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <script>
        var Contact = function(name, phone, exam, priority, date, hour) {
            this.name = name;
            this.phone = phone;
            this.exam = exam;
            this.priority = priority;
            this.date = date;
            this.hour = hour;
        }

        var contacts = [];
        contacts.push(new Contact("João Augusto", "(17) 99922-2313", "Coleta de material"));
        contacts.push(new Contact("Lucas Eduardo", "(17) 93844-5493", "Aplicação de Vacina Grave"));
        contacts.push(new Contact("Marcos Martins", "(17) 98374-3048", "Entrega de Material"));
        contacts.push(new Contact("Alexandre Garcia", "(17) 98748-9834", "Entrega de Material"));
        contacts.push(new Contact("Diego de Souza", "(17) 99093-0349", "Aplicação de Vacina Comum"));
        contacts.push(new Contact("Larissa Manoela Fernanda", "(17) 93433-4034", "Coleta de Material"));

        var listContacts = function() {
            document.getElementById('displayContacts').innerHTML = " ";
            for (var i = 0; i < contacts.length; i++) {
                document.getElementById('displayContacts').innerHTML += '<tr><td id="name' + i + '">' + contacts[i].name + '</td><td id="exam' + i + '">' + contacts[i].exam + '</td><td id="phone' + i + '">' + contacts[i].phone + '</td><td><button class="btn btn-danger" onclick=deleteContact(' + i + ')>Remover</button></td></tr>';
            }
        }

        var addNewContact = function() {
            var name = document.getElementById('inputName').value;
            var phone = document.getElementById('inputPhone').value;

            if (exameImagem.checked) {
                var exame = 'Realização de Procedimento de Imagem';
            }

            if (coletaMaterial.checked) {
                var exame = 'Coleta de Material';
            }

            if (vacinasGraves.checked) {
                var exame = 'Aplicação de Vacina Grave';
            }

            if (entregaMaterial.checked) {
                var exame = 'Entrega de Material';
            }

            if (vacinasNaoGraves.checked) {
                var exame = 'Aplicação de Vacina Comum';
            }

            if (exameRotina.checked) {
                var exame = 'Exame de Rotina';
            }


            var contact = new Contact(name, phone, exame);
            contacts.push(contact);

            Swal.fire({
                icon: 'success',
                title: 'Uhul !!!',
                text: 'Agendamento Concluído!'
            })

            listContacts();

            limparCampos();
        }

        var deleteContact = function(i) {

            Swal.fire({
                icon: 'success',
                title: 'Até a Próxima!',
                text: 'Agendamento Removido!'
            })

            contacts.splice(i, 1);
            listContacts();
        }


        listContacts();

        function limparCampos() {
            document.getElementById('inputName').value = '';
            document.getElementById('inputPhone').value = '';
            document.getElementById('inputDate').value = '';
            document.getElementById('inputHour').value = '';
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        // MASK CNPJ SCRIPTS

        var newPhone = $("#inputPhone");
        // cep.mask('99999-999', {reverse: true});
        console.log(inputPhone);

        $('#inputPhone').mask('(00) 0000-00009');
        $('#inputPhone').blur(function(event) {
            if ($(this).val().length == 15) { // Celular com 9 dígitos   2 dígitos DDD e 4 da máscara
                $('#inputPhone').mask('(00) 00000-0009');
            } else {
                $('#inputPhone').mask('(00) 0000-00009');
            }
        });
    </script>


</body>

</html>
