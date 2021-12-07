<template>
    <Head title="Register" />
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
