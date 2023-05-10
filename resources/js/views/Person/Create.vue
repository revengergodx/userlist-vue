<template>
    <div class="w-25">
        <div class="mb-3">
            <input type="text" v-model="name" class="form-control" placeholder="Ім'я">
        </div>
        <div class="mb-3">
            <input type="number" v-model="age" class="form-control" placeholder="Вік">
        </div>
        <div class="mb-3">
            <input type="text" v-model="job" class="form-control" placeholder="Робота">
        </div>
        <div>
            <input @click.prevent="store" type="submit" value="Відправити" class="btn btn-primary">
        </div>
    </div>
</template>

<script>
import router from "../../router";

export default {
    name: "PostComponent",

    data() {
        return {
            name: null,
            age: null,
            job: null,
        }
    },

    methods: {
        store() {
            axios.post('/api/people' , { name: this.name, age: this.age, job: this.job })
                .then(res => {
                    router.push({ name: 'person.index'})
                })
        }
    },
}

</script>

<style scoped>

</style>
