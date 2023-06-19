<x-sg-master>
<div class="content">
            <h3>Add Category</h3>

            <form action="">
            <x-dataentry.name/>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Type<span class="text-danger">*</span></label>
                    <div class="col-lg-10">
                    <x-dataentry.text>
                        name = "type"
                    </x-dataentry.text>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Description</label>
                    <div class="col-lg-10">
                                <x-dataentry.textarea>
                                name= "description"
                                </x-dataentry.textarea>
                     </div>
                </div>

                <x-dataentry.image/>

                <div class="form-group row">
                    <label class="col-form-label col-lg-2">E-sale Enabled</label>
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