<script setup>
import {ref} from 'vue'
import {Dialog, DialogPanel} from '@headlessui/vue'
import {Bars3Icon, XMarkIcon} from '@heroicons/vue/24/outline'
import {useColorMode} from "@vueuse/core";
import {Button} from '@/components/ui/button'
import {Icon} from "@iconify/vue";
import { Link } from '@inertiajs/vue3'

const navigation = [
    {name: 'Jobs', href: '#'},
    {name: 'Features', href: '#'},
]

const mobileMenuOpen = ref(false)

const mode = useColorMode()
</script>

<template>
    <div class="">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <Link href="/" class="flex lg:flex-1 text-2xl font-bold text-gradient-to-tr from-yellow-400 to-red-600">
                    <h1 class="text-primary sm:text-xl text-2xl lg:text-3xl font-semibold">
                        Job<span class="text-foreground">Refinery</span>
                    </h1>
                </Link>
                <div class="flex lg:hidden">
                    <button type="button"
                            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-stone-700 dark:text-stone-100"
                            @click="mobileMenuOpen = true">
                        <span class="sr-only">Open main menu</span>
                        <Bars3Icon class="h-6 w-6" aria-hidden="true"/>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a v-for="item in navigation" :key="item.name" :href="item.href"
                       class="text-sm font-semibold leading-6 text-popover-foreground">{{ item.name }}</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <Button variant="outline" class="mr-8" @click="mode = mode === 'dark' ? 'light' : 'dark'">
                        <Icon icon="radix-icons:moon"
                              class="h-[1.2rem] w-[1.2rem] rotate-0 scale-100 transition-all dark:-rotate-90 dark:scale-0"/>
                        <Icon icon="radix-icons:sun"
                              class="absolute h-[1.2rem] w-[1.2rem] rotate-90 scale-0 transition-all dark:rotate-0 dark:scale-100"/>
                        <span class="sr-only">Toggle theme</span>
                    </Button>
                    <a href="#"
                       class="flex items-center justify-center text-sm font-semibold text-popover-foreground">
                        Sign in <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </nav>
            <Dialog class="lg:hidden" @close="mobileMenuOpen = false" :open="mobileMenuOpen">
                <div class="fixed inset-0 z-50"/>
                <DialogPanel
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white dark:bg-stone-950 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex justify-end">
                        <Button variant="outline" class="mr-8" @click="mode = mode === 'dark' ? 'light' : 'dark'">
                            <Icon icon="radix-icons:moon"
                                  class="h-[1.2rem] w-[1.2rem] rotate-0 scale-100 transition-all dark:-rotate-90 dark:scale-0"/>
                            <Icon icon="radix-icons:sun"
                                  class="absolute h-[1.2rem] w-[1.2rem] rotate-90 scale-0 transition-all dark:rotate-0 dark:scale-100"/>
                            <span class="sr-only">Toggle theme</span>
                        </Button>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-stone-700 dark:text-stone-100"
                                @click="mobileMenuOpen = false">
                            <span class="sr-only">Close menu</span>
                            <XMarkIcon class="h-6 w-6" aria-hidden="true"/>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a v-for="item in navigation" :key="item.name" :href="item.href"
                                   class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-stone-900 hover:bg-stone-50 dark:text-stone-100 dark:hover:bg-stone-950">{{
                                        item.name
                                    }}</a>
                            </div>
                            <div class="py-6">
                                <a href="#"
                                   class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-stone-900 hover:bg-stone-50 dark:text-stone-100 dark:hover:bg-stone-950">
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

