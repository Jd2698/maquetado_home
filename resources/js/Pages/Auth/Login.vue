<script setup>
	import { Head, Link, useForm } from "@inertiajs/vue3";
	import AuthenticationCard from "@/Components/AuthenticationCard.vue";
	import AuthenticationCardLogo from "@/Components/AuthenticationCardLogo.vue";
	import Checkbox from "@/Components/Checkbox.vue";
	import InputError from "@/Components/InputError.vue";
	import InputLabel from "@/Components/InputLabel.vue";
	import PrimaryButton from "@/Components/PrimaryButton.vue";
	import TextInput from "@/Components/TextInput.vue";

	import AppLayout from "@/Layouts/AppHome.vue";

	defineProps({
		canResetPassword: Boolean,
		status: String,
	});

	const form = useForm({
		email: "",
		password: "",
		remember: false,
	});

	const submit = () => {
		form.transform((data) => ({
			...data,
			remember: form.remember ? "on" : "",
		})).post(route("login"), {
			onFinish: () => form.reset("password"),
		});
	};
</script>

<template>
	<AppLayout title="Login">
		<AuthenticationCard>
			<template #logo>
			</template>

			<form @submit.prevent="submit">
				<div>
					<InputLabel for="email" value="Email" />
					<TextInput id="email" v-model="form.email" type="email" class="mt-1" required autofocus autocomplete="username" />
					<InputError class="mt-2" :message="form.errors.email" />
				</div>

				<div class="mt-4">
					<InputLabel for="password" value="Password" />
					<TextInput id="password" v-model="form.password" type="password" class="mt-1" required autocomplete="current-password" />
					<InputError class="mt-2" :message="form.errors.password" />
				</div>

				<div class="flex items-center justify-end mt-4">
					<PrimaryButton class="w-100" :disabled="form.processing">
						Log in
					</PrimaryButton>
				</div>
			</form>
		</AuthenticationCard>
	</AppLayout>
</template>
