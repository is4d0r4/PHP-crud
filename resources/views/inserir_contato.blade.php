<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inserindo Contatos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #FFF8DC;
                color: #FFA500;
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
                color: #4B0082;
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
        <div class="title m-b-md"> <center>
                    Agenda CTI
        </div>
        <h1><center> Preencha os dados abaixo </h1>
       
                    <form method="post" action="{{isset($registros->id) ? '/atualizar/'.$registros->id : 'inserir_contato2'}}">  
                    @csrf
                        <input type="hidden" name="_method" value="PUT">
                    <br>

                    <center><label for="nome">Nome e Sobrenome:</label><br><center>
                    <input type="text" id="nome" name="nome" value="{{isset($registros->nome) ? $registros->nome : ''}}" class="form-control">
                    <br>
                    <center><label for="telefone">Telefone:</label><br><center>
                    <input type="text" id="telefone" name="telefone" value="{{isset($registros->telefone) ? $registros->telefone : ''}}" class="form-control">
                    <br>
                    <center><label for="email">Email:</label><br><center>
                    <input type="text" id="email" name="email" value="{{isset($registros->email) ? $registros->email : ''}}" class="form-control">
                    <br>

                    
                    <p><button type="submit"> Enviar </button></p>
                   
                    </form>       

                    
    <div class="links"> 
    <br>
    <button type="submit"> ATUALIZAR </button>
    <p><button><a href="welcome">Voltar para o Início</a></button></p>
                   
</body>
</html>
