<script setup>
	defineProps(["imageUrl"]);
</script>

<template>
	<div class="carousel-item">
		<div class="d-flex align-items-center" style="gap: 8rem;">
			<div>
				<img :src="imageUrl" class="d-block" :alt="imageUrl" style="height: 400px;">
			</div>
			<div>
				<h2 class="text-primary" style="width: 80%;">
					<slot name="title"></slot>
				</h2>
				<p>
					<slot name="body">
						Los profesores pueden crear cursos desde cero, adaptarlos a su estructura de enseñanza y hacer seguimiento a sus alumnos.
					</slot>
				</p>
			</div>
		</div>
	</div>
</template>
