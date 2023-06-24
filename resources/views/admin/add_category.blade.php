<x-sg-master>
<div class="content">
            <h3>Add Category</h3>

            <form action="{{route('create_categorie')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
            <x-dataentry.name/>
                
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Description</label>
                    <div class="col-lg-10">
                                <x-dataentry.textarea>
                                name= "description"
                                </x-dataentry.textarea>
                     </div>
                </div>

                <x-dataentry.image/>

                
                <x-dataentry.submit/>
            </form>
        </div>
</x-sg-master>