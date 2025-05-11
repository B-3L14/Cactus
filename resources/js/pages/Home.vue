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
    <div class="container">
     
        <div>
            <h1>Bem-vindo</h1>
            <p>Essa é a tela inicial.</p>
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