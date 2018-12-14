<template>
             <tr>
              <th scope="row">1</th>
              <td><input v-if="editMode" class="form-control" v-model="user.first_name" type="text" name="" value=""></input><p v-else>{{ user.first_name }}</p></td>
              <td><input v-if="editMode" class="form-control" v-model="user.last_name" type="text" name="" value=""></input><p v-else>{{ user.last_name }}</p></td>
              <td><input v-if="editMode" class="form-control" v-model="user.dni" type="number" name="" value=""></input><p v-else>{{ user.dni }}</p></td>
              <td><input v-if="editMode" class="form-control" v-model="user.email" type="text" name="" value=""></input><p v-else>{{ user.email }}</p></td>
              <td><input type="password" v-if="editMode" class="form-control" v-model="user.password" name="" value=""></input><p v-else>**********</p></td>
              <td><button v-if="editMode" class="btn btn-success" v-on:click="onClickUpdate()">Guardar Cambios</button>
              <button v-else class="btn btn-success" v-on:click="onClickEdit()">Editar</button></td>
              <td><button class="btn btn-danger" v-on:click="onClickDelete()">Borrar</button></td>
             </tr>

</template>

<script>
    export default {
          props: ['user'],
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
                          axios.delete(`/users/${this.user.id}`).then(() => {
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
                        id : this.user.id,
                        first_name : this.user.first_name,
                        last_name : this.user.last_name,
                        email : this.user.email,
                        password : this.user.password,
                        dni : this.user.dni
                  }
                  axios.put(`/users/${this.user.id}`, params).then((response) => {
                        this.editMode = false;
                        const user = response.data;
                        this.$emit('update', this.user)
                  });

            }
      }
    }
</script>
