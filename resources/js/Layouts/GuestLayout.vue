<script setup lang="ts">
import { ref, watch } from "vue";
import { Dialog, DialogPanel } from "@headlessui/vue";
import { Bars3Icon, XMarkIcon } from "@heroicons/vue/24/outline";
import { useCycleList } from "@vueuse/core";
import { Button } from "@/components/shadcn/button";
import { Link } from "@inertiajs/vue3";
import { Icon } from "@iconify/vue";
import ThemeCyclerButton from "@/components/job-refinery/theme-switchers/theme-cycler-button/ThemeCyclerButton.vue";

const navigation = [
    { name: "Jobs", href: "#" },
    { name: "Features", href: "#" },
];

const mobileMenuOpen = ref(false);

// const themes = ['theme-midnight', 'theme-arizona'];
// const {state: selectedTheme, next: selectNextTheme} = useCycleList(themes, {initialValue: themes[0]})
// document.documentElement.classList.add(themes[0]);
// watch(selectedTheme, async (newTheme, oldTheme) => {
//     // remove old theme
//     document.documentElement.classList.remove(oldTheme);
//
//     // add new theme
//     document.documentElement.classList.add(newTheme);
// })
</script>

<template>
    <div class="">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav
                class="flex items-center justify-between p-6 lg:px-8"
                aria-label="Global"
            >
                <Link
                    href="/"
                    class="flex lg:flex-1 text-2xl font-bold text-gradient-to-tr from-yellow-400 to-red-600"
                >
                    <h1
                        class="text-primary sm:text-xl text-2xl lg:text-3xl font-bold"
                    >
                        Job<span class="text-foreground font-serif font-thin"
                            >Refinery</span
                        >
                    </h1>
                </Link>
                <div class="flex lg:hidden">
                    <button
                        type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-stone-700 dark:text-stone-100"
                        @click="mobileMenuOpen = true"
                    >
                        <span class="sr-only">Open main menu</span>
                        <Bars3Icon class="h-6 w-6" aria-hidden="true" />
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a
                        v-for="item in navigation"
                        :key="item.name"
                        :href="item.href"
                        class="text-sm font-semibold leading-6 text-popover-foreground"
                        >{{ item.name }}</a
                    >
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <ThemeCyclerButton variant="outline" class="mr-4" />
                    <a
                        href="#"
                        class="flex items-center justify-center text-sm font-semibold text-popover-foreground"
                    >
                        Sign in <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </nav>
            <Dialog
                class="lg:hidden"
                @close="mobileMenuOpen = false"
                :open="mobileMenuOpen"
            >
                <div class="fixed inset-0 z-50" />
                <DialogPanel
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white dark:bg-stone-950 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
                >
                    <div class="flex justify-end">
                        <button
                            type="button"
                            class="-m-2.5 rounded-md p-2.5 text-stone-700 dark:text-stone-100"
                            @click="mobileMenuOpen = false"
                        >
                            <span class="sr-only">Close menu</span>
                            <XMarkIcon class="h-6 w-6" aria-hidden="true" />
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a
                                    v-for="item in navigation"
                                    :key="item.name"
                                    :href="item.href"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-stone-900 hover:bg-stone-50 dark:text-stone-100 dark:hover:bg-stone-950"
                                    >{{ item.name }}</a
                                >
                            </div>
                            <div class="py-6">
                                <a
                                    href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-stone-900 hover:bg-stone-50 dark:text-stone-100 dark:hover:bg-stone-950"
                                >
                                    Log in
                                </a>
                            </div>
                        </div>
                    </div>
                </DialogPanel>
            </Dialog>
        </header>

        <div class="flex items-center justify-center min-h-screen">
            <slot></slot>
        </div>
    </div>
</template>
