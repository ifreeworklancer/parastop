<!-- Top section -->
<section class="top-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="bg text-uppercase"><?= $top['title_bg']; ?></div>
                <div class="relative">
                    <h2 class="slogan"><?= $top['sub_title']; ?></h2>
                    <h1 class="page-title text-uppercase"><?= $top['title']; ?></h1>
                </div>
                <div class="certificate">
                    <a href="images/content/top/certificate.jpg" data-lightbox="certificate"
                       data-title="Сертификат качества.">
                        <img src="images/icons/certificate-of-education-outlined-symbol.svg"
                             alt="certificate-of-education-outlined-symbol">
                        <small><?= $top['certificate']; ?></small>
                    </a>
                </div>
                <div class="order">
                    <div class="price v-center">
                        <?= $top['price']; ?>
                        <small><?= $top['price_currency']; ?></small>
                    </div>
                    <a href="https://shop.av.zp.ua/tovar/antiseptik-sprej-40-ml-stm/" class="btn btn-primary"><?= $btn_order; ?></a>
                    <a class="btn btn-default" href="docs/instruction.zip" download>
                        <img src="images/icons/download-1.svg">
                        <?= $btn_instruction; ?>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 relative">
                <img class="antiseptic" src="images/content/top/parastop.png" alt="antiseptic.jpg">
                <img class="antiseptic-2" src="images/content/top/parastop-shamp.png" alt="antiseptic.jpg">
            </div>
        </div>
    </div>
</section>