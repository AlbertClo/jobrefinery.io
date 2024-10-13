<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import AdminLayout from '@/Layouts/AdminLayout.vue';

type Job = {
	id: number;
	cached_page_id: number;
	job_site_id: number;
	heading: string;
	original_url: string;
	direct_link: string;
	post_date: string;
	requires_work_permit: boolean;
	work_permit_country_code: string;
	is_remote: boolean;
	is_hybrid: boolean;
	days_in_office_per_week: number;
	original_description_text: string;
	original_description_html: string;
	llm_summary: string;
	salary_from: string;
	salary_to: string;
	salary_currency: string;
	salary_in_usd_from: string;
	salary_in_usd_to: string;
	timezone_from: string;
	timezone_to: string;
	created_at: string;
	updated_at: string;
};

const props = defineProps<{ jobs: Job[]; count: number }>();
</script>

<template>
	<Head title="Dashboard" />

	<AdminLayout>
		<template #default>
			<h2 class="text-xl font-semibold leading-tight text-popover-foreground">Job List</h2>
			<div class="flex w-full flex-row justify-center">
				<div class="w-256 flex flex-col gap-4 p-4">
					<div class="flex flex-col gap-4 rounded-lg bg-muted p-8 py-4">
						<div class="text-lg leading-tight text-popover-foreground">
							Count: <span class="font-bold"> {{ props.count }}</span>
						</div>
					</div>
					<div v-for="job in props.jobs" :key="job.id" class="flex flex-col gap-4 rounded-lg bg-muted p-8">
						<div class="text-lg font-semibold leading-tight text-popover-foreground">
							{{ job.heading }}
						</div>
						<div class="justify- text-base text-foreground" v-html="job.original_description_html"></div>
					</div>
				</div>
			</div>
		</template>
	</AdminLayout>
</template>
