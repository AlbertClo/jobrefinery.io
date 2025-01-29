<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import AdminLayout from '@/Layouts/AdminLayout.vue';

type RawJob = {
	id: string;
	original_description_html: string;
	post_date: Date;
	questions_and_answers: string;
	created_at: string;
	updated_at: string;
};

const formatAnswer = (answer: string | object | null | undefined): string[] => {
	if (answer === null || answer === undefined) {
		return [];
	}

	if (typeof answer === 'string') {
		return [answer];
	}

	if (typeof answer === 'object') {
		return Object.values(answer);
	}

	return [];
};

const props = defineProps<{ rawJobs: RawJob[]; count: number }>();
</script>

<template>
	<Head title="Dashboard" />

	<AdminLayout>
		<template #default>
			<h2 class="text-xl font-semibold leading-tight text-popover-foreground">Job List</h2>
			<div class="flex w-full flex-row justify-center text-lg">
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
						<div class="text-foreground" v-html="rawJob.original_description_html"></div>
						<div class="flex flex-col gap-4 rounded-lg bg-popover p-6">
							<div v-for="question in JSON.parse(rawJob.questions_and_answers).questions" class="">
								<span class="text-xl font-bold text-popover-foreground">
									{{ Object.keys(question)[0] }}
								</span>
								<div class="mt-8 grid grid-cols-2 gap-20 text-lg text-popover-foreground">
									<div
										v-for="answer in question[Object.keys(question)[0]]"
										class="flex flex-col gap-4 rounded-lg bg-background"
									>
										<div>
											<span class="text-foreground/50 text-sm">Author:</span><br />
											<span class="text-nowrap text-primary">{{ answer.author }}</span>
										</div>

										<div>
											<span class="text-foreground/50 text-sm">Answer:</span><br />
											<ul class="ml-4 list-disc">
												<li v-for="a in formatAnswer(answer.answer)" class="text-nowrap">
													{{ a }}
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</template>
	</AdminLayout>
</template>
