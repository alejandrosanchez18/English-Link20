<template>
    <div class="container">
          <form class="form-inline row" v-on:submit.prevent="newTeacher()">
                <div class="col-2 form-group">
                 <label for="first_name" class="">Nombre</label>
                 <input type="text"  class="form-control" id="first_name" name="first_name" value="" v-model="first_name">
               </div>
                <div class="col-2 form-group">
                 <label for="last_name" class="">Apellido</label>
                 <input type="text" class="form-control" id="last_name" name="last_name" v-model="last_name">
               </div>
                <div class="col-2 form-group">
                 <label for="dni" class="">DNI</label>
                 <input type="number" class="form-control" id="dni" name="dni" v-model="dni">
               </div>
              <div class="col-2 form-group">
                <label for="staticEmail2" class="">Email</label>
                <input type="text" class="form-control" id="staticEmail2" name="email" v-model="email">
              </div>
              <!-- <div class="col-2 form-group mb-2">
                <label for="inputPassword2" class="">Password</label>
                <input type="password" class="form-control" id="inputPassword2" placeholder="Password" name="password" >
              </div> -->
              <div class="col">
              <button type="submit" class="form-control btn btn-primary">Agregar Estudiante</button>
              </div>
            </form>
    </div>
</template>

<script>
    export default {
       data() {
             return {
                   first_name: '',
                   last_name: '',
                   password: '',
                   dni: '',
                   email: ''
             }
      },
        mounted() {
            console.log('Component mounted. 2')
      },
       methods: {
             newTeacher() {
                   const params = {
                        first_name : this.first_name,
                        last_name : this.last_name,
                        email : this.email,
                        password : this.password,
                        dni : this.dni
                  }
                   axios.post('/teachers', params).then((response) => {
                        const teacher = response.data;
                        this.$emit('new', teacher);

                        Swal('Usuario agregado!','You clicked the button!','success');
                  }).catch(function (error) {
                        Swal('Error al agregar usuario!','You clicked the button!','error');
  });
             },
       }
    }
</script>
