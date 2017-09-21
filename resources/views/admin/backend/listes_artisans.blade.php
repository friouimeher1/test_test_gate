@extends('admin.layout.default')

@section('content')

<div class="container">
	<div class="col-md-11">
     <div class="work-progres">
                  <div class="chit-chat-heading">
										Listes des artisans
                  </div>
                  <div class="table-responsive">
                      <table class="table table-hover table-bordered">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>EMAIL</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
											@foreach($techniciens as $technicien)
                      <tr>
                        <td>{{$technicien->id}}</td>
                        <td>{{$technicien->name}}</td>
                        <td>{{$technicien->email}}</td>

                        <td></td>
                        <td>

                          <button type="button" class="" name="button"></button>
													 <button class="btn btn-info"  style="height:40px;margin-bottom:15px;margin-right:10px;padding-top:8px;" id="show{{ $technicien->id }}" ><i class="fa fa-eye"></i> Consulter</button>

                        </td>
                    </tr>
											@endforeach
                </tbody>
            </table>
        </div>
      </div>
      </div>
    </div>




<!-- show Modal -->

@foreach($techniciens as $technicien)
    <div id="showModal{{$technicien->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">À propos de Client</h4>
                </div>
                <div id="tableContainer-1" >
                    <div class="modal-body" id="tableContainer-2">
                        <table id="myTable">

                        </table>

                        <div class="clearfix"></div>
                        <hr style="margin:5px 0 5px 0; ">
                        <div class="col-sm-8"><i class="fa fa-user"></i><span style="margin-left: 13px;">Nom:</div> </span><div class="col-sm-4" >
                            <span>{{ $technicien->name }}</span></div>
                        <div class="clearfix"></div>
                        <div class="bot-border"></div>


                        <div class="clearfix"></div>
                        <hr style="margin:5px 0 5px 0; ">
                        <div class="col-sm-8"><i class="fa fa-envelope-o"></i><span style="margin-left: 13px;">Email:</div> </span><div class="col-sm-4" >
                            <span>{{ $technicien->email }}</span></div>
                        <div class="clearfix"></div>
                        <div class="bot-border"></div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon_close_alt2" style="margin-right: 4px;"></i>Fermer</button>
                </div>
            </div>

        </div>
    </div>
@endforeach
<!--end show modal-->


@endsection



<script >
 @foreach($techniciens as $technicien)
  $(document).ready(function () {

    $('#show{{$technicien->id}}').click(function(){
         $('#showModal{{$technicien->id}}').modal('show');

    });


});

  @endforeach

  </script>
