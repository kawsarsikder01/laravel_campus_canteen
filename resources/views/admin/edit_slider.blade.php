<x-sg-master>
    <div class="content">
                <div class="card p-3 gy-3">
                    <h3>Add Banner Image</h3>
                    <form action="/slider/{{$slider->id}}/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="form-group row">
                            <x-dataentry.label>
                                Heading
                            </x-dataentry.label>
                            <div class="col-lg-10">
                            <x-sg-text name="heading" value="{{$slider->heading}}"/>
                            </div>
                        </div>
            
            
                        <div class="form-group row">
                            <x-dataentry.label>
                                Content
                            </x-dataentry.label>
                                <div class="col-lg-10">
                                    <x-sg-text name="content" value="{{$slider->content}}"/>
                                </div>
                        </div>
            
                        <x-dataentry.image/>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Status</label>
                            <div class="col-lg-10">
                                <div class="form-check form-check-switchery form-check-switchery-double">
                                    <label class="form-check-label">
                                        Enable
                                        <x-dataentry.checkbox>
                                        name= "status"
                                        </x-dataentry.checkbox>
                                        Disable
                                    </label>
                                </div>
                            </div>
                        </div>
        
                        <x-dataentry.submit/>
                    </form>
                </div>
            </div>
    </x-sg-master>