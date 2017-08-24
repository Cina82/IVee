@extends('layouts.back')
@section('css')
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="{{ URL::to('public/admin/assets/js/bootstrap-notify.js') }}"></script>
@endsection
@section('contents')
 <div class="content">
 <div class="col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">All Question</h4>
        </div>
            
            <div style="padding-right: 15px;" class="text-right">
                <a href="{{ URL::to('newQuestion') }}" class="btn btn-info">Create New question</a>
            </div>

            <div class="card-content table-responsive">
                <table class="mdl-data-table" id="example" border="0" width="100%">
                <thead>
                    <tr>
                        <th class="text-center">Service</th>
                        <th class="text-center">Action</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                  
                    @foreach($mainData as $posts)

                    @php 

                        $question=json_decode($posts->question);
                        foreach($services as $service)
                        if($service->id == $question['0']->categoryService)
                            {
                                $ser=$service->name;

                            }
                            else{
                            $ser='';
                            }
                            
                    @endphp
                     
                    <tr>
                         <td>

                           {{$ser}}
                         </td>   
                        <td>
                             <a href="editQuestion{{$posts->id}}" type="button" rel="tooltip" class="btn btn-success btn-xs" data-original-title="" title="Edit">
                            <i class="material-icons">edit</i>
                            <div class="ripple-container"></div></a>
                        </td>
                        <td>
                             <a href="deleteQuestion{{$posts->id}}" type="button" rel="tooltip" class="btn btn-danger btn-xs" data-original-title="" title="Delete" onclick="return ConfirmDelete()">
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
@if(Session::has('message'))
    <script>
        var msg = "{{ Session::get('message') }}";
            type = ['','info','success','warning','danger'];
                $.notify({
                icon: "notifications",
                message: msg
                },{
                    type: 'success',
                    timer: 1000,
                    placement: {
                        from: 'bottom',
                        align: 'right'
                    }
                });
    </script>
@endif
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
        <script>
        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete Question?");
            if (x)
            return true;
            else
            return false;
        }
        </script>
        <script type="text/javascript">
          setTimeout(function() {
          $('#successMessage').fadeOut('slow');
          }, 2000);
        </script>
@endsection