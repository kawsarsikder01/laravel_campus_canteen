<x-sg-master>
    <!-- Content area -->
    <div class="content">
       <div class="p-3 card">
           <div class="row">
               <div class="col-lg-12 ">
                   <h2>Add Role</h2>
               </div>
           </div>
           <hr class="hrLine">
           
   @if ($errors->any())
   <div class="alert alert-danger" role="alert">
       <ul>
           @foreach ($errors->all() as $error)
           <li>{{ $error }}</li> 
           @endforeach
       </ul>
   </div>
   @endif
           <form  action="/update/{{$role->id}}/role" method="post">
               @csrf
               @method('post')
               
               <div class="form-group">
                   <label for="role_name">Role name</label>
                   <input type="text" name="role_name" class="form-control" id="role_name" value="{{$role->name}}">
               </div>
               <div class="form-group" >
                   <label for="roles_permissions">Add Permissions</label>
                   <input type="text" data-role="tagsinput" name="roles_permissions" class="form-control " id="roles_permissions" value="@foreach ($role->permissions as $permission)
                   {{$permission->name. ","}}
               @endforeach">   
               </div>   
           
               <div class="form-group pt-2">
                   <input class="btn btn-primary" type="submit" value="Submit">
               </div>
           </form>
       </div>
   </div>
   
   </x-sg-master>