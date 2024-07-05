<script setup>
	import Icon from "../Components/Icons/Icon.vue";
	import XIcon from "../Components/Icons/X.vue";
	import FacebookIcon from "../Components/Icons/Facebook.vue";
	import YoutubeIcon from "../Components/Icons/Youtube.vue";
	import LinkedInIcon from "../Components/Icons/LinkedIn.vue";
</script>

<template>
	<footer class="py-4 d-flex flex-column align-items-center gap-4" style="background: rgba(247,247,246,255);">
		<Icon width="150" />
		<ul class="nav justify-content-center">
			<li class="nav-item px-2 fw-bold">Politicas de privacidad</li>
			<li class="nav-item px-2 fw-bold">Términos y condiciones</li>
			<li class="nav-item px-2 fw-bold">Contáctanos</li>
			<li class="nav-item px-2 fw-bold">Cambiar región</li>
		</ul>
		<ul class="nav justify-content-center">
			<li class="nav-item px-2">
				<XIcon width="20" />
			</li>
			<li class="nav-item px-2">
				<FacebookIcon width="20" />
			</li>
			<li class="nav-item px-2">
				<YoutubeIcon width="20" />
			</li>
			<li class="nav-item px-2">
				<LinkedInIcon width="20" />
			</li>
		</ul>
		<span>Producto de Panthera c 2024</span>
	</footer>
</template>
