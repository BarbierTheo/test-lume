<?php
include_once __DIR__ . '/../../templates/head.php';
include_once __DIR__ . '/../../templates/menu.php';
?>

<section class="min-h-screen w-full flex flex-col justify-end items-center gap-8 lg:gap-8 relative overflow-hidden" id="hero">
    <div class="absolute w-screen h-screen inset-0 bg-gradient-to-b from-transparent via-gray-50 to-neutral-700/50 mix-blend-multiply z-10"></div>
    <div class="absolute w-screen h-screen inset-0 bg-gradient-to-t from-transparent to-neutral-600/15 mix-blend-multiply z-10"></div>
    <img src="../../img/about/Urban_Competition.avif" alt="" class="w-full !h-[100vh] object-cover object-center zoom-carousel">
    <div class="absolute inset-0 max-w-full overflow-hidden flex flex-col text-orange-50 gap-4 px-4 lg:px-20 pb-20 justify-end box-border z-20">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap:0">
            <div class="lg:w-[50%] flex flex-col items-center lg:items-start justify-between gap-2">
                <span class="text-3xl lg:text-[5rem] font-bold uppercase">BUILT ON VISION</span>
                <div class="flex flex-col text-md lg:text-xl font-semibold">
                    <span>Découvrez qui nous sommes</span>
                </div>
            </div>

            <div class="lg:w-[50%] flex flex-col justify-end gap-8 lg:gap-0">
                <div class="flex flex-col md:flex-row gap-2 lg:gap-8 items-center lg:items-start w-full justify-end">
                    <a href="/services" class="btn-principal">Découvrez nos services</a>
                    <a href="/portfolio" class="btn-secondaire">Découvrez notre travail</a>
                </div>
            </div>
        </div>
    </div>
</section>


<main class="lg:max-w-[1200px] px-4 lg:mx-auto">

    <section class="min-h-[100vh] flex flex-col justify-center items-center gap-8 lg:gap-8">
        <section class="flex flex-col justify-center gap-4 py-16 text-white">
            <div class="flex flex-col leading-8 lg:leading-12 title1">
                <span>QUI SOMMES-NOUS ?</span>
            </div>
            <div class="flex flex-col lg:flex-row gap-4">
                <img src="../../img/index/terrasse.avif" alt="terrasse avec hamac" class="lg:w-[50%] max-h-[40rem] object-cover">
                <div class="flex flex-col lg:w-[50%] justify-between">
                    <div class="flex flex-col gap-2">
                        <span>Et si vous pouviez contempler votre projet achevé
                            avant même de poser la première pierre ?
                            C’est de cette idée qu’est né <b>Lume</b>: un atelier où
                            l’architecture devient un art accessible, alliant
                            exigence esthétique et précision technique.</span>
                        <span>Né en Italie, d’origine marocaine et formé en
                            France, j’ai grandi au croisement des cultures et
                            des influences. Très tôt, l’architecture et le goût
                            du beau se sont imposés à moi comme une
                            évidence.</span>
                        <span>Mon parcours, enrichi de projets en Europe, en
                            Afrique et en Asie, m’a appris à conjuguer
                            diversité des styles et universalité des besoins.
                            Avec Lume, j’ai choisi de mettre cette vision au
                            service de chacun, en concevant des espaces
                            harmonieux et pérennes, où la beauté rime avec
                            justesse et équilibre.</span>
                    </div>
                    <a href="/contact" class="btn-secondaire self-center lg:self-start mt-4 lg:mt-0">Travaillons ensemble</a>
                </div>
            </div>
        </section>

    </section>

</main>


<?php include_once __DIR__ . '/../../templates/footer.php';
include_once __DIR__ . '/../../templates/end.php' ?>