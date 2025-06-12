<template>
  <div>
    <a-steps :current="current">
      <a-step v-for="(item, index) in steps" :key="index" :title="item.title" />
    </a-steps>
    <div class="steps-content">
      <component :is="steps[current].component" />
    </div>
    <div class="steps-action">
      <a-button v-if="current < steps.length - 1" type="primary" @click="next">
        Next
      </a-button>
      <a-button v-if="current === steps.length - 1" type="primary" @click="$message.success('¡Proceso completado!')">
        Done
      </a-button>
      <a-button v-if="current > 0" style="margin-left: 8px" @click="prev">
        Previous
      </a-button>
    </div>
  </div>
</template>

<script>
import StepOne from "./step_one.vue";
import StepTwo from "./step_two.vue";
import StepThree from "./step_three.vue";

export default {
  components: {
    StepOne,
    StepTwo,
    StepThree,
  },
  data() {
    return {
      current: 0,
      steps: [
        {
          title: "Evento",
          component: "StepOne",
        },
        {
          title: "Deportes",
          component: "StepTwo",
        },
        {
          title: "Participantes",
          component: "StepThree",
        },
      ],
    };
  },
  methods: {
    next() {
      if (this.current < this.steps.length - 1) {
        this.current++;
      }
    },
    prev() {
      if (this.current > 0) {
        this.current--;
      }
    },
  },
};
</script>

<style scoped>
@import "evento_deportivo_form.css";

.steps-content {
  margin-top: 16px;
  border: 1px dashed #e9e9e9;
  border-radius: 6px;
  background-color: #fafafa;
  min-height: 200px;
  text-align: center;
}

.steps-action {
  margin-top: 24px;
}
</style>
