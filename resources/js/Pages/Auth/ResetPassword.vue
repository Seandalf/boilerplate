<template>
    <Head title="Reset Password" />
</template>

<script>
import { defineComponent } from 'vue'
import { Head } from '@inertiajs/inertia-vue3'

export default defineComponent({
  components: {
    Head
  },

  props: {
    email: String,
    token: String
  },

  data () {
    return {
      form: this.$inertia.form({
        token: this.token,
        email: this.email,
        password: '',
        password_confirmation: ''
      })
    }
  },

  methods: {
    submit () {
      this.form.post(this.route('password.update'), {
        onFinish: () => this.form.reset('password', 'password_confirmation')
      })
    }
  }
})
</script>
