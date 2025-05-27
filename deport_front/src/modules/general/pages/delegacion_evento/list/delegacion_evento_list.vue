<template>
  <div>
    <div class="row row-breadcrumb">
      <div class="col-md-6">
        <h4>Listado de Delegacion_evento</h4>
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
           <span>Delegacion_evento</span>
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
        :title="selected_delegacion_evento.get_id()?'Actualizar delegacion_evento':'Añadir delegacion_evento'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <delegacion_evento_form  :modal=true :model="selected_delegacion_evento" />
      </a-modal>
      <delegacion_evento_table
       :columns="columns"
       table_name="Delegacion_evento"
       id_table="id_delegacion_evento"
       ref="delegacion_evento_table"
       :params_search="params_search"
       :paginate="paginate"
      />
    </div>
  </div>
</template>
<script>
import * as utils from "@/helpers/helpers/utils";
import * as mb from "@/helpers/loaders/model.load";
import delegacion_evento_form from "../form/delegacion_evento_form";
import delegacion_evento_table from "./delegacion_evento.table";

export default {
  name: "delegacion_evento_list",
    provide: function(){
      return{
        close_modal: this.onCloseModal,
        show_form: this.show_form,
        load_data: () => {
           this.$refs.delegacion_evento_table.load_data()
        },
        setSelectedDelegacion_evento: this.setSelectedDelegacion_evento
      }
    },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics('Delegacion_evento').columns,
      selected_delegacion_evento: mb.instance( 'Delegacion_evento'),
      show_modal_form: false,
      paginate:false,
      params_search:{relations:['evento','delegacion']},
      mb
    };
  },
  components: {
    delegacion_evento_form,
    delegacion_evento_table
  },
  methods: {
    setSelectedDelegacion_evento(model) {
      this.selected_delegacion_evento = model
    },
    onCloseModal(e,reload_data=false) {
      this.selected_delegacion_evento = mb.instance('Delegacion_evento');
      this.show_modal_form = false;
      reload_data ? this.$refs.delegacion_evento_table.load_data() : ''
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.delegacion_evento_table.selectedRowKeys.length === 0) {
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
            const response = await mb.statics('Delegacion_evento').delete_by_ids(
                _this.$refs.delegacion_evento_table.selectedRowKeys
              );
               utils.process_response(response, "deleted");
              _this.$refs.delegacion_evento_table.selectedRowKeys=[];
              _this.$refs.delegacion_evento_table.load_data();
            } catch (error) {
              utils.process_error(error);
              _this.$refs.delegacion_evento_table.selectedRowKeys=[];
            }
        },
        onCancel() {}
      });
    },
  },
};
</script>

<style>
@import "delegacion_evento_list.css";
</style>

