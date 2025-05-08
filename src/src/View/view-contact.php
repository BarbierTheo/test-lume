<?php include_once "../../templates/head.php" ?>

<?php include_once "../../loader.php" ?>
<?php include_once "../../templates/menu.php" ?>


<section class="min-h-[100vh] w-screen flex flex-col justify-center items-center gap-8 lg:gap-8">
    <div class="min-h-[5vh]">
    </div>
    <img src="../../img/Walking_Street.png" alt="" class="w-screen !h-[50vh] object-cover object-center">

    <div class="flex flex-col text-orange-50 w-full gap-4 px-4 lg:px-20">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap:0">
            <div class="lg:w-[50%] flex flex-col justify-between gap-2">
                <span class="text-3xl lg:text-[5rem] font-bold">BUILT ON VISION</span>
                <div class="flex flex-col text-md lg:text-xl font-semibold">
                    <span>Découvrez qui nous sommes</span>
                </div>
            </div>

            <div class="lg:w-[50%] flex flex-col justify-end gap-8 lg:gap-0">
                <div class="flex flex-col md:flex-row gap-2 lg:gap-8 items-center lg:items-start w-full justify-end">
                    <a href="" class="btn-principal">Commençons à travailler</a>
                    <a href="" class="btn-secondaire">Découvrez nous</a>
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



<?php include_once "../../templates/footer.php" ?>


<?php include_once "../../templates/end.php" ?>