<div id="box-search">
	<div class="position-relative">
		<img src="<?php echo base_url('assets/img/cursos/' . $curso->curso_slug .'.jpg'); ?>" alt="" class="responsive-banner w-100 mx-auto">

		<div class="caption position-absolute w-100" style="top: 0">
			<div class="container px-3 mt-1 text-white">
				<div class="row pt-5 pb-2">	
					<div class="text-right text-uppercase col-12">
						<p class="h3 font-oswald text-light-green mb-2">
							Graduação
						</p>
						<p class="h1 text-white font-oswald font-weight-bold letter-spacing-2">
							<?php echo str_replace(' - ', '<br>', trim($curso->curso_nome)); ?>
						</p>
						<p class="font-montserrat letter-spacing-2 text-white">
							<?php echo $curso->curso_periodo ?>
						</p>
					</div>
				</div>

				<div class="row d-flex align-items-end">
					<div class="col-12 mt-3 order-2 order-lg-1 col-lg-6">
						<p class="font-montessat text-light-green text-uppercase">
							<small>Avaliação:</small>
						</p>

						<div class="w-100 d-flex align-items-start">
							<?php if($curso->curso_nota_mec != 0): ?>
								<div class="rounded d-inline-block mr-3" style="width:86px; height:86px; background-color: #339966">
									<p class="m-0 d-block font-montserrat text-center pt-1 text-uppercase">
										<small>Nota</small>
									</p>
									<p class="h1 text-uppercase text-center font-weight-bold text-white font-montserrat">
										<?php echo $curso->curso_nota_mec ?>
									</p>
									<p class="text-center text-light-green pt-2 text-uppercase">
										<small>MEC</small>
									</p>
								</div>
							<?php endif; ?>		

							<?php if ($curso->curso_nota_cpc != 0) : ?>
								<div class="rounded d-inline-block" style="width:86px; height:86px; background-color: #009966">
									<p class="m-0 d-block font-montserrat text-center pt-1 text-uppercase">
										<small>Nota</small>
									</p>
									<p class="h1 text-uppercase text-center font-weight-bold text-white font-montserrat">
										<?php echo $curso->curso_nota_cpc ?>
									</p>
									<p class="text-center text-light-green pt-2 text-uppercase">
										<small>cpc</small>
									</p>
								</div>
							<?php endif; ?>	

							<?php if ($curso->curso_nota_enade != 0) : ?>
								<div class="rounded d-inline-block" style="width:86px; height:86px; background-color: #009966">
									<p class="m-0 d-block font-montserrat text-center pt-1 text-uppercase">
										<small>Nota</small>
									</p>
									<p class="h1 text-uppercase text-center font-weight-bold text-white font-montserrat">
										<?php echo $curso->curso_nota_enade ?>
									</p>
									<p class="text-center text-light-green pt-2 text-uppercase">
										<small>Enade</small>
									</p>
								</div>
							<?php endif; ?>			
									
							<?php if ($curso->curso_nota_guia_do_estudante != 0) : ?>
								<div class="rounded d-inline-block ml-3" style="width:86px; height:86px; background-color: #006633">
									<p class="m-0 d-block font-montserrat text-center pt-1 text-uppercase">
										<small>
											<?php 
												for($i = 1; $i <= $curso->curso_nota_guia_do_estudante; $i++){
													echo '<i class="fa fa-star" aria-hidden="true"></i>';
												}
											?>
										</small>
									</p>
									<p class="h1 text-uppercase text-center font-weight-bold text-white font-montserrat">
										<?php echo $curso->curso_nota_guia_do_estudante ?>
									</p>
									<p class="text-center text-light-green pt-2 text-uppercase">
										<small>Guia do estudante</small>
									</p>
								</div>
							<?php endif; ?>	
						</div>

						<!-- <img src="https://via.placeholder.com/86x86"  class="img-fluid rounded mr-5">
						<img src="https://via.placeholder.com/86x86"  class="img-fluid rounded mr-5">
						<img src="https://via.placeholder.com/86x86"  class="img-fluid rounded mr-5"> -->
					</div>
					<div class="col-12 order-1 order-lg-2 col-lg-6">
						<p class="h5 font-montserrat text-green text-uppercase text-right">
							<?php echo $curso->curso_duracao . ' Semestres' . ' | ' . $curso->curso_vagas . ' vagas' ?>
						</p>
						<p class="mensalidade text-white font-montserrat letter-spacing-1 text-uppercase text-right">
							Mensalidades a partir de R$ <?php echo number_format($curso->curso_valor, 2, ',', '.'); ?>
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<section id="detalhe" class="w-100 bg-pattern py-5">

	<div class="container">
		<div class="row">	

			<?php
				12 % sizeof($detalhes) == 0 ? $col = 12 / sizeof($detalhes) : $col = 12 / (sizeof($detalhes) - 1);
				foreach($detalhes as $detalhe): 
			?>
				<?php if ($detalhe->titulo != " ") : ?>
				<div class="col-md-<?php echo $col ?> my-4">
					<img src="<?php echo base_url('assets/img/cursos/icones/' . $curso->curso_slug . '/' . $detalhe->icone ); ?>" alt="Data da prova" height="80px" width="80px" class="d-block mx-auto">
					<p class="text-center text-uppercase text-green mt-3 font-montserrat"><?php echo strip_tags($detalhe->titulo); ?></p>
				</div>         
				<?php endif; ?>
            <?php endforeach; ?>
        </div>	
    </div>

