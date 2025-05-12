<?php
require_once "../src/Helpers/helper.php";
require_once "../src/Model/model-database.php";
require_once "../src/Model/model-contact.php";

$messages = Contact::getAllMessages();

if ($_GET['status'] == 'pending' || $_GET['status'] == 'unread' || $_GET['status'] == 'read') {

    $messages = Contact::getMessagesByStatus($_GET['status']);

    foreach ($messages as $value) { ?>
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
    <?php }
} else {

    $messages = Contact::getAllMessages();

    foreach ($messages as $value) { ?>
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
<?php }
}
