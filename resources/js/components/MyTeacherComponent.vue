<template>
      <div class="container">
          <div class="row justify-content-center">
              <div class="">
                  <div>

<!-- Crea Usuario  -->
<teacher-form-component @new="addTeacher"></teacher-form-component>




<!-- Seach -->
<div class="container mb-2 mt-4">
      <input class="form-control" type="text" placeholder="Buscar" v-model="name">
      <span class="help is-dark"><strong>{{searchTeacher.length}}</strong> of {{teachers.length}} person found</span>
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
      <!-- teacher -->
      <teacher-component v-for="(teacher, index) in searchTeacher" :key="teacher.id" :teacher="teacher" @update="updateTeacher(index, ...arguments) "@delete="deleteTeacher(index)"></teacher-component>
      <!-- teacher End -->
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
                        teachers: [],
                        name: '',
           }
     },
        mounted() {
                  axios.get('/teachers').then((response) => {
                  this.teachers = response.data;
            })
      },
      methods: {
            addTeacher(teacher) {
                  this.teachers.push(teacher);
            },
            updateTeacher(index, teacher){
                  this.teachers[index] = teacher;
                  Swal('Usuario editado correctamente!','You clicked the button!','success');
            },
            deleteTeacher(index){
                  this.teachers.splice(index, 1);
            },

      },
      computed: {
            searchTeacher(teachers) {

                  return this.teachers.filter((teacher) => {
                        var fullname = teacher.first_name + ' ' + teacher.last_name;
                        return fullname.toLowerCase().match(this.name.toLowerCase())
                  });

            },
      }
}

</script>