</section>

<section id="sobre" class="w-100 bg-white position-relative">

	<div class="pattern header"></div>
	
	<div class="container">

		<div class="row py-5">
			<div class="col-10 offset-1">
				<h2 class="text-uppercase text-center h4 text-black mb-4 font-weight-bold font-open-sans letter-spacing-4">
					Sobre o curso 
				</h2>
				<p class="text-justify text-black font-montserrat">
					<?php echo ($curso->curso_resumo) ?>
                </p>
			</div>
		</div>

	</div>

	<div class="pattern footer"></div>

</section>

<section id="diferenciais" class="bg-light-green">

    <div class="container py-5">
        <div class="row">
            <div class="offset-md-1 col-md-10 my-4">
				
				<img class="mr-3 d-block d-md-none mb-3 mx-auto" src="<?php echo base_url('assets/img/icons/icone-aprender.svg'); ?>" width="100" height="100" alt="Diferencial">
                
				<div class="media">
                    <img class="mr-3 d-none d-md-block" src="<?php echo base_url('assets/img/icons/icone-aprender.svg'); ?>" width="100" height="100" alt="Diferencial">
                    <div class="media-body">
                        <h5 class="mt-0 h4 d-none d-md-inline font-weight-bold font-open-sans letter-spacing-2 text-uppercase">Você aprende</h5>
                        <h5 class="mt-0 h4 d-block d-md-none text-center font-weight-bold font-open-sans letter-spacing-2 text-uppercase">Você aprende</h5>
                        <p class="text-black font-montserrat mt-3 text-justify">
                            <?php echo $curso->curso_aprende ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="offset-md-1 col-md-10 my-4">

				<img class="mr-3 d-block d-md-none mb-3 mx-auto" src="<?php echo base_url('assets/img/icons/icone-atua.svg'); ?>" width="100" height="100" alt="Diferencial">
                
				<div class="media">
                    <img class="mr-3 d-none d-md-block" src="<?php echo base_url('assets/img/icons/icone-atua.svg'); ?>" width="100" height="100" alt="Diferencial">
                    <div class="media-body">
                        <h5 class="mt-0 h4 d-none d-md-inline font-weight-bold font-open-sans letter-spacing-2 text-uppercase">Você atua</h5>
						<h5 class="mt-0 h4 d-block d-md-none text-center font-weight-bold font-open-sans letter-spacing-2 text-uppercase">Você atua</h5>
                        <p class="text-black font-montserrat mt-3 text-justify">
                            <?php echo $curso->curso_atuacao ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="offset-md-1 col-md-10 my-4">

				<img class="mr-3 d-block d-md-none mb-3 mx-auto" src="<?php echo base_url('assets/img/icons/icone-diferencial.svg'); ?>" width="100" height="100" alt="Diferencial">

                <div class="media">
                    <img class="mr-3 d-none d-md-block" src="<?php echo base_url('assets/img/icons/icone-diferencial.svg'); ?>" width="100" height="100" alt="Diferencial">
                    <div class="media-body">
                        <h5 class="mt-0 h4 d-none d-md-inline font-weight-bold font-open-sans letter-spacing-2 text-uppercase">Diferencial</h5>
						<h5 class="mt-0 h4 d-block d-md-none text-center font-weight-bold font-open-sans letter-spacing-2 text-uppercase">Diferencial</h5>
                        <p class="text-black font-montserrat mt-3 text-justify">
						<?php foreach($diferenciais as $diferencial): ?>
							<?php if($diferencial != " "): ?>
								<b>&bull; </b> <?php echo $diferencial ?> <br><br>
							<?php endif; ?>
						<?php endforeach; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section id="info" class="w-100 bg-pattern">

	<div class="container py-5">
		<div class="row">	

			<div class="col-md-4 col-sm-6 my-4">
				<img src="<?php echo base_url('assets/img/icons/icone-mec.svg'); ?>" alt="Data da prova" height="80px" width="80px" class="d-block mx-auto">
				<p class="text-center text-uppercase text-green mt-3 font-montserrat">Reconhecido portaria</p>
				<p class="text-white text-center text-uppercase font-montserrat"><?php echo $curso->curso_portaria ?></p>
			</div>
			<div class="col-md-4 col-sm-6 my-4">
				<div class="text-center p-3">
					<i class="fa fa-graduation-cap text-light-green fa-3x fa-fw" aria-hidden="true"></i>
				</div>
				<p class="text-center text-uppercase text-green mt-3 font-montserrat">coordenação</p>
				<p class="text-white text-center text-uppercase font-montserrat"><?php echo $curso->curso_coordenacao?></p>
			</div>
			<div class="col-md-4 col-sm-6 my-4">
				<div class="text-center p-3">
					<i class="fa fa-clock-o text-light-green fa-3x fa-fw" aria-hidden="true"></i>
				</div>
				<p class="text-center text-uppercase text-green mt-3 font-montserrat">período</p>
				<p class="text-white text-center text-uppercase font-montserrat"><?php echo $curso->curso_periodo ?></p>
			</div>

			<div class="col-md-4 col-sm-6 my-4">
				<div class="text-center p-3">
					<i class="fa fa-calendar text-light-green fa-3x fa-fw" aria-hidden="true"></i>
				</div>
				<p class="text-center text-uppercase text-green mt-3 font-montserrat">duração</p>
				<p class="text-white text-center text-uppercase font-montserrat"><?php echo $curso->curso_duracao ?> semestres</p>
			</div>
			<div class="col-md-4 col-sm-6 my-4">
				<div class="text-center p-3">
					<i class="fa fa-envelope-o text-light-green fa-3x fa-fw" aria-hidden="true"></i>
				</div>
				<p class="text-center text-uppercase text-green mt-3 font-montserrat">e-mail</p>
				<a href="mailto:<?php echo $curso->curso_email ?>" class="d-block text-white text-center text-uppercase font-montserrat"><?php echo $curso->curso_email ?></a>
			</div>
			<div class="col-md-4 col-sm-6 my-4">
				<div class="text-center p-3">
					<i class="fa fa fa-university text-light-green fa-3x fa-fw" aria-hidden="true"></i>
				</div>
				<a href="#" class="d-block hover-opaque text-center text-uppercase text-green mt-3 mb-0 font-montserrat" data-toggle="modal" data-target="#modal_matriz_curricular">
                    matriz curricular <i class="fa fa-external-link" aria-hidden="true"></i>
                </a>
				<a href="#" class="d-block hover-opaque text-center text-uppercase text-green font-montserrat" data-toggle="modal" data-target="#modal_docentes">
                    corpo docente <i class="fa fa-external-link" aria-hidden="true"></i>
                </a>
				<p class="text-white text-center text-uppercase font-montserrat"></p>
			</div>

		</div>	
    </div>

