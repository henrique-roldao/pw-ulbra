<section class="hero is-fullheight">
	<div class="hero-body">
		<div class="container has-text-centered">
			<div class="columns is-8 is-variable ">
				<div class="column is-two-thirds has-text-left">
					<h1 class="title is-1">Contate-me</h1>
					<p class="is-size-4">Caso queira entrar em contato comigo, reportar um bug ou dar uma sugestão envie-me via formulário</p>
					<div class="social-media">
						<a href="https://github.com/henrique-roldao" target="_blank" class="button is-light is-large"><i class="fab fa-github-square" aria-hidden="true"></i></a>
						<a href="https://twitter.com/rique_roldao" target="_blank" class="button is-light is-large"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/rique_roldao/" target="_blank" class="button is-light is-large"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="column is-one-third has-text-left space">
					<form action="./controllers/email.php" method="POST">
						<div class="field">
							<label class="label">Nome</label>
							<div class="control">
								<input class="input is-medium" type="text" name="name" placeholder="Seu nome">
							</div>
						</div>
						<div class="field">
							<label class="label">Email</label>
							<div class="control">
								<input class="input is-medium" type="text" name="email" placeholder="email@exemplo.com">
							</div>
						</div>
						<div class="field">
							<label class="label">Mensagem</label>
							<div class="control">
								<textarea class="textarea is-medium" name="message" placeholder="Sua mensagem"></textarea>
							</div>
						</div>
						<div class="control">
							<button type="submit" class="button is-link is-fullwidth has-text-weight-medium is-medium">Send Message</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>