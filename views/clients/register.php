<section class="hero is-fullheight">
	<div class="hero-body">
		<div class="container has-text-centered">
			<div class="columns is-8 is-variable ">
				<div class="column is-two-thirds has-text-left">
					<h1 class="title is-1">Registre-se !</h1>
					<p class="is-size-4">Ao registar você irá ter acesso aos conteúdos privilegiados postado aqui no blog.
                        Com suas informações poderemos criar conteúdos mais específicados no nosso público-alvo.
                    </p>
                </div>
                
                <div class="column is-one-third has-text-left space">
                    <form action="?controller=clients&action=registeraction" method="POST">
                        <div class="field">
                            <label class="label">Nome </label>
                            <div class="control has-icons-left">
                                <input class="input is-medium" type="text" name="name" placeholder="Seu nome">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                        </div>
                        
                        <div class="field">
                            <div class="control">
                                <label class="radio">
                                    <input  type="radio" name="gender" value="masculino">
                                        Masculino
                                </label>
                                <label class="radio">
                                    <input type="radio" name="gender" value="feminino">
                                        Feminino
                                </label>
                                <label class="radio">
                                    <input type="radio" name="gender" value="outro">
                                        Outro
                                </label>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Quais linguagens você está estudando?</label>
                            <div class="control">
                                <label class="checkbox">
                                    <input type="checkbox" name="languages[]" value="python">
                                    Python
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="languages[]" value="kotlin">
                                    Kotlin
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="languages[]" value="java">
                                    Java
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="languages[]" value="javascript">
                                    Javascript
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="languages[]" value="typescript">
                                    Typescript
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="languages[]" value="golang">
                                    GO
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="languages[]" value="swift">
                                    Swift
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="languages[]" value="outro">
                                    Outro
                                </label>
                            </div>
                        </div>

                        
                        <div class="field">
                            <p class="control has-icons-left">
                                <span class="select">
                                <select name="typeOfDeveloper">
                                    <option selected hidden disabled>Qual tipo de programador você deseja ser?</option>
                                    <option value="frontend">Front-End</option>
                                    <option value="backend">Back-End</option>
                                    <option value="fullstack">FullStack</option>
                                </select>
                                </span>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user-tie"></i>
                                </span>
                            </p>
                        </div>

                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="email" placeholder="Email" name="email">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                            </p>
                        </div>

                        <div class="field">
                            <p class="control has-icons-left">
                                <input name="password" class="input" type="password" placeholder="Password">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-lock"></i>
                                    </span>
                            </p>
                        </div>  

                        <div class="field">
                            <label class="label">Uma descrição sobre você <span style="color: grey; font-weight:normal">( não obrigatório )</span></label>
                            <div class="control">
                                <textarea name="description" class="textarea" placeholder="Exemplo: Sou estudante de Ánalise desenvolvimento de sistemas ..."></textarea>
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