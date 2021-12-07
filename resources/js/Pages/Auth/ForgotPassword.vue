<template>
    <Head title="Forgot Password" />
</template>

<script>
import { defineComponent } from 'vue'
import { Head } from '@inertiajs/inertia-vue3'

export default defineComponent({
  components: {
    Head
  },

  props: {
    status: String
  },

  data () {
    return {
      form: this.$inertia.form({
        email: ''
      })
    }
  },

  methods: {
    submit () {
      this.form.post(this.route('password.email'))
    }
  }
})
</script>
