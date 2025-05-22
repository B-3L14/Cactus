<script>

export default {
    name: 'NavBar',
    data() {
        return {
            isOpen: false
        };
    }
};
</script>

<template>
    <nav class="w-full bg-neutral-800 h-16">
        <div class=" mx-auto px-4 sm:px-6 lg:px-8 h-full">
            <div class="flex items-center justify-between h-full">

                <router-link to="/" class="flex items-center">
                    <img src="../../assets/images/logo-cacto-branco.png" alt="Logo" class="w-10 h-10 cursor-pointer">
                </router-link>


                <div class="hidden lg:flex list-none items-center space-x-40 text-gray-300">
                    <router-link to="/plans" class="hover:underline">Planos</router-link>
                    <router-link to="/simulations" class="hover:underline">Simulações</router-link>
                    <router-link to="/products" class="hover:underline">Produtos</router-link>
                    <router-link to="/resources" class="hover:underline">Recursos</router-link>
                    <router-link to="/aboutus" class="hover:underline">Nós</router-link>
                </div>

                <!-- Botão desktop -->
                <div class="hidden lg:flex items-center space-x-4">
                    <button class=" font-bold hover:bg-gray-400 text-white p-2 rounded-lg" type="submit">Entrar</button>
                    <button class=" bg-slate-50 text-stone-800 p-2 rounded-lg" type="submit">Cadastre-se</button>
                </div>

                <!-- Botão Mobile -->
                <div class="lg:hidden">
                    <button @click="isOpen = true" class="text-white focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

                <!-- Nav Mobile -->
                
                <div v-if="isOpen"
                    class="fixed inset-0 bg-neutral-900 text-gray-100 z-50 flex flex-col items-center justify-center space-y-6 px-4 transition-all duration-300">

                    <button @click="isOpen = false" class="absolute top-6 right-6 text-white text-3xl">
                        &times;
                    </button>

                    <router-link to="/plans" class="hover:underline">Planos</router-link>
                    <router-link to="/simulations" class="hover:underline">Simulações</router-link>
                    <router-link to="/products" class="hover:underline">Produtos</router-link>
                    <router-link to="/resources" class="hover:underline">Recursos</router-link>
                    <router-link to="/aboutus" class="hover:underline">Nós</router-link>

                    <div class="pt-8 flex flex-col space-y-4 w-full px-4">
                        <button class="w-full text-center font-bold hover:bg-gray-700 text-white p-2 rounded-lg"
                            @click="isOpen = false">Entrar</button>
                        <button class="w-full text-center bg-slate-50 text-stone-800 p-2 rounded-lg"
                            @click="isOpen = false">Cadastre-se</button>
                    </div>
                </div>

            </div>
        </div>
    </nav>
</template>
