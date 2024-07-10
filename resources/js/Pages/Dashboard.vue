<script setup>
	import AppLayout from "@/Layouts/AppHome.vue";

	import DataTable from "datatables.net-vue3";
	import DataTablesCore from "datatables.net-bs5";
	import "datatables.net-responsive";

	DataTable.use(DataTablesCore);

	const columns = [
		{ data: "nombre", title: "Nombre" },
		{ data: "telefono", title: "Teléfono" },
		{ data: "email", title: "Email" },
		{ data: "pais", title: "País" },
	];

	const options = {
		serverSide: true,
		responsive: true,
	};
</script>

<template>
	<AppLayout title="Dashboard">
		<DataTable class="display" ajax="/demos/index" :columns="columns" :options="options">
		</DataTable>
	</AppLayout>moc
</template>

<style>
@import "datatables.net-bs5";
@import "datatables.net-dt";
@import "datatables.net-responsive-dt";

.datatable {
	padding: 1rem;
	margin-top: 1rem !important;
	width: 80%;
	margin: auto;
	box-shadow: 0 0 10px 2px rgb(222, 218, 218);
	border-radius: 0.5rem;
}

.pagination {
	display: flex;
	gap: 0.2rem;
}

.dt-paging-button {
	box-shadow: none !important;
	padding: 0 !important;
	border: none !important;
}
</style>
