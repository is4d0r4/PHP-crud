<!-- VIEW DE TABELA DE CONTATOS -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agenda CTI</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #FFF8DC;
                color:#000000;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #000080;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        </head>
                <body>

                <div class="content">
                <br>
                <div class="title m-b-md">
                    Agenda CTI
                </div>

                <div class="links">
                <a href="welcome">Voltar para tela inicial</a>
                </div>
                </div>
                </div>

            <!-- TABELADE EXIBIR CONTATOS -->

        <br>
        <center><table border="1">
        <thead>
        <tr>   
        <th>ID</th>
        <th>NOME</th>
        <th>TELEFONE</th>
        <th>EMAIL</th>
        <th> MODIFICAR <th>
        </tr>
        </thead>               
 @foreach ($dados as $dado)
    
    <tbody>
    <td> {{$dado->id}}</td>
    <td> {{$dado->nome }}</td>
    <td> {{$dado->telefone }}</td>
    <td> {{$dado->email }}</td>
    
    
    <td><center> <a href='editar/{{$dado->id}}'>Editar </a></td>
    <td> <a href='agendadeletar/{{$dado->id}}'> Excluir </a> </td>
    </form>
    
    
    </tbody>
    @endforeach
    </body>
</html>
