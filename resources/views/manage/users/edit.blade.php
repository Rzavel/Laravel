@extends('layouts.manage')

@section('content')

<div class="flex-container">
  <div class="columns m-t-10">
    <div class="column">
      <h1 class="title">Edit User</h1>
    </div>
  </div>
  <hr class="m-t-0" />


  <form action="{{route('users.update', $user->id)}}" method="POST">
    {{method_field('PUT')}}
    {{csrf_field()}}
    <div class="columns">
      <div class="column">


          <div class="field">
            <label for="name" class="label">Name</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name" value="{{$user->name}}"/>
            </p>

          </div>

          <div class="field">
            <label for="email" class="label">E-Mail</label>
            <p class="control">
              <input type="text" class="input" name="email" id="email" value="{{$user->email}}" />
            </p>
          </div>

          <div class="control">
            <div class="field">

              <label for="password" class="label">Password</label>
              <label class="radio">
                <input type="radio" v-model="password_options" name="password_options" value="keep" checked>
                  Do not change Password
              </label>
            </div>
            <div class="field">
              <label class="radio">
                <input type="radio" v-model="password_options" name="password_options" value="auto">
                Auto-Generate- New Password
              </label>
            </div>

            <div class="field">
              <label class="radio">
                <input type="radio" v-model="password_options" name="password_options" value="manual">
                Manually Set Password
              </label>
            <p class="control">
              <input type="text" v-if="password_options == 'manual'" class="input m-t-10" name="password" id="password"  placeholder="Manual Password">
            </p>
            </div>

      </div>




</div>
{{-- end of column --}}
<div class="column">
<label for="roles" class="label">Roles</label>
<input type="hidden" name="roles" :value="rolesSelected" />
@foreach ($roles as $role)
             <div class="field">
               <b-checkbox v-model="rolesSelected" :native-value="{{$role->id}}">{{$role->display_name}}</b-checkbox>
             </div>
@endforeach

</div>

</div>
<div class="columns">
  <div class="column">
<hr />
    <button class="button is-primary m-t-10" style="width: 250px;">Edit User</button>
  </div>
</div>
</form>
</div>
{{-- end of flex.container --}}
@endsection
@section('scripts')
  <script>

var app = new Vue({
    el: '#app',
    data: {
    password_options: 'keep',
    rolesSelected: {!! $user->roles->pluck('id') !!}
    }
  });
</script>
@endsection
