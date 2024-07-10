<template>
	<div class="mx-auto d-flex flex-column gap-4 shadow p-4 mt-4 rounded" style="max-width: 400px;">
		<div class="text-end">
			<slot name="logo" />
		</div>
		<slot />
	</div>
</template>
