<?php include_once "../../templates/head.php" ?>

<?php include_once "../../loader.php" ?>
<?php include_once "../../templates/menu.php" ?>

<!-- IMG principale -->
<section class="flex items-end w-screen h-screen">
    <div class="absolute inset-0 overflow-hidden">
        <div class="w-screen h-screen bg-[url('../img/carousel/carousel1.avif')] bg-center bg-no-repeat bg-cover zoom-carousel"></div>
    </div>
    <div class="flex flex-col justify-end w-screen h-screen z-10">
        <div class="lg:p-18 p-8 gap-2">
            <div class="flex flex-col text-orange-50 w-full gap-4">
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-0">
                    <div class="w-[90%] lg:w-[50%] flex flex-col justify-between lg:min-h-[22vh] gap-2">
                        <span class="self-center text-3xl lg:text-[5rem] font-bold uppercase">Université du Havre</span>
                        <div class="hidden lg:flex lg:flex-col text-md lg:text-xl font-semibold">
                            <span>Concevoir aujourd'hui l'Université de demain</span>
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
                <span class="uppercase font-semibold">Université du Havre</span>
                <span class="opacity-80 text-light">04/05/2025</span>
            </div>
            <div class="flex flex-col items-end">
                <span class="opacity-80 text-light">800 m²</span>
                <span class="uppercase font-semibold">Le Havre</span>
            </div>
        </div>

        <span class="opacity-80 text-sm text-justify">Le projet de rénovation de l’Université du Havre a été conçu pour redynamiser l’ensemble du campus tout en préservant son riche patrimoine architectural. Achevé avec succès, ce projet a impliqué la réhabilitation des bâtiments historiques tout en intégrant des solutions modernes pour améliorer l’accessibilité, la fonctionnalité et l’efficience énergétique des espaces. Les espaces extérieurs ont également été repensés pour favoriser les échanges et créer des zones de détente adaptées aux besoins des étudiants et du personnel. Des matériaux contemporains ont été utilisés pour renforcer l’aspect durable du projet, tout en respectant l’identité unique du campus. La rénovation a permis de moderniser l’université, en offrant un cadre de travail plus agréable, tout en préservant son héritage et son caractère historique.</span>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4" id="lightgallery">

            <div class="relative w-full min-h-full">
                <a href="/img/Minimalist_Villa.png">
                    <img src="../../img/Minimalist_Villa.png" alt="Façade de l'université" class="w-full h-full object-cover object-center">
                </a>
            </div>
            <div class="relative w-full min-h-full">
                <a href="/img/Minimalist_Villa_2.png">
                    <img src="../../img/Minimalist_Villa_2.png" alt="Intérieur de l'université" class="w-full h-full object-cover object-center">
                </a>
            </div>
            <div class="relative w-full min-h-full">
                <a href="/img/Minimalist_Villa_3.png">
                    <img src="../../img/Minimalist_Villa_3.png" alt="Plans de l'université" class="w-full h-full object-cover object-center">
                </a>
            </div>
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


<?php include_once "../../templates/footer.php" ?>
<?php include_once "../../templates/end.php" ?>