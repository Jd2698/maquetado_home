<script setup>
	const props = defineProps(["imageUrl", "barColor", "message"]);
</script>


<template>
	<div class="col">
		<div class="h-100 shadow rounded position-relative" style="overflow:hidden;">
			<img :src="imageUrl" class="card-img-top" :alt="imageUrl">
			<div class="p-3">
				<h5 class="card-title fw-bold" style="height: 3.5rem;">
					<slot name="title">
						Implementación personalizada
					</slot>
				</h5>
				<div class="my-2" :style="'width: 80%; height: 3px; background: ' + barColor "></div>

				<p class="card-text">
					<slot name="body">
						Nuestros especialistas diseñan e implementan soluciones adaptadas a las necesidades especificas de cada cliente.
					</slot>
				</p>

				<span v-if="message" class="m-2 position-absolute top-0 start-0 bg-danger text-white py-1 px-3 rounded-pill">Proximamente</span>
			</div>
		</div>
	</div>
</template>
