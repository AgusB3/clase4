<?php
//Crear una función que se encargue de sumar
function sumar($valor1, $valor2)
{
    return $valor1 + $valor2;
}

function datos($dato1, $dato2, $dato3, $dato4)
{
    return [$dato1, $dato2, $dato3, $dato4];
}

function checkUsername()
{
    if (!empty($_POST['username']))
    {
        return $_POST['username'];
    }

    return false;
}

function checkPassword()
{
    if (!empty($_POST['password']))
    {
        return $_POST['password'];
    }

    return false;
}
