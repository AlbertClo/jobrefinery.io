<script setup lang="ts">
import { Link, router } from '@inertiajs/vue3';
import { Button } from '@/components/shadcn/button';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { defineProps } from 'vue';
import { Search } from 'lucide-vue-next';

type RefinedJobType = {
	id: number;
	heading: string;
	company: string;
	location: string;
	post_date: string;
	url: string;
};

const props = defineProps<{
	canLogin: boolean;
	canRegister: boolean;
	laravelVersion: string;
	phpVersion: string;
	test: string;
	refinedJobs: RefinedJobType[];
}>();
</script>

<template>
	<GuestLayout>
		<div
			class="flex h-[20rem] w-full flex-col items-center justify-center bg-gradient-to-t from-background to-muted"
		>
			<div class="h-full w-72">
				<div class="relative isolate px-6 pt-14 lg:px-8"></div>
				<!--				<div class="mx-auto max-w-2xl bg-cyan-400 text-center">a</div>-->
			</div>
		</div>
		<div class="flex w-full flex-col items-center justify-center bg-background p-4">
			<div class="z-100 -m-[14em]">
				<div class="mx-auto flex w-[50rem] flex-col gap-4 py-8">
					<Link
						v-for="job in refinedJobs"
						:href="route('jobs.show', job.id)"
						preserve-scroll
						class="w-full rounded bg-foreground p-2 text-background"
					>
						{{ job.heading }}
					</Link>
				</div>
			</div>
		</div>
	</GuestLayout>
</template>
