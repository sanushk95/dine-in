<template>
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <router-link class="navbar-brand" :to="'/'"><img src="/images/logo.png" alt="logo"></router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                        <template v-if="!currentUser">
                            <li>
                                <router-link to="/login" class="nav-link">Login</router-link>
                            </li>
                            <li>
                                <router-link to="/register" class="nav-link">Register</router-link>
                            </li>
                            <li>
                                <router-link to="/cart" class="nav-link">Cart (<span>{{totalCartItems}}</span>)</router-link>
                            </li>
                        </template>
                        <template v-else>
                            <li>
                                <router-link to="/gallery" class="nav-link">Gallery</router-link>
                            </li>
                            <li v-if="currentUser.role!=='admin'">
                                <router-link to="/cart" class="nav-link">Cart (<span>{{totalCartItems}}</span>)</router-link>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                    {{ currentUser.name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                    <a href="#" @click.prevent="logout" class="dropdown-item">Logout</a>
                                </div>
                            </li>
                        </template>
                        <template v-if="currentUser && currentUser.role === 'admin'">
                            <li class="nav-item active">
                                <router-link to="/admin/users" class="nav-link">Users</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/admin/dishes/add" class="nav-link">Add Dish</router-link>
                            </li>
                        </template>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "Header",
    methods: {
        logout() {
            this.$store.commit("logout");
            this.$router.push("/login");
        }
    },
    computed: {
        currentUser() {
            return this.$store.getters.currentUser;
        },
        totalCartItems() {
            return this.$store.getters.getCartItemsTotal;
        }
    }
}
</script>

<style lang="scss" scoped>
    nav {
        position: fixed;
        margin-top: 40px;
        z-index: 10;
    }

    .navbar-brand {
        img {
            width: 80px;
        }
    }

    .navbar {
        background-color: rgba(26, 26, 26, 0.6);
        a {
            color: rgb(255, 255, 255) !important;
        }

        .dropdown-menu a:hover {
            background-color: rgba(26, 26, 26, 0.6) !important;
        }
    }
</style>