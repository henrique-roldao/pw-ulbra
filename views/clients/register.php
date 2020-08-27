<section class="hero is-fullheight">
	<div class="hero-body">
		<div class="container has-text-centered">
			<div class="columns is-8 is-variable ">
				<div class="column is-two-thirds has-text-left">
					<h1 class="title is-1">Participe dessa pesquisa</h1>
					<p class="is-size-4">Queremos saber mais sobre você, assim poderemos criar conteúdo focado no nosso público.</p>
				</div>
                <div class="column is-one-third has-text-left space">
                    <form action="?controller=clients&action=registerView" method="POST">
                        <div class="field">
                            <label class="label">Nome </label>
                            <div class="control">
                                <input class="input is-medium" type="text" name="name" placeholder="Seu nome">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Sua idade</label>
                            <div class="control">
                                <input class="input is-medium" type="range" name="vol" value="13" min="13" max="99"
                                oninput="display.value=value" onchange="display.value=value">
                                <input class="input is-medium" type="text" id="display" value="13" readonly>
                            </div>
                        </div>
                        
                        <div class="field">
                            <div class="control">
                                <label class="radio">
                                    <input  type="radio" name="masc">
                                        Masculino
                                </label>
                                <label class="radio">
                                    <input type="radio" name="fem">
                                        Feminino
                                </label>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Quais linguages de programação você estuda?</label>
                            <div class="control">
                                <label class="checkbox">
                                    <input type="checkbox" name="languages[]" value="python">
                                    Python
                                </label><br>
                                <label class="checkbox">
                                    <input type="checkbox" name="languages[]" value="kotlin">
                                    Kotlin
                                </label><br>
                                <label class="checkbox">
                                    <input type="checkbox" name="languages[]" value="java">
                                    Java
                                </label><br>
                                <label class="checkbox">
                                    <input type="checkbox" name="languages[]" value="javascript">
                                    Javascript
                                </label><br>
                                <label class="checkbox">
                                    <input type="checkbox" name="languages[]" value="typescript">
                                    Typescript
                                </label><br>
                                <label class="checkbox">
                                    <input type="checkbox" name="languages[]" value="GO">
                                    GO
                                </label><br>
                                <label class="checkbox">
                                    <input type="checkbox" name="languages[]" value="swift">
                                    Swift
                                </label>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                                <input class="input is-medium" type="text" name="email" placeholder="email@exemplo.com">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Interesse</label>
                            <div class="control">
                                <input class="input is-medium" type="text" name="interest" placeholder="Seus interesse">
                            </div>
                        </div>

                        <div class="control">
                            <button type="submit" class="button is-link is-fullwidth has-text-weight-medium is-medium">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
		</div>
	</div>
</section>