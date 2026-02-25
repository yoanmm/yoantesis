<template>
	<div class="calendario-container">
		<h1>Calendario de Eventos</h1>
		<vue-cal
			default-view="month"
			locale='es'
			:disable-views="[]"
			:selected-date="selectedDate"
			:events="events"
			:time-from="0"
			:time-to="24"
		>
			<template slot="event-title" slot-scope="{ event }">
				<div :class="event.class">
					<strong>{{ event.title }}</strong>
					<small>{{ event.type }}</small>
				</div>
			</template>
		</vue-cal>
	</div>
</template>
<script>
	import VueCal from "vue-cal"
	import 'vue-cal/dist/vuecal.css'
	import 'vue-cal/dist/i18n/es.js'
	import * as mb from "@/helpers/loaders/model.load"

	export default {
		name: 'calendario-form',
		components: {
			VueCal
		},
		data() {
			return {
				selectedDate: new Date(),
				events: [],
				juegos: [],
				congresillos: []
			}
		},
		mounted() {
			this.loadEventos()
		},
		methods: {
			async loadEventos() {
				try {
					// Cargar juegos
					const juegosResponse = await mb.statics('Juego').list()
					if (juegosResponse.data && juegosResponse.data.data) {
						this.juegos = juegosResponse.data.data
					}

					// Cargar congresillos
					const congresillsResponse = await mb.statics('Congresillo_deporte').list()
					if (congresillsResponse.data && congresillsResponse.data.data) {
						this.congresillos = congresillsResponse.data.data
					}

					// Mapear eventos al calendario
					this.mapearEventos()
				} catch (error) {
					console.error('Error al cargar eventos:', error)
				}
			},
			mapearEventos() {
				this.events = []

				// Mapear juegos
				this.juegos.forEach(juego => {
					if (juego.fecha_juego) {
						this.events.push({
							title: juego.nombre || `Juego ${juego.id_juego}`,
							start: new Date(juego.fecha_juego),
							end: new Date(juego.fecha_juego),
							type: 'JUEGO',
							class: 'event-juego',
							color: '#1890ff'
						})
					}
				})

				// Mapear congresillos
				this.congresillos.forEach(congresillo => {
					if (congresillo.fecha_congresillo) {
						this.events.push({
							title: congresillo.nombre || `Congresillo ${congresillo.id_congresillo}`,
							start: new Date(congresillo.fecha_congresillo),
							end: new Date(congresillo.fecha_congresillo),
							type: 'CONGRESILLO',
							class: 'event-congresillo',
							color: '#52c41a'
						})
					}
				})
			}
		}
	}
</script>
<style scoped>
	.calendario-container {
		padding: 20px;
		background: #f5f5f5;
		border-radius: 8px;
		min-height: 600px;
	}

	h1 {
		font-family: 'Avenir', Helvetica, Arial, sans-serif;
		color: #2c3e50;
		margin-bottom: 20px;
	}

	.event-juego {
		background-color: #1890ff;
		color: white;
		padding: 4px 8px;
		border-radius: 4px;
		font-weight: bold;
	}

	.event-congresillo {
		background-color: #52c41a;
		color: white;
		padding: 4px 8px;
		border-radius: 4px;
		font-weight: bold;
	}
</style>