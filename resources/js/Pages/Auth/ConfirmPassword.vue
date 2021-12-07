<template>
    <Head title="Secure Area" />
</template>

<script>
import { defineComponent } from 'vue'
import { Head } from '@inertiajs/inertia-vue3'

export default defineComponent({
  components: {
    Head
  },

  data () {
    return {
      form: this.$inertia.form({
        password: ''
      })
    }
  },

  methods: {
    submit () {
      this.form.post(this.route('password.confirm'), {
        onFinish: () => this.form.reset()
      })
    }
  }
})
</script>
