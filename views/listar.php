<h1>Listar</h1>


<table class="table table-hover table-striped">
  <thead class="table-dark">
    <tr>
      <th>id</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Telefone</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
      // variavel contatos trazida de açẽs 
      foreach($contatos as $posicao => $contato) {
        // quebrando o dados do contato em partes
        $partes = explode(';', $contato);
        echo '<tr>'; 
          echo '<td>'. $posicao .'</td>';
          echo '<td>'. $partes[0] .'</td>';
          echo '<td>'. $partes[1] .'</td>';
          echo '<td>'. $partes[2] .'</td>';
          echo "<td>
            <a href='/excluir?id={$posicao}' class='btn btn-danger btn-sm'>Excluir</a>
            <a href='/editar?id={$posicao}' class='btn btn-warning btn-sm'>Editar</a>
          </td>";
        echo '</tr>';
      } 
    ?>
  </tbody>
</table>
