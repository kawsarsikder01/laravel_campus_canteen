<x-sg-master>
    <div class="content">
                <h3>App Configuration</h3>
    
                <form action="/config/{{$appConfig->id}}/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="form-group row">
                         <x-dataentry.label>
                            App Name
                        </x-dataentry.label>
                        <div class="col-lg-10">
                        <x-sg-text name="app_name" value="{{$appConfig->app_name}}"/>
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <x-dataentry.label>
                            Company Name
                        </x-dataentry.label>
                        <div class="col-lg-10">
                            <x-sg-text name="company_name" value="{{$appConfig->company_name}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <x-dataentry.label>
                            Phone
                        </x-dataentry.label>
                        <div class="col-lg-10">
                            <x-sg-text name="phone" value="{{$appConfig->phone}}"/>
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <x-dataentry.label>
                            Company Name
                        </x-dataentry.label>
                        <div class="col-lg-10">
                            <x-sg-text type="email" name="email" value="{{$appConfig->email}}" />
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <x-dataentry.label>
                             Address
                        </x-dataentry.label>
                        <div class="col-lg-10">
                            <x-sg-text name="address" value="{{$appConfig->address}}"/>
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <x-dataentry.label>
                            Business Address
                        </x-dataentry.label>
                        <div class="col-lg-10">
                            <x-sg-text name="business_address" value="{{$appConfig->business_address}}"/>
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">App Logo</label>
                        <div class="col-lg-10">
                            @if (isset($appConfig->logo))
                                <label for="image"><b>Image Logo</b></label>
                                <div class="uniform-uploader"><input type="file" name="logo" class="form-control-uniform" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn btn-light legitRipple" style="user-select: none;">Choose File</span></div> 
                            @endif
                            @if (isset($appConfig->logo_text))
                            <label for="text"><b>Text Logo</b></label>
                            <input type="text" name="text_logo" class="form-control" value=" @if (isset($appConfig->logo_text)) {{$appConfig->logo_text}} @endif">
                            @endif
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