<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="container">

    
        <h1 style="text-align: center;">Sistemas de Projetos - Login</h1>
        <form  method="post" action="../view/loginV.php">
        <div class="mb-3">
            <label class="form-label">E-mail: </label>
            <input class="form-control"  type="email" name="email"/>
        </div>
        <div class="mb-3">
            <label class="form-label">Senha: </label>
            <input type="password" class="form-control" name="senha"/>
        </div>
        <div style="text-align: center;">
            <input class="btn btn-primary" type="submit" value="Entrar"/>
        </div>
            
        </form>
        <?php
            if( isset($_GET['erro']) && $_GET['erro']==1 ){
                ?>
                <div class="alert alert-danger" role="alert">
                    E-mail ou senha inválido!
                </div>
                <?php
            }
        ?>
    </div>
    </body>
</html>