<x-sg-master>
    <div class="content">
        <h3>User Rolle Permission</h3>

        <form action="{{route('user_permission')}}" method="post" >
            @csrf
            @method('post')
            <div class="form-group row">
                <label class="col-form-label col-lg-2">User Name</label>
                <div class="col-lg-5">
                    <select class="form-control" name="user_id" id="User">
                        @foreach ($users as $user)
                        <option  value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                 </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Rolle Name</label>
                <div class="col-lg-5">
                    <select class="form-control" name="role_id" id="role">
                        @foreach ($rolles as $rolle)
                        <option  value="{{$rolle->id}}">{{$rolle->name}}</option>
                        @endforeach
                    </select>
                 </div>
            </div>
            <x-dataentry.submit/>
        </form>
    </div>
</x-sg-master>
