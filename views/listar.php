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
        // quebrando o dados do contato em partes
        $partes = explode(';', $contato);
        echo '<tr>'; 
          echo '<td>'. $partes[0] .'</td>';
          echo '<td>'. $partes[1] .'</td>';
          echo '<td>'. $partes[2] .'</td>';
        echo '</tr>';
      } 
    ?>
  </tbody>
</table>
