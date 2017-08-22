@extends('layouts.back')
@section('css')
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css">
@endsection
@section('contents')
 <div class="content">
 <div class="col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Page Management</h4>
        </div>
            @if(Session::has('message'))
                <div class="col-md-12" id="successMessage">
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                </div>
            @endif
            <div style="padding-right: 15px;" class="text-right">
                <a href="{{ URL::to('newPage') }}" class="btn btn-info">Create New Page</a>
            </div>

            <div class="card-content table-responsive">
                <table class="mdl-data-table" id="example" border="0" width="100%">
                <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Meta Title</th>
                        <th class="text-center">Meta Description</th>
                        <th class="text-center">Meta Value</th>
                        <th class="text-center">Action</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($post as $posts)
                    <tr>
                        <td>{{$posts->name}}</td>
                        <td>{{$posts->metaTitle}}</td>
                        <td>{{$posts->metaDescription}}</td>
                        <td>{{$posts->metaValue}}</td>
                        <td>
                             <a href="editPage{{$posts->id}}" type="button" rel="tooltip" class="btn btn-success btn-xs" data-original-title="" title="Edit">
                            <i class="material-icons">edit</i>
                            <div class="ripple-container"></div></a>
                        </td>
                        <td>
                             <a href="deletePage{{$posts->id}}" type="button" rel="tooltip" class="btn btn-danger btn-xs" data-original-title="" title="Delete">
                            <i class="material-icons">delete</i>
                            <div class="ripple-container"></div></a>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
                </table>

            </div>
        </div>
    </div>
                
</div>
@endsection

@section('javascript')
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
        <script type="text/javascript">
       $(document).ready(function() {
       $('#example').DataTable( {
        columnDefs: [{
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }]
            });
            });
        </script>
        <script type="text/javascript">
          setTimeout(function() {
          $('#successMessage').fadeOut('slow');
          }, 2000);
        </script>
@endsection