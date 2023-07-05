<x-sg-master>
    <div class="content">
                <h3>Add User</h3>
            <form action="/user/{{$user->user_id}}/update"method="post" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Name<span class="text-danger">*</span></label>
                                <div class="col-lg-10">
                                    <x-sg-text name="name" value="{{$user->name}}"/>
                                </div>
                        </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Age<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <x-sg-text name="age" value="{{$user->age}}"/>
                            </div>
                    </div>
    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Image<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <input type="file" name="image" value="{{$user->image}}">
                                <input type="hidden" name = "himage" value="{{$user->image}}" >
                            </div>
                    </div>
    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">DOB<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <x-sg-date name="dob" value="{{$user->dob}}"/>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Address<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <x-sg-text name="address" value="{{$user->address}}"/>
                            </div>
                    </div>
        
                    <div class="form-group row">
                    <label class="col-form-label col-lg-2">Email<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                        <x-sg-text name="email" value="{{$user->email}}"/>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">User Name<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                        <x-sg-text name="username" value="{{$user->username}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Phone<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                        <x-sg-number name="phone" value="{{$user->phone}}"/>
                        </div>
                    </div>
        
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Password<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                        <x-sg-password name="password" "/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2"> Conform Password<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                        <x-sg-password name="password_confirmation"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2"> Role<span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <select class="role form-control" name="role" id="role">
                                <option value="">Select Role...</option>
                                @foreach ($roles as $role)
                                <option data-role-id="{{$role->id}}" data-role-slug="{{$role->slug}}" value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                   
                    <div id="permissions_box" >
                        <label for="roles" id="hello">Select Permissions</label>
                        <div id="permissions_ckeckbox_list">
                        </div>
                    </div> 
                    
                        <x-sg-btn-submit/>
                </div> 
            </form>
           
            </div>
            <script src="{{asset('js/permission.js')}}"></script>
    </x-sg-master>