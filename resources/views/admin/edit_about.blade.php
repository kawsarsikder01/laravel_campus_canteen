<x-sg-master>
    <div class="content">
        <div class="card p-3 gy-3">
                <h3>About Page Setup</h3>
                <form action="/about/{{$about->id}}/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="form-group row">
                        <x-dataentry.label>
                            Heading
                        </x-dataentry.label>
                        <div class="col-lg-10">
                        <x-sg-text name="heading" value="{{$about->heading}}"/>
                        </div>
                    </div>
        
        
                    <div class="form-group row">
                        <x-dataentry.label>
                            Content
                        </x-dataentry.label>
                            <div class="col-lg-10">
                                <x-sg-text name="content" value="{{$about->content}}"/>
                            </div>
                            </div>
        
                    <x-dataentry.image/>
    
                    <x-dataentry.submit/>
                </form>
            </div>
    </div>
    </x-sg-master>