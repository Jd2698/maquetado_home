<script setup>
	import { Head, Link, useForm } from "@inertiajs/vue3";
	import { computed, ref } from "vue";
	import AppLayout from "@/Layouts/AppHome.vue";

	import { Form, Field, ErrorMessage } from "vee-validate";
	import * as yup from "yup";

	import InputError from "@/Components/InputError.vue";
	import InputLabel from "@/Components/InputLabel.vue";
	import TextInput from "@/Components/TextInput.vue";
	import PrimaryButton from "@/Components/PrimaryButton.vue";

	const form = useForm({
		name: "",
		lastname: "",
		phone: "",
		email: "",
		country: "",
		organization: "",
		puesto_trabajo: "",
	});

	const schema = yup.object({
		name: yup.string().required(),
		lastname: yup.string().required(),
		phone: yup.number().required(),
		email: yup.string().email().required(),
		country: yup.string().required(),
		organization: yup.string().required(),
		puesto_trabajo: yup.string().required(),
	});

	// Limpiar los errores
	const submit = () => {
		form.post(route("demos.store"), {
			onSuccess: () => {
				form.reset();
			},
		});
	};
</script>

<template>
	<AppLayout title="About Us" class="bg-image">
		<div class="container row row-cols-1 row-cols-lg-2 justify-content-between align-items-center gap-4 gap-lg-0 my-4 mx-auto p-4" style="min-height: 705px;">

			<div class="col col-lg-5">
				<h2 class="fw-bold" style="color: #1c1cd1;">¿Quieres ver cómo Levely puede revolucionar la gestión del conocimiento en tu organización?</h2>
				<p class="fs-5 mt-4 pt-4">Nuestra plataforma intuitiva y flexible está diseñada para empoderar a colegios, universidades y empresas con <span class="fw-bold" style="color: #1c1cd1;">herramientas avanzadas para personalizar y estandarizar el aprendizaje.</span></p>
				<p class="fs-5 mt-4"><span class="fw-bold" style="color: #1c1cd1;">Agenda un demo personalizado</span> y descubre cómo podemos ayudarte a ofrecer una educación de alta calidad.</p>
			</div>

			<Form @submit="submit" :validation-schema="schema" class="col col-lg-6 shadow p-4 rounded bg-white">
				<h3 class="text-center fw-bold" style="color: #1c1cd1;">Agenda un demo aquí</h3>
				<p class="text-center text-muted">Completa el formulario y uno de nuestros expertos se pondrá en contacto contigo para programar una demostración adaptada a tus necesidades.</p>

				<!-- Nombre y apellido -->
				<div class="row row-cols-2">
					<div class="col">
						<InputLabel for="name" value="Nombre *" />

						<Field name="name" v-slot="{ errorMessage, field }" v-model="form.name">
							<TextInput id="name" v-model="form.name" type="text" :class="`mt-1 ${errorMessage ? 'is-invalid' : ''}`" autocomplete="username" placeholder="Ej: Maria Camila" v-bind="field" />
							<span class="invalid-feedback">{{ errorMessage }}</span>
							<InputError class="mt-2" :message="form.errors.lastname" />
						</Field>
					</div>
					<div class="col">
						<InputLabel for="lastname" value="Apellido *" />

						<Field name="lastname" v-slot="{ errorMessage, field }" v-model="form.lastname">
							<TextInput id="lastname" v-model="form.lastname" type="text" :class="`mt-1 ${errorMessage ? 'is-invalid' : ''}`" autocomplete="lastname" placeholder="Ej: Ossa Parra" v-bind="field" />
							<span class="invalid-feedback">{{ errorMessage }}</span>
							<InputError class="mt-2" :message="form.errors.lastname" />
						</Field>
					</div>
				</div>

				<!-- Teléfono -->
				<div class="row row-cols-2 mt-4">
					<div class="col-12">
						<InputLabel for="phone" value="Número de teléfono *" />

						<Field name="phone" v-slot="{ errorMessage, field }" v-model="form.phone">
							<TextInput id="phone" v-model="form.phone" type="text" :class="`mt-1 ${errorMessage ? 'is-invalid' : ''}`" autocomplete="phone" placeholder="000 000 0000" v-bind="field" />
							<span class="invalid-feedback">{{ errorMessage }}</span>
							<InputError class="mt-2" :message="form.errors.phone" />
						</Field>
					</div>
				</div>

				<!-- email y país -->
				<div class="row row-cols-2 mt-4">
					<div class="col">
						<InputLabel for="email" value="Email *" />

						<Field name="email" v-slot="{ errorMessage, field }" v-model="form.email">
							<TextInput id="email" v-model="form.email" type="text" :class="`mt-1 ${errorMessage ? 'is-invalid' : ''}`" autocomplete="email" placeholder="Camila@pantherahub.com" v-bind="field" />
							<span class="invalid-feedback">{{ errorMessage }}</span>
							<InputError class="mt-2" :message="form.errors.email" />
						</Field>
					</div>
					<div class="col">
						<InputLabel for="country" value="País *" />

						<Field name="country" v-slot="{ errorMessage, field }" v-model="form.country">
							<TextInput id="country" v-model="form.country" type="text" :class="`mt-1 ${errorMessage ? 'is-invalid' : ''}`" autocomplete="country" placeholder="Colombia" v-bind="field" />
							<span class="invalid-feedback">{{ errorMessage }}</span>
							<InputError class="mt-2" :message="form.errors.country" />
						</Field>
					</div>
				</div>

				<!-- organización y puesto de trabajo -->
				<div class="row row-cols-2 mt-4">
					<div class="col">
						<InputLabel for="organization" value="Nombre de la organización *" />

						<Field name="organization" v-slot="{ errorMessage, field }" v-model="form.organization">
							<TextInput id="organization" v-model="form.organization" type="text" :class="`mt-1 ${errorMessage ? 'is-invalid' : ''}`" autocomplete="organization" placeholder="Panthera" v-bind="field" />
							<span class="invalid-feedback">{{ errorMessage }}</span>
							<InputError class="mt-2" :message="form.errors.organization" />
						</Field>
					</div>
					<div class="col">
						<InputLabel for="puesto_trabajo" value="Posición de trabajo *" />

						<Field name="puesto_trabajo" v-slot="{ errorMessage, field }" v-model="form.puesto_trabajo">
							<TextInput id="puesto_trabajo" v-model="form.puesto_trabajo" type="text" :class="`mt-1 ${errorMessage ? 'is-invalid' : ''}`" autocomplete="puesto_trabajo" placeholder="Gerente" v-bind="field" />
							<span class="invalid-feedback">{{ errorMessage }}</span>
							<InputError class="mt-2" :message="form.errors.puesto_trabajo" />
						</Field>
					</div>
				</div>

				<div class="flex items-center justify-end mt-4">
					<button class="btn w-100 text-white" style="background: #1c1cd1;">
						Agendar Demo
					</button>
				</div>
			</Form>
		</div>
	</AppLayout>
</template>

<style>
.bg-image {
	background-image: url("/images/Textura banner Principal.webp");
	background-size: contain;
	background-position: top;
}
</style>
