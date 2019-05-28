<div class="box-principal">
<h3 class="titulo">Estudiante <?php echo $datos['nombre']; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Perfil del estudiante <?php echo $datos['name']; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-3">
          <img class="img-responsive" src="<?php echo URL;?>public/images/avatars/<?php echo $datos['imagen']; ?>">
        </div>
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Nombre: </b><?php echo $datos['name']; ?>
            </li>
            <li class="list-group-item">
              <b>Edad: </b><?php echo $datos['age']; ?>
            </li>
            <li class="list-group-item">
              <b>Promedio: </b><?php echo $datos['promedio']; ?>
            </li>
            <li class="list-group-item">
              <b>Sección: </b><?php echo $datos['id_seccion']; ?>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </div>
</div>