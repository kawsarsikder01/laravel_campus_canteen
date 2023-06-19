<x-sg-master>
<div class="content">
            <h3>Add Outdoor Place</h3>

            <form action="">

              <x-dataentry.name/>

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

                <x-dataentry.image/>

                <x-dataentry.submit/>
            </form>
        </div>
</x-sg-master>