<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Dine In</div>

                    <div class="card-body">
                        <h2>{{ welcome }}</h2>
                        <img src="https://i.pinimg.com/originals/26/2e/f1/262ef1b75308338e177e99abe8359f09.png" alt="Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'home',
        computed: {
            welcome() {
                return this.$store.getters.welcome;
            }
        }
    }
</script>