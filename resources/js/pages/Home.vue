<script>
import NavBar from '../components/NavBar.vue';

export default {
    name: 'Home',
    components: {
        NavBar,
    },
};
</script>

<template>
    <NavBar />
    <div class="w-full bg-white py-20">
        <div class="max-w-screen-xl mx-auto flex flex-col lg:flex-row items-center px-8">
            <div class="w-full lg:w-1/2 space-y-6">
                <h1 class="text-5xl font-black">CACTUS<br />ANALYTICS</h1>
                <h2 class="text-2xl font-light leading-snug">Maximizando resultados<br />através da inovação</h2>
                <p class="text-gray-800 leading-relaxed">
                    A Cactus é um projeto que almeja construir uma AI
                    robusta e versátil para atender as demandas
                    estratégicas do mercado. Desenvolver provisões,
                    identificar tendências, planejar estratégias para épocas
                    sazonais, são alguns exemplos de métricas que serão
                    apontadas pela Cactus.
                </p>
                <button class="bg-black text-white font-medium px-6 py-2 rounded-lg hover:bg-neutral-800 transition">
                    Saiba mais
                </button>
            </div>
        </div>

        <!-- Coluna da imagem -->
        <div class="w-full lg:w-1/2 mt-12 lg:mt-0 flex justify-center">
            <img src="../../assets/images/TELAS.png" alt="Gráfico de crescimento" class="w-full max-w-[600px] object-contain"/>
        </div>

    </div>


</template>

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&family=Open+Sans:wght@300;400;500;600&display=swap');

* {
    padding: 0;
    margin: 0;
    box-sizing: 0;
    font-family: 'Inter', sans-serif;
}

body {
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
}
</style>