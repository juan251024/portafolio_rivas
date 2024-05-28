<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PORTAFOLIO | Blank PAGE</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
</head>
<style>
    h1 {
        margin: 0;
    }

    main {
        padding: 20px;
    }

    .crear {
        margin-bottom: 20px;
    }

    .crear h2 {
        margin-bottom: 10px;
    }

    .crear label {
        display: block;
        margin-bottom: 5px;
    }

    .crear input[type="text"],
    .crear input[type="url"],
    .crear input[type="file"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .crear button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    .cargar {
        margin-bottom: 20px;
    }

    .cargar h2 {
        margin-bottom: 10px;
    }

    .redes {
        width: 100%;
        border-collapse: collapse;
    }

    .redes th,
    .redes td {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: left;
    }

    .redes th {
        background-color: #333;
        color: #fff;
    }
</style>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <?php include("../view/modulos/header.php");?>
  <?php include("../view/modulos/menu.php");?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <section class="crear">
            <h2>Crear</h2>
            <form action="crear.php" method="post" enctype="multipart/form-data">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                <label for="enlace">Enlace:</label>
                <input type="url" id="enlace" name="enlace" required>
                <label for="icono">Icono:</label>
                <input type="file" id="icono" name="icono" required>
                <button type="submit">Crear</button>
            </form>
        </section>
        <section class="cargar">
            <h2>Cargar</h2>
            <table class="redes">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Enlace</th>
                        <th>Icono</th>
                    </tr>
                </thead>
                <tbody>
                    </tbody>
            </table>
        </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          Start creating your amazing application!
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <?php include("../view/modulos/footer.php");?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../public/dist/js/demo.js"></script>
</body>
</html>
