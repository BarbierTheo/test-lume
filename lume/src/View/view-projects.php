<?php
include_once __DIR__ . '/../../templates/head.php';
include_once __DIR__ . '/../../templates/chatbot.php';
include_once __DIR__ . '/../../templates/menu.php';
include_once __DIR__ . '/../../templates/loader.php';
?>

<!-- IMG principale -->
<section class="flex items-end w-screen h-screen" id="hero">
    <div class="absolute inset-0 overflow-hidden">
        <div class="w-screen h-screen bg-center bg-no-repeat bg-cover zoom-carousel" style="background-image: url('<?= $images[0]['img_url'] ?>')"></div>
    </div>
    <div class="flex flex-col justify-end w-screen h-screen z-10">
        <div class="lg:p-18 p-8 gap-2">
            <div class="flex flex-col text-orange-50 w-full gap-4">
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-0">
                    <div class="w-[90%] lg:w-[50%] flex flex-col gap-2">
                        <span class="self-center lg:self-start text-3xl lg:text-[5rem] font-bold uppercase"><?= $project['project_name'] ?></span>
                        <div class="hidden lg:flex lg:flex-col text-md lg:text-xl font-semibold">
                            <span><?= html_entity_decode($project['project_tagline']) ?></span>
                        </div>
                    </div>
                    <div class="w-[90%] lg:w-[50%] flex flex-col justify-end gap-8 lg:gap-0">
                        <div class="flex flex-col md:flex-row gap-2 lg:gap-8 items-center lg:items-start w-full justify-end">
                            <a href="#more" class="btn-principal">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Description + galerie -->
<main class="lg:max-w-[1200px] px-4 lg:mx-auto flex flex-col gap-24 mt-8 mb-32">

    <section class="flex flex-col items-center gap-4 py-8" id="more">

        <div class="flex justify-between w-full">
            <div class="flex flex-col start">
                <span class="uppercase font-semibold"><?= $project['project_name'] ?></span>
                <span class="opacity-80 text-light"><?= $project['project_date'] ?></span>
            </div>
            <div class="flex flex-col items-end">
                <span class="opacity-80 text-light"><?= !empty($project['project_area']) ? $project['project_area'] . " m²" : "" ; ?></span>
                <span class="uppercase font-semibold"><?= $project['project_place'] ?></span>
            </div>
        </div>

        <span class="opacity-80 text-sm text-justify"><?= html_entity_decode($project['project_description']) ?></span>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4" id="lightgallery">

    <?php foreach ($images as $value) { ?>

            <div class="relative w-full min-h-full">
                <a href="<?= $value['img_url'] ?>">
                    <img src="<?= $value['img_url'] ?>" alt="" class="w-full h-full object-cover object-center">
                </a>
            </div>

    <?php } ?>
            <!-- <div class="relative w-full min-h-full">
                <a href="/img/Minimalist_Villa_2.png">
                    <img src="../../img/Minimalist_Villa_2.png" alt="Intérieur de l'université" class="w-full h-full object-cover object-center">
                </a>
            </div>
            <div class="relative w-full min-h-full">
                <a href="/img/Minimalist_Villa_3.png">
                    <img src="../../img/Minimalist_Villa_3.png" alt="Plans de l'université" class="w-full h-full object-cover object-center">
                </a>
            </div> -->
        </div>

    </section>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/lightgallery.umd.min.js" integrity="sha512-/VsY1Sfve8m/zbDYWoy4VXfTv95J/KvvvpsItJXys3sfneOcOT1FhjQbFE8S+xOrvLT/MKt1VMLjiEIUMRR4RQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.8.3/plugins/zoom/lg-zoom.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.8.3/plugins/thumbnail/lg-thumbnail.umd.min.js"></script>
<script>
    lightGallery(document.getElementById("lightgallery"), {
        selector: 'a',
    });
</script>


<?php include_once __DIR__ . '/../../templates/footer.php';
include_once __DIR__ . '/../../templates/end.php' ?>