@include('inc.header')
  
      
      <form method="POST" action="{{ url('/insert') }}">
      {{csrf_field()}}
        <div class="modal-header">
          <h4 class="modal-title">Add Post</h4>
          @if(count($errors) > 0)
          @foreach($errors->all() as $error)
          <div class="alert alert-danger">{{$error}}</div>
          @endforeach
        @endif
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
          </div>
          
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"></textarea>
          </div>
         
        </div>
        <div class="modal-footer">
          <a href="{{ url('/') }}" type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">Back</a>
         
          <input type="submit" class="btn btn-success" value="submit">
        </div>
      </form>
    

@include('inc.footer')