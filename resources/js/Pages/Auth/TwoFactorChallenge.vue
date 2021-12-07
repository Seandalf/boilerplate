<template>
    <Head title="Two-factor Confirmation" />
</template>

<script>
import { defineComponent } from 'vue'
import { Head } from '@inertiajs/inertia-vue3'

export default defineComponent({
  components: {
    Head,
  },

  data () {
    return {
      recovery: false,
      form: this.$inertia.form({
        code: '',
        recovery_code: ''
      })
    }
  },

  methods: {
    toggleRecovery () {
      this.recovery ^= true

      this.$nextTick(() => {
        if (this.recovery) {
          this.$refs.recovery_code.focus()
          this.form.code = ''
        } else {
          this.$refs.code.focus()
          this.form.recovery_code = ''
        }
      })
    },

    submit () {
      this.form.post(this.route('two-factor.login'))
    }
  }
})
</script>
