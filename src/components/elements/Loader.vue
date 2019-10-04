<script>
export default {
	name: 'loader'
}
</script>

<template>
	<div class="main-loader">
		<div class="lds-ring">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
</template>

<style scoped>
.main-loader {
	z-index: 4002;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	position: fixed;
	display: flex;
	align-items: center;
	justify-content: center;
	background-color: white;
	background-color: rgba(255, 255, 255, 0.5);
}

.lds-ring {
	display: inline-block;
	position: relative;
	width: 64px;
	height: 64px;
}
.lds-ring div {
	box-sizing: border-box;
	display: block;
	position: absolute;
	width: 51px;
	height: 51px;
	margin: 6px;
	border: 3px solid #4285f4;
	border-radius: 50%;
	animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
	border-color: #4285f4 transparent transparent transparent;
}
.lds-ring div:nth-child(1) {
	animation-delay: -0.45s;
}
.lds-ring div:nth-child(2) {
	animation-delay: -0.3s;
}
.lds-ring div:nth-child(3) {
	animation-delay: -0.15s;
}
@keyframes lds-ring {
	0% {
		transform: rotate(0deg);
	}
	100% {
		transform: rotate(360deg);
	}
}
</style>
