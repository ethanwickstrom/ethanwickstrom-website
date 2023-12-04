<template>
    <Link :href="link" as="a"
        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
        <div>
            <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                <font-awesome-icon :icon="['fas', icon]"
                    class="self-center shrink-0 stroke-red-500 w-7 h-7 text-red-500 fill-current" />
            </div>

            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                {{ title }}
            </h2>

            <slot></slot>
        </div>

        <font-awesome-icon :icon="['fas', 'arrow-right']"
            class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6 text-red-500 fill-current" />
    </Link>
</template>

<script setup lang="ts">
import { defineProps } from 'vue'
import { Link } from '@inertiajs/vue3'

defineProps<{
	title: string
	icon: string
	link: string
}>()
</script>

<style scoped></style>
