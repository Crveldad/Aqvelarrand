<?php
function qSeleccionarTodo($tabla)
{
    return "SELECT id,nombre,email,rol FROM $tabla";
}

function qSeleccionarCursos()
{
    return "SELECT id,nombre,precio FROM CURSO";
}

function qSeleccionarCursoCompleto($id)
{
    return "SELECT * FROM CURSO WHERE id = '$id'";
}

function qValidarUsuario($email)
{
    return "SELECT * FROM USUARIO WHERE email='$email'";
}

function qEliminarUsuario($id)
{
    return "DELETE FROM USUARIO WHERE id='$id'";
}

function qSeleccionarUsuario($id)
{
    return "SELECT * FROM USUARIO WHERE id='$id'";
}

function qEliminarCurso($id)
{
    return "DELETE FROM CURSO WHERE id='$id'";
}

function comprobarUsuario()
{
    return "SELECT email FROM USUARIO WHERE email=?";
}

function insertarUsuario()
{
    return "INSERT INTO USUARIO(nombre,email,password,rol) VALUES (:nombre,:email,:password,:rol)";
}

function qEditarUsuario($nombre, $email, $paswd, $rol, $id)
{
    return "UPDATE USUARIO SET nombre = '$nombre' , email = '$email', password = '$paswd', rol = '$rol' where id = '$id'";
}

function qEditarCurso($id, $nombre, $precio, $descripcion)
{
    return "UPDATE CURSO SET nombre = '$nombre', precio = '$precio', descripcion = '$descripcion' where id = '$id'";
}

function qSeleccionarCurso($nombre)
{
    return "SELECT * FROM CURSO WHERE nombre = '$nombre'";
}

function qMatricular($id_usuario, $id_curso)
{
    return "INSERT INTO MATRICULAR VALUES ($id_usuario, $id_curso, CURRENT_TIMESTAMP)";
}

function qSeleccionarMatricular($id_usuario)
{
    return "SELECT id_curso FROM MATRICULAR where id_usuario = $id_usuario"; // le hacemos un fetchAll
}

function qEditarUsuarioDeUsuario($nombre, $email, $paswd, $id)
{
    return "UPDATE USUARIO SET nombre = '$nombre' , email = '$email', password = '$paswd' where id = '$id'";
}
