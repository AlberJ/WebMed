<html>
  <head>
    <link href="/css/app.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
    <h1>Listagem de pacientes</h1>
    <table class="table table-striped table-bordered table-hover">
      <?php foreach ($pacientes as $p): ?>
        <tr>
          <td><?php echo $p->CPF; ?> </td>
          <td><?php echo $p->Nome; ?> </td>
          <td><?php echo $p->DataNasc; ?> </td>
          <td><?php echo $p->Convenio; ?> </td>
          <td><?php echo $p->Telefone; ?> </td>
        </tr>
      <?php endforeach ?>
    </table>
  </body>
</html>
