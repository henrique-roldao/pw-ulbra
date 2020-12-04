<section class="hero is-info is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <table style="margin: 0 auto; margin-bottom: 20px;" class="table is-responsive">
                        <thead>
                            <tr>
                                <th>ID do Cliente</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Telefone</th>
                                <th>Endereço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $client['idClient'] ?></td>
                                <td><?= $client['name'] ?></td>
                                <td><?= $client['email'] ?></td>
                                <td><?= $client['phone'] ?></td>
                                <td><?= $client['address'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="<?=base_url('admin/clients')?>">
                        <button class="button is-medium">
                            <span class="icon">
                                <i class="fas fa-arrow-left"></i>
                            </span>
                            <span>Voltar</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>