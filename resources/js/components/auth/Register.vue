<template>
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-register bg-dark text-white my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Create an Account</h5>
            <form class="form-register" @submit.prevent="registerUser">
              <div class="form-label-group error_block" v-if="registerError">
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong> 
                      <ul>
                        <li v-for="err in Object.values(registerError.errors)" :key="err[0]">{{ err[0] }}</li>
                      </ul>
                    </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
              </div>

              <div class="form-label-group">
                <input type="text" id="inputName" name="name" v-model="form.name" class="form-control" placeholder="Your Name" autocomplete="off" required autofocus>
                <label for="inputName">Your Name</label>
              </div>
            
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" v-model="form.email" class="form-control" placeholder="Email address" autocomplete="off" required>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" v-model="form.password" class="form-control" placeholder="Password" autocomplete="off" required>
                <label for="inputPassword">Password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
              <hr class="my-4">
              
            </form>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
import {register} from '../../helpers/auth';

export default {
    name: "register",
    data() {
        return {
            form: {
                name: '',
                email: '',
                password: ''
            },
            error: null
        }
    },
    methods: {
        registerUser() {
            this.$store.dispatch("register");

            register(this.$data.form)
                .then((res) => {
                    this.$store.commit("registerSuccess", res);
                    this.$router.push({path: "/"});
                })
                .catch((error) => {
                    this.$store.commit("registerFailed", {error});
                    setTimeout(() => {
                      this.$store.commit("resetErrors");
                    }, 2000);
                });
        }
    },
    computed: {
        registerError() {
            return this.$store.getters.registerError;
        }
    }
}
</script>

<style lang="scss">

</style>