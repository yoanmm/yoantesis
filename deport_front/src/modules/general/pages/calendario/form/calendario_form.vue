<template>
  <div class="calendario-container">
    <h1>Calendario de Eventos</h1>

    <vue-cal
        default-view="month"
        locale="es"
        :disable-views="['years', 'year']"
        :selected-date="selectedDate"
        :events="events"
        :time-from="0"
        :time-to="2400"
        active-view="month"
        events-on-month-view="true"
        class="vuecal--blue-theme"
    >
      <template slot="event-renderer" slot-scope="{ event, view }">
        <div class="vuecal__event-title">
          <strong>{{ event.title }}</strong>
        </div>

        <div class="vuecal__event-time" v-if="event.start">
          <span>{{ event.start.formatTime('HH:mm') }}</span> -
          <span>{{ event.end.formatTime('HH:mm') }}</span>
        </div>

        <div class="vuecal__event-content" v-if="event.content">
          <small>{{ event.content }}</small>
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
        const [juegosRes, congresillosRes] = await Promise.all([
          mb.statics('Juego').list(),
          mb.statics('Congresillo_deporte').list()
        ]);

        // CORRECCIÓN: Si juegosRes.data ya es el array, lo asignamos directamente
        // Usamos Object.values por si acaso viniera como objeto con índices,
        // pero si es array funciona igual.
        this.juegos = juegosRes.data ? Object.values(juegosRes.data) : [];
        this.congresillos = congresillosRes.data ? Object.values(congresillosRes.data) : [];

        this.mapearEventos();
      } catch (error) {
        console.error('Error al cargar eventos:', error);
      }
    },
    mapearEventos() {
      const arrayTemporal = [];

      this.juegos.forEach(juego => {
        if (juego.fecha_inicio) {
          // PASAMOS STRINGS, NO OBJETOS DATE
          // El formato debe ser 'YYYY-MM-DD HH:mm'
          // Tu back envía '2026-02-28 11:55:30', solo quitamos los segundos si es necesario,
          // aunque vue-cal suele aceptarlos.

          arrayTemporal.push({
            start: juego.fecha_inicio.substring(0, 16), // "2026-02-28 11:55"
            end: juego.fecha_fin ? juego.fecha_fin.substring(0, 16) : juego.fecha_inicio.substring(0, 16),
            title: juego.descripcion_juego || 'Juego',
            content: `Cancha: ${juego.id_cancha || 'N/A'}`,
            class: 'event-juego'
          });
        }
      });

      this.congresillos.forEach(c => {
        const f_inicio = c.fecha_inicio || c.fecha_congresillo;
        if (f_inicio) {
          arrayTemporal.push({
            start: f_inicio.substring(0, 16),
            end: c.fecha_fin ? c.fecha_fin.substring(0, 16) : f_inicio.substring(0, 16),
            title: c.nombre || 'Congresillo',
            content: c.descripcion || 'Reunión técnica',
            class: 'event-congresillo'
          });
        }
      });

      this.events = arrayTemporal;
    }
  }
}
</script>

<style scoped>
.calendario-container {
  padding: 20px;
  background: #f5f5f5;
  border-radius: 8px;
  min-height: 700px;
}

h1 {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  color: #2c3e50;
  margin-bottom: 20px;
  text-align: center;
}

/* Estilos de los eventos */
.event-juego {
  background-color: rgba(24, 144, 255, 0.9);
  border: 1px solid #1890ff;
  color: white;
  padding: 2px;
}

.event-congresillo {
  background-color: rgba(82, 196, 26, 0.9);
  border: 1px solid #52c41a;
  color: white;
  padding: 2px;
}

/* Ajustes de visibilidad */
.vuecal__event-title {
  font-size: 1.1em;
  font-weight: bold;
}

.vuecal__event-time {
  font-size: 0.85em;
  margin: 2px 0;
  opacity: 0.9;
}

.vuecal__event-content {
  font-style: italic;
  font-size: 0.8em;
}

/* Altura mínima para que se vea bien el calendario */
.vue-cal {
  height: 650px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}
::v-deep .vuecal__event {
  background-color: #1890ff; /* Color por defecto */
  color: #fff;
}

::v-deep .event-juego {
  background-color: #1890ff !important;
}

::v-deep .event-congresillo {
  background-color: #52c41a !important;
}

/* Para que en el mes se vea el título completo */
::v-deep .vuecal__cell-events-count { display: none; } /* Oculta el contador si prefieres ver los eventos */
</style>