<?php include_once __DIR__ . "/../../templates/head.php" ?>

<main class="min-h-screen w-screen flex flex-col lg:flex-row">

    <?php include_once __DIR__ . "/../../templates/navbaradmin.php" ?>

    <!-- Interface -->
    <section class="min-w-[80%] min-h-screen p-4 lg:p-16 flex flex-col gap-4">
        <!-- En-tête -->
        <div class="flex justify-between">
            <span class="text-xl font-semibold">Nouvel article</span>
            <a href="/admin/faq" class="btn">Annuler</a>
        </div>
        <!-- Form add faq -->
        <form method="post" class="bg-neutral-900 rounded-lg shadow-md w-full p-4 flex flex-col gap-2">
            <ul class="list-disc py-4 px-8 gap-1 text-xs font-light opacity-60">
                <li>Les réponses doivent être claires, concises et utiles pour les utilisateurs du site.</li>
                <li>Évitez les formulations trop techniques si ce n’est pas nécessaire.</li>
                <li>Vérifiez l’orthographe et la lisibilité avant de valider l’ajout.</li>
                <li>Chaque article doit porter sur une seule question précise.</li>
            </ul>

            <fieldset class="fieldset">
                <legend class="fieldset-legend mb-1">Nom de l'article (question) <span class="font-light">(obligatoire)</span></legend>
                <input type="text" class="input w-full" placeholder="Pourquoi les boîtes de pizzas sont-elles carré ?" name="title" value="<?= $_POST['title'] ?? "" ?>" />
                <p class="text-xs font-light opacity-60"><?= $errors['title'] ?? "" ?></p>
            </fieldset>

            <fieldset class="fieldset">
                <legend class="fieldset-legend mb-1">Contenu de l'article (réponse) <span class="font-light">(obligatoire)</span></legend>
                <textarea class="textarea h-56 w-full max-h-96" placeholder="" name="article" id="#textarea"><?= $_POST['article'] ?? "" ?></textarea>
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

<?php include_once __DIR__ . "/../../templates/end.php" ?>