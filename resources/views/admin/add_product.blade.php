<x-sg-master>
<div class="content">
            <h3>Add Product</h3>

            <form action="add_product/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                <x-dataentry.name/>

                <div class="form-group row">
                    <x-dataentry.label>
                        Select Categorie
                    </x-dataentry.label>
                    <div class="col-lg-10">
                        <select class="form-control" name="categorie_id" id="categorie">
                            <option value="">Select Your Categorie</option>
                            @foreach($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                            @endforeach
                            
                          </select>
                    </div>
                </div>

                <div class="form-group row">
                    <x-dataentry.label>
                        Description
                    </x-dataentry.label>
                    <div class="col-lg-10">
                                <x-dataentry.textarea>
                                 name= "description"
                                </x-dataentry.textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <x-dataentry.label>
                        Cost Price
                    </x-dataentry.label>
                    <div class="col-lg-10">
                    <x-dataentry.text>
                        name = "cost_price"
                    </x-dataentry.text>
                    </div>
                </div>

                <div class="form-group row">
                    <x-dataentry.label>
                        Sell Price
                    </x-dataentry.label>
                    <div class="col-lg-10">
                    <x-dataentry.text>
                        name = "sell_price"
                    </x-dataentry.text>
                    </div>
                </div>

                <x-dataentry.image/>

                <div class="form-group row">
                    <x-dataentry.label>
                        E-sale Elabled
                    </x-dataentry.label>
                    <div class="col-lg-10">
                        <div class="form-check form-check-switchery form-check-switchery-double">
                            <label class="form-check-label">
                                Enable
                                <x-dataentry.checkbox>
                                name= "esale"
                                </x-dataentry.checkbox>
                                Disable
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Outdoor Enabled</label>
                    <div class="col-lg-10">
                        <div class="form-check form-check-switchery form-check-switchery-double">
                            <label class="form-check-label">
                                Enable
                                <x-dataentry.checkbox>
                                name= "outdoor"
                                </x-dataentry.checkbox>
                                Disable
                            </label>
                        </div>
                    </div>
                </div>

                <x-dataentry.submit/>
            </form>
        </div>
</x-sg-master>