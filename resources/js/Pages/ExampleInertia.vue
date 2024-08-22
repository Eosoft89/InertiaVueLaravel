<template lang="">
    <div>
        <!-- Esta página no serviría si estuviese en la página de componentes (no por vue, si no que por jetstream). Todas las páginas que se van
         Todas las páginas que se van a mostrar a través de Route deben ir en este directorio, y los componentes en el suyo propio.
         Recordar hacer >npm run dev cuando se agregue una nueva página para que javascript la reconozca -->
        <h1>Hello world from Example</h1> 
        <br/>
        <h1>{{ counter }}</h1>
        <button @click="increment">Incrementar</button>
        <br/>
        <NavLink :href="route('login')">Login</NavLink>  <!-- Navegación en Vue, acá se prefiere la de Laravel -->
        
    </div> 
</template>
<script setup>
    import {ref} from 'vue'
    import NavLink from '@/Components/NavLink.vue';

    const counter = ref(0)
    const increment = () => {
        counter.value++
    }
</script>
<style scoped> /* El estyle scoped es para que se aplique solo a este componente*/

</style>