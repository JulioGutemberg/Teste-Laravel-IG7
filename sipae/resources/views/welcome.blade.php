<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
        <!-- CSS Personalizado -->
        <link rel="stylesheet" type="text/css" href="/css/estilo.css">

        <title>SIPAE - Login</title><link rel="icon" href="Imagens/SIPAE-ICON.png">

    </head>

    <body>

        <header><!-- Inicio Cabeçalho -->
            <div class="row" class="d-flex">
                <div class="text-center" >
                    <img src="/Imagens/SIPAE.png" style="width: 500px;" alt="logo">
                </div>
        </header><!-- Fim Cabeçalho -->

        <section><!-- Inicio Login -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md"><!--Apenas criando uma "coluna" para alinhamento das areas de login e senha, utilizando o sistema de grid--></div>
                    <div class="col-md">
                        <div id="form-login"><!-- Inicio Formulario de login  -->
                            <form>
                                <p style="text-align: center;">Efetue o login</p>
                                <!-- Email Input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email-usuario">Usuário</label>
                                    <input type="email" id="email-Login" class="form-control"
                                      placeholder="Digite o seu e-mail" />
                                </div>
    
                                <!-- Password Input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="senha-usuario">Senha</label>
                                    <input type="password" id="password-Login" class="form-control" placeholder="Digite a sua Senha"/>
                                </div>

                                <!-- Button Login -->
                                <div class="text-center pt-1 mb-5 pb-1 d-grid gap-2">
                                    <input class="btn btn-custom btn-lg" type="submit" value="Enviar">
                                </div>
                            </form>
                        </div><!-- Fim Formulário de Login -->
                    </div>
                    <div class="col-md"><!--Apenas criando uma "coluna" para alinhamento das areas de login e senha, utilizando o sistema de grid--></div>
                </div>
            </div>
        </section><!-- Fim Login -->
    </body>
</html>