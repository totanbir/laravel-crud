@include('inc.header')

@if(session('info'))
<div class="alert alert-success">
	{{session('info')}}
	</div>
@endif
    <table class="table table-striped table-hover">
      <thead>
<tr>
<th>ID</th>
<th>Title</th>
<th>Description</th>
<th>Action</th>

	</tr>
	</thead>
	<tbody>
	@if(count($articles) > 0)
	@foreach($articles->all() as $article)
	<tr>
	
<td>{{ $article->id }}</td>
<td>{{ $article->title }}</td>
<td>{{ $article->description }}</td>
<td>
<a href='{{ url("/read/{$article->id}") }}' class="read" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="read">&#xE86D;</i></a>

<a href='{{ url("/update/{$article->id}") }}' class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

<a href='{{ url("/delete/{$article->id}") }}' class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
</td>
        </tr>
        @endforeach
       @endif
        
      </tbody>
    </table>
  </div>
</div>
<!-- Edit Modal HTML -->

<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h4 class="modal-title">Edit Employee</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" required></textarea>
          </div>
          <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-info" value="Save">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h4 class="modal-title">Delete Employee</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete these Records?</p>
          <p class="text-warning"><small>This action cannot be undone.</small></p>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-danger" value="Delete">
        </div>
      </form>
    </div>
  </div>
</div>
  
@include('inc.footer')