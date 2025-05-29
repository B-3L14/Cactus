<script>
import axios from "axios";

export default {
    name: "Register",
    data() {
        return {
            name: "",
            email: "",
            password: "",
            password_confirmation: "",
        };
    },
    methods: {
        async handleRegister() {
            try {
                const response = await axios.post(
                    "http://localhost:8000/api/register",
                    {
                        name: this.name,
                        email: this.email,
                        password: this.password,
                        password_confirmation: this.password_confirmation,
                    }
                );
                console.log("Cadastro realizado com sucesso:", response.data);
                alert("Cadastro realizado com sucesso!!");
                this.$router.push("/"); // ou outra rota segura
            } catch (error) {
                if (error.response && error.response.status === 422) {
                    console.error(
                        "Erros de validação:",
                        error.response.data.errors
                    );
                    alert("Erros de validação:");
                } else {
                    console.error("Erro ao registrar:", error);
                    alert("Erro ao registrar:");
                }
            }
        },
    },
};
</script>

<template>
    <div class="min-h-screen flex items-center justify-center bg-white px-4">
        <div class="w-full max-w-md flex flex-col items-center">
            <img
                src="../../assets/images/cacto_logo.png"
                alt="Cacto"
                class="w-14 mb-6"
            />

            <h1 class="text-2xl font-medium text-gray-800 mb-4">Cadastro</h1>

            <form
                @submit.prevent="handleRegister"
                class="w-full flex flex-col gap-4 items-center"
            >
                <input
                    type="text"
                    placeholder="Nome completo"
                    v-model="name"
                    required
                    class="w-full min-w-[360px] p-3 border border-gray-300 rounded-lg text-sm"
                />
                <input
                    type="email"
                    placeholder="E-mail"
                    v-model="email"
                    required
                    class="w-full min-w-[360px] p-3 border border-gray-300 rounded-lg text-sm"
                />
                <input
                    type="password"
                    placeholder="Senha"
                    v-model="password"
                    required
                    class="w-full min-w-[360px] p-3 border border-gray-300 rounded-lg text-sm"
                />
                <input
                    type="password"
                    placeholder="Confirme a senha"
                    v-model="password_confirmation"
                    required
                    class="w-full min-w-[360px] p-3 border border-gray-300 rounded-lg text-sm"
                />
                <button
                    type="submit"
                    class="w-full min-w-[360px] p-3 rounded-lg bg-[#64975d] text-white font-semibold hover:bg-[#4e8055] transition"
                >
                    Cadastrar
                </button>
            </form>
        </div>
    </div>
</template>
