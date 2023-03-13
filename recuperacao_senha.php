<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="sistema de controle de fazenda"/>
        <meta name="ifruit" content="" />
        <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/676/676422.png">
        <title>ifruit</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            body{
                background-image: url('img/vinhedo.jpg'); 
                background-size: 100%; 
                background-repeat: no-repeat;
                font-family: 'Open Sans';
                }
                @media only screen and (max-width: 950px) {
                      body{  
                          background-image:url('img/vinhedo_mobile.jpg');   
                      }
                }
            </style>
    </head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container ">
                        <div class="row justify-content-center mt-5">
                            <div class="col-lg-5 mt-5 ">
                                <div id="boxlogin" class="container mt-5 btn btn-light bg-light">
                                    <div >
                                        <h3 class="text-center font-weight-light my-4 text-white"><img><strong> </strong> </h3></div>
                                    <div class="card-body">
                                        <form action="php/processa_recupera_conta.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="cpf" placeholder="Digite seu CPF para recuperar sua conta" required />
                                                <label for="inputEmail">Digite seu CPF para recuperar sua conta</label>
                                            </div>
                                            <div class="text-end   justify-content-between mt-4 mb-0">
                                                <a href="index.html" class="btn btn-outline-danger">Cancelar</a>
                                                <button type="submit" name="recuperar" class="btn btn-success">Recuperar </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
