<x-sg-master>
 
<div class="content">
            <h3>Add Customer</h3>

            <form action="{{route('customercontroller')}}" method="post" enctype = "multipart/form-data" >
            @csrf
            @method('post')
            <x-dataentry.name/>
            <x-dataentry.phone/>
            <x-dataentry.email/>
            <x-dataentry.address/>
            <x-dataentry.image/>
            <x-dataentry.username/>
            <x-dataentry.password/>
            <x-dataentry.submit/>
             
               
            </form>
        </div>

        
</x-sg-master>