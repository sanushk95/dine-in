<template>
    <div class="container">
        <div class="card users-card bg-dark mb-3">
            <div class="card-header text-white"><h3>Users</h3></div>
            <div class="card-body">
                <List />

            </div>
        </div>
    </div>
</template>

<script>
import List from './users/List';

export default {
    name: "admin-users",
    components: {List},
    mounted() {
        axios.get(`/api/users`)
            .then((res) => {
                    this.$store.commit("retrieveUsers", res.data.users);
            })
            .catch((err) => {
                throw err;
            });
    }
}
</script>

<style lang="scss" scoped>
    .users-card {
        position: relative;
        top: 180px;
    }
</style>