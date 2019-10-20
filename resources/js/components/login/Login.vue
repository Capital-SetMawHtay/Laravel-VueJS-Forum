<template>
<v-container>
  <v-form @submit.prevent="login">

    <v-text-field
     label="Email"
     v-model="form.email"
     tupe="email"
     required
    ></v-text-field>

    <v-text-field

      label="Password"
         v-model="form.password"
      type="password"
      required
    ></v-text-field>




    <v-btn

      color="success"
     type="submit"
    >
      Login
    </v-btn>

<router-link to="/signup">
<v-btn flat>Signup</v-btn></router-link>


  </v-form>
  </v-container>
</template>

<script>
export default {
data() {
    return {
        form: {
            email:null,
            password:null
        }
    }
},

methods: {
  login(){
     User.login(this.form)
  }
}
}
</script>

<style>

</style>
