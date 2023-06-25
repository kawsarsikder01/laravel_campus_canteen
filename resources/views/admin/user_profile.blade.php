<x-sg-master>
    <div class="content">
        <section id="customer-details">
            <div class="customer-details">
                <div class="image">
                    <img src="{{asset('image/'.$profile->image)}}" height="300px" width="300px" alt="user image">
                </div>
                <div class="details">
                    <h3 style="font-size:35px;padding:0;">Customer Details</h3>
                    <h3 style="font-size:25px;">{{$profile->name}}</h3>
                    <p><i class="icon-phone2"></i> {{$profile->phone}}</p>
                    <p>email : {{$profile->email}} </p>
                    <p>Address : {{$profile->address}}</p>
                    <p>User Name : {{$profile->username}}</p>
                    <p>DOB : {{$profile->dob}}</p>
                    <p>Age : {{$profile->age}}</p>
                </div>
            </div>
        </section>


    </div>


</x-sg-master>