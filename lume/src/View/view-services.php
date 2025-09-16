<?php
include_once __DIR__ . '/../../templates/head.php';
include_once __DIR__ . '/../../templates/menu.php';
?>


<section class="min-h-screen w-full flex flex-col justify-end items-center gap-8 lg:gap-8 relative overflow-hidden mb-16" id="hero">
    <div class="absolute w-screen h-screen inset-0 bg-gradient-to-b from-transparent via-gray-50 to-neutral-700/50 mix-blend-multiply z-10"></div>
    <div class="absolute w-screen h-screen inset-0 bg-gradient-to-t from-transparent to-neutral-600/15 mix-blend-multiply z-10"></div>
    <img src="../../img/services/hero1.avif" alt="" class="w-full !h-[100vh] object-cover object-center zoom-carousel">
    <div class="absolute inset-0 max-w-full overflow-hidden flex flex-col text-orange-50 gap-4 px-4 lg:px-20 pb-20 justify-end box-border z-20">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap:0">
            <div class="lg:w-[50%] flex flex-col items-center lg:items-start justify-between gap-2">
                <span class="text-3xl lg:text-[5rem] font-bold uppercase">VOTRE VISION, NOTRE EXPERTISE</span>
                <div class="flex flex-col text-md lg:text-xl font-semibold">
                    <span>Nous transformons vos idées en projets concrets, fonctionnels et esthétiques</span>
                </div>
            </div>

            <div class="lg:w-[50%] flex flex-col justify-end gap-8 lg:gap-0">
                <div class="flex flex-col md:flex-row gap-2 lg:gap-8 items-center lg:items-start w-full justify-end">
                    <a href="/portfolio" class="btn-principal">Commençons à travailler</a>
                    <a href="/about" class="btn-secondaire">Découvrez la galerie</a>
                </div>
            </div>
        </div>
    </div>
</section>

<main class="lg:max-w-[1200px] px-4 lg:mx-auto flex flex-col gap-24 mb-32">

    <section class="min-h-[80vh] flex flex-col justify-center items-center gap-4">
        <div class="flex flex-col gap-8">
            <h2 class="title1">Architecture</h2>
            <div class="flex flex-col lg:flex-row w-full gap-4 lg:gap-8 justify-center items-center">
                <img src="../../img/services/services2.1.avif" alt="" class="lg:w-[50%] max-h-[40rem] w-full object-cover object-center">
                <div class="flex flex-col leading-6 justify-between gap-8 lg:w-[50%] lg:min-h-[40rem]">
                    <div class="flex flex-col gap-4">
                        <img src="../../img/services/services2.2.avif" alt="" class="hidden lg:flex">
                        <span>Nous concevons des espaces uniques, harmonieux et fonctionnels, en accord avec vos besoins et votre environnement. Qu’il s’agisse d’une rénovation, d’un aménagement intérieur ou d’un projet architectural complet, notre équipe vous accompagne avec créativité et rigueur. Chaque projet est pensé sur-mesure pour refléter votre identité et sublimer le lieu.</span>
                    </div>
                    <a href="/about" class="btn-secondaire">Découvrez nous</a>
                </div>
            </div>
        </div>
    </section>

    <section class="min-h-[80vh] flex flex-col justify-center items-center gap-4">
        <div class="flex flex-col gap-8">
            <h2 class="title1">Conseils & accompagnement</h2>
            <div class="flex flex-col lg:flex-row w-full gap-4 lg:gap-8 justify-center items-center">
                <div class="flex flex-col leading-6 justify-between gap-8 lg:w-[50%] lg:min-h-[40rem]">
                    <div class="flex flex-col gap-4">
                        <img src="../../img/services/services1_2.avif" alt="" class="hidden lg:flex">
                        <span>De la première idée jusqu’à la concrétisation de votre projet, nous sommes à vos côtés pour vous guider. Études de faisabilité, choix des matériaux, démarches administratives : nous vous aidons à prendre les bonnes décisions à chaque étape. Notre mission : vous apporter une expertise fiable et rassurante, pour une expérience fluide et sereine.</span>
                    </div>
                    <a href="/contact" class="btn-secondaire self-end">Travaillons ensemble</a>
                </div>
                <img src="../../img/services/service1_1.avif" alt="" class="lg:w-[50%] h-[40rem] w-full object-cover object-center">
            </div>
        </div>
    </section>

    <section class="min-h-[80vh] flex flex-col justify-center items-center gap-4">
        <div class="flex flex-col gap-8">
            <h2 class="title1">Rendus & visuels 3D</h2>
            <div class="flex flex-col lg:flex-row w-full gap-4 lg:gap-8 justify-center items-center">
                <img src="../../img/services/kitchen3.avif" alt="" class="lg:w-[50%] max-h-[40rem] w-full object-cover object-center">
                <div class="flex flex-col leading-6 justify-between gap-8 lg:w-[50%] lg:min-h-[40rem]">
                    <span>Nous donnons vie à vos projets avant même leur réalisation grâce à des visuels 3D immersifs et détaillés. Ces rendus permettent de mieux se projeter, de visualiser les volumes, les ambiances et les matériaux, et de valider les choix esthétiques. Une véritable valeur ajoutée pour imaginer et affiner chaque détail en toute confiance.</span>
                    <div class="flex flex-col gap-4">
                        <a href="/portfolio" class="btn-secondaire">Découvrez la galerie</a>
                        <img src="../../img/services/kitchen1.avif" alt="" class="hidden lg:flex">
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>


<?php include_once __DIR__ . '/../../templates/footer.php';
include_once __DIR__ . '/../../templates/end.php' ?>