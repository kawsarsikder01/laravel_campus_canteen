<x-sg-master>
 
<div class="content">
            <h3>Add Customer</h3>

            <form action="/customer/{{$customer->id}}/update" method="post" enctype = "multipart/form-data" >
            @csrf
            @method('post')
            <x-dataentry.name>
                {{$customer->name}}
            </x-dataentry.name>
            <x-dataentry.phone>
            {{$customer->phone}}
            </x-dataentry.phone>
            <x-dataentry.email>
            {{$customer->email}}
            </x-dataentry.email>
            <x-dataentry.address>
            {{$customer->address}}
            </x-dataentry.address>
            <x-dataentry.image>
            {{$customer->image}}
            </x-dataentry.image>
            <x-dataentry.username>
            {{$customer->username}}
            </x-dataentry.username>
            <x-dataentry.password>
            {{$customer->passwoard}}
            </x-dataentry.password>
            <x-dataentry.submit/>
             
               
            </form>
        </div>

        
</x-sg-master>