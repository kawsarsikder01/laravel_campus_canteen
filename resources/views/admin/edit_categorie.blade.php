<x-sg-master>
    <div class="content">
                <h3>Add Category</h3>
    
                <form action="/categorie/{{$categorie->id}}/update" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Categorie Name</label>
                        <div class="col-lg-10">
                                   <x-sg-text name="name" value="{{$categorie->name}}"/>
                         </div>
                    </div>
    
                    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Description</label>
                        <div class="col-lg-10">
                            <textarea name="description" type="text" class="form-control">{{$categorie->description}}</textarea>
                         </div>
                    </div>
    
                    <x-dataentry.image>
                        {{$categorie->image}}
                    </x-dataentry.image>
    
                    
                    <x-sg-btn-submit/>
                </form>
            </div>
    </x-sg-master>