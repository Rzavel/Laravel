@extends('layouts.manage')

@section('content')

<div class="flex-container">
  <div class="columns m-t-10">
    <div class="column">
      <h1 class="title">View Post Detail</h1>

    </div>
    {{-- end of column 1 --}}

  </div>
  <hr class="m-t-0" />

<div class="columns">
  <div class="column">
    <div class="field">
      <label for="name" class="label">Title</label>

        <pre>
          {{($post->title)}}
        </pre>


  </div>

  <div class="field">
    <div class="field">
      <label for="email" class="label">Slug</label>
      <pre>
      {{$post->slug}}
      </pre>
    </div>
  </div>
  <div class="field">
    <div class="field">
      <label for="email" class="label">Author-ID</label>
      <pre>
      {{$post->author_id}}
      </pre>
    </div>
  </div>
  <div class="field">
  <div class="control">
    <textarea class="textarea is-primary" type="text" placeholder="Primary textarea">

      {{$post->content}}

    </textarea>
  </div>
</div>



</div>
</div>

</div>
{{-- end of flex.container --}}
@endsection
