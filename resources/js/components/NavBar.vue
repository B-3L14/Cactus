<script>

export default {
    name: 'NavBar',
};
</script>

<template>
    <nav class="w-full bg-neutral-800 h-16">
        <div class=" mx-auto px-4 sm:px-6 lg:px-8 h-full">
            <div class="flex items-center justify-between h-full">

                <div class="flex items-center">
                    <img src="../../assets/images/cacto.svg" alt="Logo" class=" text-white h-10 w-10  ">
                </div>

                <div class="flex list-none items-center space-x-40 text-gray-300">
                    <a href="#" class="hover:underline">Planos</a>
                    <a href="#" class="hover:underline">Simulações</a>
                    <a href="#" class="hover:underline">Produtos</a>
                    <a href="#" class="hover:underline">Recursos</a>
                    <a href="#" class="hover:underline">Nós</a>
                
                </div>

                <div class="flex items-center space-x-4">
                    <button class=" font-bold hover:bg-gray-400 text-white p-2 rounded-lg" type="submit">Entrar</button>
                    <button class=" bg-slate-50 text-stone-800 p-2 rounded-lg" type="submit">Cadastre-se</button>
                </div>

            </div>
        </div>

    </nav>
</template>
