<script>
export default {
    name: "Login",
    data() {
        return {
            email: "",
            password: "",
        };
    },
    methods: {
        async handleLogin() {
            try {
                const response = await axios.post("/login", {
                    email: this.email,
                    password: this.password,
                });

                alert("Login feito com sucesso!");
                localStorage.setItem("token", response.data.access_token);
                this.$router.push("/"); // ou outra rota segura
            } catch (error) {
                console.error(error.response?.data || error);
                alert("Erro ao fazer login");
            }
        },
    },
};
</script>

<template>
    <div class="flex flex-col lg:flex-row h-screen overflow-hidden">
        <!-- Imagem -->
        <div class="lg:flex-1 hidden lg:block">
            <img
                src="../../assets/images/cacto-template.jpg"
                alt="Imagem de fundo"
                class="h-full w-full object-cover grayscale"
            />
        </div>

        <!-- Formulário -->
        <div class="flex-1 flex items-center justify-center p-8">
            <div class="w-full max-w-sm text-center">
                <img
                    src="../../assets/images/cacto_logo.png"
                    alt="Cacto Logo"
                    class="w-12 mx-auto mb-4"
                />
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Entrar</h2>
                <form @submit.prevent="handleLogin">
                    <input
                        type="email"
                        placeholder="E-mail"
                        v-model="email"
                        required
                        class="w-full p-3 border border-gray-300 rounded-lg mb-4 outline-none"
                    />
                    <input
                        type="password"
                        placeholder="Senha"
                        v-model="password"
                        required
                        class="w-full p-3 border border-gray-300 rounded-lg mb-4 outline-none"
                    />
                    <button
                        type="submit"
                        class="btn green w-full p-3 rounded-lg text-white font-semibold bg-green-700 hover:bg-green-800 transition"
                    >
                        Entrar
                    </button>
                </form>
                <hr class="my-6" />
                <router-link 
                    to="/register"
                    class="block w-full p-3 rounded-lg font-semibold bg-black text-white hover:bg-gray-900 transition"
                    @click="isOpen = false">
                    Cadastrar
                </router-link>
                
            </div>
        </div>
    </div>
</template>
