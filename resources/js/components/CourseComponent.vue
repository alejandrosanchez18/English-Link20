<template>
             <tr>
              <th scope="row">{{course.id}}</th>
              <td><input v-if="editMode" class="form-control" v-model="course.name" type="text" name="name" value=""></input><p v-else>{{ course.name }}</p></td>
              <td><input v-if="editMode" class="form-control" v-model="course.description" type="text" name="description" value=""></input><p v-else>{{ course.description }}</p></td>
              <!-- <td><input v-if="editMode" class="form-control" v-model="course.teacher_id" type="number" name="" value=""></input><p v-else>{{ course.teacher_id }}</p></td> -->
              <td><input v-if="editMode" class="form-control" v-model="course.price" type="number" name="" value=""></input><p v-else>{{ course.price }}</p></td>
              <td><button v-if="editMode" class="btn btn-success" v-on:click="onClickUpdate()">Guardar Cambios</button>
              <button v-else class="btn btn-success" v-on:click="onClickEdit()">Editar</button></td>
              <td><button class="btn btn-danger" v-on:click="onClickDelete()">Borrar</button></td>
             </tr>

</template>

<script>
    export default {
          props: ['course'],
          data(){
                return {
                      editMode : false,
                }
          },
        mounted() {

      },
      methods: {
            onClickDelete() {
                  // Swat2
                  Swal({
                    title: 'Estas seguro?',
                    text: 'No se podrá recuperar este usuario!',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Si, quiero borrarlo!',
                    cancelButtonText: 'No, cancelar'
                  }).then((result) => {
                        // Si acepta
                    if (result.value) {
                          // Accion de eliminar API Axios
                          axios.delete(`/courses/${this.course.id}`).then(() => {
                               this.$emit('delete');
                         })
                         // Mensaje de eliminado
                      Swal('Borrado!','El usuario ha sido borrado.','success')

                      // Si no acepta
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                      Swal('Cancelado','El usuario no se ha borrado','error')
                    }
                  })
            },
            onClickEdit() {
                  this.editMode = true;
            },
            onClickUpdate() {
                  const params = {
                        id: this.course.id,
                        name : this.course.name,
                        description : this.course.description,
                        price : this.course.price,

                  }
                  axios.put(`/courses/${this.course.id}`, params).then((response) => {
                        this.editMode = false;
                        const course = response.data;
                        this.$emit('update', this.course)
                  });

            }
      }
    }
</script>