</section>

<section id="locais" class="w-100 bg-dark-blue">
	<div class="container py-5">
		<div class="row">
			<div class="col-12">
				<h2 class="text-uppercase text-center text-light-green h5 font-open-sans font-weight-bold letter-spacing-4">Unidades</h2>
				<img src="<?php echo base_url('assets/img/icone-localizacao.svg'); ?>" alt="" height="auto" width="150px" class="d-block mx-auto py-4">
			</div>
            <div class="col-12 mt-5">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-uppercase text-center line-hright-short font-montserrat text-light-green">
                            Unidade <br> <b>Central</b>
                        </p>
                        <p class="text-white font-montserrat text-center line-hright-short">
                            <small >
                                R. Ramos de Azevedo, 423  <br>
                                Jd. Paulista - Ribeirão Preto - SP
                            </small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-uppercase text-center line-hright-short font-montserrat text-light-green">
                            Unidade <br> <b>Itataré</b>
                        </p>
                        <p class="text-white font-montserrat text-center line-hright-short">
                            <small >
                                R. Itararé, 94 <br>
                                Jd. Paulista - Ribeirão Preto - SP
                            </small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-uppercase text-center line-hright-short font-montserrat text-light-green">
                            Unidade <br> <b>Itatiaia</b>
                        </p>
                        <p class="text-white font-montserrat text-center line-hright-short">
                            <small >
                                Av. Itatiaia, 1.176 <br>
                                Jd. Sumaré - Ribeirão Preto - SP
                            </small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-uppercase text-center line-hright-short font-montserrat text-light-green">
                            Unidade <br> <b>Independência</b>
                        </p>
                        <p class="text-white font-montserrat text-center line-hright-short">
                            <small >
                                R. José Curvelo da Silveira Jr., 110  <br>
                                Jd. Califórnia - Ribeirão Preto - SP
                            </small>
                        </p>
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>

