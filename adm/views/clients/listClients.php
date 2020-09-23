<section class="hero is-fullheight">
	<div class="hero-body">
    <div class="demo">
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
        <?php
          foreach ($arrayClients as $client) {
        ?>
          <tr>
            <td><?=$client['idClient']?></td>
            <td><?=$client['name']?></td>
            <td><?=$client['email']?></td>
            <td><?=$client['phone']?></td>
            <td><?=$client['address']?></td>
            <td ><a class="button is-warning" href="#">Editar</a></td>
            <td><a class="button is-danger" href="#"> Deletar</a></td>
          </tr>
          <?php
          }
          ?>
        </tbody>
      </table>

    </div>
  </div>
</section>