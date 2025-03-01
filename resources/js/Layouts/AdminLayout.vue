<script setup lang="ts">
import { ref } from 'vue';
import {
	Dialog,
	DialogPanel,
	Menu,
	MenuButton,
	MenuItem,
	MenuItems,
	TransitionChild,
	TransitionRoot,
} from '@headlessui/vue';
import {
	Bars3Icon,
	BellIcon,
	Cog6ToothIcon,
	HomeIcon,
	ChartBarIcon,
	Square3Stack3DIcon,
	XMarkIcon,
} from '@heroicons/vue/24/outline';
import { ChevronDownIcon, MagnifyingGlassIcon } from '@heroicons/vue/20/solid';
import { Link } from '@inertiajs/vue3';
import Logo from '@/components/job-refinery/logos/logo/Logo.vue';
import ThemeCyclerButton from '../components/job-refinery/theme-switchers/theme-cycler-button/ThemeCyclerButton.vue';
import { cn } from '@/lib/utils';

function isCurrentPage(href: string): boolean {
	const currentUrl = window?.location?.href;
	const linkUrl = new URL(href, window?.location?.origin);
	return currentUrl === linkUrl.href;
}

const navigation = [
	{ name: 'Dashboard', href: route('admin.dashboard'), icon: HomeIcon, current: true },
	{ name: 'Jobs List', href: route('admin.jobs.list'), icon: Square3Stack3DIcon, current: true },
	{ name: 'Stats', href: route('admin.stats'), icon: ChartBarIcon },
	// { name: 'Team', href: '#', icon: UsersIcon, current: false },
	// { name: 'Projects', href: '#', icon: FolderIcon, current: false },
	// { name: 'Calendar', href: '#', icon: CalendarIcon, current: false },
	// { name: 'Documents', href: '#', icon: DocumentDuplicateIcon, current: false },
	// { name: 'Reports', href: '#', icon: ChartPieIcon, current: false },
];
const teams = [
	{ id: 1, name: 'Heroicons', href: '#', initial: 'H', current: false },
	{ id: 2, name: 'Tailwind Labs', href: '#', initial: 'T', current: false },
	{ id: 3, name: 'Workcation', href: '#', initial: 'W', current: false },
];
const userNavigation = [
	{ name: 'Your profile', href: '#' },
	{ name: 'Sign out', href: '#' },
];

const sidebarOpen = ref(false);
</script>

