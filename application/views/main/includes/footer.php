    
    <footer>
        
        <section id="contato" class="bg-contato">
            <div class="container">
                <div class="row">
                    <div class="col-12 my-3">
                        <h2 class="h4 text-light-green text-uppercase font-weight-bold font-open-sans letter-spacing-4 text-center my-5 ">Dúvidas</h2>
                        <img src="<?php echo base_url('assets/img/icone-duvidas.svg'); ?>" alt="" width="100px" height="auto" fill="#16e29d" class="d-block mx-auto">
                        <p class="text-light-green text-center my-4 font-montserrat">Nossa equipe está pronta para responder suas perguntas sobre o vestibular.</p>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-xs-12 col-md-4 offset-md-4">
                        <a id="ver-e-mail" class="btn text-uppercase text-dark-blue btn-block btn-lg mb-3 font-montserrat font-weight-bold" style="background-color: #00cc99; padding: 13px; font-size: 14px;">Ver e-mail</a>
                    </div>
                    <div class="col-xs-12 col-md-4 offset-md-4">
                        <a id="ver-telefone" class="btn bg-light-green text-uppercase text-dark-blue btn-block btn-lg mb-3 font-montserrat font-weight-bold" style="padding: 13px; font-size: 14px;">Ver telefone</a>
                    </div>
                    <div class="col-12">
                        <p class="text-light-green text-center my-3 font-montserrat">
                            Segunda a sexta-feira, das 8h às 21h. <br>
                            Sábado, das 8h às 12h.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="sobre" class="bg-white">
            <div class="container">
                <div class="row pt-5 pb-4">	
                    <div class="col-md-4 my-4">
                        <div class="text-center">
                            <a href="http://baraodemaua.br" target="_blank" class="h5 mb-3 d-block text-uppercase text-dark-blue font-weight-bold font-montserrat hover-opaque">
                                Sobre a barão <small><i class="fa fa-external-link" aria-hidden="true"></i></small>
                            </a>
                            <p class="text-center text-muted text-uppercase small font-montserrat hover-bold">Conheça mais sobre o centro Universitário e estude em ribeirão preto.</p>
                        </div>
                    </div>
                    <div class="col-md-4 my-4">
                        <div class="text-center">
                            <a href="<?php echo base_url('assets/edital_barao_2018.pdf'); ?>" target="_blank" class="h5 mb-3 d-block text-uppercase text-dark-blue font-weight-bold font-montserrat hover-opaque">
                                Edital <small><i class="fa fa-external-link" aria-hidden="true"></i></small>
                            </a>
                            <p class="text-center text-muted text-uppercase small font-montserrat hover-bold">Confira todas as informações sobre o vestibular Barão 2019.</p>
                        </div>
                    </div>
                    <!-- <div class="col-md-3 col-sm-6 col-xs-12 my-4">
                        <div class="text-center">
                            <a href="#vagas" class="h5 mb-3 d-block text-uppercase text-dark-blue font-weight-bold font-montserrat hover-opaque">
                                Vagas <small><i class="fa fa-external-link" aria-hidden="true"></i></small>
                            </a>
                            <p class="text-center text-muted text-uppercase small font-montserrat hover-bold">Veja as vagas e nota de corte de cada curso. </p>
                        </div>
                    </div> -->
                    <div class="col-md-4 my-4">
                        <div class="text-center">
                            <a href="#" data-toggle="modal" data-target="#modal_resultados" class="h5 mb-3 d-block text-uppercase text-dark-blue font-weight-bold font-montserrat hover-opaque">
                                Resultados <small><i class="fa fa-external-link" aria-hidden="true"></i></small>
                            </a>
                            <p class="text-center text-muted text-uppercase small font-montserrat hover-bold">É hora de conferir seu desempenho na prova!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-100 bg-dark-blue">
            <div class="container">
                <div class="row py-4">
                    <div class="col-sm-12 col-md-6 my-3">
                        <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('assets/img/logo.svg'); ?>" class="p-4 d-block d-md-inline mx-auto" alt="Barão de maua" width="300px" height="auto"></a>
                    </div>
                    <div class="col-sm-12 col-md-6 my-3">
                        <div class="row">
                            <div class="col-4 col-md-2 offset-md-6">
                                <a href="https://www.facebook.com/baraomaua" target="_blank">
                                    <img id="facebook" src="<?php echo base_url('assets/img/icone-facebook.svg'); ?>" class="img-fluid" alt="Facebook barao de maua">
                                </a>
                            </div>
                            <div class="col-4 col-md-2">
                                <a href="https://www.instagram.com/baraodemauarp/" target="_blank">
                                    <img id="instagram" src="<?php echo base_url('assets/img/icone-instagram.svg'); ?>" class="img-fluid" alt="instagram barao de maua">
                                </a>
                            </div>
                            <div class="col-4 col-md-2">
                                <a href="https://www.youtube.com/channel/UCRjh_S4xSg62U25dkV-4CEg" target="_blank">
                                    <img id="youtube" src="<?php echo base_url('assets/img/icone-youtube.svg'); ?>" class="img-fluid" alt="youtube barao de maua">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-100 bg-light-green p-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="font-weight-bold text-center m-0 font-montserrat">© 2018 | Todos os direitos reservados | Centro Universitário Barão de Mauá | Ribeirão Preto | SP</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <!-- MODAL RESULTADOS -->

    <div class="modal fade" id="modal_resultados" tabindex="-1" role="dialog" aria-labelledby="modalDocentes" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-light-green font-open-sans font-weight-bold text-uppercase" id="exampleModalCenterTitle">Resultados</span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-justify">,
                    <ul>
                        <li>
                            <b>Medicina: </b> <b>dia 14 de novembro de 2018</b>, a partir <b>das 14 horas</b>, no site da instituição (<a href="http://baraodemaua.br">www.baraodemaua.br</a>).
                        </li>
                        <br>
                        <li>
                            <b>Demais cursos: </b> <b>dia 30 de outubro de 2018</b>, a partir <b>das 14 horas</b>, no site da instituição (<a href="http://baraodemaua.br">www.baraodemaua.br</a>).
                        </li>
                    </ul>
                    <!-- <p>
                        O resultado do processo seletivo <b>(EXCETO DO CURSO DE MEDICINA)</b> será publicado no <b>dia 30 de outubro de 2018</b>, a partir <b>das 14 horas</b>, no site da Instituição (<a href="http://baraodemaua.br">www.baraodemaua.br</a>). 
                    </p>
                    <hr>
                    <p>
                        O resultado do processo seletivo do <b>DO CURSO DE MEDICINA</b> será publicado no <b>dia 14 de novembro de 2018</b>, a partir <b>das 14 horas</b>, no site da instituição (<a href="http://baraodemaua.br">www.baraodemaua.br</a>).
                    </p> -->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn text-uppercase text-dark-blue btn-block btn-lg mb-3 font-montserrat font-weight-bold" style="background-color: #00cc99; padding: 13px; font-size: 14px;" data-dismiss="modal">Fechar</button>
                </div>

            </div>
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script> var base_url = "<?php echo base_url() ?>" </script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/select2.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/flipclock.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/app.js') ?>"></script>
  </body>
</html>