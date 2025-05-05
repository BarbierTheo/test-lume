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


<main class="lg:max-w-[1200px] px-4 lg:mx-auto flex flex-col gap-24 mt-8 mb-32">


    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

        <a href="/src/View/view-projects.php" class="relative w-full min-h-full">
            <img src="../../img/Minimalist_Villa.png" alt="Façade de l'université" class="w-full h-[90%] object-cover object-center">
            <div class="flex justify-between mt-2">
                <span class="uppercase font-semibold">université du Havre</span>
                <span class="opacity-60">2025</span>
            </div>
        </a>
        <a href="/src/View/view-projects.php" class="relative w-full min-h-full">
            <img src="../../img/Minimalist_Villa_2.png" alt="Façade de l'université" class="w-full h-[90%] object-cover object-center">
            <div class="flex justify-between mt-2">
                <span class="uppercase font-semibold">université du Havre</span>
                <span class="opacity-60">2025</span>
            </div>
        </a> <a href="/src/View/view-projects.php" class="relative w-full min-h-full">
            <img src="../../img/Minimalist_Villa_3.png" alt="Façade de l'université" class="w-full h-[90%] object-cover object-center">
            <div class="flex justify-between mt-2">
                <span class="uppercase font-semibold">université du Havre</span>
                <span class="opacity-60">2025</span>
            </div>
        </a>
    </div>


</main>



<?php include_once "../../templates/footer.php" ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/lightgallery.umd.min.js" integrity="sha512-/VsY1Sfve8m/zbDYWoy4VXfTv95J/KvvvpsItJXys3sfneOcOT1FhjQbFE8S+xOrvLT/MKt1VMLjiEIUMRR4RQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.8.3/plugins/zoom/lg-zoom.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.8.3/plugins/thumbnail/lg-thumbnail.umd.min.js"></script>

<script>
    lightGallery(document.getElementById("lightgallery"), {
        selector: 'a',
    });
</script>


<?php include_once "../../templates/end.php" ?>