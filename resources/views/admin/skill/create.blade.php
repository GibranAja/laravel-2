<form action="{{ route('admin.skill.store') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title">
</div>
  <div class="mb-3">
    <label for="description" class="form-label">description</label>
    <textarea name="description" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>