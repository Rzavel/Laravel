@extends('layouts.manage')

@section('content')
  <div class="flex-container">


  <div class="columns">
    <div class="column">
        <h1 class="title">This is the Posts.index Page</h1>
    </div>
    <div class="column">
      <a href="{{route('posts.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus" aria-hidden="true"></i>
Create New Post</a>
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
            Titel
          </th>
          <th>
            Date Created
          </th>
          <th>

          </th>
        </tr>
        </thead>
        <tbody>

          @foreach ($posts as $post)
            <tr>
              <th>
                {{$post->id}}
              </th>
              <td>
                {{$post->slug}}
              </td>
              <td>
                {{$post->title}}
              </td>
              <td>
                {{$post->created_at->toFormattedDateString()}}
              </td>
              <td class="has-text-right">
                <form onsubmit="return confirm('Do you really want to delete?');" action="{{route('posts.destroy', $post->id)}}" method="POST">
                  {{ method_field('DELETE') }}
                  {{csrf_field()}}
                  <a  class="button is-link is-outlined m-r-5" href="{{route('posts.show', $post->id)}}">View</a>
                  <a  class="button is-link is-outlined" href="{{route('posts.edit', $post->id)}}">Edit</a>
                  <button class="button is-link is-danger is-outlined m-r-5">Delete</button>
                </form>

                {{-- <a  class="button is-link is-outlined is-danger" href="{{route('posts.destroy', $post->id)}}">DELETE</a> --}}
              </td>
            </tr>
          @endforeach

        </tbody>
      </table>




    </div>
  </div>
</div>  <!-- end of .flex -->

@endsection
