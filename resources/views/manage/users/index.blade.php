@extends('layouts.manage')

@section('content')

  <div class="columns">
    <div class="column">
      <h1 class="title">Manage Users</h1>
    </div>
    <div class="column">
      <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus" aria-hidden="true"></i>
Create New User</a>
    </div>
  </div>
  <hr />
  <div class="card">
    <div class="card-content">

      <table class="table is-narrow is-fullwidth is-hoverable">
        <thead>

        <tr>
          <th>
            ID
          </th>
          <th>
            Name
          </th>
          <th>
            Email
          </th>
          <th>
            Date Created
          </th>
          <th>

          </th>
        </tr>
        </thead>
        <tbody>

          @foreach ($users as $user)
            <tr>
              <th>
                {{$user->id}}
              </th>
              <td>
                {{$user->name}}
              </td>
              <td>
                {{$user->email}}
              </td>
              <td>
                {{$user->created_at->toFormattedDateString()}}
              </td>
              <td class="has-text-right">

                <form onsubmit="return confirm('Do you really want to delete?');" action="{{route('users.destroy', $user->id)}}" method="POST">
                  {{ method_field('DELETE') }}
                  {{csrf_field()}}
                  <a  class="button is-link is-outlined m-r-5" href="{{route('users.show', $user->id)}}">View</a>
                  <a  class="button is-link is-outlined m-r-5" href="{{route('users.edit', $user->id)}}">Edit</a>
                  <button class="button is-link is-danger is-outlined m-r-5">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach

        </tbody>
      </table>




    </div>
  </div> <!-- end of card-->



{{$users->links()}}

@endsection
@section('scripts')
  <script>
  </script>
  @endsection
