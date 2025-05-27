<template>
  <div>
    <div class="row row-breadcrumb">
      <div class="col-md-6">
        <h4>Listado de Competencia</h4>
      </div>
      <div class="col-md-5">
        <a-breadcrumb>
          <a-breadcrumb-item href="">
            <a-icon type="home" />
            <router-link :to="{name:'index'}">Inicio</router-link>
          </a-breadcrumb-item>
          <a-breadcrumb-item href="">
            <span>General</span>
          </a-breadcrumb-item>
          <a-breadcrumb-item>
           <span>Competencia</span>
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
        :title="selected_competencia.get_id()?'Actualizar competencia':'Añadir competencia'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <competencia_form  :modal=true :model="selected_competencia" />
      </a-modal>
      <competencia_table
       :columns="columns"
       table_name="Competencia"
       id_table="id_competencia"
       ref="competencia_table"
       :params_search="params_search"
       :paginate="paginate"
      />
    </div>
  </div>
</template>
<script>
import * as utils from "@/helpers/helpers/utils";
import * as mb from "@/helpers/loaders/model.load";
import competencia_form from "../form/competencia_form";
import competencia_table from "./competencia.table";

export default {
  name: "competencia_list",
    provide: function(){
      return{
        close_modal: this.onCloseModal,
        show_form: this.show_form,
        load_data: () => {
           this.$refs.competencia_table.load_data()
        },
        setSelectedCompetencia: this.setSelectedCompetencia
      }
    },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics('Competencia').columns,
      selected_competencia: mb.instance( 'Competencia'),
      show_modal_form: false,
      paginate:false,
      params_search:{relations:['deporte','supervisor','evento']},
      mb
    };
  },
  components: {
    competencia_form,
    competencia_table
  },
  methods: {
    setSelectedCompetencia(model) {
      this.selected_competencia = model
    },
    onCloseModal(e,reload_data=false) {
      this.selected_competencia = mb.instance('Competencia');
      this.show_modal_form = false;
      reload_data ? this.$refs.competencia_table.load_data() : ''
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.competencia_table.selectedRowKeys.length === 0) {
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
            const response = await mb.statics('Competencia').delete_by_ids(
                _this.$refs.competencia_table.selectedRowKeys
              );
               utils.process_response(response, "deleted");
              _this.$refs.competencia_table.selectedRowKeys=[];
              _this.$refs.competencia_table.load_data();
            } catch (error) {
              utils.process_error(error);
              _this.$refs.competencia_table.selectedRowKeys=[];
            }
        },
        onCancel() {}
      });
    },
  },
};
</script>

<style>
@import "competencia_list.css";
</style>

