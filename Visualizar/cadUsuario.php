<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form action="" method="post">
        <input type="hidden" name="id" id="id" value="<?php echo isset($usuario)?$usuario->getId():''; ?>">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login" value="<?php echo isset($usuario)?$usuario->getLogin():''; ?>" ><br/>
        <label for="senha1">Senha:</label>
        <input type="password" name="senha1" id="senha1" value="<?php echo isset($usuario)?$usuario->getSenha():''; ?>"><br/>
        <label>Confirmação de Senha</label>
        <input type="password" name="senha2" id="senha2"><br/>
        <label>Tipo de Permissão:</label>
        <select name="permissao" id="permissao">
            <option value="0">**SELECIONE**</option>
            <option value="A" <?php echo isset($usuario) && $usuario->getPermissao() == 'A'?'selected':''; ?>>Administrador</option>
            <option value="C" <?php echo isset($usuario) && $usuario->getPermissao() == 'C'?'selected':''; ?>>Comum</option>
        </select>
        <br/>
        <input type="submit" value="Salvar" name="btnSalvar" id="btnSalvar">
    </form>
    <?php
    if(isset($_POST['btnSalvar'])){

        require_once 'controller/UsuarioController.php';
        call_user_func(array('UsuarioController','salvar'));

        header('Location: index.php?action=listar');

    }

    ?>
    
</body>
</html>