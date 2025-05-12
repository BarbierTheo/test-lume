<?php include_once "../../templates/head.php" ?>

<main class="min-h-screen w-screen flex flex-col lg:flex-row">

    <?php include_once "../../templates/navbaradmin.php" ?>

    <!-- Interface -->
    <section class="min-w-[80%] min-h-screen p-4 lg:p-16 flex flex-col gap-4">

        <!-- Barre rechercher -->
        <form class="flex gap-2 lg:gap-4" method="get">
            <input type="text" placeholder="Par nom, objet, ou adresse mail" class="input grow" name="search" />
            <button class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                    <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path>
                </svg>
                <span class="hidden lg:block">Rechercher</span>
            </button>
        </form>

        <!-- Filtres -->
        <div class="flex flex-col lg:flex-row min-h-[5%] gap-4">
            <button class="flex gap-2 w-full items-center justify-center  hover:bg-neutral-300 text-neutral-800 bg-neutral-200 m-4 rounded-lg font-semibold cursor-pointer py-3 lg:py-2" data-status="all">
                Tous les messages
            </button>
            <button class="flex gap-2 w-full items-center justify-center hover:bg-neutral-300 hover:text-neutral-800 m-4 rounded-lg font-semibold cursor-pointer py-3 lg:py-2" data-status="unread">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 0, 0);">
                    <path d="M3 4v12c0 1.103.897 2 2 2h3.5l3.5 4 3.5-4H19c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2zm8 1h2v6h-2V5zm0 8h2v2h-2v-2z"></path>
                </svg>
                <?= $unread ?> messages non-lus
            </button>
            <button class="flex gap-2 w-full items-center justify-center hover:bg-neutral-300 hover:text-neutral-800 m-4 rounded-lg font-semibold cursor-pointer py-3 lg:py-2" data-status="pending">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 165, 0);">
                    <path d="M20 2H4c-1.103 0-2 .894-2 1.992v12.016C2 17.106 2.897 18 4 18h3v4l6.351-4H20c1.103 0 2-.894 2-1.992V3.992A1.998 1.998 0 0 0 20 2z"></path>
                </svg>
                <?= $pending ?> message en attente
            </button>
            <button class="flex gap-2 w-full items-center justify-center hover:bg-neutral-300 hover:text-neutral-800 m-4 rounded-lg font-semibold cursor-pointer py-3 lg:py-2" data-status="read">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(60, 179, 113);">
                    <path d="M3 4v12c0 1.103.897 2 2 2h3.5l3.5 4 3.5-4H19c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2zm5.707 4.293L11 10.586l4.793-4.793 1.414 1.414L11 13.414 7.293 9.707l1.414-1.414z"></path>
                </svg>
                <?= $read ?> messages traités
            </button>
        </div>

        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 0, 0);">
            <path d="M3 4v12c0 1.103.897 2 2 2h3.5l3.5 4 3.5-4H19c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2zm8 1h2v6h-2V5zm0 8h2v2h-2v-2z"></path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 165, 0);">
            <path d="M20 2H4c-1.103 0-2 .894-2 1.992v12.016C2 17.106 2.897 18 4 18h3v4l6.351-4H20c1.103 0 2-.894 2-1.992V3.992A1.998 1.998 0 0 0 20 2z"></path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(60, 179, 113);">
            <path d="M3 4v12c0 1.103.897 2 2 2h3.5l3.5 4 3.5-4H19c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2zm5.707 4.293L11 10.586l4.793-4.793 1.414 1.414L11 13.414 7.293 9.707l1.414-1.414z"></path>
        </svg> -->

        <!-- Messages -->
        <div class="join join-vertical bg-neutral-900 rounded-lg shadow-md min-h-[70vh]" id="messages">

            <?php foreach ($messages as $value) { ?>

                <div class="collapse collapse-arrow join-item border-neutral-600/40 border">
                    <input type="radio" name="my-accordion" />
                    <div class="collapse-title flex gap-4 items-center justify-between">
                        <div class="flex items-center gap-4">
                            <span class="text-2xl font-light"><?= $value['contact_id'] ?></span>
                            <div class="flex flex-col text-sm">
                                <span class=""><?= $value['contact_nom'] . " " . $value['contact_prenom'] ?></span>
                                <span class="uppercase font-semibold opacity-60"><?= $value['contact_title'] ?></span>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <span class="text-sm opacity-60 hidden lg:flex">il y a 11 heures</span>

                            <?php switch ($value['contact_status']) {
                                case "unread":
                                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 0, 0);">
                                                <path d="M3 4v12c0 1.103.897 2 2 2h3.5l3.5 4 3.5-4H19c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2zm8 1h2v6h-2V5zm0 8h2v2h-2v-2z"></path>
                                        </svg>';
                                    break;
                                case "pending":
                                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 165, 0);">
                                            <path d="M20 2H4c-1.103 0-2 .894-2 1.992v12.016C2 17.106 2.897 18 4 18h3v4l6.351-4H20c1.103 0 2-.894 2-1.992V3.992A1.998 1.998 0 0 0 20 2z"></path>
                                        </svg>';
                                    break;
                                case "read":
                                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(60, 179, 113);">
                                            <path d="M3 4v12c0 1.103.897 2 2 2h3.5l3.5 4 3.5-4H19c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2zm5.707 4.293L11 10.586l4.793-4.793 1.414 1.414L11 13.414 7.293 9.707l1.414-1.414z"></path>
                                        </svg>';
                                    break;
                            } ?>

                        </div>
                    </div>
                    <div class="collapse-content text-sm flex flex-col">
                        <span>
                            <?= $value['contact_message'] ?>
                        </span>
                        <div class="flex flex-col md:flex-row w-full mt-8 gap-4 lg:gap-0">
                            <div class="lg:w-[50%] flex flex-col gap-1">
                                <span class="font-semibold opacity-60 flex lg:hidden">Envoyé il y a 11 heures</span>
                                <span class="font-semibold opacity-60">Adresse e-mail: <?= $value['contact_email'] ?></span>
                                <span class="font-semibold opacity-60">Numéro de téléphone: <?= $value['contact_telephone'] ?></span>
                            </div>
                            <form method="post" class="flex lg:w-[50%] gap-2 flex-col lg:flex-row">
                                <input class="hidden" value="<?= $value['contact_id'] ?>" name="id">
                                <select class="select select-ghost w-full" name="status">
                                    <option disabled selected>Changer le statut du message</option>
                                    <option <?= $value['contact_status'] == 'unread' ? "selected" : "" ?> value="unread">Non-lu</option>
                                    <option <?= $value['contact_status'] == 'pending' ? "selected" : "" ?> value="pending">En attente</option>
                                    <option <?= $value['contact_status'] == 'read' ? "selected" : "" ?> value="read">Lu</option>
                                </select>
                                <button class="btn grow">Modifier le statut</button>

                                <button class="btn !bg-red-600/30" onclick="delete_modal<?= $value['contact_id'] ?>.showModal()" type="button">Supprimer</button>
                            </form>

                            <dialog id="delete_modal<?= $value['contact_id'] ?>" class="modal">
                                <div class="modal-box">
                                    <h3 class="text-lg font-bold">Supprimer le message ?</h3>
                                    <p class="py-4">Cette action est permanente</p>
                                    <div class="flex justify-between">
                                        <a href="" class="w-fit btn">Annuler</a>
                                        <form action="/src/Controller/controller-contactdelete.php?contact=<?= $value['contact_id'] ?>" method="POST">
                                            <button type="submit" class="w-fit btn !bg-red-600/30">Supprimer</button>
                                        </form>
                                    </div>
                                </div>
                                <form method="dialog" class="modal-backdrop">
                                    <button>fermer</button>
                                </form>
                            </dialog>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>

    </section>

</main>

<script src="/js/admin-contact.js"></script>
<?php include_once "../../templates/end.php" ?>