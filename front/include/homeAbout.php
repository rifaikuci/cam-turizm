<?php $about = getDataRow(1, 'tblAbout', $db); ?>
<section id="about">
    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h3><?php echo $content->home->about->title; ?></h3>
            <?php echo $about['about' . $langCharacter] ?>
        </header>

        <div class="row about-cols">

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="about-col">
                    <div class="img">
                        <img src="front/assets/img/about-mission.jpg" alt="" class="img-fluid">
                        <div class="icon"><i class="<?php echo $about['classNameMission'] ?>"></i></div>
                    </div>
                    <h2 class="title"><a href="#"><?php echo $content->home->about->mission; ?></a></h2>
                    <?php echo $about['mission' . $langCharacter] ?>

                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="about-col">
                    <div class="img">
                        <img src="front/assets/img/about-plan.jpg" alt="" class="img-fluid">
                        <div class="icon"><i class="<?php echo $about['classNamePlan'] ?>"></i></div>
                    </div>
                    <h2 class="title"><a href="#"><?php echo $content->home->about->plan; ?></a></h2>
                    <?php echo $about['plan' . $langCharacter] ?>

                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="about-col">
                    <div class="img">
                        <img src="front/assets/img/about-vision.jpg" alt="" class="img-fluid">
                        <div class="icon"><i class="<?php echo $about['classNameVision'] ?>"></i></div>
                    </div>
                    <h2 class="title"><a href="#"><?php echo $content->home->about->vision; ?></a></h2>
                    <?php echo $about['vision' . $langCharacter] ?>
                </div>
            </div>

        </div>

    </div>
</section>
