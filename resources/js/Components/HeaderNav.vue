<script setup>
	import { Head, Link } from "@inertiajs/vue3";
	import Icon from "../Components/Icon.vue";

	defineProps({
		canLogin: Boolean,
		canRegister: Boolean,
		laravelVersion: String,
		phpVersion: String,
	});
</script>

<template>
	<header>
		<nav class="container navbar navbar-expand-lg justify-content-between">
			<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">x</span>
		</button> -->

			<!-- class="collapse navbar-collapse" id="navbarSupportedContent" -->
			<div class="nav">
				<ul class="navbar-nav mx-auto gap-2">
					<li class="nav-item d-flex mx-3">
						<Icon width="80" />
					</li>
					<li class="nav-item">
						<Link :href="route('welcome')" :active="route().current('welcome')" class="nav-link rounded" aria-current="page">Home</Link>
					</li>
					<li class="nav-item">
						<Link :href="route('dashboard')" class="nav-link rounded" aria-current="page">Nosotros</Link>
					</li>
					<li class="nav-item">
						<Link :href="route('dashboard')" class="nav-link rounded" aria-current="page">Soporte y ayuda</Link>
					</li>
					<li class="nav-item">
						<Link :href="route('dashboard')" class="nav-link rounded" aria-current="page">Soporte y ayuda</Link>
					</li>
					<li class="nav-item">
						<Link :href="route('dashboard')" class="nav-link rounded active" aria-current="page">Agendar demo</Link>
					</li>
				</ul>
			</div>

			<div v-if="canLogin" class="navbar-brand">
				<ul class="navbar-nav mx-auto d-flex gap-2">
					<li class="nav-item">
						<Link v-if="canRegister" :href="route('register')" class="auth registro nav-link  rounded" style="font-size: 1rem;">Registro</Link>
					</li>
					<li class="nav-item">
						<Link :href="route('login')" class="auth login nav-link rounded" style="font-size: 1rem;">Login</Link>
					</li>
				</ul>
			</div>
		</nav>
	</header>
</template>

<style>
.nav li a:hover,
.nav li a[active] {
	color: rgba(23, 21, 207, 255) !important;
	background: rgba(194, 212, 255, 255);
}

li a.auth.registro {
	background: rgba(10, 209, 103, 255);
	color: black !important;
}
li a.auth.login {
	color: blue;
}
</style>
