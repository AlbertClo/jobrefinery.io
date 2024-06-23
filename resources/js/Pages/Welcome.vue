<script setup>
import { Link } from '@inertiajs/vue3'
import {useColorMode} from "@vueuse/core";
import {Button} from '@/components/ui/button'
import GuestLayout from "@/Layouts/GuestLayout.vue";

const mode = useColorMode()
</script>

<template>
    <GuestLayout>
        <div class="">
            <div class="relative isolate px-6 pt-14 lg:px-8">
                <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                    <div class="text-center">
                        <h1 class="text-4xl font-bold tracking-tight text-stone-600 dark:text-stone-200 sm:text-6xl">
                            Your unfair advantage when job hunting
                        </h1>
                        <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-stone-300">
                            Find more jobs. Submit more, higher quality job applications. Land a better job.
                        </p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <Link :href="route('register')">
                                <Button variant="default">
                                    Sign up
                                </Button>
                            </Link>
                            <Link :href="route('login')" class="text-sm font-semibold leading-6 text-stone-700 dark:text-stone-200">
                                Sign in
                            </Link>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </GuestLayout>
</template>


