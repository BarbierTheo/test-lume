<?php include_once "../../templates/head.php" ?>

<?php include_once "../../loader.php" ?>
<?php include_once "../../templates/menu.php" ?>
    <?php include_once "../../templates/carousel.php" ?>

    <main class="lg:max-w-[1200px] px-4 lg:mx-auto">

        <!-- CONSTRUIRE, IMAGINER, REINVENTER -->
        <section class="flex flex-col justify-center gap-4 py-16 text-white">
            <div class="flex flex-col leading-8 lg:leading-12 title1">
                <span>Construire,</span>
                <span>imaginer,</span>
                <span>réinventer</span>
            </div>
            <div class="flex flex-col lg:flex-row gap-4">
                <img src="../../img/index/terrasse.avif" alt="" class="lg:w-[50%] max-h-[40rem] object-cover">
                <div class="flex flex-col lg:w-[50%] justify-between">
                    <div class="flex flex-col gap-2">
                        <span>Fondée en 2024, notre agence conçoit des espaces durables, élégants et fonctionnels. Nous accompagnons particuliers et professionnels dans la réalisation de projets uniques, pensés pour s’intégrer harmonieusement à leur environnement.</span>
                        <span>Entre créativité et rigueur, notre équipe pluridisciplinaire mêle expertise technique et sensibilité artistique pour imaginer les lieux de demain.</span>
                    </div>
                    <a href="/src/View/view-about.php" class="btn-secondaire self-center lg:self-start mt-4 lg:mt-0">En savoir plus</a>
                </div>
            </div>
        </section>


        <!-- NOS PROJETS -->
        <section class="flex flex-col justify-center gap-4 py-16 text-white">
            <span class="title1">Portfolio</span>

            <!-- <div class="flex gap-4 flex-wrap">
                <button class="py-2 px-3 font-semibold !bg-zinc-100 rounded-full text-black !text-sm !uppercase cursor-pointer">Tous</button>
                <button class="py-2 px-3 font-semibold hover:!bg-zinc-100 rounded-full hover:text-black !text-sm !uppercase transition-all duration-300 cursor-pointer">Résidentiel</button>
                <button class="py-2 px-3 font-semibold hover:!bg-zinc-100 rounded-full hover:text-black !text-sm !uppercase transition-all duration-300 cursor-pointer">Commercial</button>
                <button class="py-2 px-3 font-semibold hover:!bg-zinc-100 rounded-full hover:text-black !text-sm !uppercase transition-all duration-300 cursor-pointer">Concepts</button>
            </div> -->

            <div class="grid grid-cols-3 grid-rows-2 gap-4">

                <div class="row-span-2 flex flex-col gap-2">
                    <a href="" class="flex justify-between items-center">
                        <span class="text-sm font-bold">SEBHA</span>
                        <span class="text-sm font-light">2025</span>
                    </a>
                    <div class="relative h-full">
                        <img src="../../img/index/galerie/Kitchen_3.avif" alt="Nature" class="w-full h-full object-cover max-h-[50rem]">
                        <a href="#" class="absolute bottom-5 right-5 text-black !bg-white py-2 px-4 font-semibold rounded-full hover:!bg-orange-200 transition-all duration-300">+ d'infos</a>
                    </div>
                </div>

                <div class="col-span-2 flex flex-col gap-2">
                    <a href="" class="flex justify-between items-center">
                        <span class="text-sm font-bold">SEBHA</span>
                        <span class="text-sm font-light">2025</span>
                    </a>
                    <div class="relative h-full">
                        <img src="../../img/index/galerie/Minimaliste_Living_Room.avif" alt="Nature" class="w-full h-full object-cover max-h-[23rem]">
                        <a href="#" class="absolute bottom-5 right-5 text-black !bg-white py-2 px-4 font-semibold rounded-full hover:!bg-orange-200 transition-all duration-300">+ d'infos</a>
                    </div>
                </div>

                <div class="col-span-2 flex flex-col gap-2">
                    <a href="" class="flex justify-between items-center">
                        <span class="text-sm font-bold">SEBHA</span>
                        <span class="text-sm font-light">2025</span>
                    </a>
                    <div class="relative h-full">
                        <img src="../../img/index/galerie/Interior_Design.avif" alt="Nature" class="w-full h-full object-cover max-h-[23rem]">
                        <a href="#" class="absolute bottom-5 right-5 text-black !bg-white py-2 px-4 font-semibold rounded-full hover:!bg-orange-200 transition-all duration-300">+ d'infos</a>
                    </div>
                </div>
            </div>
            <div class="flex justify-end my-2">
                <a href="" class="btn-principal">Découvrez nos projets</a>
            </div>
        </section>

        <!-- FAQ -->
        <section class="flex flex-col justify-center gap-4 py-16 text-white">
            <span class="title1">Des questions ?</span>
            <div class="flex gap-1 flex-wrap">
                <span>Vous ne trouvez pas les réponses que vous cherchez ?</span>
                <a href="" class="font-semibold">Contactez-nous</a>
            </div>

            <div class="flex flex-col gap-2">
                <div class="collapse collapse-arrow bg-neutral-950/50 rounded-xl">
                    <input type="checkbox" />
                    <div class="collapse-title font-semibold">Pourquoi faire appel à un architecte pour mon projet ?</div>
                    <div class="collapse-content text-sm flex flex-col font-light gap-2">
                        <p>Un architecte apporte son expertise pour créer un projet esthétique, fonctionnel et conforme aux normes. Il optimise les coûts, gère le respect des délais et supervise les travaux, garantissant la qualité et la sécurité du chantier.</p>
                        <p>En plus, il veille à la valorisation de votre bien immobilier à travers une conception réfléchie et unique.</p>
                    </div>
                </div>

                <div class="collapse collapse-arrow bg-neutral-950/50 rounded-xl">
                    <input type="checkbox" />
                    <div class="collapse-title font-semibold">Quelles sont les étapes d’un projet avec une agence ?</div>
                    <div class="collapse-content text-sm flex flex-col font-light gap-2">
                        <p>Le processus commence par une étude de vos besoins et une définition du cahier des charges. L'agence conçoit ensuite un projet adapté, valide avec vous avant de commencer les travaux. Durant la réalisation, elle supervise le chantier et s'assure de la qualité. Enfin, elle procède à la réception du projet et aux ajustements nécessaires.</p>
                    </div>
                </div>

                <div class="collapse collapse-arrow bg-neutral-950/50 rounded-xl">
                    <input type="checkbox" />
                    <div class="collapse-title font-semibold">Vous voulez proposer un projet à distance ?</div>
                    <div class="collapse-content text-sm flex flex-col font-light gap-2">
                        <p>Il est tout à fait possible de nous confier un projet à distance. Grâce aux outils numériques, nous pouvons échanger, collaborer et suivre l’avancement du projet de manière fluide, tout en respectant vos attentes et délais.</p>
                    </div>
                </div>
            </div>

        </section>


        <!-- NOUS CONTACTER -->
        <section class="flex flex-col justify-center gap-4 py-16 text-white" id="contact">
            <span class="title1">Nous contacter</span>

            <div class="flex flex-col lg:flex-row gap-4">
                <div class="flex flex-col lg:w-[50%] gap-6 text-left lg:text-right">

                    <div class="flex flex-col gap-1">
                        <span class="font-bold">Email :</span>
                        <a href="mailto:contact@lume.com">contact@lume.com</a>
                    </div>

                    <div class="flex flex-col gap-1">
                        <span class="font-bold">Téléphone :</span>
                        <a href="tel:+bipboubap">+33 bipboubap</a>
                    </div>

                    <div class="flex flex-col gap-1">
                        <span class="font-bold">Réseaux sociaux :</span>
                        <ul>
                            <li><a href="https://www.instagram.com/lume" target="_blank">Instagram</a></li>
                            <li><a href="https://www.linkedin.com/company/lume" target="_blank">LinkedIn</a></li>
                        </ul>
                    </div>

                    <div class="flex flex-col gap-1">
                        <span class="font-bold">Horaires :</span>
                        <span>Lundi - Vendredi : 9h - 18h</span>
                    </div>
                </div>

                <img src="../../img/index/Minimalist_Villa.avif" alt="" class="lg:w-[50%] max-h-[40rem] object-cover object-bottom">
            </div>
        </section>
    </main>


    <?php include_once "../../templates/footer.php" ?>


<?php include_once "../../templates/end.php" ?>