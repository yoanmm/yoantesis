<template>
  <div>
    <div class="row row-breadcrumb">
      <div class="col-md-6">
        <h4>Listado de Cancha</h4>
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
           <span>Cancha</span>
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
        :title="selected_cancha.get_id()?'Actualizar cancha':'Añadir cancha'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <cancha_form  :modal=true :model="selected_cancha" />
      </a-modal>
      <cancha_table
       :columns="columns"
       table_name="Cancha"
       id_table="id_cancha"
       ref="cancha_table"
       :params_search="params_search"
       :paginate="paginate"
      />
    </div>
  </div>
</template>
<script>
import * as utils from "@/helpers/helpers/utils";
import * as mb from "@/helpers/loaders/model.load";
import cancha_form from "../form/cancha_form";
import cancha_table from "./cancha.table";

export default {
  name: "cancha_list",
    provide: function(){
      return{
        close_modal: this.onCloseModal,
        show_form: this.show_form,
        load_data: () => {
           this.$refs.cancha_table.load_data()
        },
        setSelectedCancha: this.setSelectedCancha
      }
    },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics('Cancha').columns,
      selected_cancha: mb.instance( 'Cancha'),
      show_modal_form: false,
      paginate:false,
      params_search:{relations:[]},
      mb
    };
  },
  components: {
    cancha_form,
    cancha_table
  },
  methods: {
    setSelectedCancha(model) {
      this.selected_cancha = model
    },
    onCloseModal(e,reload_data=false) {
      this.selected_cancha = mb.instance('Cancha');
      this.show_modal_form = false;
      reload_data ? this.$refs.cancha_table.load_data() : ''
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.cancha_table.selectedRowKeys.length === 0) {
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
            const response = await mb.statics('Cancha').delete_by_ids(
                _this.$refs.cancha_table.selectedRowKeys
              );
               utils.process_response(response, "deleted");
              _this.$refs.cancha_table.selectedRowKeys=[];
              _this.$refs.cancha_table.load_data();
            } catch (error) {
              utils.process_error(error);
              _this.$refs.cancha_table.selectedRowKeys=[];
            }
        },
        onCancel() {}
      });
    },
  },
};
</script>

<style>
@import "cancha_list.css";
</style>

