<x-sg-master>
<div class="content">
            <h3>Privacy Policy Page Setup</h3>
            <form action="">
                <div class="form-group row">
                    <x-dataentry.label>
                        Heading
                    </x-dataentry.label>
                    <div class="col-lg-10">
                    <x-dataentry.label>
                        name= "heading"
                    </x-dataentry.label>
                    </div>
                </div>
    
    
                <div class="form-group row">
                    <x-dataentry.label>
                        Content
                    </x-dataentry.label>
                        <div class="col-lg-10">
                            <x-dataentry.textarea>
                                 name= "content"
                                </x-dataentry.textarea>
                        </div>
                        </div>
    
                <x-dataentry.image/>

                <x-dataentry.submit/>
            </form>
        </div>
</x-sg-master>