<template>
	<div class="text-foreground">
		<TransitionRoot as="template" :show="sidebarOpen">
			<Dialog class="relative z-50 lg:hidden" @close="sidebarOpen = false">
				<TransitionChild
					as="template"
					enter="transition-opacity ease-linear duration-300"
					enter-from="opacity-0"
					enter-to="opacity-100"
					leave="transition-opacity ease-linear duration-300"
					leave-from="opacity-100"
					leave-to="opacity-0"
				>
					<div class="foreground/80 fixed inset-0" />
				</TransitionChild>

				<div class="fixed inset-0 flex">
					<TransitionChild
						as="template"
						enter="transition ease-in-out duration-300 transform"
						enter-from="-translate-x-full"
						enter-to="translate-x-0"
						leave="transition ease-in-out duration-300 transform"
						leave-from="translate-x-0"
						leave-to="-translate-x-full"
					>
						<DialogPanel class="relative mr-16 flex w-full max-w-xs flex-1">
							<TransitionChild
								as="template"
								enter="ease-in-out duration-300"
								enter-from="opacity-0"
								enter-to="opacity-100"
								leave="ease-in-out duration-300"
								leave-from="opacity-100"
								leave-to="opacity-0"
							>
								<div class="absolute left-full top-0 flex w-16 justify-center pt-5">
									<button type="button" class="-m-2.5 p-2.5" @click="sidebarOpen = false">
										<span class="sr-only">Close sidebar</span>
										<XMarkIcon class="h-6 w-6" aria-hidden="true" />
									</button>
								</div>
							</TransitionChild>
							<div
								class="flex grow flex-col gap-y-5 overflow-y-auto bg-foreground px-6 pb-4 ring-1 ring-white/10"
							>
								<div class="flex h-16 shrink-0 items-center">
									<!--									<img-->
									<!--										class="h-8 w-auto"-->
									<!--										src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500"-->
									<!--										alt="Your Company"-->
									<!--									/>-->
								</div>
								<nav class="flex flex-1 flex-col">
									<ul role="list" class="flex flex-1 flex-col gap-y-7">
										<li>
											<ul role="list" class="-mx-2 space-y-1">
												<li v-for="item in navigation" :key="item.name">
													<a
														:href="item.href"
														:class="[
															item.current
																? 'bg-foreground text-background'
																: 'text-card-foreground hover:bg-foreground hover:text-muted',
															'group flex gap-x-3 rounded-md p-2 text-base font-semibold leading-6',
														]"
													>
														<component
															:is="item.icon"
															class="h-6 w-6 shrink-0"
															aria-hidden="true"
														/>
														{{ item.name }}
													</a>
												</li>
											</ul>
										</li>
										<!--										<li>-->
										<!--											<div class="popover-foreground text-sm font-semibold leading-6">-->
										<!--												Your teams-->
										<!--											</div>-->
										<!--											<ul role="list" class="-mx-2 mt-2 space-y-1">-->
										<!--												<li v-for="team in teams" :key="team.name">-->
										<!--													<a-->
										<!--														:href="team.href"-->
										<!--														:class="[-->
										<!--															team.current-->
										<!--																? 'bg-foreground text-background'-->
										<!--																: 'text-muted-foreground hover:bg-foreground hover:text-background',-->
										<!--															'group flex gap-x-3 rounded-md p-2 text-base font-semibold leading-6',-->
										<!--														]"-->
										<!--													>-->
										<!--														<span-->
										<!--															class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-700 bg-foreground text-[0.625rem] font-medium text-muted-foreground group-hover:text-background"-->
										<!--															>{{ team.initial }}</span-->
										<!--														>-->
										<!--														<span class="truncate">{{ team.name }}</span>-->
										<!--													</a>-->
										<!--												</li>-->
										<!--											</ul>-->
										<!--										</li>-->
										<li class="mt-auto">
											<a
												href="#"
												class="group -mx-2 flex gap-x-3 rounded-md p-2 text-base font-semibold leading-6 text-muted-foreground hover:bg-foreground hover:text-background"
											>
												<Cog6ToothIcon class="h-6 w-6 shrink-0" aria-hidden="true" />
												Settings
											</a>
										</li>
									</ul>
								</nav>
							</div>
						</DialogPanel>
					</TransitionChild>
				</div>
			</Dialog>
		</TransitionRoot>

		<!-- Static sidebar for desktop -->
		<div class="hidden border-r border-muted lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
			<div class="flex grow flex-col gap-y-5 overflow-y-auto bg-background px-6 pb-4">
				<div class="flex h-16 shrink-0 items-center">
					<!--					<img-->
					<!--						class="h-8 w-auto"-->
					<!--						src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500"-->
					<!--						alt="Your Company"-->
					<!--					/>-->
					<Link href="/">
						<Logo />
					</Link>
				</div>
				<nav class="flex flex-1 flex-col">
					<ul role="list" class="flex flex-1 flex-col gap-y-7">
						<li>
							<ul role="list" class="-mx-2 space-y-1">
								<li v-for="item in navigation" :key="item.name">
									<Link
										:href="item.href"
										:class="
											cn(
												isCurrentPage(item.href)
													? 'bg-foreground text-primary-foreground'
													: 'text-card-foreground hover:bg-muted-foreground hover:text-background',
												'group flex gap-x-3 rounded-md p-2 text-base font-semibold leading-6'
											)
										"
									>
										<component :is="item.icon" class="h-6 w-6 shrink-0" aria-hidden="true" />
										{{ item.name }}
									</Link>
								</li>
							</ul>
						</li>
						<!--						<li>-->
						<!--							<div class="text-sm font-semibold leading-6 text-card-foreground">Your teams</div>-->
						<!--							<ul role="list" class="-mx-2 mt-2 space-y-1">-->
						<!--								<li v-for="team in teams" :key="team.name">-->
						<!--									<a-->
						<!--										:href="team.href"-->
						<!--										:class="[-->
						<!--											team.current-->
						<!--												? 'bg-foreground text-background'-->
						<!--												: 'text-card-foreground hover:bg-muted-foreground hover:text-foreground',-->
						<!--											'group flex gap-x-3 rounded-md p-2 text-base font-semibold leading-6',-->
						<!--										]"-->
						<!--									>-->
						<!--										<span-->
						<!--											class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-700 bg-foreground text-[0.625rem] font-medium text-muted-foreground group-hover:text-background"-->
						<!--											>{{ team.initial }}</span-->
						<!--										>-->
						<!--										<span class="truncate">{{ team.name }}</span>-->
						<!--									</a>-->
						<!--								</li>-->
						<!--							</ul>-->
						<!--						</li>-->
						<li class="mt-auto">
							<a
								href="#"
								class="group -mx-2 flex gap-x-3 rounded-md p-2 text-base font-semibold leading-6 text-card-foreground hover:bg-foreground hover:text-background"
							>
								<Cog6ToothIcon class="h-6 w-6 shrink-0" aria-hidden="true" />
								Settings
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>

		<div class="lg:pl-72">
			<div
				class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-muted bg-background px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8"
			>
				<button type="button" class="-m-2.5 p-2.5 text-muted-foreground lg:hidden" @click="sidebarOpen = true">
					<span class="sr-only">Open sidebar</span>
					<Bars3Icon class="h-6 w-6" aria-hidden="true" />
				</button>

				<!-- Separator -->
				<div class="bg-card-foreground/10 h-6 w-px lg:hidden" aria-hidden="true" />

				<div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
					<form class="relative flex flex-1" action="#" method="GET">
						<label for="search-field" class="sr-only">Search</label>
						<MagnifyingGlassIcon
							class="pointer-events-none absolute inset-y-0 left-0 h-full w-5 text-card-foreground"
							aria-hidden="true"
						/>
						<input
							id="search-field"
							class="block h-full w-full border-0 bg-background py-0 pl-8 pr-0 text-popover-foreground ring-primary placeholder:text-card-foreground focus:ring-0 sm:text-base"
							placeholder="Search..."
							type="search"
							name="search"
						/>
					</form>
					<div class="flex items-center gap-x-4 lg:gap-x-6">
						<ThemeCyclerButton variant="outline" class="mr-4" />
						<button type="button" class="-m-2.5 p-2.5 text-card-foreground hover:text-gray-500">
							<span class="sr-only">View notifications</span>
							<BellIcon class="h-6 w-6" aria-hidden="true" />
						</button>

						<!-- Separator -->
						<div class="lg:bg-card-foreground/10 hidden lg:block lg:h-6 lg:w-px" aria-hidden="true" />

						<!-- Profile dropdown -->
						<Menu as="div" class="relative">
							<MenuButton class="-m-1.5 flex items-center p-1.5">
								<span class="sr-only">Open user menu</span>
								<!--								<img-->
								<!--									class="h-8 w-8 rounded-full bg-background"-->
								<!--									src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"-->
								<!--									alt=""-->
								<!--								/>-->
								<span class="hidden lg:flex lg:items-center">
									<span
										class="ml-4 text-base font-semibold leading-6 text-card-foreground"
										aria-hidden="true"
									>
										{{ $page.props.auth.user.name }}</span
									>
									<ChevronDownIcon class="ml-2 h-5 w-5 text-card-foreground" aria-hidden="true" />
								</span>
							</MenuButton>
							<transition
								enter-active-class="transition ease-out duration-100"
								enter-from-class="transform opacity-0 scale-95"
								enter-to-class="transform opacity-100 scale-100"
								leave-active-class="transition ease-in duration-75"
								leave-from-class="transform opacity-100 scale-100"
								leave-to-class="transform opacity-0 scale-95"
							>
								<MenuItems
									class="absolute right-0 z-10 mt-2.5 w-32 origin-top-right rounded-md bg-background py-2 shadow-lg ring-1 ring-muted-foreground focus:outline-none"
								>
									<MenuItem v-for="item in userNavigation" :key="item.name" v-slot="{ active }">
										<a
											:href="item.href"
											:class="[
												active ? 'bg-background' : '',
												'block px-3 py-1 text-base leading-6 text-foreground',
											]"
											>{{ item.name }}</a
										>
									</MenuItem>
								</MenuItems>
							</transition>
						</Menu>
					</div>
				</div>
			</div>

			<main class="flex flex-col gap-4 p-4 lg:gap-8 lg:p-8">
				<slot />
			</main>
		</div>
	</div>
</template>
