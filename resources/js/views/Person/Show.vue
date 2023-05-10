<template>
    <div v-if="person">
        <div>
            Ім'я: {{ this.person.name}}
        </div>
        <div>
            Вік: {{ this.person.age}}
        </div>
        <div>
            Робота: {{ this.person.job}}
        </div>
        <router-link :to="{name: 'person.edit', params: {id: person.id}}">Редагувати</router-link>
    </div>
</template>

<script>
export default {
    name: "Show",

    data() {
        return {
            person: null,
        }
    },

    mounted() {
        this.getPerson()
    },

    methods: {
        getPerson () {
            axios.get('/api/people/' + this.$route.params.id)
                .then(res => {
                    this.person = res.data
                })
        },
    }
}

</script>

<style scoped>

</style>
