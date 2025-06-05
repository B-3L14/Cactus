<script>
import NavBar from '../components/NavBar.vue';

export default {
  name: 'Resources',
  components: {
    NavBar,
  },
};
</script>

<template>
  <NavBar />
  <div class="px-8 py-6">
    <h1 class="text-4xl font-bold mb-6">Central de Recursos</h1>
    <p class="text-lg mb-8 text-gray-600 max-w-3xl">
      Seção de apoio com materiais educativos e ferramentas complementares para ajudar o lojista a entender melhor os dados e aproveitar a plataforma ao máximo.
    </p>

    <div class="flex gap-10">
      <!-- CATEGORIAS -->
      <aside class="w-1/5">
        <h2 class="text-lg font-semibold mb-3">Categorias</h2>
        <ul class="space-y-2">
          <li><button class="px-4 py-2 bg-purple-100 text-purple-700 rounded-full w-full text-left">Todos</button></li>
          <li><button class="px-4 py-2 hover:bg-purple-50 rounded-full w-full text-left">Tutoriais</button></li>
          <li><button class="px-4 py-2 hover:bg-purple-50 rounded-full w-full text-left">Gráficos</button></li>
          <li><button class="px-4 py-2 hover:bg-purple-50 rounded-full w-full text-left">Dicas</button></li>
        </ul>
      </aside>

      <!-- CONTEÚDO -->
      <main class="w-4/5 grid grid-cols-2 gap-6">

        <div class="bg-white rounded-xl shadow-md p-5 hover:shadow-lg transition">
          <img src="../../assets/images/tutorial.png" alt="Tutoriais" class="w-20 mb-4">
          <h3 class="text-xl font-bold mb-2">Tutoriais CSV</h3>
          <p class="text-gray-600 mb-2">Aprenda como importar arquivos CSV para visualizar os dados corretamente na plataforma.</p>
          <a href="#" class="text-purple-600 font-semibold">Ver tutorial →</a>
        </div>

        <div class="bg-white rounded-xl shadow-md p-5 hover:shadow-lg transition">
          <img src="../../assets/images/graphs.png" alt="Gráficos" class="w-20 mb-4">
          <h3 class="text-xl font-bold mb-2">Leitura de Gráficos</h3>
          <p class="text-gray-600 mb-2">Entenda como interpretar gráficos de vendas, performance e engajamento de clientes.</p>
          <a href="#" class="text-purple-600 font-semibold">Ver explicação →</a>
        </div>

        <div class="bg-white rounded-xl shadow-md p-5 hover:shadow-lg transition">
          <img src="../../assets/images/dicas.png" alt="Dicas" class="w-20 mb-4">
          <h3 class="text-xl font-bold mb-2">Dicas de Estratégia</h3>
          <p class="text-gray-600 mb-2">Aproveite recomendações baseadas em dados para melhorar suas campanhas e decisões.</p>
          <a href="#" class="text-purple-600 font-semibold">Ler dicas →</a>
        </div>
      </main>
    </div>
  </div>
</template>