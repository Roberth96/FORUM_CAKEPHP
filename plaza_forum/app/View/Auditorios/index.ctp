<h1>Lista de Auditorios</h1>
<?php echo $this->Html->link('Crear nuevo auditorio', array('controller'=>'auditorios',
    'action'=>'nuevo')); ?>
<table>
    <tr>
        <td>Serie</td>
        <td>Número de asientos</td>
        <td>Descripción</td>
        <td>Creado</td>
        <td>Modificado</td>
        <td>Responsable</td>
        <td>Editar</td>
        <td>Eliminar</td>
    </tr>
    <?php foreach($auditorios as $auditorio):?>
    <tr>
        <td><?php echo $auditorio['Auditorio']['serie']; ?></td>
        <td><?php echo $auditorio['Auditorio']['num_asientos']; ?></td>
        <td><?php echo $auditorio['Auditorio']['descripcion']; ?></td>
        <td><?php echo $this->Time->format('d-m-Y ; h:i A',$auditorio['Auditorio']['created'] ) ; ?></td>
        <td><?php echo $auditorio['Auditorio']['modified']; ?></td>
        <td><?php echo $this->Html->link($auditorio['Mesero']['nombres'].''.$auditorio['Mesero']['apellidos'], 
                array('controller'=>'meseros','action'=>'ver',$auditorio['Mesero']['id'])); ?></td>
        <td><?php echo $this->Html->link('Editar', array('controller'=>'auditorios','action'=>'editar',
            $auditorio['Auditorio']['id'])); ?></td>
        <td><?php echo $this->Form->postLink('Eliminar',array('action'=>'eliminar',$auditorio['Auditorio']['id']),
            array('confirm'=>'Eliminar auditorio'.$auditorio['Auditorio']['serie'].'?')); ?></td>  
    </tr>
    <?php endforeach;?>
</table>