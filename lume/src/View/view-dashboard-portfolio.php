<?php include_once __DIR__ . "/../../templates/head.php" ?>

<main class="min-h-screen w-screen flex flex-col lg:flex-row">

    <?php include_once __DIR__ . "/../../templates/navbaradmin.php" ?>

    <!-- Interface -->
    <section class="min-w-[80%] min-h-screen p-4 lg:p-16 flex flex-col gap-4">

        <div class="flex flex-col lg:flex-row w-full gap-4">

            <!-- Data projets -->
            <div class="flex flex-col bg-neutral-900 rounded-lg lg:w-[70%]">
                <span class="p-4 pb-2 opacity-60 tracking-wide text-sm">Gestion du porfolio</span>
                <ul class="list">
                    <li class="list-row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1)">
                            <path d="M20 5h-9.586L8.707 3.293A.997.997 0 0 0 8 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2z"></path>
                        </svg>
                        <div class="font-light text-md">Nombre de projets : <span class="font-semibold"><?= $countProjects ?></span></div>
                    </li>
                    <li class="list-row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1)">
                            <path d="M19.999 4h-16c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm-13.5 3a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3zm5.5 10h-7l4-5 1.5 2 3-4 5.5 7h-7z"></path>
                        </svg>
                        <div class="font-light text-md">Total d'images : <span class="font-semibold"><?= $countImages ?></span></div>
                    </li>
                    <li class="list-row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1)">
                            <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm3.293 14.707L11 12.414V6h2v5.586l3.707 3.707-1.414 1.414z"></path>
                        </svg>
                        <div class="font-light text-md">Dernier projet ajouté le : <span class="font-semibold">4 mai 2025</span></div>
                    </li>
                </ul>
            </div>

            <!-- Ajouter projet -->
            <a href="/admin/portfolio/add" class="flex flex-col gap-2 w-full lg:w-[30%] items-center justify-center !bg-neutral-200 hover:bg-neutral-300 text-neutral-800 rounded-lg font-semibold shadow-md py-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(32, 32, 32, 1);">
                    <path d="M20 5h-9.586L8.707 3.293A.997.997 0 0 0 8 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zm-4 9h-3v3h-2v-3H8v-2h3V9h2v3h3v2z"></path>
                </svg>
                Ajouter un projet
            </a>
        </div>

        <!-- Barre rechercher -->
        <div class="flex gap-2 lg:gap-4">
            <input type="text" placeholder="Par nom de projet" class="input grow" />
            <button class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                    <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path>
                </svg>
                <span class="hidden lg:block">Rechercher</span>
            </button>
        </div>

        <!-- Apparition des projets -->
        <div class="h-full w-full bg-neutral-900 rounded-lg shadow-md">

            <ul class="list h-full">

                <?php foreach ($projects as $value) { ?>

                    <li class="list-row flex justify-between">
                        <div class="flex gap-8 items-center">

                            <div class="w-16 lg:w-32 h-auto">
                                <img src="<?= $value['img_url'] ?>" alt="" class="rounded">

                            </div>
                            <div class="list-col-grow">
                                <div class="font-semibold text-lg uppercase"><?= $value['project_name'] ?></div>
                                <div class="opacity-60"><?= $value['project_date'] ?></div>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <a href="/admin/portfolio/modify?projet=<?= $value['project_id'] ?>" class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1)">
                                    <path d="m2.344 15.271 2 3.46a1 1 0 0 0 1.366.365l1.396-.806c.58.457 1.221.832 1.895 1.112V21a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1.598a8.094 8.094 0 0 0 1.895-1.112l1.396.806c.477.275 1.091.11 1.366-.365l2-3.46a1.004 1.004 0 0 0-.365-1.366l-1.372-.793a7.683 7.683 0 0 0-.002-2.224l1.372-.793c.476-.275.641-.89.365-1.366l-2-3.46a1 1 0 0 0-1.366-.365l-1.396.806A8.034 8.034 0 0 0 15 4.598V3a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1.598A8.094 8.094 0 0 0 7.105 5.71L5.71 4.904a.999.999 0 0 0-1.366.365l-2 3.46a1.004 1.004 0 0 0 .365 1.366l1.372.793a7.683 7.683 0 0 0 0 2.224l-1.372.793c-.476.275-.641.89-.365 1.366zM12 8c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4z"></path>
                                </svg>
                                Modifier
                            </a>
                        </div>
                    </li>

                <?php } ?>

            </ul>

        </div>

    </section>


</main>

<?php include_once __DIR__ . "/../../templates/end.php" ?>