<x-sg-master>
<div class="content">
            <h3>Add User</h3>
            <form action="{{route('createUser')}}"method="post">
                @csrf
                @method('post')
            <div class="row">
                <div class="col-md-6">
                <x-dataentry.name/>
    
    
                <div class="form-group row">
                <label class="col-form-label col-lg-2">Email<span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                    <x-sg-text name="email"/>
                    </div>
                </div>
                
                <div class="form-group row">
                <label class="col-form-label col-lg-2">User Name<span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                    <x-sg-text name="username"/>
                    </div>
                </div>
                <x-dataentry.phone/>
    
              

                    

                <div class="form-group row">
                <label class="col-form-label col-lg-2">Password<span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                    <x-sg-text name="email"/>
                    </div>
                </div>

                    
                    <x-sg-btn-submit/>
            </div> 
            </form>
        </div>
</x-sg-master>