<template>
  <div class="icons-list">
    <a-tooltip placement="top" v-if="visible_edit" title="Modificar Elemento">
      <a href="javascript:void(0)" @click="v_instance?v_instance.onEditing(object):edit()"
         class="btn btn-icon btn-round btn-outline-success ml-2">
        <i class="ti ti-pencil-alt"></i>
      </a>
    </a-tooltip>
    <a-tooltip placement="top" v-if="false" title="Mostrar Elemento">
      <a-icon type="eye" style="padding-right: 10px" theme="twoTone" twoToneColor="green"/>
    </a-tooltip>
    <a-tooltip placement="top" v-if="visible_delete" title="Borrar Elemento">
      <a href="javascript:void(0)" @click="showDeleteConfirm"
         class="btn btn-icon btn-round btn-outline-danger ml-2">
        <i class="ti ti-trash"></i>
      </a>
    </a-tooltip>
    
  </div>
</template>
<script>
import * as utils from '@/helpers/helpers/utils/'
import * as model_factory from '@/helpers/loaders/model.load'

export default {
  name: 'action_buttons',
  props: {
    object: Object,
    v_instance: Object,
    edit: {
      type: Function,
      default: () => {
      }
    },
    class_name: {
      type: String,
      default: 'BaseModel'
    },
    visible_edit: {
      type: Boolean,
      default: true
    },
    visible_delete: {
      type: Boolean,
      default: true
    },
    visible_view: {
      type: Boolean,
      default: true
    },
  },
  data() {
    return {
      model: {}
    }
  },
  methods: {
    showDeleteConfirm() {
      let _this = this
      this.$confirm({
        title: 'Desea eliminar este elemento?',
        icon: 'delete',
        // icon:()=>{return ( <a-icon type="delete" style="color:red"/> )},
        okText: 'Si',
        okType: 'danger',
        class: 'delete_confirm',
        cancelText: 'No',
        async onOk() {
          try {
            const response = await _this.model.delete()
            utils.process_response(response, 'delete')
            _this.v_instance.load_data()
          } catch (error) {
            utils.process_error(error)
          }
        },
        onCancel() {

        },
      })
    },
  },
  mounted() {
    this.model = model_factory.instance(this.class_name, this.object)
  }
}
</script>

<style scoped>
.btn.btn-icon, .navbar .navbar-nav > a.btn.btn-icon {
  height: 1.7rem !important;
  width: 1.7rem !important;
  padding: 0;
  font-size: 1rem !important;
  line-height: 1.7rem !important;
  background-color: white !important;
}

.btn.btn-outline-danger:hover {
  background-color: #d01c37 !important;
  border-color: #d01c37 !important;
  color: white !important;
}

.btn.btn-outline-success:hover {
  background-color: green !important;
  border-color: green !important;
  color: white !important;
}

.btn.btn-outline-success:focus {
  background-color: green !important;
  border-color: green !important;
  color: white !important;
}

</style>


