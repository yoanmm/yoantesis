<template>
  <div>
    <div class="row row-breadcrumb">
      <div class="col-md-6">
        <h4>Roles</h4>
      </div>
      <div class="col-md-5">
        <a-breadcrumb>
          <a-breadcrumb-item href="">
            <a-icon type="home" />
            <router-link :to="{name:'index'}">Inicio</router-link>
          </a-breadcrumb-item>
          <a-breadcrumb-item href="">
            <span>Seguridad</span>
          </a-breadcrumb-item>
          <a-breadcrumb-item>
           <span>Roles</span>
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
        :title="selected_rol.get_id()?'Actualizar rol':'Añadir rol'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <rol_form  :modal=true :model="selected_rol" />
      </a-modal>
      <rol_table
       :columns="columns"
       table_name="Rol"
       id_table="id_rol"
       ref="rol_table"
       :params_search="params_search"
       :paginate="paginate"
      />
    </div>
  </div>
</template>
<script>
import * as utils from "@/helpers/helpers/utils";
import * as mb from "@/helpers/loaders/model.load";
import rol_form from "../form/rol_form";
import rol_table from "./rol.table";

export default {
  name: "rol_list",
    provide: function(){
      return{
        close_modal: this.onCloseModal,
        show_form: this.show_form,
        load_data: () => {
           this.$refs.rol_table.load_data()
        },
        setSelectedRol: this.setSelectedRol
      }
    },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics('Rol').columns,
      selected_rol: mb.instance( 'Rol'),
      show_modal_form: false,
      paginate:false,
      params_search:{relations:[]},
      mb
    };
  },
  components: {
    rol_form,
    rol_table
  },
  methods: {
    setSelectedRol(model) {
      this.selected_rol = model
    },
    onCloseModal(e,reload_data=false) {
      this.selected_rol = mb.instance('Rol');
      this.show_modal_form = false;
      reload_data ? this.$refs.rol_table.load_data() : ''
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.rol_table.selectedRowKeys.length === 0) {
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
            const response = await mb.statics('Rol').delete_by_ids(
                _this.$refs.rol_table.selectedRowKeys
              );
               utils.process_response(response, "deleted");
              _this.$refs.rol_table.selectedRowKeys=[];
              _this.$refs.rol_table.load_data();
            } catch (error) {
              utils.process_error(error);
              _this.$refs.rol_table.selectedRowKeys=[];
            }
        },
        onCancel() {}
      });
    },
  },
};
</script>

<style>
@import "rol_list.css";
</style>

