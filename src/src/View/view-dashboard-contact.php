<?php include_once "../../templates/head.php" ?>

<main class="min-h-screen w-screen flex flex-col lg:flex-row">

    <?php include_once "../../templates/navbaradmin.php" ?>

    <!-- Interface -->
    <section class="min-w-[80%] min-h-screen p-4 lg:p-16 flex flex-col gap-4">

        <!-- Barre rechercher -->
        <div class="flex gap-2 lg:gap-4">
            <input type="text" placeholder="Par nom, objet, ou adresse mail" class="input grow" />
            <button class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                    <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path>
                </svg>
                <span class="hidden lg:block">Rechercher</span>
            </button>
        </div>

        <!-- Filtres -->
        <div class="flex flex-col lg:flex-row min-h-[5%] gap-4">
            <button class="flex gap-2 w-full items-center justify-center bg-neutral-200 hover:bg-neutral-300 text-neutral-800 m-4 rounded-lg font-semibold cursor-pointer py-3 lg:py-2">
                Tous les messages
            </button>
            <button class="flex gap-2 w-full items-center justify-center hover:bg-neutral-300 hover:text-neutral-800 m-4 rounded-lg font-semibold cursor-pointer py-3 lg:py-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 0, 0);">
                    <path d="M3 4v12c0 1.103.897 2 2 2h3.5l3.5 4 3.5-4H19c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2zm8 1h2v6h-2V5zm0 8h2v2h-2v-2z"></path>
                </svg>
                2 messages non-lus
            </button>
            <button class="flex gap-2 w-full items-center justify-center hover:bg-neutral-300 hover:text-neutral-800 m-4 rounded-lg font-semibold cursor-pointer py-3 lg:py-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 165, 0);">
                    <path d="M20 2H4c-1.103 0-2 .894-2 1.992v12.016C2 17.106 2.897 18 4 18h3v4l6.351-4H20c1.103 0 2-.894 2-1.992V3.992A1.998 1.998 0 0 0 20 2z"></path>
                </svg>
                1 message en attente
            </button>
            <button class="flex gap-2 w-full items-center justify-center hover:bg-neutral-300 hover:text-neutral-800 m-4 rounded-lg font-semibold cursor-pointer py-3 lg:py-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(60, 179, 113);">
                    <path d="M3 4v12c0 1.103.897 2 2 2h3.5l3.5 4 3.5-4H19c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2zm5.707 4.293L11 10.586l4.793-4.793 1.414 1.414L11 13.414 7.293 9.707l1.414-1.414z"></path>
                </svg>
                23 messages traités
            </button>
        </div>


        <!-- Messages -->
        <div class="join join-vertical bg-neutral-900 rounded-lg shadow-md min-h-[70vh]">

            <div class="collapse collapse-arrow join-item border-neutral-600/40 border">
                <input type="radio" name="my-accordion-4" />
                <div class="collapse-title flex gap-4 items-center justify-between">
                    <div class="flex items-center gap-4">
                        <span class="text-2xl font-light">132</span>
                        <div class="flex flex-col text-sm">
                            <span class="">Claire Dubois</span>
                            <span class="uppercase font-semibold opacity-60">Demande de devis pour extension maison</span>
                        </div>
                    </div>
                    <div class="flex gap-4 ">
                        <span class="text-sm opacity-60 hidden lg:flex">il y a 11 heures</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 0, 0);">
                            <path d="M3 4v12c0 1.103.897 2 2 2h3.5l3.5 4 3.5-4H19c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2zm8 1h2v6h-2V5zm0 8h2v2h-2v-2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="collapse-content text-sm flex flex-col">
                    <span>
                        Bonjour,
                        Nous souhaitons agrandir notre maison avec une extension bois et verre. Pourriez-vous nous proposer un devis ou prendre contact afin d'en discuter ? Merci beaucoup.
                        Claire Dubois
                    </span>
                    <div class="flex flex-col md:flex-row w-full mt-8 gap-4 lg:gap-0">
                        <div class="lg:w-[50%] flex flex-col gap-1">
                            <span class="font-semibold opacity-60 flex lg:hidden">Envoyé il y a 11 heures</span>
                            <span class="font-semibold opacity-60">Adresse e-mail: claire.dubois@gmail.com</span>
                            <span class="font-semibold opacity-60">Numéro de téléphone: 06.28.45.19.73</span>
                        </div>
                        <form action="" class="flex lg:w-[50%] gap-2 flex-col lg:flex-row">
                            <select class="select select-ghost w-full">
                                <option disabled selected>Changer le statut du message</option>
                                <option>Traité</option>
                                <option>En attente</option>
                                <option>Non-lu</option>
                            </select>
                            <button class="btn grow">Modifier le statut</button>
                            <button class="btn grow">Supprimer le message</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="collapse collapse-arrow join-item border-neutral-600/40 border">
                <input type="radio" name="my-accordion-4" />
                <div class="collapse-title flex gap-4 items-center justify-between">
                    <div class="flex items-center gap-4">
                        <span class="text-2xl font-light">131</span>
                        <div class="flex flex-col text-sm">
                            <span class="">Julien Lefèvre</span>
                            <span class="uppercase font-semibold opacity-60">Rénovation d’un appartement ancien</span>
                        </div>
                    </div>
                    <div class="flex gap-4 ">
                        <span class="text-sm opacity-60 hidden lg:flex">il y a 3 jours</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 165, 0);">
                            <path d="M20 2H4c-1.103 0-2 .894-2 1.992v12.016C2 17.106 2.897 18 4 18h3v4l6.351-4H20c1.103 0 2-.894 2-1.992V3.992A1.998 1.998 0 0 0 20 2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="collapse-content text-sm flex flex-col">
                    <span>
                        Bonjour,
                        J’ai récemment acquis un appartement ancien dans le centre-ville du Havre et je cherche un architecte pour m’accompagner dans une rénovation complète. Est-ce que vous travaillez sur ce type de projet ?
                        Bien cordialement,
                        Julien Lefèvre
                    </span>
                    <div class="flex flex-col md:flex-row w-full mt-8 gap-4 lg:gap-0">
                        <div class="lg:w-[50%] flex flex-col gap-1">
                            <span class="font-semibold opacity-60 flex lg:hidden">Envoyé il y a 3 jours</span>
                            <span class="font-semibold opacity-60">Adresse e-mail: jlefevre.pro@gmail.com</span>
                            <span class="font-semibold opacity-60">Numéro de téléphone: 07.62.11.03.89</span>
                        </div>
                        <form action="" class="flex lg:w-[50%] gap-2 flex-col lg:flex-row">
                            <select class="select select-ghost w-full">
                                <option disabled selected>Changer le statut du message</option>
                                <option>Traité</option>
                                <option>En attente</option>
                                <option>Non-lu</option>
                            </select>
                            <button class="btn grow">Modifier le statut</button>
                            <button class="btn grow">Supprimer le message</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="collapse collapse-arrow join-item border-neutral-600/40 border">
                <input type="radio" name="my-accordion-4" />
                <div class="collapse-title flex gap-4 items-center justify-between">
                    <div class="flex items-center gap-4">
                        <span class="text-2xl font-light">130</span>
                        <div class="flex flex-col text-sm">
                            <span class="">Sophie Martin</span>
                            <span class="uppercase font-semibold opacity-60">Informations sur permis de construire</span>
                        </div>
                    </div>
                    <div class="flex gap-4 ">
                        <span class="text-sm opacity-60 hidden lg:flex">il y a 8 jours</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(60, 179, 113);">
                            <path d="M3 4v12c0 1.103.897 2 2 2h3.5l3.5 4 3.5-4H19c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2zm5.707 4.293L11 10.586l4.793-4.793 1.414 1.414L11 13.414 7.293 9.707l1.414-1.414z"></path>
                        </svg>
                    </div>
                </div>
                <div class="collapse-content text-sm flex flex-col">
                    <span>
                        Bonjour,
                        Je suis en phase de réflexion pour une construction neuve sur un terrain en périphérie. Avant d'aller plus loin, j'aimerais comprendre les démarches pour le permis de construire. Est-ce un service que vous proposez ?
                        Merci d'avance
                    </span>
                    <div class="flex flex-col md:flex-row w-full mt-8 gap-4 lg:gap-0">
                        <div class="lg:w-[50%] flex flex-col gap-1">
                            <span class="font-semibold opacity-60 flex lg:hidden">Envoyé il y a 8 jours</span>
                            <span class="font-semibold opacity-60">Adresse e-mail: sophie.martin.archi@gmail.com</span>
                            <span class="font-semibold opacity-60">Numéro de téléphone: 06.97.55.88.22</span>
                        </div>
                        <form action="" class="flex lg:w-[50%] gap-2 flex-col lg:flex-row">
                            <select class="select select-ghost w-full">
                                <option disabled selected>Changer le statut du message</option>
                                <option>Traité</option>
                                <option>En attente</option>
                                <option>Non-lu</option>
                            </select>
                            <button class="btn grow">Modifier le statut</button>
                            <button class="btn grow">Supprimer le message</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div class="flex justify-end self-end">
            <button class="btn btn-sm btn-ghost">Page suivante</button>
        </div>

    </section>

</main>

<?php include_once "../../templates/end.php" ?>