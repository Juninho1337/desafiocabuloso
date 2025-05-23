<!DOCTYPE html>
<html lang="en">

    <head> 
        <meta charset="utf-8" />
        <title>App Help Desk</title>
    </head>

<body> 

    <?php

    session_start();
    $_SESSION['X']='Seção oficialmente aberta';
    print_r($_SESSION['X']);
    echo '<hr>';

            $usuario_autenticator=false;

                $usuarios_app= 
            
            foreach ($usuarios_app as $user){
                if($user['email']==$_POST['email'] && $user['senha']==$_POST['senha']) {
                    $usuario_autenticator=true;
                 }
            }

            if($usuario_autenticator) {
                echo "Usuario Autenticado";
                $_SESSION['autenticado'] = 'SIM';
                header('Location: home.php');
            }
            else{
                $_SESSION['autenticado'] = 'NAO';
                header('Location: index.php?login=erro');
            }

    ?>
</body>
    
</html>