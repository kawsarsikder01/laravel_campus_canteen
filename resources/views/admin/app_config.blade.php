<x-sg-master>
<div class="content">
            <h3>App Configuration</h3>

            <form action="{{route('add_app_data')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="form-group row">
                     <x-dataentry.label>
                        App Name
                    </x-dataentry.label>
                    <div class="col-lg-10">
                    <x-sg-text name="app_name"/>
                    </div>
                </div>

                <div class="form-group row">
                    <x-dataentry.label>
                        Company Name
                    </x-dataentry.label>
                    <div class="col-lg-10">
                        <x-sg-text name="company_name"/>
                    </div>
                </div>

                <x-dataentry.phone/>

                <x-dataentry.email/>

                <x-dataentry.address/>

                <div class="form-group row">
                    <x-dataentry.label>
                        Business Address
                    </x-dataentry.label>
                    <div class="col-lg-10">
                        <x-sg-text name="business_address"/>
                    </div>
                </div>

                

                <div class="form-group row">
                    <label class="col-form-label col-lg-2">App Logo</label>
                    <div class="col-lg-10">
                        <label for="image"><b>Image Logo</b></label>
                        <div class="uniform-uploader"><input type="file" name="logo" class="form-control-uniform" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn btn-light legitRipple" style="user-select: none;">Choose File</span></div>
                        <label for="text"><b>Text Logo</b></label>
                        <input type="text" name="text_logo" class="form-control">
                    </div>
                </div>

               

                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Invoice Header</label>
                    <div class="col-lg-10">
                        <div class="uniform-uploader"><input type="file" name="invoice_header" class="form-control-uniform" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn btn-light legitRipple" style="user-select: none;">Choose File</span></div>
                    </div>
                </div>

               
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Invoice Footer</label>
                    <div class="col-lg-10">
                        <div class="uniform-uploader"><input type="file" name="invoice_footer" class="form-control-uniform" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn btn-light legitRipple" style="user-select: none;">Choose File</span></div>
                    </div>
                </div>

                <x-dataentry.submit/>
                       
            </form>
        </div>
</x-sg-master>