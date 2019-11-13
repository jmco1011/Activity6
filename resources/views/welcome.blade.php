<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Activity 6</title>
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    <div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float: right;">
  Add Item

</button>
</div>
<div class="container" id ='app'>
        <div class="row">
              <table class="table">
                 <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><a href="" data-toggle="modal" data-target="#exampleModal">Edit </a>| <a href="">Delete </a></td>
    </tr>
  </tbody>
</table>
         
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <label for="name" class="col-form-label">Name</label>
            <input type="text" class="form-control" v-model='inventory.name'>
            <label for="text" class="col-form-label">Quantity</label>
            <input type="number" class="form-control" v-model='inventory.qty'></input>
            <label for="text" class="col-form-label">Category</label><br />
            <select name = "" id = "" v-on:change = "fetchStudent()" 
        v-model = "selected_section">
 
            <option >
            </option>
    
        </select>
          </div>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
  </body>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
      //  var items = @json($items ?? '');
    </script>
    <script>
      var vm = new Vue({
            el:'#app',
            data:{
                items: items,

                inventory:{
                        inventory_id = 1,
                        name:'',
                        qty: '',
                        Category: '',
                }

                
            },
            methods: {
                postNewItem() {
                    axios.get('url', 'parameters');
                    axios.post('/projects/'+this.project.id+'/tasks', this.new_task)
                        .then(({data})=>{
                            this.tasks.push(data);
                            this.new_task.title = '';
                            console.log(data);
                        });
                },
                deleteTask(task) {
                    axios.post('/tasks/'+task.id+'/delete')
                        .then(function(response){
                            var index = vm.tasks.indexOf(task);
                            vm.tasks.splice(index, 1);
                        });
                }
            }
        });
    </script>
</html>