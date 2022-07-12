@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h4">Create New Category</h1>
</div>

<div class="col-lg-8">
  <form method="post" action="/dashboard/categories" class="mb-5" >
    @csrf
    <div class="mb-2">
      <label for="name" class="form-label">Nama Category</label>
      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror " id="name"  autofocus value="{{ old('name') }}" required>
      @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-2">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug"  value="{{ old('title') }}" required>
      @error('slug')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
</div>

@endsection

<script>
//slug
const name = document.querySelector('#name');
  const slug = document.querySelector('#slug');

  name.addEventListener('change', function() {
      fetch('/dashboard/categories/checkSlug?name=' + name.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });

</script>