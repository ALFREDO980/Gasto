<?php
    if (isset($_GET['idFecha'])) {
        $link = "servidor/agregarTarea.php?idFecha=" . $_GET['idFecha'];
?>
<?php include "header.php"; ?>
<div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Agregar descripcion de gasto y monto</h1>
            <p class="lead">
                <div class="row">
                    <div class="col-sm-8">
                        <form action="<?php echo $link; ?>" method="POST">
                            <label for="tarea">Escribe el gasto</label>
                            <textarea 
                                name="tarea" 
                                id="tarea" 
                                cols="30" 
                                rows="3"
                                required 
                                class="form-control"></textarea>
                            <br>
                            <button class="btn btn-warning">Agregar</button>
                        </form>
                       
                    </div>
                    <div class="colsm-4">
                    <form action="<?php echo $link; ?>" method="POST">
                            <label for="tarea">Monto</label>
                            <textarea 
                                name="tarea" 
                                id="tarea" 
                                cols="30" 
                                rows="3"
                                required 
                                class="form-control"></textarea>
                            <br>
                            <button class="btn btn-danger">Agregar</button>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <div id="tablaTareas"></div>
                    </div>
                </div>
            </p>
        </div>
    </div>
</div>
<?php include "footer.php" ?>
<script>
    $(document).ready(function(){
        $('#tablaTareas').load('tablaTareas.php?idFecha=' + '<?php echo $_GET['idFecha'] ?>');
    });
</script>
<?php 
    } else {
        header("location:index.php");
    } 
?>