@extends('admin.layout.default')

@section('content')
@section('notify')
{{$notifications}}
@endsection
@section('notfy1')
{{$notifications}}
@endsection
<div class="market-updates">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
						<h3>{{$x}}</h3>
						<h4>Nombre des Artisans inscrit</h4>

					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-file-text-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-2">
				 <div class="col-md-8 market-update-left">
					<h3>{{$clients}}</h3>
					<h4>Nombre des clients inscrit</h4>

				  </div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-file-text-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-8 market-update-left">
						<h3>23</h3>
						<h4>New Messages</h4>
						<p>Other hand, we denounce</p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-envelope-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>
		<br>
<div class="container">
	<div class="col-md-11">
     <div class="work-progres">
                  <div class="chit-chat-heading">
										Listes des artisans non approuvé
                  </div>
                  <div class="table-responsive">
                      <table class="table table-hover table-bordered">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom</th>

                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
											@foreach($techniciens as $technicien)
                      <tr>
                        <td>{{$technicien->id}}</td>
                        <td>{{$technicien->name}}</td>
                        <td>{{$technicien->email}}</td>

                        <td><span class="label label-danger">Non apprové</span></td>
                        <td><span class="badge badge-info"><form action="{{route('approve')}}" method="POST">
                              {{ csrf_field() }}
                              <input <?php if($technicien->approve == 1) { echo "checked";}?> type="checkbox" name="approve">
                              <input type="hidden" name="technicienId" value="{{ $technicien->id }}"> &nbsp;
                              <p><input type="submit" value="Approver" class="btn btn-primary"></p>
                          </form>
                          <form method="POST" action="{{ route('home1.destroy', $technicien->id) }}" accept-charset="UTF-8">
                          {{ csrf_field() }}
                          <input name="_method" type="hidden" value="DELETE">
                          <div class="btn-group">

                          <input type="submit" class="btn btn-danger" onclick="return confirm('are you sure ?');" value="Supprimer">
                        </div>
                        </form></span></td>
                    </tr>
											@endforeach
                </tbody>
            </table>
        </div>
             </div>
      </div>
    </div>
@endsection
