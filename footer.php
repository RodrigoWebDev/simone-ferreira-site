<section class="contact bg-primary text-light" id="contact">
    <div class="container">
        <form action="" method="post">
            <h2>Entre em contato comigo</h2>
            <hr class="bg-light mb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Assunto</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="rounded p-2"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary hover">Submit</button>
        </form>
    </div>
</section>

<section class="warn">
    <div class="container">
        <i class="fas fa-exclamation-circle d-block mx-auto mb-3 font-size-3"></i>
        <p>A Orientação Psicológicsa não é recomendada em situações que se configure graves transtornos mentais ou tentativa de suicídio, sendo neste caso, aconselhável o contato com o órgão CVV (Centro de Valorização da Vida) no telefone 141 .
        </p>
    </div>
    <div class="row mt-5">
        <div class="col-sm-4">
            <img src="<?php echo get_template_directory_uri() . '/img/footer1.jpg'?>" alt="imagem">
        </div>
        <div class="col-sm-4">
            <img src="<?php echo get_template_directory_uri() . '/img/footer2.jpg'?>" alt="imagem">
        </div>
        <div class="col-sm-4">
            <img class="mt-2" src="<?php echo get_template_directory_uri() . '/img/footer3.jpg'?>" alt="imagem">
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-3">
                <h2 class="text-left">Links úteis</h2>
                <ul class="text-left">
                    <li class="my-2"><a href="http://site.cfp.org.br/wp-content/uploads/2012/07/codigo_etica.pdf" tagert="_blank">Código de ética profissional do psicólogo</a></li>
                    <li class="my-2"><a href="http://site.cfp.org.br/wp-content/uploads/2012/07/Resoluxo_CFP_nx_011-12.pdf" tagert="_blank">Resolução CFP n° 11/2012</a></li>
                    <li class="my-2"><a href="http://www.crprj.org.br" tagert="_blank">Conselho Regional de Psicologia</a></li>
                    <li class="my-2"><a href="http://site.cfp.org.br" tagert="_blank">Conselho Federal de Psicologia </a></li>
                </ul>
            </div>
            <div class="col-md-6 my-3">
                <h2 class="text-center">Site em avaliação pelo CFP
                </h2>
                <img class="d-block mx-auto" src="<?php echo get_template_directory_uri() . '/img/footer4.png'?>" alt="">
            </div>
        </div>
        <hr class="bg-light">
        <div class="row">
            <div class="col-md-4 my-3">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/img/logo2.png'?>" alt="Logo">
            </div>
            <div class="col-md-4 my-3 d-flex justify-content-center align-items-end">
                <i class="fas fa-envelope mr-1"></i>simoneferreira.psi@gmail.com
            </div>
            <div class="col-md-4 d-flex my-3 d-flex alig-items-center justify-content-end flex-column">
                <p><i class="fas fa-phone mr-1"></i>21 98733-3332</p>
                <p><i class="fas fa-phone mr-1"></i>21 96967-4263</p>
            </div>
        </div>
        <div class="my-3">
            <p>&copy; Psicóloga Simone Ferreira 2018. Todos os direitos reservados</p>
            <p>Site desenvolvido por <a href="https://rodrigowebdev.github.io/rodrigo-queiroz/" target="_blank">Rodrigo Queiroz</a></p>
        </div>
    </div>
    <?php wp_footer();?>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
<script src="<?php echo get_template_directory_uri() . '/js/new-age.js' ?>"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>



</body>

</html>
