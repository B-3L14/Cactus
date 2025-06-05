<script>
import NavBar from '../components/NavBar.vue';

export default {
    name: 'Plans',
    components: {
        NavBar,
    },
};
</script>

<template>
    <NavBar />
    <section class="px-6 py-12 bg-gray-100 min-h-screen">
      <h1 class="text-4xl font-bold text-center mb-4">Escolha o melhor plano para você</h1>
      <p class="text-center text-gray-700 mb-12">
        Compare os benefícios e escolha a opção que melhor se adapta às suas necessidades de marketing e insights.
      </p>
  
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
        <!-- Plano 1 -->
        <div class="bg-white shadow-md rounded-xl border-t-8 border-green-300">
          <div class="bg-green-100 rounded-t-xl py-4 text-center">
            <h2 class="text-xl font-bold">Mensal</h2>
            <p class="text-lg font-semibold text-gray-700">Cactus Begginers</p>
          </div>
          <ul class="p-6 space-y-3 text-gray-700">
            <li>✔ Relatório mensal com análise dos top 10.</li>
            <li>✔ Sugestão de 3 ações de marketing baseadas nos dados.</li>
            <li>✔ Suporte via e-mail (até 72h).</li>
            <li>✔ Acesso a uma plataforma simples com dashboard.</li>
          </ul>
          <div class="text-center text-2xl font-bold text-green-600 pb-6">
            R$297,90
          </div>
        </div>
  
        <!-- Plano 2 (Mais Popular) -->
        <div class="bg-white shadow-lg rounded-xl border-t-8 border-green-500 relative">
          <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-green-500 text-white text-sm font-bold px-4 py-1 rounded-full shadow-md">
            Mais Popular
          </div>
          <div class="bg-green-200 rounded-t-xl py-4 text-center">
            <h2 class="text-xl font-bold">3 meses</h2>
            <p class="text-lg font-semibold text-gray-800">Cactus PRO</p>
          </div>
          <ul class="p-6 space-y-3 text-gray-700">
            <li>✔ Relatório quinzenal com insights de top 20 produtos e tendências emergentes.</li>
            <li>✔ Sugestão de 5 ações estratégicas.</li>
            <li>✔ Suporte via e-mail e WhatsApp (resposta em até 24h).</li>
            <li>✔ Acesso completo ao dashboard, com filtros personalizados.</li>
          </ul>
          <div class="text-center text-2xl font-bold text-green-700 pb-6">
            R$697,90
          </div>
        </div>
  
        <!-- Plano 3 -->
        <div class="bg-white shadow-md rounded-xl border-t-8 border-green-300">
          <div class="bg-green-100 rounded-t-xl py-4 text-center">
            <h2 class="text-xl font-bold">12 meses</h2>
            <p class="text-lg font-semibold text-gray-700">Cactus Premium</p>
          </div>
          <ul class="p-6 space-y-3 text-gray-700">
            <li>✔ Relatório semanal com insights atualizados e previsão de tendências futuras.</li>
            <li>✔ Consultoria 1:1 mensal (1h por chamada).</li>
            <li>✔ Suporte prioritário (resposta em até 4h).</li>
            <li>✔ Acesso a features exclusivas no dashboard, como alertas automáticos e API de integração.</li>
          </ul>
          <div class="text-center text-2xl font-bold text-green-600 pb-6">
            R$1.497,90
          </div>
        </div>
      </div>
    </section>
  </template>