<script setup>
import { Link } from "@inertiajs/vue3";
import { Button } from "@/components/shadcn/button";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { defineProps } from "vue";

const props = defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    test: String,
});
</script>

<template>
    <GuestLayout>
        <div class="">
            <div class="relative isolate px-6 pt-14 lg:px-8">
                <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                    <div class="text-center">
                        <h1
                            class="text-4xl font-bold tracking-tight text-foreground sm:text-6xl"
                        >
                            Your
                            <span class="font-serif font-light"
                                >unfair advantage</span
                            ><br />
                            in job hunting
                        </h1>
                        <p
                            class="mt-6 text-lg leading-8 text-popover-foreground"
                        >
                            Get a feed of relevant jobs in your inbox, collected
                            from across the web.
                        </p>
                        <div
                            class="mt-10 flex items-center justify-center gap-x-6"
                        >
                            <Link
                                :href="route('register')"
                                class="flex flex-row gap-4"
                            >
                                <Button variant="default"> default</Button>
                                <Button variant="secondary"> secondary</Button>
                                <Button variant="outline"> outline</Button>
                                <Button variant="ghost"> ghost</Button>
                                <Button variant="link"> link</Button>
                                <Button variant="destructive">
                                    destructive
                                </Button>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
