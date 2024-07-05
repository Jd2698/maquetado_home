<script setup>
	import { Head, Link } from "@inertiajs/vue3";
	import Icon from "../Components/Icons/Icon.vue";
	import WhatsAppIcon from "../Components/Icons/WhatsApp.vue";
	import AppLayout from "@/Layouts/AppHome.vue";
</script>

<template>
	<AppLayout title="About Us">
		<div class="shadow rounded my-4 mx-auto p-4" style="max-width: 500px;">
			<Icon width="200" class="d-block mb-4" />
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed itaque qui dolorem tempora modi ducimus amet, quo placeat officiis aspernatur quas est, cum commodi ut. Molestias quae id labore quis.
			</p>
			<WhatsAppIcon width="30" />
		</div>
	</AppLayout>
</template>

<style>
</style>
