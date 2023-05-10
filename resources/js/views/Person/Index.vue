<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Ім'я</th>
                <th scope="col">Вік</th>
                <th scope="col">Робота</th>
                <th scope="col">Редагування</th>
                <th scope="col">Видалення</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="person in people">
                <td>
                    <router-link :to="{name: 'person.show', params: {id: person.id}}">{{ person.name }}</router-link>
                </td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
                <td>
                    <router-link :to="{name: 'person.edit', params: {id: person.id}}">Редагувати</router-link>
                </td>
                <td><a @click="deletePerson(person.id)" href="#" class="btn btn-danger">Видалити</a></td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>

export default {
    name: "Index",

    data() {
        return {
            people: null
        }
    },

    mounted() {
      this.getPeople()
    },

    methods: {
        getPeople() {
          axios.get('/api/people')
              .then(res => {
                  this.people = res.data
              })
        },

        deletePerson(id) {
            axios.delete('/api/people/' + id)
                .then(res => {
                    this.getPeople()
                })
        },
    },
}

</script>

<style scoped>

</style>
