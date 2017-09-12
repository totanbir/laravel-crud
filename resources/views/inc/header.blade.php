<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>laravel crud app</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto|Varela+Round'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>

      <link rel="stylesheet" href="{{ url('css/style.css') }}">
      <script type="text/javascript" src="{{ url('js/index.js') }}"></script>

  
</head>

<body>
  <div class="container">
  <div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6">
          <a href="{{ url('/') }}"><h2>Laravel <b>Crud</b> App</h2>
          </a>
        </div>
        <div class="col-sm-6">
          <a href="{{ url('/add') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Post</span></a>
          </div>
      </div>
    </div>