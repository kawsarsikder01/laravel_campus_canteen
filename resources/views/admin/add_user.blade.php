<x-sg-master>
<div class="content">
            <h3>Add User</h3>
            <form action="">
            <div class="row">
                <div class="col-md-6">
                <x-dataentry.name/>
    
                <x-dataentry.email/>
    
                <x-dataentry.phone/>
    
                <x-dataentry.image/>
              
                <x-dataentry.address/>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Role<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
							<select class="form-control select" data-fouc>
								<optgroup label="Adminetration">
									<option value="AZ">Supper Admin</option>
									<option value="CO">Admin</option>						
								</optgroup>
								<optgroup label="User">
									<option value="AL">User</option>							
								</optgroup>
							</select>
                        </div>
                    </div>

                    <x-dataentry.password/>

                    
                    <x-dataentry.submit/>
            </div> 
            </form>
        </div>
</x-sg-master>