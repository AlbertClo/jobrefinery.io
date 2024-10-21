<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import AdminLayout from '@/Layouts/AdminLayout.vue';

type RawJob = {
	id: string;
	original_description_html: string;
	post_date: Date;
	answers: string;
	created_at: string;
	updated_at: string;
};

const props = defineProps<{ rawJobs: RawJob[]; count: number }>();
</script>

<template>
	<Head title="Dashboard" />

	<AdminLayout>
		<template #default>
			<h2 class="text-xl font-semibold leading-tight text-popover-foreground">Job List</h2>
			<div class="flex w-full flex-row justify-center">
				<div class="flex w-256 flex-col gap-4 p-4">
					<div class="flex flex-col gap-4 rounded-lg bg-muted p-8 py-4">
						<div class="text-lg leading-tight text-popover-foreground">
							Count: <span class="font-bold"> {{ props.count }}</span>
						</div>
					</div>
					<div
						v-for="rawJob in props.rawJobs"
						:key="rawJob.id"
						class="flex flex-col gap-4 rounded-lg bg-muted p-8"
					>
						<div class="text-lg font-semibold leading-tight text-popover-foreground">
							{{ rawJob.id }}
						</div>
						<div class="justify- text-base text-foreground" v-html="rawJob.original_description_html"></div>
						<div class="grid grid-cols-2 gap-4 text-foreground text-yellow-100">
							<template v-for="answer in JSON.parse(rawJob.answers)">
								<div class="text-base text-popover-foreground">
									{{ answer.question }}
								</div>
								<div class="text-base text-accent-foreground">
									{{ answer.answer }}
								</div>
							</template>
						</div>
					</div>
				</div>
			</div>
		</template>
	</AdminLayout>
</template>
