@extends('layouts.manage')

@section('content')
  <div class="flex-container">


  <div class="columns">
    <div class="column">
        <h1 class="title">This is the Index of deleted Posts</h1>
    </div>
    <div class="column">
      <a href="{{route('posts.index')}}" class="button is-primary is-pulled-right"><i class="fa fa-folder-open" aria-hidden="true"></i>
Show Posts</a>
    </div>
  </div>
  <hr />
  <div class="card">
    <div class="card-content">

      <table class="table is-narrow is-fullwidth is-hoverable">
        <thead>

        <tr bgcolor="#FF0000">
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

              Date Deleted

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
              <td>
                {{$post->deleted_at->toFormattedDateString()}}
              </td>
              <td class="has-text-right">
                <form onsubmit="return confirm('Do you really want to restore?');" action="{{route('rest', $post->id)}}" method="POST">
                  {{method_field('PUT')}}
                  {{csrf_field()}}

                  <a  class="button is-link is-outlined m-r-5" href="{{route('posts.show', $post->id)}}">View</a>
                  <a  class="button is-link is-outlined" href="{{route('posts.edit', $post->id)}}">Edit</a>
                  <button class="button is-link is-success is-outlined m-r-5">Restore</button>
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
