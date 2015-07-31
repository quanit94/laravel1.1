@extends('content.index')

@section('content')
	<section class="content-header">
          <h1>
            Dashboard
            <small> User Manager</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> User Manager</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="box">
                <div class="box-header">
                  <h3 class="box-title">List App User</h3>
                  <div class="btn-group" style="float:right;">
                    <a href="{!!URL::route('add_user_get')!!}"><button type="button" class="btn btn-info">Add User</button></a>
                  </div>
                  
                </div><!-- /.box-header -->
                @if(Session::has('flash_success'))
                  <div class="alert alert-success">
                      {{Session::get('flash_success')}}
                  </div>
                  @endif
                  @if(Session::has('flash_error'))
                  <div class="alert alert-error">
                      {{Session::get('flash_error')}}
                  </div>
                  @endif
                    <div class="box-body table-responsive no-padding">
                      <table id="example1" class="table table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Level</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $num = 1;?>
                       	@foreach($data as $data)
                          <tr>
                            <td>{{$num++}}</td>
                            <td>{{$data->user}}</td>
                            <td>{{$data->salt}}</td>
                            <th>{{$data->name}}</th>
                            <th class="avatar"><img src="{!!URL::to("public.$data->image")!!}"/></th>
                            <td>{{$data->level}}</td>
                            <td><a href="{{URL::route('edit_user_get', array('id'=>$data->id))}}"><i class="fa fa-pencil-square-o"></i></a></td>
                            <td><a href="{{URL::route('delete_user', array('id'=>$data->id))}}" class="delete"><i class="fa fa-trash"></i></a></td>
                          </tr>
                        @endforeach

                        </tbody>
                        <tfoot>
                          <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Level</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>

                        </tfoot>
                      </table>
                    </div><!-- /.box-body -->
                  </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

@endsection

@section('other_js')

<script type="text/javascript">

  $(function (){
    $('.delete').on('click', function(){
      return confirm("Are you sure want to delete?");
    });
  });
</script>


@endsection