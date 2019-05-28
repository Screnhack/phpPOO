<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<table class="table table-striped" width="80">
			  <thead>
			    <tr>
			      <th scope="col">id</th>
			      <th scope="col">name</th>
			    </tr>
			    
			  </thead>
			  <tbody>

				  	<?php
				  	while($row = mysqli_fetch_array($datos)){ ?>
				  	<tr>
				  		<td><?php echo $row['id']; ?></td>
					    <td><?php echo $row['name']; ?></td>
					 <td>
					 	<a class="btn btn-success" href="<?php echo URL; ?>secciones/editar/<?php echo $row['id']; ?>">Editar</a>
						<a class="btn btn-danger" href="<?php echo URL; ?>secciones/eliminar/<?php echo $row['id']; ?>">Eliminar</a>
					</td>
					</tr>
					<?php } ?>
						  	
				</tbody>
			</table>
		</div>
	</div>
</div>
