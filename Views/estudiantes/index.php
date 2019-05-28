<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<table class="table table-striped" width="80">
			  <thead>
			    <tr>
			      <th scope="col">id</th>
			      <th scope="col">name</th>
			      <th scope="col">Age</th>
			      <th scope="col">Promedio</th>
			      <th scope="col">Acciones</th>
			    </tr>
			  </thead>
			  <tbody>
				  		<?php 
							while($row = mysqli_fetch_array($datos)){ ?>
								<tr>
								<td scope="row"><?php echo $row['id'];?></td>
								<td scope="row"><?php echo $row['name'];?></td>
								<td scope="row"><?php echo $row['age']; ?></td>
								<td scope="row"><?php echo $row['promedio'];?></td>
								<td scope="row"><a class="btn btn-primary" href="<?php echo URL; ?>estudiantes/edit/<?php echo $row['id'];?>">Editar</a> <a class="btn btn-danger" href="<?php echo URL; ?>estudiantes/destroy/<?php echo $row['id'];?>" >Eliminar</a></td>
								</tr>
						<?php	}
						?>
				  	
				</tbody>
			</table>
		</div>
	</div>
</div>

