<script setup lang="ts">
import { HTMLAttributes, watch } from 'vue';
import { Primitive, type PrimitiveProps } from 'radix-vue';
import { type ButtonVariants, buttonVariants } from '.';
import { cn } from '@/lib/utils';
import { useCycleList, useStorage } from '@vueuse/core';
import { Icon } from '@iconify/vue';

interface Props extends PrimitiveProps {
	variant?: ButtonVariants['variant'];
	size?: ButtonVariants['size'];
	class?: HTMLAttributes['class'];
}

const props = withDefaults(defineProps<Props>(), {
	as: 'button',
});

const themes = ['theme-midnight', 'theme-rustic-earth'];
const storedTheme = useStorage('theme', themes[0]);
const { state: selectedTheme, next: selectNextTheme } = useCycleList(themes, {
	initialValue: storedTheme.value,
});

const body = document.getElementsByTagName('body')[0];
body.classList.add(storedTheme.value);

watch(selectedTheme, async (newTheme, oldTheme) => {
	// remove old theme
	body.classList.remove(oldTheme);

	// add new theme
	body.classList.add(newTheme);

	localStorage.setItem('theme', newTheme);
});
</script>

<template>
	<Primitive
		:as="as"
		:as-child="asChild"
		:class="cn(buttonVariants({ variant, size }), props.class)"
		@click="selectNextTheme()"
	>
		<Icon v-if="selectedTheme === 'theme-rustic-earth'" icon="radix-icons:moon" class="h-[1.2rem] w-[1.2rem]" />

		<Icon v-if="selectedTheme === 'theme-midnight'" icon="radix-icons:sun" class="h-[1.2rem] w-[1.2rem]" />
		<span class="sr-only">Toggle theme</span>
	</Primitive>
</template>
