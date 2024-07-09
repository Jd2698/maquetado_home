<script setup>
	defineProps(["imageUrl"]);
</script>

<template>
	<div class="carousel-item">
		<div class="d-flex flex-column flex-xl-row align-items-center gap-0 gap-sm-3 gap-xl-4">
			<div id="carousel__image" class="d-flex px-lg-4" style="height: 400px;">
				<img :src="imageUrl" class="d-block" :alt="imageUrl" style="max-height: 100%;">
			</div>
			<div class="px-4">
				<h2 class="text--title fw-bold" style="width: 80%; color: #1c1cd1;">
					<slot name="title"></slot>
				</h2>
				<p class="fs-lg-5">
					<slot name="body">
						Los profesores pueden crear cursos desde cero, adaptarlos a su estructura de enseñanza y hacer seguimiento a sus alumnos.
					</slot>
				</p>
			</div>
		</div>
	</div>
</template>

<style>
@media screen and (max-width: 1200px) {
	#carouselExampleIndicators {
		height: 600px !important;
	}
	.text--title {
		width: 100% !important;
	}
	#carousel__image img {
		width: 100% !important;
		height: 100% !important;
		object-fit: contain !important;
	}
}
</style>
