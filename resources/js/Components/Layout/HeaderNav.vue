<script setup>
	import { Head, Link, usePage, router } from "@inertiajs/vue3";
	import Icon from "../Icons/Icon.vue";
	import UserIcon from "../Icons/User.vue";

	const logout = () => {
		router.post(route("logout"));
	};
</script>

<template>
	<header>
		<nav class="container navbar navbar-expand-lg navbar-light">
			<div class="container-fluid">
				<Icon width="80" class="navbar-brand" />
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="nav navbar-nav me-auto mb-2 mb-lg-0 gap-1 gap-lg-2">
						<li class="nav-item mt-4 mt-lg-0">
							<Link :href="route('welcome')" :active="route().current('welcome')" class="nav-link rounded p-2" aria-current="page">Home</Link>
						</li>
						<li class="nav-item">
							<Link :href="route('about')" :active="route().current('about')" class="nav-link rounded p-2" aria-current="page">Nosotros</Link>
						</li>
						<li class="nav-item">
							<Link :href="route('help')" :active="route().current('help')" class="nav-link rounded p-2" aria-current="page">Soporte y ayuda</Link>
						</li>
						<li class="nav-item">
							<Link :href="route('demo')" :active="route().current('demo')" class="nav-link rounded p-2" aria-current="page">Agendar demo</Link>
						</li>

						<li v-if="$page.props.auth.user" class="nav-item">
							<Link :href="route('demos.index')" :active="route().current('demos.index')" class="nav-link rounded p-2" aria-current="page">Demos</Link>
						</li>
					</ul>

					<ul v-if="!$page.props.auth.user" class="navbar-nav d-flex flex-row-reverse gap-3">
						<li class="nav-item d-flex align-items-center">
							<Link :href="route('login')" class="auth login text-center px-1 nav-link rounded">
							<UserIcon width="25" style="color: blue;" />
							<span class="fw-bolder">Login</span>
							</Link>
						</li>
						<li class="nav-item">
							<Link :href="route('register')" class="auth registro text-center px-2 nav-link rounded fw-normal">Registro</Link>
						</li>
					</ul>

					<ul v-else class="navbar-nav d-flex flex-row-reverse gap-2">
						<li class="nav-item">
							<Link as="button" @click="logout" href="" class="btn btn-light rounded" style="font-size: 1rem;">Logout</Link>
						</li>
					</ul>

				</div>
			</div>
		</nav>
	</header>
</template>

<style>
.navbar-toggler:focus {
	box-shadow: none;
	box-shadow: 0 0 5px rgb(201, 201, 201);
}
.nav li a:hover,
.nav li a[active="true"] {
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
