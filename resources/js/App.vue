<template>
    <div class="m-5">
        <div class="mb-3">
            <router-link :to="{ name: 'person.index'}">Список працівників</router-link> |
            <router-link :to="{ name: 'person.create'}">Створити працівника</router-link>
        </div>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: "App"
}
</script>

<style scoped>

</style>
