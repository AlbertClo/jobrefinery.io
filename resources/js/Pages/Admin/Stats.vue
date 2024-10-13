<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import AdminLayout from '@/Layouts/AdminLayout.vue';

type DaysInOfficeBreakdown = {
	count: number;
	days_in_office_per_week: number;
};

const props = defineProps<{ daysInOfficeBreakdown: DaysInOfficeBreakdown[] }>();
</script>

<template>
	<Head title="Dashboard" />

	<AdminLayout>
		<template #default>
			<h2 class="text-xl font-semibold leading-tight text-popover-foreground">Stats</h2>
			<div class="flex w-full flex-row justify-center">
				<div class="grid grid-cols-2 gap-4 p-4">
					<div class="font-bold text-popover-foreground">Days in office</div>
					<div class="font-bold text-popover-foreground">Count</div>
					<template v-for="breakdown in props.daysInOfficeBreakdown">
						<div class="px-4 py-2 ring-1 ring-muted">{{ breakdown.days_in_office_per_week }}</div>
						<div class="px-4 py-2 ring-1 ring-muted">{{ breakdown.count }}</div>
					</template>
				</div>
			</div>
		</template>
	</AdminLayout>
</template>
