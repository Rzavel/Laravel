@extends('layouts.manage')

@section('content')

<div class="flex-container">
  <div class="columns m-t-10">
    <div class="column">
      <h1 class="title">View User Detail</h1>

    </div>
    {{-- end of column 1 --}}
    <div class="column">

      <a href="{{route('users.edit', $user->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i>Edit User</a>


    </div>
  </div>
  <hr class="m-t-0" />

<div class="columns">
  <div class="column">
    <div class="field">
      <label for="name" class="label">Name</label>

        <pre>
          {{($user->name)}}
        </pre>


  </div>

  <div class="field">
    <div class="field">


    <label for="email" class="label">E-Mail</label>
    <pre>
      {{$user->email}}
    </pre>
    </div>
  </div>

</div>
</div>

</div>
{{-- end of flex.container --}}
@endsection
@section('scripts')
  <script>

var app = new Vue({
    el: '#app',
    date: {
    auto_password: true
    }
  });
</script>
@endsection
