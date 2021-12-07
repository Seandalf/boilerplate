<template>
    <div>
        <Head :title="title" />

        <jet-banner />

        <div class="min-h-screen bg-gray-100">
            <nav class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="flex-shrink-0 flex items-center">
                                <Link :href="route('dashboard')">
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <Link :href="route('dashboard')" :active="route().current('dashboard')">
                                    Dashboard
                                </Link>
                                <Link @click="logout">
                                    Logout
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <main>
                <slot></slot>
            </main>
        </div>
    </div>
</template>

<script>
import { defineComponent } from 'vue'
import { Head, Link } from '@inertiajs/inertia-vue3'

export default defineComponent({
  props: {
    title: String
  },

  components: {
    Head,
    Link
  },

  data () {
    return {
      showingNavigationDropdown: false
    }
  },

  methods: {
    logout () {
      this.$inertia.post(route('logout'))
    }
  }
})
</script>
