<?php include_once "../../templates/head.php" ?>

<main class="min-h-screen w-screen flex flex-col lg:flex-row">

    <?php include_once "../../templates/navbaradmin.php" ?>

    <!-- Interface -->
    <form method="post" class="min-w-[80%] min-h-screen p-4 lg:p-16 flex flex-col gap-4" enctype="multipart/form-data">
        <!-- En-tête -->
        <div class="flex justify-between">
            <span class="text-xl font-semibold">Nouveau projet</span>
            <a href="/admin/portfolio" class="btn">Annuler</a>
        </div>
        <!-- TXT du projet -->
        <div class="bg-neutral-900 rounded-lg shadow-md w-full p-4 flex flex-col gap-2">
            <span class="text-sm font-semibold  opacity-80 tracking-wide pb-2">Partie texte</span>
            <fieldset class="fieldset">
                <legend class="fieldset-legend mb-1">Nom du projet <span class="font-light">(obligatoire)</span></legend>
                <input type="text" class="input w-full" placeholder="Université du Havre" name="title" value="<?= $_POST['title'] ?? "" ?>" />
                <p class="text-xs font-light opacity-60"><?= $errors['title'] ?? "" ?></p>
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend mb-1">Tagline du projet <span class="font-light">(obligatoire)</span></legend>
                <input type="text" class="input w-full" placeholder="Concevoir aujourd’hui l’Université de demain" name="tagline" value="<?= $_POST['tagline'] ?? "" ?>" />
                <p class="text-xs font-light opacity-60"><?= $errors['tagline'] ?? "" ?></p>
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend mb-1">Description du projet <span class="font-light">(obligatoire)</span></legend>
                <textarea class="textarea h-24 w-full max-h-96" placeholder="" name="description"><?= $_POST['description'] ?? "" ?></textarea>
                <div class="text-xs font-light opacity-60"><?= $errors['description'] ?? "" ?></div>
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend mb-1">Date du projet <span class="font-light">(obligatoire)</span></legend>
                <input type="date" min="2015-01-01" max="2030-12-31" class="input w-full" name="date" value="<?= $_POST['date'] ?? "" ?>" />
                <p class="text-xs font-light opacity-60"><?= $errors['date'] ?? "" ?></p>
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend mb-1">Catégorie du projet <span class="font-light">(obligatoire)</span></legend>
                <select class="select w-full" name="categorie">
                    <option hidden selected value="">Choisissez la catégorie</option>
                    <option value="5">Commercial</option>
                    <option value="1">Résidentiel</option>
                    <option value="6">Conceptuel</option>
                </select>
                <p class="text-xs font-light opacity-60"><?= $errors['categorie'] ?? "" ?></p>
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend mb-1">Lieu du projet</legend>
                <input type="text" class="input w-full" placeholder="Le Havre" name="place" value="<?= $_POST['place'] ?? "" ?>" />
                <p class="text-xs font-light opacity-60"><?= $errors['place'] ?? "" ?></p>
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend mb-1">Surface</legend>
                <input type="text" class="input w-full" placeholder="600" name="surface" value="<?= $_POST['surface'] ?? "" ?>" />
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
            </ul>

            <div class="flex flex-col gap-2" id="divimg">
                <div class="pl-2 flex flex-col gap-1">
                    <span class="font-semibold text-sm">Image 1 <span class="font-light">(obligatoire)</span></span>
                    <input type="file" class="file-input w-full" name="image1" />
                    <p class="text-xs font-light opacity-60"><?= $errors['image1'] ?? "" ?></p>
                </div>

                <div class="pl-2 flex flex-col gap-1">
                    <span class="font-semibold text-sm">Image 2 <span class="font-light">(obligatoire)</span></span>
                    <input type="file" class="file-input w-full" name="image2" />
                    <p class="text-xs font-light opacity-60"><?= $errors['image2'] ?? "" ?></p>
                </div>

                <div class="pl-2 flex flex-col gap-1">
                    <span class="font-semibold text-sm">Image 3 <span class="font-light">(obligatoire)</span></span>
                    <input type="file" class="file-input w-full" name="image3" />
                    <p class="text-xs font-light opacity-60"><?= $errors['image3'] ?? "" ?></p>
                </div>
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
        <button class="mt-4 btn w-fit self-end" type="submit">Valider le projet</button>
    </form>

</main>

<script src="/js/admin-portfolio.js"></script>
<?php include_once "../../templates/end.php" ?>