<script>
export default {
    name: 'Register',
    // methods: {
    //     handleRegister() {
    //         // Lógica de cadastro a ser implementada depois
    //         console.log('Cadastro enviado!');
    //     }
    // }
}
</script>

<template>
    <div class="min-h-screen flex items-center justify-center bg-white px-4">
        <div class="w-full max-w-md flex flex-col items-center">
            <img src="../../assets/images/cacto_logo.png" alt="Cacto" class="w-14 mb-6" />

            <h1 class="text-2xl font-medium text-gray-800 mb-4">Cadastro</h1>

            <form @submit.prevent="handleRegister" class="w-full flex flex-col gap-4 items-center">
                <input type="text" placeholder="Nome completo" required
                    class="w-full min-w-[360px] p-3 border border-gray-300 rounded-lg text-sm" />
                <input type="email" placeholder="E-mail" required
                    class="w-full min-w-[360px] p-3 border border-gray-300 rounded-lg text-sm" />
                <input type="password" placeholder="Senha" required
                    class="w-full min-w-[360px] p-3 border border-gray-300 rounded-lg text-sm" />
                <input type="password" placeholder="Confirme a senha" required
                    class="w-full min-w-[360px] p-3 border border-gray-300 rounded-lg text-sm" />
                <button type="submit"
                    class="w-full min-w-[360px] p-3 rounded-lg bg-[#64975d] text-white font-semibold hover:bg-[#4e8055] transition">
                    Cadastrar
                </button>
            </form>
        </div>
    </div>
</template>