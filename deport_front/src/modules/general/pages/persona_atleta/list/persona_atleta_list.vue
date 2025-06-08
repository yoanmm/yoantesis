<template>
  <div>
    <div class="row row-breadcrumb">
      <div class="col-md-6">
        <h4>Atletas</h4>
      </div>
      <div class="col-md-5">
        <a-breadcrumb>
          <a-breadcrumb-item href="">
            <a-icon type="home" />
            <router-link :to="{name:'index'}">Inicio</router-link>
          </a-breadcrumb-item>
          <a-breadcrumb-item href="">
            <span>Gestión deportiva</span>
          </a-breadcrumb-item>
          <a-breadcrumb-item>
           <span>Atletas</span>
          </a-breadcrumb-item>
        </a-breadcrumb>
       </div>
      </div>
    <div class="container">
    <div>
      <div class="row">
        <div class="col-md-6">
          <a-button-group style="margin-bottom: 10px">
            <a-tooltip placement="topLeft" title="Añadir nuevo elemento">
              <a-button icon="plus" type="primary" @click="show_form">Añadir</a-button>
            </a-tooltip>
            <a-tooltip placement="topLeft" title="Eliminar elementos seleccionados">
              <a-button icon="delete" type="danger" @click="showDeleteConfirm">Eliminar</a-button>
            </a-tooltip>
          </a-button-group>
        </div>
        <div class="col-md-6" style="text-align: end;">
        </div>
      </div>
     </div>
    </div>
   <div>
      <a-modal
        @cancel="onCloseModal"
        :title="selected_persona_atleta.get_id()?'Actualizar persona_atleta':'Añadir persona_atleta'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <persona_atleta_form  :modal=true :model="selected_persona_atleta" />
      </a-modal>
      <persona_atleta_table
       :columns="columns"
       table_name="Persona_atleta"
       id_table="id_atleta"
       ref="persona_atleta_table"
       :params_search="params_search"
       :paginate="paginate"
      />
    </div>
  </div>
</template>
<script>
import * as utils from "@/helpers/helpers/utils";
import * as mb from "@/helpers/loaders/model.load";
import persona_atleta_form from "../form/persona_atleta_form";
import persona_atleta_table from "./persona_atleta.table";

export default {
  name: "persona_atleta_list",
    provide: function(){
      return{
        close_modal: this.onCloseModal,
        show_form: this.show_form,
        load_data: () => {
           this.$refs.persona_atleta_table.load_data()
        },
        setSelectedPersona_atleta: this.setSelectedPersona_atleta
      }
    },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics('Persona_atleta').columns,
      selected_persona_atleta: mb.instance( 'Persona_atleta'),
      show_modal_form: false,
      paginate:false,
      params_search:{relations:['persona','tipo']},
      mb
    };
  },
  components: {
    persona_atleta_form,
    persona_atleta_table
  },
  methods: {
    setSelectedPersona_atleta(model) {
      this.selected_persona_atleta = model
    },
    onCloseModal(e,reload_data=false) {
      this.selected_persona_atleta = mb.instance('Persona_atleta');
      this.show_modal_form = false;
      reload_data ? this.$refs.persona_atleta_table.load_data() : ''
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.persona_atleta_table.selectedRowKeys.length === 0) {
        utils.openNotificationWithIcon(
          "error",
          "Eliminar elementos seleccionados",
          "Debe seleccionar al menos un elemento"
        );
        return;
      }
      let _this = this;
      this.$confirm({
        title: "Eliminar elementos seleccionados?",
        icon: "delete",
        // icon:()=>{return ( <a-icon type="delete" style="color:red"/> )},
        okText: "Si",
        okType: "danger",
        class: "delete_confirm",
        cancelText: "No",
        async onOk() {
          try {
            const response = await mb.statics('Persona_atleta').delete_by_ids(
                _this.$refs.persona_atleta_table.selectedRowKeys
              );
               utils.process_response(response, "deleted");
              _this.$refs.persona_atleta_table.selectedRowKeys=[];
              _this.$refs.persona_atleta_table.load_data();
            } catch (error) {
              utils.process_error(error);
              _this.$refs.persona_atleta_table.selectedRowKeys=[];
            }
        },
        onCancel() {}
      });
    },
  },
};
</script>

<style>
@import "persona_atleta_list.css";
</style>

