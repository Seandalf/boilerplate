<template>
  <div>
    <Head title="Log in" />

    <input type="text" v-model="form.email">
  </div>
</template>

<script>
import { defineComponent } from 'vue'
import { Head, Link } from '@inertiajs/inertia-vue3'

export default defineComponent({
  components: {
    Head,
    Link
  },

  props: {
    canResetPassword: Boolean,
    status: String
  },

  data () {
    return {
      form: this.$inertia.form({
        email: '',
        password: '',
        remember: false
      })
    }
  },

  methods: {
    submit () {
      this.form
        .transform(data => ({
          ...data,
          remember: this.form.remember ? 'on' : ''
        }))
        .post(this.route('login'), {
          onFinish: () => this.form.reset('password')
        })
    }
  }
})
</script>
