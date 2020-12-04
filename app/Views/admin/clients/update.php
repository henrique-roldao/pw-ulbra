<section class="hero is-info is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-mobile">
                <div class="column">
                    <form class="box" action="<?=base_url("admin/clients/update-action/{$client['idClient']}")?>" method=POST enctype='multipart/form-data'>

                        <div class="field has-text-centered">
                            <h1>Alterar Cliente</h1>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" type="text" name="id" placeholder="Nome" value="<?= $client['idClient'] ?>" readonly>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" type="text" name="name" placeholder="Nome" value="<?= $client['name'] ?>">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="email" name="email" placeholder="Email" value="<?= $client['email'] ?>">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="text" name="phone" placeholder="Telefone" value="<?= $client['phone'] ?>">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-phone-alt"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="text" name="address" placeholder="Endereço" value="<?= $client['address'] ?>">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-map-marked-alt"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control" style="margin-top: 1.6rem;">
                                <button type="submit" class="button is-success">
                                    Salvar
                                </button>
                            </p>
                        </div>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>