<template>
    <div id="main">
        <Header/>
        <div class="content">
            <transition name="fade" mode="out-in">
                <router-view/>
            </transition>
        </div>
    </div>
</template>

<script>
    import Header from './Header.vue';
    export default {
        name: 'main-app',
        components: {Header},
        mounted() {
            //Setting persistant cart data.
            if(localStorage.getItem("cart")) {
                //let x = JSON.parse(localStorage.getItem("cart"));
                //console.log(x);
                this.$store.commit("setPersistantCartData", JSON.parse(localStorage.getItem("cart")));
            }
        }
    }
</script>

<style lang="scss">
@import url('https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&display=swap');

html {
    scroll-behavior: smooth;
}

body {
    background-image: url("/images/back4.png");
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh; // vh = viewport height 
    background-attachment: fixed;
    /*background: #114357;  
    background: -webkit-linear-gradient(to left, #F29492, #114357);
    background: linear-gradient(to left, #F29492, #114357);
    background-size: cover;*/
    background-repeat: no-repeat;
    height: 100vh;
    overflow-x: hidden;

    font-family: 'Open Sans', Arial, Helvetica, sans-serif;
    font-size: 16px;
}

h1, h2, h3, h4, h5, h6, .heading {
    font-family: 'Lucida Calligraphy', Georgia, 'Times New Roman', Times, serif;
    font-weight: 900;
}

:root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

.fade-enter-active,
.fade-leave-active {
  transition-duration: 0.2s;
  transition-property: opacity;
  transition-timing-function: ease;
}

.fade-enter,
.fade-leave-active {
  opacity: 0
}
</style>