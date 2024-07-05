<script setup>
	import { Head, Link } from "@inertiajs/vue3";
	import Icon from "../Components/Icons/Icon.vue";
	import AppLayout from "@/Layouts/AppHome.vue";
</script>

<template>
	<AppLayout title="About Us">
		<div class="shadow rounded my-4 mx-auto p-4" style="max-width: 500px;">
			<Icon width="200" class="d-block mb-4" />
			<p>
				Somos un software que transforma la gestión del conocimiento en las organizaciones

				Ofrecemos una plataforma intuitiva que empodera a colegios, universidades y empresas con herramientas avanzadas para la personalización, flexibilidad y estandarización del aprendizaje.
			</p>
		</div>
	</AppLayout>
</template>

<style>
</style>
