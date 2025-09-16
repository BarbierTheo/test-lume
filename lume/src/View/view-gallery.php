<?php
include_once __DIR__ . '/../../templates/head.php';
include_once __DIR__ . '/../../templates/menu.php';
?>

<section class="min-h-screen w-full flex flex-col justify-end items-center gap-8 lg:gap-8 relative overflow-hidden" id="hero">
    <div class="absolute w-screen h-screen inset-0 bg-gradient-to-b from-transparent via-gray-50 to-neutral-700/50 mix-blend-multiply z-10"></div>
    <div class="absolute w-screen h-screen inset-0 bg-gradient-to-t from-transparent to-neutral-600/15 mix-blend-multiply z-10"></div>
    <img src="../../img/carousel/carousel2.avif" alt="" class="w-full !h-[100vh] object-cover object-center zoom-carousel">
    <div class="absolute inset-0 max-w-full overflow-hidden flex flex-col text-orange-50 gap-4 px-4 lg:px-20 pb-20 justify-end box-border z-20">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap:0">
            <div class="lg:w-[50%] flex flex-col items-center lg:items-start justify-between gap-2">
                <span class="text-3xl lg:text-[5rem] font-bold uppercase">NOTRE PORTFOLIO</span>
                <div class="flex flex-col text-md lg:text-xl font-semibold">
                    <span>Découvrez nos réalisations et projets emblématiques</span>
                </div>
            </div>

            <div class="lg:w-[50%] flex flex-col justify-end gap-8 lg:gap-0">
                <div class="flex flex-col md:flex-row gap-2 lg:gap-8 items-center lg:items-start w-full justify-end">
                    <a href="/services" class="btn-principal">Découvrez nos services</a>
                    <a href="/about" class="btn-secondaire">Découvrez nous</a>
                </div>
            </div>
        </div>
    </div>
</section>



<main class="lg:max-w-[1200px] px-4 lg:mx-auto flex flex-col gap-24 mt-8 mb-32">


    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

        <?php foreach ($projects as $value) { ?>

            <a href="/project?id=<?= $value['project_id'] ?>" class="block">
                <div class="w-full aspect-[3/4] overflow-hidden">
                    <img src="<?= $value['img_url'] ?>" alt="" class="w-full h-full object-cover object-center">
                </div>
                <div class="flex justify-between mt-2">
                    <span class="uppercase font-semibold"><?= $value['project_name'] ?></span>
                    <span class="opacity-60"><?= $value['project_date'] ?></span>
                </div>
            </a>

        <?php } ?>

    </div>


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