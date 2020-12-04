<section class="hero is-info is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="container-fluid">

                <form action="<?= base_url('admin/clients') ?>" method=GET enctype='multipart/form-data' class='row'>

                <div class="columns">
                    <div class="column">
                        <div>
                            <label for="search"><strong style="color: #FFF;">Pesquisar Cliente:</strong></label>
                        </div>
                        <div class='control'>
                            <input type="text" class="input" name="search" placeholder="Nome do cliente aqui">
                        </div>
                    </div>
                    <div class="column">
                        <div>
                            <button style="height: 40px; margin-top: 24px" type="submit" class="button is-medium">
                                <span class="icon">
                                    <i class="fas fa-search"></i>
                                </span>
                                <span>Pesquisar</span>
                            </button>
                        </div>
                    </div>
                </div>




                </form>
                <br><br>
            </div>
            <div class="columns">
                <div class="column">
                    <table class="table is-responsive">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Endereço</th>
                                <th colspan="2">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($clients as $client) {
                            ?>
                                <tr>
                                    <td><?= $client['idClient'] ?></td>
                                    <td><?= $client['name'] ?></td>
                                    <td><?= $client['email'] ?></td>
                                    <td><?= $client['phone'] ?></td>
                                    <td><?= $client['address'] ?></td>
                                    <td><a class="button is-warning" href="<?= base_url("admin/clients/update/{$client['idClient']}") ?>">Editar</a></td>
                                    <td><a class="button is-danger" href="<?= base_url("admin/clients/delete/{$client['idClient']}") ?>">Deletar</a></td>
                                    <td><a class="button is-info" href="<?= base_url("admin/clients/{$client['idClient']}") ?>">Ver Detalhes</a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>