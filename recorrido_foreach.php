<?php
foreach ($lista as $llave) {
?>
    <tr>
        <td><?php echo $llave['nombre'] ?></td>
        <td><?php echo $llave['apellido'] ?></td>
        <td><?php echo $llave['correo'] ?></td>
        <td><?php echo $llave['nickname'] ?></td>
    </tr>
<?php
}
?>