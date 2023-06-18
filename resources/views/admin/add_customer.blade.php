<x-sg-master>
 
<div class="content">
            <h3>Add Customer</h3>

            <form action="{{route('customercontroller')}}" method="post" enctype = "multipart/form-data" >
            @csrf
            @method('post')
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Name<span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <input type="text" name = "name" class="form-control" placeholder="Enter your name...">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Phone<span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <input type="text" name = "phone" class="form-control" placeholder="Enter phone number...">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Email<span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <input type="email" name = "email" class="form-control" placeholder="Enter email address...">
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Address</label>
                    <div class="col-lg-10">
                        <textarea type="text" name = "address" class="form-control"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Image</label>
                    <div class="col-lg-10">
                        <div class="uniform-uploader"><input type="file" name = "image" class="form-control-uniform" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn btn-light legitRipple" style="user-select: none;">Choose File</span></div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-lg-2">User Name<span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <input type="text" name = "username" class="form-control" placeholder="Enter your user name...">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Password<span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <input type="text" name ="passwoard" class="form-control" placeholder="Enter your password...">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Confirm Password<span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                        <input type="text"  class="form-control" placeholder="Cofirm password...">
                    </div>
                </div>

                <div class="ps-5">
                    <div class="text-start">
                        <button type="submit" class="btn btn-primary legitRipple">Save</button>
                    </div>
                </div>
            </form>
        </div>

        
</x-sg-master>