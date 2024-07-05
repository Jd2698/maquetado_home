<script setup>
	import { Head, Link } from "@inertiajs/vue3";
	import Icon from "../Components/Icon.vue";
	import HeaderNav from "../Components/HeaderNav.vue";
	import Footer from "../Components/Footer.vue";
	import CarouselContent from "../Components/CarouselContent.vue";
	import Card from "../Components/Card.vue";

	defineProps({
		canLogin: Boolean,
		canRegister: Boolean,
		laravelVersion: String,
		phpVersion: String,
	});
</script>

<template>

	<Head title="Welcome" />

	<HeaderNav :canLogin="canLogin" :canRegister="canRegister" />

	<div class="bg-image mt-4">
		<div class="container">
			<div class="row row-cols-1 row-cols-sm-2 g-4 align-items-center">
				<div class="col text-black">
					<h1>Te ayudamos a gestionar y desarrollar el conocimiento y el personal de tu organización.</h1>

					<p>Somos un software que transforma la gestión del conocimiento en las organizaciones</p>
					<p>Ofrecemos una plataforma intuitiva que empodera a colegios, universidades y empresas con herramientas avanzadas para la personalización, flexibilidad y estandarización del aprendizaje.</p>
				</div>
				<div class="col">
					<img class="image-banner" src="/images/Imagen banner Principal.webp" alt="banner_principal" style="height: 420px;">
				</div>
			</div>
		</div>
	</div>

	<!-- Carousel -->
	<div class="py-4" style="background: rgba(247,247,246,255);">
		<div class="container my-4 py-4">
			<h2 class="text-center m-auto mb-4 py-4 fw-bold" style="width: 70%; font-size: 1.3rem;">Levely ofrece una amplia gama de funciones diseñadas para que las organizaciones se conviertan en los gestores del conocimiento.</h2>

			<div id="carouselExampleIndicators" class="carousel slide m-auto" data-bs-ride="carousel" style="height: 500px;">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
				</div>
				<div class="carousel-inner h-100 m-auto" style="width: 85%;">
					<CarouselContent class="active" imageUrl="/images/Imagenes Carrusel 1.webp">
						<template #title>
							Creación y gestión de cursos personalizados
						</template>
						<template #body>
							Los profesores pueden crear cursos desde cero, adaptarlos a su estructura de enseñanza y hacer seguimiento a sus alumnos.
						</template>
					</CarouselContent>

					<CarouselContent imageUrl="/images/Imagenes Carrusel 2.webp">
						<template #title>
							Creación y gestión de cursos personalizados
						</template>
					</CarouselContent>

					<CarouselContent imageUrl="/images/Imagenes Carrusel 3.webp">
						<template #title>
							Creación y gestión de cursos personalizados
						</template>
					</CarouselContent>

					<CarouselContent imageUrl="/images/Imagenes Carrusel 4.webp">
						<template #title>
							Creación y gestión de cursos personalizados
						</template>
					</CarouselContent>

					<CarouselContent imageUrl="/images/Imagenes Carrusel 5.webp">
						<template #title>
							Creación y gestión de cursos personalizados
						</template>
					</CarouselContent>

					<CarouselContent imageUrl="/images/Imagenes Carrusel 6.webp">
						<template #title>
							Creación y gestión de cursos personalizados
						</template>
					</CarouselContent>
				</div>
			</div>
		</div>
	</div>

	<!-- Cards -->
	<div class="container my-4 py-4 position-relative">
		<img src="/images/Vectores seccion soluciones.webp" alt="" class="position-absolute" style="left: -10rem;">
		<p class="text-center m-auto mb-4" style="width: 70%; font-size: 1.3rem;">Levely ofrece soluciones completas para empresas e instituciones educativas que desean gestionar programas de formaicón en linea eficientemente.</p>

		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-4">

			<Card imageUrl="/images/Imagenes seccion soluciones 1.webp" barColor="#ec2f5e">
				<template #title>
					Implementación personalizada
				</template>
				<template #body>
					Nuestros especialistas diseñan e implementan soluciones adaptadas a las necesidades especificas de cada cliente.
				</template>
			</Card>

			<Card imageUrl="/images/Imagenes seccion soluciones 2.webp" barColor="#3d3dd8">
				<template #title>
					Capacitación y Soporte Continuo
				</template>
				<template #body>
					Ofrecemos capacitación para administradores y usuarios, además de soporte técnico continuo para una experiencia sin problemas.
				</template>
			</Card>

			<Card imageUrl="/images/Imagenes seccion soluciones 3.webp" barColor="#24d577">
				<template #title>
					Actualizaciones Constantes
				</template>
				<template #body>
					Mantenemos nuestra plataforma actualizada con las últimas mejoras, asegurando acceso a la tecnología más avanzada.
				</template>
			</Card>

			<Card imageUrl="/images/Imagenes seccion soluciones 4.webp" barColor="#fdd041" message="true">
				<template #title>
					Monetización y Alcance
				</template>
				<template #body>
					Permite a las empresas publicar y monetizar sus cursos en nuestra plataforma MOOC, ampliando su alcance a otros usuarios y empresas.
				</template>
			</Card>
		</div>

		<p class="text-center m-auto mt-4" style="width: 70%; font-size: 1.3rem">Con Levely, las empresas e instituciones educativas maximizan el aprendizaje en linea para mejorar el desarrollo profesional y académico.</p>
	</div>

	<div class="container my-4 py-4 position-relative">
		<img src="/images/Vectores seccion Carrusel beneficios.webp" alt="" class="position-absolute" style="right: -10rem;">

		<div class="row row-cols-1 row-cols-md-2 g-4">
			<div class="col d-flex flex-column gap-4">
				<h2 class="text-primary" style="width: 70%;">Con levely tus estudiantes pueden:</h2>
				<div class="d-flex gap-4 p-4 rounded bg-light">
					<div>
						<img src="/images/Iconos Carrusel beneficios 1.webp" alt="">
					</div>
					<div>
						<h3>Actualizarse en el mundo laboral y/o académico.</h3>
						<p>Podrán aprender cómo superar esos primeros obstáculos para involucrarse en el mundo laboral, y prepararse mejor para sus primeros meses en la universidad.</p>
					</div>
				</div>
				<div class="d-flex gap-4 border border-3 border-light p-4 rounded">
					<div>
						<img src="/images/Iconos Carrusel beneficios 2.webp" alt="">
					</div>
					<div>
						<h3>Enfocarse en conocimientos específicos</h3>
						<p>Mediante nuestro sistema de seguimiento, tus estudiantes podrán medir qué tanto han aprendido usando nuestros contentidos y nuestra tecnología.</p>
					</div>
				</div>
				<div class="d-flex gap-4 border border-3 border-light p-4 rounded">
					<div>
						<img src="/images/Iconos Carrusel beneficios 3.webp" alt="">
					</div>
					<div>
						<h3>Desarrollar capacidades de liderazgo</h3>
						<p>De la mano de los maestros, tus estudiantes podrán potenciar nuevas habilidades para su futuro profesional</p>
					</div>
				</div>
			</div>
			<div class="col">
				<img src="/images/Imagenes Carrusel beneficios 1.webp" alt="" style="width: 100%">
			</div>
		</div>
	</div>

	<Footer />
</template>

<style>
.carousel-indicators button {
	width: 15px !important;
	height: 1% !important;
	background: rgba(200, 200, 199, 255) !important;
	border-radius: 100% !important;
}
.carousel-indicators button.active {
	background: rgb(46, 46, 213) !important;
}

.bg-image {
	background-image: url("/images/Textura banner Principal.webp");
	background-size: cover;
	background-position: bottom;
}
</style>
