<!-- Container principal com grid de 2 colunas de 50% -->
    <div class="h-screen grid grid-cols-2 p-5">
        <!-- Coluna da esquerda: imagem e descrição -->
        <div class="bg-cover bg-center rounded-xl flex flex-col justify-between p-8 text-white"
            style="background-image: url('./images/Login.png')">
            <div class="bg-[url(./images/Logo.png)] bg-no-repeat w-64 h-64"></div>
            <div>
                <h2 class="text-lg font-bold font-['Rammetto_One'] text-[16px] text-[#B5B6C9]">ab filmes</h2>
                <p class="text-xl font-bold font-['Rammetto_One'] text-[20px] w-100">O guia definitivo para os amantes
                    do cinema</p>
            </div>
        </div>

        <!-- Coluna da direita: formulário -->
        <div class="p-10 text-white flex justify-center">
            <div class="w-97 flex flex-col justify-center">
                <div class="flex justify-center mb-[52px] bg-gray-700/10 rounded-xl p-[4px] gap-2">
                    <button id="btn-login"
                        class="w-full bg-gray-700/10 text-[#A85FDD] font-['Nunito_Sans'] text-[16px] px-4 py-2 rounded-lg cursor-pointer">Login</button>
                    <button id="btn-cadastro"
                        class="w-full text-[#7A7B9F]/50 font-['Nunito_Sans'] text-[16px] px-4 py-2 rounded-lg cursor-pointer">Cadastro</button>
                </div>

                <div class="overflow-hidden w-full">
                    <div id="form-wrapper" class="flex w-[200%] transition-transform">
                        
                        <!-- Formulário Login -->
                        <div class="w-1/2 px-2">
                            <h2 class="font-bold mb-8 text-[#E5E2E9] font-['Rammetto_One'] text-[24px]">Acesse sua conta
                            </h2>
                            <form class="space-y-4">
                                <div class="relative">
                                    <span class="absolute inset-y-0 flex items-center pl-3">
                                        <img src="./images/email.svg" alt="Ícone de Email" class="w-5 h-5 opacity-50">
                                    </span>
                                    <input type="email" placeholder="E-mail"
                                        class="w-full pl-10 p-3 rounded-lg bg-gray-700/0 border border-gray-700/30 text-[#7A7B9F] font-['Nunito_Sans'] text-[16px] focus:outline-none focus:ring-2 focus:ring-[#A85FDD]" />
                                </div>
                                <div class="relative mb-[32px]">
                                    <span class="absolute inset-y-0 flex items-center pl-3">
                                        <img src="./images/senha.svg" alt="Ícone de Senha" class="w-5 h-5 opacity-50">
                                    </span>
                                    <input type="password" placeholder="Senha"
                                        class="w-full pl-10 p-3 rounded-lg bg-gray-700/0 border border-gray-700/30 text-[#7A7B9F] font-['Nunito_Sans'] text-[16px] focus:outline-none focus:ring-2 focus:ring-[#A85FDD]" />
                                </div>

                                <button type="submit" class="w-full py-3 rounded bg-[#892CCD] font-bold cursor-pointer hover:bg-[#A85FDD] hover:shadow-lg hover:shadow-[#892CCD]/20">Entrar</button>
                            </form>
                        </div>

                        <!-- Formulário Cadastro -->
                        <div class="w-1/2 px-2 pb-2">
                            <h2 class="font-bold mb-8 text-[#E5E2E9] font-['Rammetto_One'] text-[24px]">Crie sua conta
                            </h2>
                            <form class="space-y-4">
                                <div class="relative">
                                    <span class="absolute inset-y-0 flex items-center pl-3">
                                        <img src="./images/nome.svg" alt="Ícone de Nome" class="w-5 h-5 opacity-50">
                                    </span>
                                    <input type="text" placeholder="Nome"
                                        class="w-full pl-10 p-3 rounded-lg bg-gray-700/0 border border-gray-700/30 text-[#7A7B9F] font-['Nunito_Sans'] text-[16px] focus:outline-none focus:ring-2 focus:ring-[#A85FDD]" />
                                </div>
                                <div class="relative">
                                    <span class="absolute inset-y-0 flex items-center pl-3">
                                        <img src="./images/email.svg" alt="Ícone de Email" class="w-5 h-5 opacity-50">
                                    </span>
                                    <input type="email" placeholder="E-mail"
                                        class="w-full pl-10 p-3 rounded-lg bg-gray-700/0 border border-gray-700/30 text-[#7A7B9F] font-['Nunito_Sans'] text-[16px] focus:outline-none focus:ring-2 focus:ring-[#A85FDD]" />
                                </div>
                                <div class="relative mb-[32px]">
                                    <span class="absolute inset-y-0 flex items-center pl-3">
                                        <img src="./images/senha.svg" alt="Ícone de Senha" class="w-5 h-5 opacity-50">
                                    </span>
                                    <input type="password" placeholder="Senha"
                                        class="w-full pl-10 p-3 rounded-lg bg-gray-700/0 border border-gray-700/30 text-[#7A7B9F] font-['Nunito_Sans'] text-[16px] focus:outline-none focus:ring-2 focus:ring-[#A85FDD]" />
                                </div>

                                <button type="submit" class="w-full py-3 rounded bg-[#892CCD] font-bold cursor-pointer hover:bg-[#A85FDD] hover:shadow-lg hover:shadow-[#892CCD]/20">Criar</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const btnLogin = document.getElementById("btn-login");
        const btnCadastro = document.getElementById("btn-cadastro");
        const formWrapper = document.getElementById("form-wrapper");

        btnLogin.addEventListener("click", () => {
            formWrapper.style.transform = "translateX(0%)";
            btnLogin.classList.add("bg-gray-700/10", "text-[#A85FDD]");
            btnLogin.classList.remove("text-[#7A7B9F]/50");
            btnCadastro.classList.remove("bg-gray-700/10", "text-[#A85FDD]");
            btnCadastro.classList.add("text-[#7A7B9F]/50");
        });

        btnCadastro.addEventListener("click", () => {
            formWrapper.style.transform = "translateX(-50%)";
            btnCadastro.classList.add("bg-gray-700/10", "text-[#A85FDD]");
            btnCadastro.classList.remove("text-[#7A7B9F]/50");
            btnLogin.classList.remove("bg-gray-700/10", "text-[#A85FDD]");
            btnLogin.classList.add("text-[#7A7B9F]/50");
        });
    </script>