<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import AdminLayout from '@/Layouts/AdminLayout.vue';
</script>

<template>
	<Head title="Dashboard" />

	<AdminLayout>
		<template #default>
			<h2 class="text-xl font-semibold leading-tight text-popover-foreground">Dashboard</h2>
		</template>
	</AdminLayout>
</template>
