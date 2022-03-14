<div class="form-group">
    <label for="">User Name</label>
    {{-- <input type="text" class="form-control" name="user_name" value="{{$account->user_name ?? "" }}"> --}}

    {!!form::text('user_name', isset($account->user_name) ? $account->user_name : null   ,[
        'class' => 'form-control'
    ])!!}
    <span class="text-danger">
        @error('user_name')
        *{{$message}}
        @enderror
    </span>
</div>


<div class="form-group">
    <label for="">First Name</label>
    {{-- <input type="text" class="form-control" name="first_name" value="{{$account->first_name ?? "" }}"> --}}
    {!!form::text('first_name', isset($account->first_name) ? $account->first_name : null   ,[
        'class' => 'form-control'
    ])!!}

    <span class="text-danger">
        @error('first_name')
        *{{$message}}
        @enderror
    </span>
</div>

<div>
    <h1></h1>
</div>

<div class="form-group">
    <label for="">Last Name</label>
    {{-- <input type="text" class="form-control" name="last_name" value="{{$account->last_name ?? "" }}"> --}}
    {!!form::text('last_name', isset($account->last_name) ? $account->last_name : null   ,[
        'class' => 'form-control'
    ])!!}

    <span class="text-danger">
        @error('last_name')
        *{{$message}}
        @enderror
    </span>
</div>


<div class="form-group">
    <label for="">Date of Birth</label>
    {{-- <input type="date" class="form-control" name="dob" value="{{$account->dob ?? "" }}"> --}}
    {!!form::date('dob', isset($account->dob) ? $account->dob : null   ,[
        'class' => 'form-control'
    ])!!}

    <span class="text-danger">
        @error('dob')
        *{{$message}}
        @enderror
    </span>
</div>


<div class="form-group">
    <label for="">Phone</label>
    {{-- <input type="number" class="form-control" name="phone" value="{{$account->phone ?? "" }}"> --}}
    {!!form::number('phone', isset($account->phone) ? $account->phone : null   ,[
        'class' => 'form-control'
    ])!!}
    <span class="text-danger">
        @error('phone')
        *{{$message}}
        @enderror
    </span>
</div>


<div class="form-group">
    <label for="">Email</label>
    {{-- <input type="email" class="form-control" name="email" value="{{$account->email ?? "" }}"> --}}
    {!!form::email('email', isset($account->email) ? $account->email : null   ,[
        'class' => 'form-control'
    ])!!}

    <span class="text-danger">
        @error('email')
        *{{$message}}
        @enderror
    </span>
</div>


<div class="form-group">
    <label for="">Address</label>
    {{-- <input type="textarea" class="form-control" name="address" value="{{$account->address ?? "" }}"> --}}
    {!!form::text('address', isset($account->address) ? $account->address : null   ,[
        'class' => 'form-control'
    ])!!}
    <span class="text-danger">
        @error('address')
        *{{$message}}
        @enderror
    </span>
</div>


{{-- <div class="form-group">
<label for="">Hobby</label><br>
Cricket <input type="checkbox" class="" name="hobby[]" value="cricket"><br>
Batminton<input type="checkbox" class="" name="hobby[]" value="batminton"><br>
Football<input type="checkbox" class="" name="hobby[]" value="football"><br>
</div> --}}

<div class="form-group">
    <label for="">Hobby</label><br>
Cricket{!!Form::checkbox('hobby[]', 'cricket')!!}
Batminton{!!Form::checkbox('hobby[]', 'batminton')!!}
Football{!!Form::checkbox('hobby[]', 'football')!!}
</div>


<div class="form-group">
{{-- <label for="gender">Gender</label><br>
        <label for="male">Male</label>
       <input type="radio" class="" name="gender" value="male"  {{($account->gender ?? '') =='male' ? "checked" : ""}}>

       <label for="male">Female</label>
       <input type="radio" class="" name="gender" value="female" {{($account->gender ?? '') =='female' ? "checked" : ""}}>  --}}

    Male {!!Form::radio('gender', 'male', ($account->gender ?? '') =='male' ? "checked" : "")!!}
     Female{!!Form::radio('gender', 'female', ($account->gender ?? '') =='female' ? "checked" : "")!!}

</div>
<select name="country">
    <option name="country" value="" >Select your Country</option>
    <option name="country" value="india" {{($account->country ?? '') == 'india' ? "Selected" : ""}}>India</option>
    <option name="country" value="china" {{($account->country ?? '') == 'china' ? "Selected" : ""}}>China</option>
    <option name="country" value="pakistan" {{($account->country ?? '') == 'pakistan' ? "Selected" : ""}}>Pakistan</option> --}}
</select>


{{-- {!! Form::select('country',[
    '' => 'Select your Country',
    "india (($account->country ?? '') == 'india' ? 'Selected' : '')" => 'India',
    "china (($account->country ?? '') == 'china' ? 'Selected' : '')"=>'China',
    'pakistan'=>'Pakistan'
    ],'') !!} --}}


<select name="state">
    <option name="state" value="" >Select your state</option>
    <option name="state" value="gujarat" {{($account->state ?? '') == 'gujarat' ? "Selected" : ""}}>Gujarat</option>
    <option name="state" value="maharashtra" {{($account->state ?? '') == 'maharashtra' ? "Selected" : ""}}>Maharashtra</option>
    <option name="state" value="up" {{($account->state ?? '') == 'up' ? "Selected" : ""}}>Up</option>
</select>
  

<br>


<button type="submit" class="btn btn-primary">Submit</button>
</div>