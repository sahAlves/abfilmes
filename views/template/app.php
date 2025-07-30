<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Rammetto+One&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Ab Filmes</title>
</head>

<body class="bg-[#0F0F1A] text-[#E4E5EC]">
    <!-- Container principal com grid de 2 colunas de 50% -->
    <div class="relative h-screen grid grid-cols-2 p-5">
        <!-- Linhas guias no fundo -->
        <div class="absolute inset-0 z-10 grid grid-cols-6 gap-6 px-[88px]">
            <div class="bg-[rgba(255,0,0,0.08)]"></div>
            <div class="bg-[rgba(255,0,0,0.08)]"></div>
            <div class="bg-[rgba(255,0,0,0.08)]"></div>
            <div class="bg-[rgba(255,0,0,0.08)]"></div>
            <div class="bg-[rgba(255,0,0,0.08)]"></div>
            <div class="bg-[rgba(255,0,0,0.08)]"></div>
        </div>

        <!-- Coluna da esquerda: imagem e descrição -->
        <div class="relative z-0 bg-cover bg-center rounded-xl flex flex-col justify-between p-8 text-white"
            style="background-image: url('./images/Login.png')">
            <div class="bg-[url(./images/Logo.png)] bg-no-repeat w-64 h-64"></div>
            <div>
                <h2 class="text-lg font-bold font-['Rammetto_One'] text-[16px] text-[#B5B6C9]">ab filmes</h2>
                <p class="text-xl font-bold font-['Rammetto_One'] text-[20px] w-100">O guia definitivo para os amantes
                    do cinema</p>
            </div>
        </div>

        <!-- Coluna da direita: formulário -->
        <div class="relative z-10 p-10 text-white flex justify-center">
            <div class="w-97 flex flex-col justify-center">
                <div class="flex justify-center mb-[52px] bg-gray-700/10 rounded-xl p-[4px] gap-2">
                    <button
                        class="w-full bg-gray-700/10 text-[#A85FDD] font-['Nunito_Sans'] text-[16px] px-4 py-2 rounded-lg">Login</button>
                    <button
                        class="w-full text-[#7A7B9F]/50 font-['Nunito_Sans'] text-[16px] px-4 py-2 rounded">Cadastro</button>
                </div>
                <h2 class="font-bold mb-8 text-[#E5E2E9] font-['Rammetto_One'] text-[24px]">Acesse sua conta</h2>
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
                    <button type="submit"
                        class="w-full py-3 rounded bg-[#892CCD] font-bold">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>