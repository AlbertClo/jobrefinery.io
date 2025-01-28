<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Button } from '@/components/shadcn/button';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { defineProps } from 'vue';

type RefinedJobType = {
	id: number;
	heading: string;
	description: string;
	company: string;
	location: string;
	post_date: string;
	url: string;
};

const props = defineProps<{
	job: RefinedJobType;
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
			<div class="-m-[10rem] flex w-[50rem] flex-col gap-8 rounded-md bg-foreground p-8 text-background">
				<h1 class="text-3xl font-bold">{{ job.heading }}</h1>
				<p>{{ job.description }}</p>
			</div>
		</div>
	</GuestLayout>
</template>
