<?php
include_once __DIR__ . '/../../templates/head.php';
include_once __DIR__ . '/../../templates/chatbot.php';
include_once __DIR__ . '/../../templates/menu.php';
include_once __DIR__ . '/../../templates/loader.php';
?>

<section class="min-h-screen w-full flex flex-col justify-end items-center gap-8 lg:gap-8 relative overflow-hidden" id="hero">
    <div class="absolute w-screen h-screen inset-0 bg-gradient-to-b from-transparent via-gray-50 to-neutral-700/50 mix-blend-multiply z-10"></div>
    <div class="absolute w-screen h-screen inset-0 bg-gradient-to-t from-transparent to-neutral-600/15 mix-blend-multiply z-10"></div>
    <img src="../../img/Walking_Street.png" alt="" class="w-full !h-[100vh] object-cover object-center zoom-carousel">
    <div class="absolute inset-0 max-w-full overflow-hidden flex flex-col text-orange-50 gap-4 px-4 lg:px-20 pb-20 justify-end box-border z-20">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap:0">
            <div class="lg:w-[50%] flex flex-col items-center lg:items-start justify-between gap-2">
                <span class="text-3xl lg:text-[5rem] font-bold uppercase">Contactez-nous</span>
                <div class="flex flex-col text-md lg:text-xl font-semibold">
                    <span>Commençons à travailler ensemble</span>
                </div>
            </div>

            <div class="lg:w-[50%] flex flex-col justify-end gap-8 lg:gap-0">
                <div class="flex flex-col md:flex-row gap-2 lg:gap-8 items-center lg:items-start w-full justify-end">
                    <a href="/portfolio" class="btn-principal">Découvrez notre travail</a>
                    <a href="/about" class="btn-secondaire">Découvrez nous</a>
                </div>
            </div>
        </div>
    </div>
</section>


<main class="lg:max-w-[1200px] min-h-[100vh] px-4 lg:mx-auto flex flex-col gap-24 mt-8 mb-32">
    <section class="flex flex-col justify-center gap-4 py-16 text-white" id="contact">
        <span class="title1">Nous contacter</span>
        <span>Notre équipe est disponible pour vous accompagner sur l’ensemble des services proposés sur ce site : conception architecturale, rénovation, aménagement intérieur ou suivi de chantier. N’hésitez pas à nous contacter pour échanger autour de vos besoins — chaque projet est une opportunité de créer ensemble un espace à votre image.</span>
        <span class="mb-8">Si vous voulez nous transmettre des plans, photos ou autres images, n'hésitez pas à nous partager un lien Dropbox ou Wetransfer.</span>
        <div class="flex flex-col lg:flex-row gap-4">
            <div class="flex flex-col lg:w-[50%] gap-6 text-left lg:text-right">

                <form method="post" action="" class="w-full flex flex-col gap-6" novalidate>
                    <fieldset class="fieldset w-full gap-2">

                        <label class="label">Nom</label>
                        <input name="surname" type="text" class="input w-full" placeholder="Dupont" value="<?= $_POST['surname'] ?? "" ?>" />
                        <span class="opacity-80 text-left ml-4"><?= $errors['surname'] ?? "" ?></span>

                        <label class="label">Prénom</label>
                        <input name="firstName" type="text" class="input w-full" placeholder="Alexis" value="<?= $_POST['firstName'] ?? "" ?>" />
                        <span class="opacity-80 text-left ml-4"><?= $errors['firstName'] ?? "" ?></span>

                        <label class="label">E-mail</label>
                        <input name="email" type="email" class="input w-full" placeholder="dpt.alex@gmail.com" value="<?= $_POST['email'] ?? "" ?>" />
                        <span class="opacity-80 text-left ml-4"><?= $errors['email'] ?? "" ?></span>

                        <label class="label">Téléphone</label>
                        <input name="tel" type="tel" class="input w-full" placeholder="050608070" value="<?= $_POST['tel'] ?? "" ?>" />
                        <span class="opacity-80 text-left ml-4"><?= $errors['tel'] ?? "" ?></span>

                        <label class="label">Objet</label>
                        <input name="subject" type="text" class="input w-full" placeholder="Renseignements" value="<?= $_POST['subject'] ?? "" ?>" />
                        <span class="opacity-80 text-left ml-4"><?= $errors['subject'] ?? "" ?></span>

                        <label class="label">Message</label>
                        <textarea name="message" class="textarea w-full max-h-[18rem]" placeholder="La limite est de 250 caractères"><?= $_POST['message'] ?? "" ?></textarea>
                        <span class="opacity-80 text-left ml-4"><?= $errors['message'] ?? "" ?></span>

                    </fieldset>
                    <button class="btn-principal self-end" type="submit">Envoyer</button>
                </form>
            </div>

            <img src="/img/index/Minimalist_Villa.avif" alt="" class="lg:w-[50%] max-h-[40rem] object-cover object-bottom">
        </div>
    </section>


</main>


<?php include_once __DIR__ . "/../../templates/footer.php";
include_once __DIR__ . "/../../templates/end.php" ?>