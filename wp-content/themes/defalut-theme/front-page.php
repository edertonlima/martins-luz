<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<section class="box-section">
			<div class="container">
				<div class="row flex align-center">
					
					<div class="col-5">
						<h2>
							Reembolsos corporativos de forma simples e rápida.
							<br>
							<strong>Como deve ser.</strong>
						</h2>

						<p class="cont-recuo">Acabe com a dor de cabeça da gestão de despesas do dia a dia da sua empresa: pagamentos, reembolsos, compras on-line e gestão do fundo fixo. Controle seus gastos escaneando notas fiscais, acompanhando aprovações, visualizando relatórios e muito mais!</p>

						<a href="" class="btn cor2" title="Peça já sua proposta">Peça já sua proposta</a>

						<p class="cor2">Responderemos em até 24h.</p>
					</div>
					<div class="col-7">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/large-Header_3d_3_1.png" alt="Reembolsos corporativos de forma simples e rápida. Como deve ser">
					</div>

				</div>

				<div class="row flex align-center">

					<div class="col-7">
						<a data-fancybox href="https://www.youtube.com/watch?v=OvtUAuyL6b4" class="video-home" title="Assistir ao vídeo">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/play-solid.png" alt="Assistir ao vídeo">
						</a>
					</div>
					<div class="col-5">
						<h2>
							Assuma agora o 
							<br>
							<strong> controle dos gastos</strong>
							<br>
							variáveis da sua empresa
						</h2>

						<p>O BPP Corp é uma solução única para a administração de gastos corporativos que conta com uma conta digital empresarial grátis, cartões VISA pré-pagos para controle total das despesas e um aplicativo sem custos adicionais para tornar seu controle financeiro mais simples e prático! </p>
					</div>

				</div>
			</div>
		</section>

		<section class="box-section">
			<div class="container">

				<div class="banner-destaque">
					<div class="row flex align-bottom">

						<div class="col-m-1 col-4">
							<h2>
								<strong>Organizar<br>reembolsos</strong> da sua empresa nunca foi tão rápido
							</h2>

							<p class="">Utilizando BPP Corp, você tem controle total sobre o budget de sua equipe podendo realizar transferências instantâneas para os cartões corporativos dos colaboradores, acompanhar gastos, receber comprovantes e visualizar relatórios que organizam seu reembolso.</p>

							<a href="" class="btn cor1" title="Peça já sua proposta">Peça já sua proposta</a>
						</div>
						<div class="col-m-1 col-6">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bpp_corp_reembolso.png" alt="Assistir ao vídeo">
						</div>

					</div>
				</div>

			</div>
		</section>

	<?php endwhile; ?>

<?php get_footer(); ?>

<script type="text/javascript">
</script>