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
    <div class="flex flex-col w-full h-full bg-white overflow-hidden py-8">
        
        <div class="flex flex-row  h-full w-full lg:flex-row items-center px-8 justify-between">

            <div class="flex flex-col w-full 2xl:h-full lg:w-1/2  justify-center space-y-6 text-center lg:text-left">
                <h1 class=" text-5xl md:text-5xl font-bold text-neutral-800">CACTUS<br />ANALYTICS</h1>
                <h2 class="text-2xl font-light leading-snug">Maximizando resultados<br />através da inovação</h2>
                <p class="text-lg md:text-xl text-neutral-600">
                    A Cactus é um projeto que almeja construir uma AI
                    robusta e versátil para atender as demandas
                    estratégicas do mercado. Desenvolver provisões,
                    identificar tendências, planejar estratégias para épocas
                    sazonais, são alguns exemplos de métricas que serão
                    apontadas pela Cactus.
                </p>
                <div>
                    <button
                        class="bg-black text-white font-medium px-6 py-2 rounded-lg hover:bg-neutral-800 transition w-full lg:w-auto">
                        Saiba mais
                    </button>
                </div>

            </div>

            <div class="hidden w-full lg:w-1/2 lg:flex items-center justify-center lg:pl-30">
                <img src="../../assets/images/TELAS.png" alt="Dashboard" class="w-full h-full object-contain" />
            </div>

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