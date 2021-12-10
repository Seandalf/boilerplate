<template>
    <Head title="Register" />

    <input type="text" v-model="form.email">
    <input type="text" v-model="form.name">
    <input type="password" v-model="form.password">
    <input type="password" v-model="form.password_confirmation">
    <button @click="submit">
      Register
    </button>
</template>

<script>
import { defineComponent } from 'vue'
import { Head, Link } from '@inertiajs/inertia-vue3'

export default defineComponent({
  components: {
    Head,
    Link
  },

  data () {
    return {
      form: this.$inertia.form({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
        terms: false
      })
    }
  },

  methods: {
    submit () {
      this.form.post(this.route('register'), {
        onFinish: () => this.form.reset('password', 'password_confirmation')
      })
    }
  }
})
</script>
