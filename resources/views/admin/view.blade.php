<x-sg-master>
<div class="content">
                <section id="customer-details">
                    <div class="customer-details">
                        <div class="image">
                            <img src="{{asset('image/'.$customer->image)}}" height="300px" width="300px" alt="customer image">
                        </div>
                        <div class="details">
                            <h3 style="font-size:35px;padding:0;">Customer Details</h3>
                            <h3 style="font-size:25px;"><?=$customer->name?></h3>
                            <p><i class="icon-phone2"></i> <?=$customer->phone?></p>
                            <p>email : <?=$customer->email?></p>
                            <p>Address : <?=$customer->address?></p>
                            <p>User Name : <?=$customer->username?></p>
                            <p>Passwoard : <?=$customer->passwoard?></p>
                        </div>
                    </div>
                </section>


            </div>
</x-sg-master>