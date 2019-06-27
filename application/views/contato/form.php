<div class="container">
    <?= validation_errors('<div class="alert alert-danger mt-3">', '</div>'); ?>
    <!-- Section: Contact v.2 -->
    <section class="my-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5" style="font-family: 'Times New Roman', Times, serif">Contato</h2>
        <!-- Section description -->
        <p class="text-center w-responsive mx-auto mb-5" style="font-family: 'Times New Roman', Times, serif">Entraremos em contato em até 24 horas</p>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-9 mb-md-0 mb-5">

                <form method="post">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="nome" value="<?= set_value('nome'); ?>" name="nome" class="form-control">
                                <label for="nome" class="">Nome Completo</label>
                            </div>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" value="<?= set_value('email'); ?>" name="email" class="form-control">
                                <label for="email" class="">Email</label>
                            </div>
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="assunto" value="<?= set_value('assunto'); ?>" name="assunto" class="form-control">
                                <label for="assunto" class="">Assunto</label>
                            </div>
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-12">
                            <div class="md-form">
                                <textarea id="mensagem" value="<?= set_value('mensagem'); ?>" name="mensagem" class="form-control md-textarea" rows="3"></textarea>
                                <label for="mensagem">Menssagem</label>
                            </div>
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                    <button type="submit" class="btn" style="background-color: #4a148c" onclick="cadastro()">enviar</button>
                </form>
                <script>
                    function cadastro() {
                        alert("Obrigado por entrar em contato, retornaremos em breve !");
                    }
                </script>



            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li>
                        <i class="fas fa-map-marker-alt fa-2x " style="color: #4a148c"></i>
                        <p style="font-family: 'Times New Roman', Times, serif">São Paulo</p>
                    </li>
                    <li>
                        <i class="fas fa-phone fa-2x mt-4 " style="color: #4a148c"></i>
                        <p style="font-family: 'Times New Roman', Times, serif">11 98256-0176</p>
                    </li>
                    <li>
                        <i class="fas fa-envelope fa-2x mt-4 " style="color: #4a148c"></i>
                        <p style="font-family: 'Times New Roman', Times, serif" class="mb-0">Fisiopartual@gmail.com</p>
                    </li>
                </ul>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </section>
    <!-- Section: Contact v.2 -->
</div>