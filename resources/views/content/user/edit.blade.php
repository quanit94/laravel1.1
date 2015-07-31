@extends('content.index')

@section('content')
        <section class="content-header">
          <h1>
            Dashboard
            <small> User Manager</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Usermanage</a></li>
            <li class="active"> Edit user</li>
          </ol>
        </section>
	       <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Add New User</h3>
                 {{$data->name}}
                  {!!Form::open(array('url' => 'add-new-user', 'method' => 'post', 'files' => true))!!}
                  <div class="box-body">
                    <div class="form-group">
                      {!!Form::label('name')!!}
                      {!!Form::text('name', $data->name, array('class' => 'form-control') )!!}
                    </div>
                    <div class="form-group">
                      {!!Form::label('email')!!}
                      {!!Form::email('email',$data->name, array('class' => 'form-control', 'placeholder' => 'Enter your email...') )!!}
                    </div>
                    <div class="form-group">
                      {!!Form::label('password')!!}
                      <input type="password" class="form-control" id="password" name="password" value="{{$data->salt}}">
                    </div>
                    <div class="form-group">
                      {!!Form::label('repass')!!}
                      <input type="password" class="form-control" id="repass" name="repass" placeholder="{{$data->salt}}">
                    </div>
                    <div class="form-group">
                      {!!Form::label('image')!!}
                      {!!Form::file('image')!!}
                    </div>
                      {!!Form::label('level')!!}&nbsp;
                      Admin{!!Form::radio('level', 1, '', array('class' => 'iradio_minimal-blue checked') )!!}
                      User {!!Form::radio('level', 0, '', array('class' => 'iradio_minimal-blue checked') )!!}
                  </div><!-- /.box-body -->
  
                  <span class="report"></span>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" id="submit-add-user">Submit</button>
                  </div>
                </div>
                  {!!Form::close()!!}
        
          </section><!-- /.content -->

@endsection

@section('other_js')

<script type="text/javascript">
      $(function () {
        $('#submit-add-user').on('click', function(){
            $name  = $('#name').val();
            $email = $('#email').val();
            $pass  = $('#password').val();
            $repass= $('#repass').val();
            $level = $('input[name="level"]:checked').val();
            if($name == ''){
              $('.report').text("You didn't enter name!");
              return false;
            }
            if($email == ''){
              $('.report').text("You didn't enter email!");
              return false;
            }
            if($pass == ''){
              $('.report').text("You didn't enter password!");
              return false;
            }
            if($repass == ''){
              $('.report').text("You didn't enter repass!");
              return false;
            }
            if($repass != $pass){
              $('.report').text("Password repeat invalid!");
              return false;
            }
            return true;
        });
      });
</script>

@endsection