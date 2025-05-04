<nav class="w-screen lg:w-[20%] items-end lg:flex-shrink-0">
    <!-- Format mobile -->
    <div class="drawer drawer-end lg:hidden flex justify-between p-4">
        <a href="/src/View/view-dashboard.php"><img src="../../img/logosansm.png" class=" w-24 m-1"></a>
        <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
        <div class="flex-none lg:hidden self-end">
            <label for="my-drawer-4" aria-label="open sidebar" class="btn btn-square btn-ghost">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    class="inline-block h-6 w-6 stroke-current">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </label>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
            <div class="menu bg-base-200 text-base-content min-h-full w-80 p-4">

                <a href="/src/View/view-dashboard-contact.php" class="px-4 py-2 flex items-center gap-4 font-semibold cursor-pointer hover:bg-neutral-800 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                        <path d="M4 18h2v4.081L11.101 18H16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2z"></path>
                        <path d="M20 2H8c-1.103 0-2 .897-2 2h12c1.103 0 2 .897 2 2v8c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2z"></path>
                    </svg>
                    Messagerie
                </a>
                <a href="/src/View/view-dashboard-portfolio.php" class="px-4 py-2 flex items-center gap-4 font-semibold cursor-pointer hover:bg-neutral-800 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                        <path d="M2.165 19.551c.186.28.499.449.835.449h15c.4 0 .762-.238.919-.606l3-7A.998.998 0 0 0 21 11h-1V8c0-1.103-.897-2-2-2h-6.655L8.789 4H4c-1.103 0-2 .897-2 2v13h.007a1 1 0 0 0 .158.551zM18 8v3H6c-.4 0-.762.238-.919.606L4 14.129V8h14z"></path>
                    </svg>
                    Portfolio
                </a>
                <a href="/src/View/view-dashboard-faq.php" class="px-4 py-2 flex items-center gap-4 font-semibold cursor-pointer hover:bg-neutral-800 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                        <path d="M21 3h-7a2.98 2.98 0 0 0-2 .78A2.98 2.98 0 0 0 10 3H3a1 1 0 0 0-1 1v15a1 1 0 0 0 1 1h5.758a2.01 2.01 0 0 1 1.414.586l1.121 1.121c.009.009.021.012.03.021.086.08.182.15.294.196h.002a.996.996 0 0 0 .762 0h.002c.112-.046.208-.117.294-.196.009-.009.021-.012.03-.021l1.121-1.121A2.01 2.01 0 0 1 15.242 20H21a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 15h-4.758a4.03 4.03 0 0 0-2.242.689V6c0-.551.448-1 1-1h6v13z"></path>
                    </svg>
                    F.A.Q.
                </a>

                <div class="flex flex-col mt-8 gap-2 justify-center items-center">
                    <a href="" class="btn">Déconnexion</a>
                    <a href="/index.php" class="text-neutral-400 underline">Accès au site</a>
                </div>

            </div>
        </div>
    </div>

    <!-- Format desktop -->
    <aside class="bg-neutral-900/50 hidden lg:flex flex-col h-full p-4 items-center py-12 justify-start">
        <div class="flex flex-col gap-2">
            <a href="/src/View/view-dashboard.php" class="self-center mb-16"><img src="../../img/logosansm.png" alt="" class="w-32"></a>

            <a href="/src/View/view-dashboard-contact.php" class="px-4 py-2 flex items-center gap-4 font-semibold cursor-pointer hover:bg-neutral-800 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                    <path d="M4 18h2v4.081L11.101 18H16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2z"></path>
                    <path d="M20 2H8c-1.103 0-2 .897-2 2h12c1.103 0 2 .897 2 2v8c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2z"></path>
                </svg>
                Messagerie
            </a>
            <a href="/src/View/view-dashboard-portfolio.php" class="px-4 py-2 flex items-center gap-4 font-semibold cursor-pointer hover:bg-neutral-800 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                    <path d="M2.165 19.551c.186.28.499.449.835.449h15c.4 0 .762-.238.919-.606l3-7A.998.998 0 0 0 21 11h-1V8c0-1.103-.897-2-2-2h-6.655L8.789 4H4c-1.103 0-2 .897-2 2v13h.007a1 1 0 0 0 .158.551zM18 8v3H6c-.4 0-.762.238-.919.606L4 14.129V8h14z"></path>
                </svg>
                Portfolio
            </a>
            <a href="/src/View/view-dashboard-faq.php" class="px-4 py-2 flex items-center gap-4 font-semibold cursor-pointer hover:bg-neutral-800 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                    <path d="M21 3h-7a2.98 2.98 0 0 0-2 .78A2.98 2.98 0 0 0 10 3H3a1 1 0 0 0-1 1v15a1 1 0 0 0 1 1h5.758a2.01 2.01 0 0 1 1.414.586l1.121 1.121c.009.009.021.012.03.021.086.08.182.15.294.196h.002a.996.996 0 0 0 .762 0h.002c.112-.046.208-.117.294-.196.009-.009.021-.012.03-.021l1.121-1.121A2.01 2.01 0 0 1 15.242 20H21a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 15h-4.758a4.03 4.03 0 0 0-2.242.689V6c0-.551.448-1 1-1h6v13z"></path>
                </svg>
                F.A.Q.
            </a>
        </div>
        <div class="flex flex-col mt-80 gap-4 justify-center items-center">
            <a href="" class="btn">Déconnexion</a>
            <a href="/index.php" class="text-neutral-400 underline">Accès au site</a>
        </div>
    </aside>
</nav>