<template>
      <div class="container">
          <div class="row justify-content-center">
              <div class="">
                  <div>

<!-- Crea Usuario  -->
<form-component @new="addUser"></form-component>




<!-- Seach -->
<div class="container mb-2 mt-4">
      <input class="form-control" type="text" placeholder="Buscar" v-model="name">
      <span class="help is-dark"><strong>{{searchUser.length}}</strong> of {{users.length}} person found</span>
</div>





<!-- Table -->
<div class="container">
            <table class="table">
             <thead>
               <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">DNI</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
               </tr>
             </thead>
             <tbody>
      <!-- User -->
      <user-component v-for="(user, index) in searchUser" :key="user.id" :user="user" @update="updateUser(index, ...arguments) "@delete="deleteUser(index)"></user-component>
      <!-- User End -->
</tbody>
</table>
</div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
</template>

<script>
    export default {
             data() {
                  return {
                        users: [],
                        name: '',
           }
     },
        mounted() {
                  axios.get('/users').then((response) => {
                  this.users = response.data;
            })
      },
      methods: {
            addUser(user) {
                  this.users.push(user);
            },
            updateUser(index, user){
                  this.users[index] = user;
                  Swal('Usuario editado correctamente!','You clicked the button!','success');
            },
            deleteUser(index){
                  this.users.splice(index, 1);
                  
            },

      },
      computed: {
            searchUser(users) {

                  return this.users.filter((user) => {
                        var fullname = user.first_name + ' ' + user.last_name;
                        return fullname.toLowerCase().match(this.name.toLowerCase())
                  });

            },
      }
}

</script>
