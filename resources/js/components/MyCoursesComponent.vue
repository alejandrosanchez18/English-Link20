<template>
      <div class="container">
          <div class="row justify-content-center">
              <div class="">
                  <div>

<!-- Crea Usuario  -->
<course-form-component @new="addCourse"></course-form-component>




<!-- Seach -->
<div class="container mb-2 mt-4">
      <input class="form-control" type="text" placeholder="Buscar" v-model="name">
      <span class="help is-dark"><strong>{{searchCourse.length}}</strong> of {{courses.length}} courses found</span>
</div>





<!-- Table -->
<div class="container">
            <table class="table">
             <thead>
               <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Price</th>
                <th scope="col">Cantidad de Alumnos</th>
               </tr>
             </thead>
             <tbody>
      <!-- Course -->
      <course-component v-for="(course, index) in searchCourse" :key="course.id" :course="course" @update="updateCourse(index, ...arguments)" @delete="deleteCourse(index)"></course-component>
      <!-- Course End -->
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
                        courses: [],
                        name: '',
           }
     },
        mounted() {
                  axios.get('/courses').then((response) => {
                  this.courses = response.data;
            })
      },
      methods: {
            addCourse(course) {
                  this.courses.push(course);
            },
            updateCourse(index, course){
                  this.courses[index] = course;
                  Swal('Curso editado correctamente!','Click en el boton!','success');
            },
            deleteCourse(index){
                  this.courses.splice(index, 1);
            },

      },
      computed: {
            searchCourse(courses) {

                  return this.courses.filter((course) => {
                        var name = course.name;
                        return name.toLowerCase().match(this.name.toLowerCase())
                  });

            },
      }
}

</script>
