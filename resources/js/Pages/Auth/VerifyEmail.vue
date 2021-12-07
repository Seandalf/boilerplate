<template>
    <Head title="Email Verification" />
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
    status: String
  },

  data () {
    return {
      form: this.$inertia.form()
    }
  },

  methods: {
    submit () {
      this.form.post(this.route('verification.send'))
    }
  },

  computed: {
    verificationLinkSent () {
      return this.status === 'verification-link-sent'
    }
  }
})
</script>
