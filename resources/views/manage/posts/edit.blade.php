
@extends('layouts.manage')

@section('content')
  <div class="flex-container">


  <div class="columns m-t-10 m-b-0">
    <div class="column">
        <h1 class="title is-admin is-3">Edit Post</h1>
    </div>
    <div class="column">
      {{-- <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus" aria-hidden="true"></i>
Create New User</a> --}}
    </div>
  </div>
  <hr class="m-t-0">

<form action="{{route('posts.update', $post->id)}}" method="POST">
  {{method_field('PUT')}}
{{ csrf_field() }}
<div class="columns">
  <div class="column is-three-quarters-desktop">





    <div class="field">
      <label for="slug" class="label">Slug</label>
      <p class="control">
        <input type="text" class="input" name="slug" id="slug" value="{{$post->slug}}"/>
      </p>

    </div>

    <div class="field">
      <label for="title" class="label">Title</label>
      <p class="control">
        <input type="text" class="input" name="title" id="title" value="{{$post->title}}"/>
      </p>

    </div>

    <div class="field">
      <label for="excerpt" class="label">Description</label>
      <p class="control">
        <input type="text" class="input" name="excerpt" id="excerpt" value="{{$post->excerpt}}"/>
      </p>
    </div>

    {{-- <div class="field">
      <label for="published_at" class="label">Published at</label>
      <p class="control">
        <input type="text" class="input" name="published_at" id="published_at" value="{{$post->published_at}}"/>
      </p>
    </div> --}}
    {{-- <div class="field">
      <label for="author_id" class="label">Author_ID</label>
      <p class="control">
        <input type="text" class="input" name="author_id" id="author_id" value="{{$post->author_id}}"/>
      </p>
    </div> --}}
    {{-- <div class="field">
      <label for="comment_count" class="label">Comments</label>
      <p class="control">
        <input type="text" class="input" name="comment_count" id="comment_count" value="{{$post->comment_count}}"/>
      </p>
    </div> --}}

      <div class="field m-t-10">
        <div class="control">
          <textarea class="textarea is-primary" type="text" placeholder="Compose your master Piece" rows="20" name ="content" id="content" value="{{$post->content}}">
            {{$post->content}}
            
          </textarea>
        </div>
      </div>


    </div> <!-- end of column three -->

<div class="column is-one-quarter-desktop is-narrow-tablet">
  <div class="card card-widget">
      <div class="author-widget widget-area">
          <div class="selected-author">
            <img src="http://via.placeholder.com/50x50" class="is-pulled-left" />
            <div class="author">
              <h4>By: Reza Ro  </h4>
            <p class="subtitle">
              (rzaaaa)
            </p>
            </div>
          </div>
      </div>

      <div class="post-status-widget widget-area">
        <div class="status">
          <div class="status-icon">
            <i class="fa fa-clipboard" size="is-medium"></i>
          </div>

        <div class="status-details">
          <h4>Draft</h4>
        <p>A few minutes ago (saved)</p>
        </div>

      </div>
      </div>
      <div class="publish-buttons-widget-area">
        <div class="secondary-action-button">
          <button class="button is-info is-outlined is-fullwidth">Save Draft</button>
        </div>
        <div class="primary-action-button">


        <button class="button is-primary is-fullwidth">Publish</button>
        </div>
      </div>

  </div>
</div><!-- end of one quarter-->
</div>
</form>




</div>  <!-- end of .flex -->

@endsection

{{-- @section('scripts')
  <script>
var app = new Vue({
  el: '#app',
  data: {
    title: '',
    slug: '',
    api_token: '{{Auth::user()->api_token}}'
  },
  methods: {
    updateSlug: function(val) {
      this.slug = val;
    }
  }
});
  </script>

@endsection --}}
