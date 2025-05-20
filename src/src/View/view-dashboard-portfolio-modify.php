<?php include_once "../../templates/head.php" ?>

<main class="min-h-screen w-screen flex flex-col lg:flex-row">

    <?php include_once "../../templates/navbaradmin.php" ?>

    <!-- Interface -->
    <form method="post" class="min-w-[80%] min-h-screen p-4 lg:p-16 flex flex-col gap-4" enctype="multipart/form-data">
        <!-- En-tête -->
        <div class="flex justify-between">
            <span class="text-xl font-semibold">Modifier un projet</span>
            <div class="flex flex-col justify-end lg:flex-row">
                <button class="btn !bg-red-600/30" onclick="delete_modal.showModal()" type="button">Supprimer</button>
                <a href="/admin/portfolio" class="btn">Annuler</a>
            </div>
        </div>

        <div class="bg-neutral-900 rounded-lg shadow-md w-full p-4 flex flex-col gap-2">
            <span class="text-sm font-semibold  opacity-80 tracking-wide pb-2">Partie texte</span>
            <fieldset class="fieldset">
                <legend class="fieldset-legend mb-1">Nom du projet <span class="font-light">(obligatoire)</span></legend>
                <input type="text" class="input w-full" placeholder="Université du Havre" value="<?= html_entity_decode($actualProject['project_name']) ?>" name="title" />
                <p class="text-xs font-light opacity-60"><?= $errors['title'] ?? "" ?></p>
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend mb-1">Tagline du projet <span class="font-light">(obligatoire)</span></legend>
                <input type="text" class="input w-full" placeholder="Concevoir aujourd’hui l’Université de demain" value="<?= html_entity_decode($actualProject['project_tagline']) ?>" name="tagline" />
                <p class="text-xs font-light opacity-60"><?= $errors['tagline'] ?? "" ?></p>
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend mb-1">Description du projet <span class="font-light">(obligatoire)</span></legend>
                <textarea class="textarea h-24 w-full max-h-96" placeholder="" name="description"><?= html_entity_decode($actualProject['project_description']) ?></textarea>
                <div class="text-xs font-light opacity-60"><?= $errors['description'] ?? "" ?></div>
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend mb-1">Date du projet <span class="font-light">(obligatoire)</span></legend>
                <input type="date" min="2015-01-01" max="2030-12-31" class="input w-full" value="<?= $actualProject['project_date'] ?>" name="date" />
                <p class="text-xs font-light opacity-60"><?= $errors['date'] ?? "" ?></p>
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend mb-1">Catégorie du projet <span class="font-light">(obligatoire)</span></legend>
                <select class="select w-full" name="categorie">
                    <option value="5" <?= $actualProject['category_id'] == 5 ? "selected" : "" ?>>Commercial</option>
                    <option value="1" <?= $actualProject['category_id'] == 1 ? "selected" : "" ?>>Résidentiel</option>
                    <option value="6" <?= $actualProject['category_id'] == 6 ? "selected" : "" ?>>Conceptuel</option>
                </select>
                <p class="text-xs font-light opacity-60"><?= $errors['categorie'] ?? "" ?></p>
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend mb-1">Lieu du projet</legend>
                <input type="text" class="input w-full" placeholder="Le Havre" value="<?= html_entity_decode($actualProject['project_place']) ?>" name="place" />
                <p class="text-xs font-light opacity-60"><?= $errors['place'] ?? "" ?></p>
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend mb-1">Surface</legend>
                <input type="text" class="input w-full" placeholder="600" value="<?= $actualProject['project_area'] ?? "" ?>" name="surface" />
                <p class="text-xs font-light opacity-60"><?= $errors['surface'] ?? "Non obligatoire" ?></p>
            </fieldset>
        </div>
        <!-- IMG du projet -->
        <div class="bg-neutral-900 rounded-lg shadow-md w-full p-4 flex flex-col gap-2">
            <span class="text-sm font-semibold  opacity-80 tracking-wide pb-2">Partie images</span>
            <ul class="list-disc pl-4 pb-2 gap-1 text-xs font-light opacity-60">
                <li>La première image s'affichera en grand et sera aussi la miniature du projet.</li>
                <li>Format accepté : JPG ou PNG (les images seront automatiquement converties en WebP).</li>
                <li>Dimensions conseillées : minimum 1600 x 900 px pour une bonne qualité sur tous les écrans.</li>
                <li>Nom de fichier : utiliser un nom clair et descriptif (exemple : facade-bibliotheque-havre.jpg).</li>
                <li>Nombre d’images : minimum 3 et maximum 9</li>
                <li class="opacity-100 font-semibold">Si vous rajoutez une image là où une image existe déjà, l'image qui était présente sera supprimée</li>
            </ul>
            <div id="divimg" class="flex flex-col gap-4" data-images="<?= $nbImages ?>">


                <?php
                foreach ($images as $key => $value) {
                ?>

                    <div class="pl-2 flex flex-col gap-2">
                        <span class="font-semibold text-sm">Image <?= $key + 1 ?><span class="font-light pl-2">(obligatoire)</span></span>
                        <div class="flex flex-col lg:flex-row lg:justify-between gap-2">
                            <img src="<?= $value['img_url'] ?>" class="w-48 rounded self-center" alt="">
                            <button class="btn !bg-red-600/30 self-center" onclick="delete_modal_image<?= $key ?>.showModal()" type="button">Supprimer</button>
                        </div>
                        <input type="file" class="file-input w-full" name="<?= $key + 1 ?>" />
                    </div>

                    <dialog id="delete_modal_image<?= $key ?>" class="modal">
                        <div class="modal-box">
                            <h3 class="text-lg font-bold">Supprimer l'image ?</h3>
                            <p class="py-4">Cette action est permanente</p>
                            <div class="flex justify-between">
                                <a href="" class="w-fit btn">Annuler</a>
                                <div>
                                    <a href="" class="w-fit btn !bg-red-600/30">Supprimer</a>
                                </div>
                            </div>
                        </div>
                    </dialog>


                <?php } ?>

            </div>
            <div class="mt-10 self-center">
                <button class="btn w-fit" id="addimg" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                        <path d="M4 5h13v7h2V5c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h8v-2H4V5z"></path>
                        <path d="m8 11-3 4h11l-4-6-3 4z"></path>
                        <path d="M19 14h-2v3h-3v2h3v3h2v-3h3v-2h-3z"></path>
                    </svg>
                    Ajouter une image</button>
            </div>
        </div>

        <button class="mt-4 btn w-fit self-end">Valider le projet</button>
    </form form method="post">

    <dialog id="delete_modal" class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Supprimer le projet ?</h3>
            <p class="py-4">Cette action est permanente</p>
            <div class="flex justify-between">
                <a href="" class="w-fit btn">Annuler</a>
                <div>
                    <a href="/src/Controller/controller-projectdelete.php?projet=<?= $_GET['projet'] ?>" class="w-fit btn !bg-red-600/30">Supprimer</a>
                </div>
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>fermer</button>
        </form>
    </dialog>

</main>




<script src="/js/admin-portfolio.js"></script>
<?php include_once "../../templates/end.php" ?>