<style>
th{
width: 8rem;
text-align: left;
border-bottom: 1px solid black;
}
td{
width: 8rem;
}
</style>
<h1>Ejemplo 6: Vista de coche</h1>
<table>
<tr>
<th>Marca</th>
<th>Modelo</th>
<th>Color</th>
<th>Propietario</th>
</tr>
<tr>
<td><?php echo $row->getMarca() ?></td>
<td><?php echo $row->getModelo() ?></td>
<td><?php echo $row->getColor() ?></td>
<d><?php echo $row->getPropietario() ?></td>
</tr>
</table>