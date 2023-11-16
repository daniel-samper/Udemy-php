<h1>Gestión de productos</h1>

<a href="<?=base_url?>producto/crear" class="button button-small">Crear producto</a>

<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'):?>
    <strong class="alerta-green">El producto se ha creado correctamente</strong>
<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] == 'failed'):?>
    <strong class="alerta-red">El producto NO se ha creado correctamente</strong>
<?php endif; ?>
<?php Utils::deleteSession('producto');?>    

<table>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>   
        <th>Precio</th>   
        <th>Stock</th>   
        <th>Acciones</th>   
    </tr>
    <?php while($pro = $productos->fetch_object()): ?>
    <tr>
        <td><?=$pro->id;?></td>
        <td><?=$pro->nombre;?></td>   
        <td><?=$pro->precio;?></td>   
        <td><?=$pro->stock;?></td>   
        <td>
            <a href="<?=base_url?>producto/editar?id=<?=$pro->id?>"" class="button button-gestion">Editar</a>
            <a href="<?=base_url?>producto/eliminar?id=<?=$pro->id?>"" class="button button-gestion button-red">Eliminar</a>
        </td>
    </tr>
    
<?php endwhile; ?>

    
</table>