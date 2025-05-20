<?php include_once "../../templates/head.php" ?>

<main class="min-h-screen w-screen flex flex-col lg:flex-row">

    <?php include_once "../../templates/navbaradmin.php"; ?>
    <!-- Interface -->
    <section class="min-w-[80%] min-h-screen p-4 lg:p-16 flex flex-col gap-4">
        <!-- En-tête -->
        <div class="flex justify-between">
            <span class="text-xl font-semibold">Modifier un article</span>
            <div class="flex flex-col justify-end lg:flex-row gap-4">

                <a href="/admin/faq" class="btn">Annuler</a>

                <button class="btn !bg-red-600/30" onclick="delete_modal.showModal()">Supprimer</button>

                <dialog id="delete_modal" class="modal">
                    <div class="modal-box">
                        <h3 class="text-lg font-bold">Supprimer l'article ?</h3>
                        <p class="py-4">Cette action est permanente</p>
                        <div class="flex justify-between">
                            <a href="" class="w-fit btn">Annuler</a>
                            <form action="/src/Controller/controller-faqdelete.php?faq=<?= $actualFaq['faq_id'] ?>" method="POST">
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
        <!-- Modification du projet -->
        <form method="post" class="bg-neutral-900 rounded-lg shadow-md w-full p-4 flex flex-col gap-2">

            <span class="text-md font-semibold px-4 pt-2"><?= $actualFaq['faq_title'] ?></span>
            <span class="px-6 text-sm"><?= $actualFaq['faq_article'] ?></span>

            <ul class="list-disc py-4 px-8 gap-1 text-xs font-light opacity-60">
                <li>Les réponses doivent être claires, concises et utiles pour les utilisateurs du site.</li>
                <li>Évitez les formulations trop techniques si ce n’est pas nécessaire.</li>
                <li>Vérifiez l’orthographe et la lisibilité avant de valider l’ajout.</li>
                <li>Chaque article doit porter sur une seule question précise.</li>
            </ul>

            <fieldset class="fieldset">
                <legend class="fieldset-legend mb-1">Nom de l'article (question) <span class="font-light">(obligatoire)</span></legend>
                <input type="text" class="input w-full" value="<?= $actualFaq['faq_title'] ?>" name="title" />
                <p class="text-xs font-light opacity-60"><?= $errors['title'] ?? "" ?></p>
            </fieldset>

            <fieldset class="fieldset">
                <legend class="fieldset-legend mb-1">Contenu de l'article (réponse) <span class="font-light">(obligatoire)</span></legend>
                <textarea class="textarea h-56 w-full max-h-96" name="article" id="textarea"><?= $actualFaq['faq_article'] ?></textarea>
                <div class="text-xs font-light opacity-60"><?= $errors['article'] ?? "" ?></div>
            </fieldset>

            <button class="mt-4 btn w-fit self-end" type="submit">Valider l'article</button>
        </form>
    </section>

</main>

<script>
    tinymce.init({
        selector: 'textarea',
        license_key: 'gpl',
        skin: "oxide-dark",
        content_css: "dark"
    });
</script>

<?php include_once "../../templates/end.php" ?>