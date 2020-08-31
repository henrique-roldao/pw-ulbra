<div class="demo" style="margin-top: 8rem;">
  <br>
  <table class="table is-responsive">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Gender</th>
        <th>Linguagens</th>
        <th>Desenvolvedor</th>
        <th>Email</th>
        <th>Senha</th>
        <th>Descrição</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?=$client['name']?></td>
        <td><?=$client['gender']?></td>
        <td><?php
        foreach($languages as $language) {
            echo $language . ", ";
        }?></td>
        <td><?=$client['typeOfDeveloper']?></td>
        <td><?=$client['email']?></td>
        <td><?=$client['password']?></td>
        <td><?=$client['description']?></td>
      </tr>
    </tbody>
  </table>

</div>
