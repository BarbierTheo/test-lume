<?php include_once "../../templates/head.php" ?>

<main class="min-h-screen w-screen flex flex-col lg:flex-row">

    <?php include_once "../../templates/navbaradmin.php" ?>

    <!-- Interface -->
    <section class="min-w-[80%] min-h-screen p-4 lg:p-16 flex flex-col gap-4">

        <!-- Indicateurs data + messages -->
        <div class="flex flex-col lg:flex-row lg:max-h-[50%] w-full gap-6">
            <!-- Data -->
            <div class="flex flex-col lg:w-[50%] gap-4">
                <div class="flex gap-4 w-full">
                    <div class="flex flex-col gap-2 bg-neutral-900 p-6 rounded-lg w-full shadow-md">
                        <div class="flex items-center font-bold text-xl justify-between">
                            <span>43</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                <path d="M19.999 4h-16c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm-13.5 3a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3zm5.5 10h-7l4-5 1.5 2 3-4 5.5 7h-7z"></path>
                            </svg>
                        </div>
                        <span class="opacity-60">images uploadés</span>
                    </div>

                    <div class="flex flex-col gap-2 bg-neutral-900 p-6 rounded-lg w-full">
                        <div class="flex items-center font-bold text-xl justify-between shadow-md">
                            <span>4</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                <path d="M20 5h-9.586L8.707 3.293A.997.997 0 0 0 8 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2z"></path>
                            </svg>
                        </div>
                        <span class="opacity-60">projets en ligne</span>
                    </div>
                </div>
                <div class="flex gap-4 w-full">
                    <div class="flex flex-col gap-2 bg-neutral-900 p-6 rounded-lg w-full shadow-md">
                        <div class="flex items-center font-bold text-xl justify-between">
                            <span>26</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                <path d="m8.5 18 3.5 4 3.5-4H19c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h3.5zM7 7h10v2H7V7zm0 4h7v2H7v-2z"></path>
                            </svg>
                        </div>
                        <span class="opacity-60">messages reçus</span>
                    </div>

                    <div class="flex flex-col gap-2 bg-neutral-900 p-6 rounded-lg w-full shadow-md">
                        <div class="flex items-center font-bold text-xl justify-between">
                            <span><?= $resultFAQ ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                <path d="M8.707 19.707 18 10.414 13.586 6l-9.293 9.293a1.003 1.003 0 0 0-.263.464L3 21l5.242-1.03c.176-.044.337-.135.465-.263zM21 7.414a2 2 0 0 0 0-2.828L19.414 3a2 2 0 0 0-2.828 0L15 4.586 19.414 9 21 7.414z"></path>
                            </svg>
                        </div>
                        <span class="opacity-60">articles de FAQ</span>
                    </div>
                </div>
            </div>

            <!-- Suivi message -->
            <div class="flex flex-col bg-neutral-900 rounded-lg w-full">
                <span class="p-4 pb-2 opacity-60 tracking-wide text-sm">Suivi des messages</span>
                <ul class="list">
                    <li class="list-row">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 0, 0);">
                                <path d="M3 4v12c0 1.103.897 2 2 2h3.5l3.5 4 3.5-4H19c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2zm8 1h2v6h-2V5zm0 8h2v2h-2v-2z"></path>
                            </svg>
                        </div>
                        <div class="font-semibold text-md">2 messages non lus</div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                <path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path>
                            </svg>
                        </div>
                    </li>
                    <li class="list-row">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 165, 0);">
                                <path d="M20 2H4c-1.103 0-2 .894-2 1.992v12.016C2 17.106 2.897 18 4 18h3v4l6.351-4H20c1.103 0 2-.894 2-1.992V3.992A1.998 1.998 0 0 0 20 2z"></path>
                            </svg>
                        </div>
                        <div class="font-semibold text-md">1 messages en attente</div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                <path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path>
                            </svg>
                        </div>
                    </li>
                    <li class="list-row">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(60, 179, 113);">
                                <path d="M3 4v12c0 1.103.897 2 2 2h3.5l3.5 4 3.5-4H19c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2zm5.707 4.293L11 10.586l4.793-4.793 1.414 1.414L11 13.414 7.293 9.707l1.414-1.414z"></path>
                            </svg>
                        </div>
                        <div class="font-semibold text-md">23 messages traités</div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                <path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path>
                            </svg>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
        <div class="flex flex-col md:flex-row w-full min-h-[15%] gap-4">
            <a href="/admin/portfolio/add" class="flex flex-col gap-2 w-full md:w-[50%] items-center justify-center !bg-neutral-200 hover:!bg-neutral-300 text-neutral-800 rounded-lg font-semibold cursor-pointer shadow-md py-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(50, 50, 50, 1);">
                    <path d="M20 5h-9.586L8.707 3.293A.997.997 0 0 0 8 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zm-4 9h-3v3h-2v-3H8v-2h3V9h2v3h3v2z"></path>
                </svg>
                Ajouter un projet
            </a>
            <a href="/admin/faq/add" class="flex flex-col gap-2 w-full md:w-[50%] items-center justify-center !bg-neutral-200 hover:!bg-neutral-300 text-neutral-800 rounded-lg font-semibold cursor-pointer shadow-md py-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(50, 50, 50, 1);">
                    <path d="m16 2.012 3 3L16.713 7.3l-3-3zM4 14v3h3l8.299-8.287-3-3zm0 6h16v2H4z"></path>
                </svg>
                Ajouter un article
            </a>
        </div>

        <!-- Derniers messages -->
        <div class="h-full w-full bg-neutral-900 rounded-lg shadow-md">

            <ul class="list h-full">
                <li class="p-4 pb-2 opacity-60 tracking-wide">Derniers messages reçus</li>

                <li class="list-row">
                    <div class="text-4xl font-thin opacity-30 tabular-nums">26</div>
                    <div class="list-col-grow">
                        <div>Thierry Henry</div>
                        <div class="text-xs uppercase font-semibold opacity-60">Devis maison dans le 27</div>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 165, 0);">
                            <path d="M20 2H4c-1.103 0-2 .894-2 1.992v12.016C2 17.106 2.897 18 4 18h3v4l6.351-4H20c1.103 0 2-.894 2-1.992V3.992A1.998 1.998 0 0 0 20 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                            <path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path>
                        </svg>
                    </div>
                </li>
                <li class="list-row">
                    <div class="text-4xl font-thin opacity-30 tabular-nums">25</div>
                    <div class="list-col-grow">
                        <div>Dennis Bergkamp</div>
                        <div class="text-xs uppercase font-semibold opacity-60">Demande de stage</div>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(60, 179, 113);">
                            <path d="M3 4v12c0 1.103.897 2 2 2h3.5l3.5 4 3.5-4H19c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2zm5.707 4.293L11 10.586l4.793-4.793 1.414 1.414L11 13.414 7.293 9.707l1.414-1.414z"></path>
                        </svg>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                            <path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path>
                        </svg>
                    </div>
                </li>
                <li class="list-row">
                    <div class="text-4xl font-thin opacity-30 tabular-nums">24</div>
                    <div class="list-col-grow">
                        <div>Robert Pirès</div>
                        <div class="text-xs uppercase font-semibold opacity-60">Concept 3D Cuisine</div>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 0, 0);">
                            <path d="M3 4v12c0 1.103.897 2 2 2h3.5l3.5 4 3.5-4H19c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2zm8 1h2v6h-2V5zm0 8h2v2h-2v-2z"></path>
                        </svg>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                            <path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path>
                        </svg>
                    </div>
                </li>

            </ul>

        </div>

    </section>


</main>


<?php include_once "../../templates/end.php" ?>