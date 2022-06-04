<h1>Listar</h1>


<table class="table table-hover table-striped">
  <thead class="table-dark">
    <tr>
      <th>Nome</th>
      <th>Email</th>
      <th>Telefone</th>
    </tr>
  </thead>
  <tbody>
    <?php
      // variavel contatos trazida de açẽs 
      foreach($contatos as $contato) {
        echo '<tr>'; 
          echo '<td>'. $contato .'</td>';
        echo '</tr>';
      } 
    ?>
  </tbody>
</table>
