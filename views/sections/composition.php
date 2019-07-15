<!-- Composition section -->
<section class="composition-section section-padding">
    <div class="wave"></div>
    <div class="container">
        <h3 class="section-title text-center"><?= $composition['title']; ?></h3>
        <div class="row justify-content-center">
            <?php foreach ($composition['item'] as $item) :?>
                <div class="col-md-4 text-center item">
                    <div class="thumb">
                        <img src="<?= $item['image']; ?>" alt="composition">
                    </div>
                    <h4 class="title"><?= $item['title']; ?></h4>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center description">
            <b>
                <?= $composition['description']; ?>
            </b>
        </div>
    </div>
</section>