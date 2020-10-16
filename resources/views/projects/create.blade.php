@extends('layouts.app')

@section('content')
<form method="POST" action="/projects">
@csrf
<h1 class="heading-is-1" style="padding-bottom: 20px">Create a project</h1>
<div class="field">
  <label class="label">Project title</label>
  <div class="control">
    <input class="input" type="text" placeholder="Title" name="title">
  </div>
</div>

<div class="field">
  <label class="label">Task</label>
  <div class="control">
    <textarea class="textarea" placeholder="Enter your task here..." name="description"></textarea>
  </div>
</div>

<div class="control">
    <button class="button is-link">Submit</button>
    <a href="/projects">Cancel</a>
  </div>

</form>
@endsection