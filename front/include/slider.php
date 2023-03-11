<?php

$data = getAllData("tblSlider", "", $db);

?>

<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <?php for ($i = 0; $i < count($data); $i++) { ?>
                    <div class="carousel-item active"
                         style="background-image: url(<?php echo "management/".$data[$i]['image']?>)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown"><?php echo $data[$i]['title'.$langCharacter]?></h2>
                                <p class="animate__animated animate__fadeInUp"><?php echo $data[$i]['subTitle'.$langCharacter]?></p>
                                <?php if($data[$i]['btnTitle'.$langCharacter]) {?>
                                <a href="<?php echo $data[$i]['link'.$langCharacter] ? $data[$i]['link'.$langCharacter] : "#" ?>"
                                   target="_blank"
                                   class="btn-get-started scrollto animate__animated animate__fadeInUp">
                                    <?php echo $data[$i]['btnTitle'.$langCharacter]?>
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </div>
</section>