<!-- MODAL DE MATRIZ CURRICULAR -->
<div class="modal fade" id="modal_matriz_curricular" tabindex="-1" role="dialog" aria-labelledby="modalMatrizCurricular" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-light-green font-open-sans font-weight-bold text-uppercase" id="exampleModalCenterTitle">Matriz Curricular <br> <span class="text-dark-blue"><?php echo $curso->curso_nome ?></span></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<?php 
					$periodo = 1;
					foreach($matriz_curricular as $matriz): 
				?>
		
					<table class="table table-striped table-bordered my-4">			
						<thead>
							<tr>
								<th width="80%">
									<?php echo $periodo ?>º Período
								</th>
								<th width="30%" class="text-center">
									Carga horária
								</th>
							</tr>
						</thead>	
						<tbody>
							<?php foreach($matriz as $disciplina): ?>
								<tr>
									<td><?php echo $disciplina->matriz_disciplina ?></td>
									<td class="text-center"><?php echo $disciplina->matriz_carga_horaria ?>H</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
			
				<?php 
					$periodo++; 
					endforeach; 
				?>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn text-uppercase text-dark-blue btn-block btn-lg mb-3 font-montserrat font-weight-bold" style="background-color: #00cc99; padding: 13px; font-size: 14px;" data-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>

<!-- MODAL DE DOCENTES -->
<div class="modal fade" id="modal_docentes" tabindex="-1" role="dialog" aria-labelledby="modalDocentes" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-light-green font-open-sans font-weight-bold text-uppercase" id="exampleModalCenterTitle">Docentes <br> <span class="text-dark-blue"><?php echo $curso->curso_nome ?></span></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<table class="table table-striped table-bordered my-4 table-responsive">			
					<thead>
						<tr>
							<th width="65%">
								Docente
							</th>
							<th width="15%" class="text-center">
								Título
							</th>
							<th width="20%" class="text-center">
								Currículo Lattes
							</th>
						</tr>
					</thead>	
					<tbody>
						<?php foreach($docentes as $docente): ?>
							<tr>
								<td><?php echo $docente->docente_nome ?></td>
								<td class="text-center"><?php echo $docente->docente_titulo ?></td>
								<td class="text-center">
									<a href="<?php echo $docente->docente_lattes ?>" target="_blank">
										Currículo Lattes
									</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			
			</div>

			<div class="modal-footer">
				<button type="button" class="btn text-uppercase text-dark-blue btn-block btn-lg mb-3 font-montserrat font-weight-bold" style="background-color: #00cc99; padding: 13px; font-size: 14px;" data-dismiss="modal">Fechar</button>
			</div>

		</div>
	</div>
</div>

<form action="<?php echo base_url('cadastro.php') ?>" method="post" class="d-none hidden_form">
	<input type="text" name="curso" value="<?php echo $curso->curso_erp ?>">
</form>