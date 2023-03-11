<?php $data = getAllData("tblServices", "", $db); ?>


<section id="services">
    <div class="container" data-aos="fade-up">

        <header class="section-header wow fadeInUp">
            <h3><?php echo $content->home->services->title; ?></h3>
            <p><?php echo $content->home->services->description; ?></p>
        </header>

        <div class="row">
            <?php for ($i = 0; $i < count($data); $i++) { ?>

            <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bi bi-check"></i></div>
                <h4 class="title"><a href=""> <?php echo $data[$i]['title'.$langCharacter]?></a></h4>
                <p class="description">
                    <?php echo wordSplice($data[$i]['description'.$langCharacter],15)?>
                </p>
            </div>
            <?php } ?>
        </div>

    </div>
</section>