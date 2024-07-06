<template>
	<div class="d-flex flex-column justify-content-center align-items-center pt-4 mt-4">
		<div>
			<slot name="logo" />
		</div>

		<div class="shadow p-4 rounded" style="min-width: 400px;">
			<slot />
		</div>
	</div>
</template>
