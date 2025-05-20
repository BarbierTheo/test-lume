<?php include_once __DIR__ . "/../../templates/head.php" ?>

<main class="min-h-screen w-screen flex flex-col lg:flex-row">

    <?php include_once __DIR__ . "/../../templates/navbaradmin.php" ?>

    <!-- Interface -->
    <section class="min-w-[80%] min-h-screen p-4 lg:p-16 flex flex-col gap-4">

        <div class="flex flex-col lg:flex-row w-full gap-4">

            <!-- Data projets -->
            <div class="flex flex-col bg-neutral-900 rounded-lg lg:w-[70%]">
                <span class="p-4 pb-2 opacity-60 tracking-wide text-sm">Gestion de la Foire aux questions</span>
                <ul class="list">
                    <li class="list-row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                            <path d="M18 22a2 2 0 0 0 2-2V8l-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12zM13 4l5 5h-5V4zM7 8h3v2H7V8zm0 4h10v2H7v-2zm0 4h10v2H7v-2z"></path>
                        </svg>
                        <div class="font-light text-md">Nombre d'articles : <span class="font-semibold"><?= $resultFAQ ?></span></div>
                    </li>

                </ul>
            </div>
            <!-- Ajouter projet -->
            <a href="/admin/faq/add" class="flex flex-col gap-2 w-full lg:w-[30%] items-center justify-center !bg-neutral-200 hover:bg-neutral-300 text-neutral-800 rounded-lg font-semibold cursor-pointer shadow-md py-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(50, 50, 50, 1);">
                    <path d="M6 22h12a2 2 0 0 0 2-2V8l-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2zm7-18 5 5h-5V4zM8 14h3v-3h2v3h3v2h-3v3h-2v-3H8v-2z"></path>
                </svg>
                Ajouter un article
            </a>
        </div>

        <!-- Barre rechercher -->
        <form method="get" class="flex gap-2 lg:gap-4">
            <input type="text" placeholder="Par nom d'article" class="input grow" name="search" />
            <button class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                    <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path>
                </svg>
                <span class="hidden lg:block">Rechercher</span>
            </button>
        </form>

        <!-- Questions de la FAQ -->
        <div class="join join-vertical bg-neutral-900 rounded-lg shadow-md min-h-[65vh]">

            <?php foreach ($faq as $value) { ?>

                <div class="collapse collapse-arrow join-item border-neutral-600/40 border">
                    <input type="radio" name="my-accordion-4" />
                    <div class="collapse-title flex gap-4 items-center justify-between">
                        <div class="flex items-center gap-4">
                            <span class="text-2xl font-light"><?= $value['faq_id'] ?></span>
                            <span class="font-semibold"><?= $value['faq_title'] ?></span>
                        </div>
                    </div>
                    <div class="collapse-content text-sm flex flex-col">
                        <div>
                            <?= $value['faq_article'] ?>
                        </div>
                        <a href="/admin/faq/modify?faq=<?= $value['faq_id'] ?>" class="btn w-fit self-end mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1)">
                                <path d="m2.344 15.271 2 3.46a1 1 0 0 0 1.366.365l1.396-.806c.58.457 1.221.832 1.895 1.112V21a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1.598a8.094 8.094 0 0 0 1.895-1.112l1.396.806c.477.275 1.091.11 1.366-.365l2-3.46a1.004 1.004 0 0 0-.365-1.366l-1.372-.793a7.683 7.683 0 0 0-.002-2.224l1.372-.793c.476-.275.641-.89.365-1.366l-2-3.46a1 1 0 0 0-1.366-.365l-1.396.806A8.034 8.034 0 0 0 15 4.598V3a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1.598A8.094 8.094 0 0 0 7.105 5.71L5.71 4.904a.999.999 0 0 0-1.366.365l-2 3.46a1.004 1.004 0 0 0 .365 1.366l1.372.793a7.683 7.683 0 0 0 0 2.224l-1.372.793c-.476.275-.641.89-.365 1.366zM12 8c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4z"></path>
                            </svg>Modifier l'article
                        </a>
                    </div>
                </div>

            <?php } ?>

            <!-- <div class="collapse collapse-arrow join-item border-neutral-600/40 border">
                <input type="radio" name="my-accordion-4" />
                <div class="collapse-title flex gap-4 items-center justify-between">
                    <div class="flex items-center gap-4">
                        <span class="text-2xl font-light">3</span>
                        <span class="font-semibold">Pourquoi faire appel à un architecte pour mon projet ?</span>
                    </div>
                </div>
                <div class="collapse-content text-sm flex flex-col">
                    <span>
                        Un architecte apporte son expertise pour créer un projet esthétique, fonctionnel et conforme aux normes. Il optimise les coûts, gère le respect des délais et supervise les travaux, garantissant la qualité et la sécurité du chantier.
                        En plus, il veille à la valorisation de votre bien immobilier à travers une conception réfléchie et unique.
                    </span>
                    <a href="/src/View/view-dashboard-faq-modify.php" class="btn w-fit self-end mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1)">
                            <path d="m2.344 15.271 2 3.46a1 1 0 0 0 1.366.365l1.396-.806c.58.457 1.221.832 1.895 1.112V21a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1.598a8.094 8.094 0 0 0 1.895-1.112l1.396.806c.477.275 1.091.11 1.366-.365l2-3.46a1.004 1.004 0 0 0-.365-1.366l-1.372-.793a7.683 7.683 0 0 0-.002-2.224l1.372-.793c.476-.275.641-.89.365-1.366l-2-3.46a1 1 0 0 0-1.366-.365l-1.396.806A8.034 8.034 0 0 0 15 4.598V3a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1.598A8.094 8.094 0 0 0 7.105 5.71L5.71 4.904a.999.999 0 0 0-1.366.365l-2 3.46a1.004 1.004 0 0 0 .365 1.366l1.372.793a7.683 7.683 0 0 0 0 2.224l-1.372.793c-.476.275-.641.89-.365 1.366zM12 8c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4z"></path>
                        </svg>Modifier l'article
                    </a>
                </div>
            </div> -->

        </div>

    </section>
</main>

<?php include_once __DIR__ . "/../../templates/end.php" ?>