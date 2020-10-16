<!DOCTYPE html>
<html>
<head>
<title>Create</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
</head>

<body>

<div class="container">
<form method="POST" action="/projects" style="padding-top: 40px">
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
  </div>

</form>
</div>

</body>

</html>