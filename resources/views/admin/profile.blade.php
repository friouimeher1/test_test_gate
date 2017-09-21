@extends('admin.layout.default')

@section('content')
@section('notify')
{{$notifications}}
@endsection
@section('notfy1')
{{$notifications}}
@endsection

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h4>Modifier Profile</h4>
        </div>
        <div class="panel-body">
          <form class="form-horizontal" action="{{route('profile.update',$admin->id)}}" method="post" enctype="multipart/form-data">
              <!-- Title -->
              {{csrf_field()}}
              {{method_field('PUT')}}
              <div class="form-group">
                <label class="control-label col-lg-2" for="title">Nom</label>
                <div class="col-lg-6">
                  <input type="text" value="{{$admin->name}}" name="nom"class="form-control" id="title">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-2" for="title">E-mail</label>
                <div class="col-lg-6">
                  <input type="text" value="{{$admin->email}}" name="nom"class="form-control" id="title">
                </div>
              </div>
              <!-- Tags -->

              <div class="form-group">
                <label class="control-label col-lg-2" for="tags">Image</label>
                <div class="col-lg-6">
                  <img src="{{url(Auth::guard('admin')->user()->image)}}" border="1px" width="100px" height="100px">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="title">Modifier Image</label>
                <div class="col-lg-6">
                  <input type="file" name="image"class="form-control" id="title">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2" for="tags">Mot de passe</label>
                <div class="col-lg-6">
                  <input type="text"  name="password" class="form-control" id="tags">
                </div>
              </div>
              <!-- Buttons -->
              <div class="form-group">
                 <!-- Buttons -->
                 <div class="col-lg-6">
                  <center>
                      <button type="submit" class="btn btn-primary" name="button">Modifier Profil</button>
                    </center>
                   </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


</table>



@stop
