<template>
  <div>
    <div class="row row-breadcrumb">
      <div class="col-md-6">
        <h4>Tipo de atleta</h4>
      </div>
      <div class="col-md-5">
        <a-breadcrumb>
          <a-breadcrumb-item href="">
            <a-icon type="home" />
            <router-link :to="{name:'index'}">Inicio</router-link>
          </a-breadcrumb-item>
          <a-breadcrumb-item href="">
            <span>Configuración</span>
          </a-breadcrumb-item>
          <a-breadcrumb-item>
           <span>Tipo de atleta</span>
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
        :title="selected_atleta_tipo.get_id()?'Actualizar atleta_tipo':'Añadir atleta_tipo'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <atleta_tipo_form  :modal=true :model="selected_atleta_tipo" />
      </a-modal>
      <atleta_tipo_table
       :columns="columns"
       table_name="Atleta_tipo"
       id_table="id_tipo"
       ref="atleta_tipo_table"
       :params_search="params_search"
       :paginate="paginate"
      />
    </div>
  </div>
</template>
<script>
import * as utils from "@/helpers/helpers/utils";
import * as mb from "@/helpers/loaders/model.load";
import atleta_tipo_form from "../form/atleta_tipo_form";
import atleta_tipo_table from "./atleta_tipo.table";

export default {
  name: "atleta_tipo_list",
    provide: function(){
      return{
        close_modal: this.onCloseModal,
        show_form: this.show_form,
        load_data: () => {
           this.$refs.atleta_tipo_table.load_data()
        },
        setSelectedAtleta_tipo: this.setSelectedAtleta_tipo
      }
    },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics('Atleta_tipo').columns,
      selected_atleta_tipo: mb.instance( 'Atleta_tipo'),
      show_modal_form: false,
      paginate:false,
      params_search:{relations:[]},
      mb
    };
  },
  components: {
    atleta_tipo_form,
    atleta_tipo_table
  },
  methods: {
    setSelectedAtleta_tipo(model) {
      this.selected_atleta_tipo = model
    },
    onCloseModal(e,reload_data=false) {
      this.selected_atleta_tipo = mb.instance('Atleta_tipo');
      this.show_modal_form = false;
      reload_data ? this.$refs.atleta_tipo_table.load_data() : ''
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.atleta_tipo_table.selectedRowKeys.length === 0) {
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
            const response = await mb.statics('Atleta_tipo').delete_by_ids(
                _this.$refs.atleta_tipo_table.selectedRowKeys
              );
               utils.process_response(response, "deleted");
              _this.$refs.atleta_tipo_table.selectedRowKeys=[];
              _this.$refs.atleta_tipo_table.load_data();
            } catch (error) {
              utils.process_error(error);
              _this.$refs.atleta_tipo_table.selectedRowKeys=[];
            }
        },
        onCancel() {}
      });
    },
  },
};
</script>

<style>
@import "atleta_tipo_list.css";
</style>

