<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Usuários</h1>
    <table>
        <tr>
            <th>Login</th>
            <th>Permissão</th>
            <th><a href="index.php">Novo</a></th>
        </tr>
        <?php 

        require_once "controller/UsuarioController.php";
        $usuarios = call_user_func(array('UsuarioController','listar'));
        
        if(isset($usuarios) && !empty($usuarios)){
            foreach($usuarios as $usuario){
                ?>
                <tr>
                    <td><?php echo $usuario->getLogin(); ?></td>
                    <td><?php echo $usuario->getPermissao(); ?></td>
                    <td>
                        <a href="index.php?action=editar&id=<?php echo $usuario->getId(); ?>">Editar</a>
                        <a href="index.php?action=excluir&id=<?php echo $usuario->getId(); ?>">Excluir</a>
                    </td>
                </tr>

                <?php
            }
        }else{
            ?>
            <tr>
                <td colspan="3">Nenhum registro encontrado</td>
            </tr>
            <?php
        }
        
        ?>
    </table>
</body>

</html>