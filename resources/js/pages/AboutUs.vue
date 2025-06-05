<script>
import NavBar from '../components/NavBar.vue';

export default {
    name: 'AboutUs',
    components: {
        NavBar,
    },
};
</script>

<template>
    <NavBar/>
    <div class="relative w-full h-screen">
      <img
        src="../../assets/images/workspace.jpg"
        alt="Equipe trabalhando"
        class="absolute inset-0 w-full h-full object-cover opacity-60"
      />
  
      <div class="relative z-10 flex flex-col items-center justify-center h-full text-white px-8 text-center bg-black/40">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-6 drop-shadow-lg">
          Nossa jornada com tecnologia e dados
        </h1>
        <p class="text-lg md:text-xl max-w-3xl drop-shadow-md">
          Aqui você conhece quem está por trás do projeto: a equipe, a missão e a visão da empresa. Inclui também informações sobre parcerias, certificações e a tecnologia de IA utilizada para gerar os insights.
        </p>
        <ul class="mt-8 text-left text-base md:text-lg max-w-2xl space-y-3 bg-white/10 p-6 rounded-lg">
          <li><strong>Sobre nós:</strong> nossa missão é tornar a tomada de decisões mais inteligente para pequenos e médios lojistas.</li>
          <li><strong>Equipe:</strong> especialistas em dados, design e negócios unidos por um mesmo propósito.</li>
          <li><strong>Parceiros:</strong> contamos com apoio de hubs de inovação e programas de aceleração.</li>
        </ul>
      </div>
    </div>
  </template>
  

  <style scoped>
  ul li::marker {
    color: #ffffffcc;
  }
  </style>