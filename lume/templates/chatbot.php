<section class="fixed z-50 bottom-5 right-5 lg:bottom-10 lg:right-10 flex flex-col gap-4 opacity-0 pointer-events-none transition-opacity duration-500" id="interfaceChatbot">
    <div class="w-96 h-120 bg-zinc-200 rounded-md shadow-md hidden flex-col" data-theme="light" id="chatbot">
        <!-- En-tête -->
        <div class="w-full p-4 bg-zinc-600 rounded-t-md font-semibold flex justify-between items-center text-zinc-100">
            <span>Agent chatbot</span>
            <button id="closeChatbot" class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Messages -->
        <div class="flex-grow overflow-auto p-4">
            <div class="chat chat-start">
                <div class="chat-bubble bg-amber-500">
                    👋 Salut ! Je suis ton assistant virtuel.
                    Tu as des questions, un doute, ou besoin d’un coup de main ?
                    Je suis là pour t’aider à trouver rapidement ce que tu cherches.
                </div>
            </div>
            <div class="chat chat-end">
                <!-- <div class="chat-bubble">You underestimate my power!</div> -->
            </div>
        </div>

        <!-- Input et envoi -->
        <div class="flex justify-between p-4 gap-2">
            <input type="text" placeholder="Tapez votre message ici" class="input input-ghost" />
            <button class="btn">
                Envoyer
            </button>
        </div>
    </div>

    <!-- Bouton d'accès au chatbot -->
    <button class="p-4 !bg-zinc-300 rounded-md shadow-md font-semibold text-zinc-800 self-end cursor-pointer flex items-center gap-4" id="openChatbot">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
        </svg>

        Chatbot
    </button>
</section>