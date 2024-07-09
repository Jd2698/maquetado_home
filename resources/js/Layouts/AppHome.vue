<script setup>
	import { ref } from "vue";
	import { Head, Link, router, usePage } from "@inertiajs/vue3";
	import HeaderNav from "@/Components/Layout/HeaderNav.vue";
	import Footer from "@/Components/Layout/Footer.vue";

	defineProps({
		title: String,
	});
</script>

<template>
	<div>

		<Head :title="title" />
		<HeaderNav />

		<!-- Page Content -->
		<main style="min-height: calc(100vh - 61px); overflow-x: hidden;">
			<slot />
		</main>

		<Footer />
	</div>
</template>
