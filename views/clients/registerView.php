<div class="demo" style="margin-top: 8rem;">
  <br>
  <table class="table is-responsive">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Gênero</th>
        <th>Linguagens</th>
        <th>Desenvolvedor</th>
        <th>Email</th>
        <th>Senha</th>
        <th>Descrição</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($clients as $client):?>
      <tr>
        <td><?=$client['name']?></td>
        <td><?=$client['gender']?></td>
        <td><?=$client['languages']?></td>
        <td><?=$client['typeOfDeveloper']?></td>
        <td><?=$client['email']?></td>
        <td><?=$client['password']?></td>
        <td><?=$client['description']?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>
