<script setup lang="ts">
import { ref, watch } from 'vue';
import { Dialog, DialogPanel } from '@headlessui/vue';
import { Bars3Icon, XMarkIcon } from '@heroicons/vue/24/outline';
import { Button } from '@/components/shadcn/button';
import { Link, router, usePage } from '@inertiajs/vue3';
import ThemeCyclerButton from '@/components/job-refinery/theme-switchers/theme-cycler-button/ThemeCyclerButton.vue';
import { Search } from 'lucide-vue-next';
import Input from '@/components/shadcn/ui/input/Input.vue';

const navigation = [
	// { name: 'Jobs', href: '#' },
	// { name: 'Features', href: '#' },
];

const mobileMenuOpen = ref(false);

const searchTerm = ref(new URLSearchParams(window.location.search).get('search') || '');

const search = () => {
	router.get(route('home'), { search: searchTerm.value });
};
</script>

<template>
	<div class="">
		<header class="absolute inset-x-0 top-0 z-50">
			<nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
				<Link href="/" class="text-gradient-to-tr flex from-yellow-400 to-red-600 text-2xl font-bold lg:flex-1">
					<h1 class="text-2xl font-bold text-primary sm:text-xl lg:text-3xl">
						Job<span class="font-serif font-thin text-foreground">Refinery</span>
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
					<div class="relative w-[50rem] items-center py-4">
						<Input
							id="search"
							type="text"
							placeholder="Search..."
							v-model="searchTerm"
							class="w-full rounded-full bg-muted-foreground pl-12 text-foreground placeholder:text-foreground focus:outline-none focus-visible:ring-1 focus-visible:ring-card-foreground focus-visible:ring-offset-0"
							@keyup.enter="search"
						/>
						<span class="absolute inset-y-0 left-[0.45rem] start-0 flex items-center justify-center px-2">
							<Search class="mr-12 size-5 text-popover-foreground" />
						</span>
					</div>
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
						:href="route('login')"
						class="flex items-center justify-center text-sm font-semibold text-popover-foreground"
					>
						Sign in <span aria-hidden="true">&rarr;</span>
					</a>
				</div>
			</nav>
			<Dialog class="lg:hidden" @close="mobileMenuOpen = false" :open="mobileMenuOpen">
				<div class="fixed inset-0 z-50" />
				<DialogPanel
					class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10 dark:bg-stone-950"
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

		<div class="flex min-h-screen flex-col items-center justify-start">
			<slot></slot>
		</div>
	</div>
</template>
