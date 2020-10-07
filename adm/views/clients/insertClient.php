<section class="hero is-info is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-mobile">
                <div class="column">
                    <form class="box" action="?controller=clients&action=insertClientAction" method=POST enctype='multipart/form-data'>

                        <div class="field has-text-centered">
                            <h1>Inserir Cliente</h1>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" type="text" name="name" placeholder="Nome">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="email" name="email" placeholder="Email">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="number" name="phone" placeholder="Telefone">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-phone-alt"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="text" name="address" placeholder="Endereço">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-map-marked-alt"></i>
                                </span>
                            </p>
                        </div>
                        <div class="file">
                            <label class="file-label">
                                <input class="file-input" type="file" name="photo">
                                <span class="file-cta">
                                    <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="file-label">
                                        Escolha uma imagem ...
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="field" style="margin-top: 20px;">
                            <p class="control">
                                <button type="submit" class="button is-success">
                                    Cadastrar
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