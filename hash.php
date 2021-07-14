<?php

$password = "miguel2020@bictiaISPA";


// echo md5($password);
// echo sha1($password);

// var_dump(hash_algos());

foreach (hash_algos() as $pass_encriptadas){
    echo $pass_encriptadas.'  ---->  '.hash($pass_encriptadas, $password).'<br>';
}

$hash_gato = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);
echo $hash_gato.'<br>';

//validacion de contraseñas

if(password_verify($password, $hash_gato)){
    echo 'Contraseña correcta';
}else{
    echo 'Contraseña incorrecta';
}
© 2021 GitHub, Inc