<?php
    require 'config.php';

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', );

    if(($email=='admin@gmail.com') && ($senha=='admin#1234')){
        header("Location: paginas\cad_curso_admin.php");
        exit;
    }elseif($email&&$senha){
        header("Location: paginas\cursos.php");
        exit;
    }
    header("Location: login.php");
        exit;