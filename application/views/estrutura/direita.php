<div class="container">
    <section class="">
        <div class="row">
            <div class="col-lg-5">
                <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
                    <!-- IMAGEM -->
                    <img class="img-fluid" src="<?= $foto ?>" alt="Sample image">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
            </div>
            <div class="col-lg-7">
                    <h4 class="font-weight-bold mb-3" style="color: black; font-family: 'Times New Roman', Times, serif"><?= $titulo ?></h4>
                <p style="font-family: 'Times New Roman', Times, serif"><?= $texto ?></p>
                
            </div>
        </div>

    </section>
</div>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>