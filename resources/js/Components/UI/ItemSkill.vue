<script setup>
	const props = defineProps(["image", "selected"]);

	const classes = props.selected
		? "d-flex gap-4 p-4 rounded bg-light"
		: "d-flex gap-4 border border-3 border-light p-4 rounded";
</script>


<template>
	<div :class="classes">
		<div>
			<img :src="image" :alt="image">
		</div>
		<div>
			<h3>Actualizarse en el mundo laboral y/o académico.</h3>
			<p>Podrán aprender cómo superar esos primeros obstáculos para involucrarse en el mundo laboral, y prepararse mejor para sus primeros meses en la universidad.</p>
		</div>
	</div>
</template>
