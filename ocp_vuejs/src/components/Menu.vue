<template>
	<nav >
		<ul  ref="nav">
			<figure class="image-logo" @click="toggleNav">
				<img :src="imagePath" height="40px" width="40px" />
			</figure>
			<li v-for="(link, index) in navLinks" :key="index"	>
				<router-link
					:to="link.path"
					:style="{ color: linkColor || '#DDD' }"
				>
					{{ link.text }}
					<i :class="link.icon" />
				</router-link>
			</li>
		</ul>
	</nav>
</template>

<script>
export default {
	props: ['navLinks', 'background', 'linkColor', 'hoverBackground', 'imagePath'],
	methods: {
		toggleNav () {
			const nav = this.$refs.nav.classList
			nav.contains('active') ? nav.remove('active') : nav.add('active')
		}
	}
}
</script>

<style scoped lang="scss">

nav {
	height: 60px;
	width: 100%;
	box-shadow: 2px 2px 2px #CCC;
	ul {
	
		
		a {
			text-decoration: none;
			display: flex;
			flex-direction: row-reverse;
			align-items: center;
		}

		i {
			margin-right: 10px;
			font-size: 22px;
		}

		li {
			list-style-type: none;
			padding: 10px 20px;
		}
	}
}

@media screen and (max-width: 1500px) {
	nav {
		ul {
			position: absolute;
			width: 160px;
			flex-direction: column;
			left: -140px;
			transition: 300ms ease all;
			top: 60px;

			&.active {
				left: 0px;
			}

			figure {
				position: fixed;
				z-index: 1;
				top: 10px;
				left: 2px;
			}

			li {
				width: 100%;
				padding-left: 0;
				padding-right: 0;
			}

			a {
				flex-direction: row;
				margin-left: 20px;
				justify-content: space-between;
				margin-right: 13px;
			}
		}
	}
}
</style>
