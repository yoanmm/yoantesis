<template>
  <div>
    <div class="row row-breadcrumb">
      <div class="col-md-6">
        <h4>Estado del equipo</h4>
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
           <span>Estado del equipo</span>
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
        :title="selected_equipo_estado.get_id()?'Actualizar equipo_estado':'Añadir equipo_estado'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <equipo_estado_form  :modal=true :model="selected_equipo_estado" />
      </a-modal>
      <equipo_estado_table
       :columns="columns"
       table_name="Equipo_estado"
       id_table="id_estado"
       ref="equipo_estado_table"
       :params_search="params_search"
       :paginate="paginate"
      />
    </div>
  </div>
</template>
<script>
import * as utils from "@/helpers/helpers/utils";
import * as mb from "@/helpers/loaders/model.load";
import equipo_estado_form from "../form/equipo_estado_form";
import equipo_estado_table from "./equipo_estado.table";

export default {
  name: "equipo_estado_list",
    provide: function(){
      return{
        close_modal: this.onCloseModal,
        show_form: this.show_form,
        load_data: () => {
           this.$refs.equipo_estado_table.load_data()
        },
        setSelectedEquipo_estado: this.setSelectedEquipo_estado
      }
    },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics('Equipo_estado').columns,
      selected_equipo_estado: mb.instance( 'Equipo_estado'),
      show_modal_form: false,
      paginate:false,
      params_search:{relations:[]},
      mb
    };
  },
  components: {
    equipo_estado_form,
    equipo_estado_table
  },
  methods: {
    setSelectedEquipo_estado(model) {
      this.selected_equipo_estado = model
    },
    onCloseModal(e,reload_data=false) {
      this.selected_equipo_estado = mb.instance('Equipo_estado');
      this.show_modal_form = false;
      reload_data ? this.$refs.equipo_estado_table.load_data() : ''
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.equipo_estado_table.selectedRowKeys.length === 0) {
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
            const response = await mb.statics('Equipo_estado').delete_by_ids(
                _this.$refs.equipo_estado_table.selectedRowKeys
              );
               utils.process_response(response, "deleted");
              _this.$refs.equipo_estado_table.selectedRowKeys=[];
              _this.$refs.equipo_estado_table.load_data();
            } catch (error) {
              utils.process_error(error);
              _this.$refs.equipo_estado_table.selectedRowKeys=[];
            }
        },
        onCancel() {}
      });
    },
  },
};
</script>

<style>
@import "equipo_estado_list.css";
</style>

