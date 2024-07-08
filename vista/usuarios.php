<html>
    <head>
        <title>Lista de usuairos</title>
    </head>
    <body>
   
    <a href="index.php?controlador=usuario&accion=mostrarUsuario">Nuevo</a>
        <table>
            <tr>
                <?php require_once("core/constantes.php");
                foreach(usuarioColumns as $value):?>
                <td><?php
                echo $value;
                ?></td>
                <?php endforeach; ?>
            </tr>
            <?php 
            foreach($this->getAll() as $usuario):
            
            ?>
            <tr>
                <td><?php echo $usuario->nombre ?></td>
                <td><?php echo $usuario->apelllido ?></td>
                <td><?php echo $usuario->telefono ?></td>
                <td><?php echo $usuario->edad ?></td>
                <td> 
                    <a href="index.php?controlador=usuario&accion=mostrarUsuario&id=<?php echo $usuario->id ?>">Editar</a>
                    <a onclick="javascript:return confirm('Seguro de eliminar este registro?')" href="index.php?controlador=usuario&accion=eliminar&id=<?php echo $usuario->id ?>">eliminar</a>
                </td>
                
            </tr>
            <?php 
            endforeach;
            
            ?>
        </table>
    </body>
</html>