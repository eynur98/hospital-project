@extends('back.layouts.master')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">

                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Sertifikatlar </h4>
                            <button type="button"
                                onclick="unSet()"   class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#partners_modal">Əlavə et</button>
                        </div>
                        <div class="card-body">
                            <table class="table table-nowrap">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                
                                    <th scope="col">Foto</th>
                                   
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($certificate as $partner)
                                    <tr>

                                        <th scope="row"><a href="#" class="fw-semibold">#{{$partner->id}}</a></th>
                                     
                                        <td> <img src="{{$partner->image}}" width="50" height="50"> </td>
                                      
                                        <td>
                                            <div class="flex-wrap gap-3 hstack">

                                                    <button type="button"
                                                            data-bs-toggle="modal" data-bs-target="#partners_modal"
                                                            class="btn btn-ghost-info waves-effect waves-light shadow-none" onclick="formEditButton('{{$partner->id}}')"><i class="ri-edit-2-fill"></i></button>

                                            <form action="{{route('certificates.destroy',$partner->id)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="from_edit btn btn-ghost-danger waves-effect waves-light shadow-none"><i class="ri-delete-bin-line"></i></button>

                                            </form>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Default Modals -->

                <div id="partners_modal" class="modal fade" tabindex="-1" aria-labelledby="partners_modalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="partners_modalLabel">Sertifikat Əlavə Et</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('certificates.store')}}" id="partner_form" method="post"  enctype='multipart/form-data'>
                                   @csrf

                                    <div class="row mb-3">
                                        <div class="col-lg-3">
                                            <label for="foto" class="form-label">Foto</label>
                                        </div>
                                        <div class="col-lg-9 d-flex">

                                            <img id="update_photo"/>
                                                <input class="form-control" name="image" type="file" id="foto">

                                        </div>
                                    </div>
                                   





                                </form>
                           </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary " id="submit_button" form="partner_form">Save Changes</button>
                            </div>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
      const action =   $("#partner_form").attr('action')
      const title_form =  $('#partners_modalLabel').text()
        function unSet(){
            $("#partner_form").attr('action',action)
            $("#hidden__").remove()
            $('#partners_modalLabel').text(title_form)
            $('#update_photo').removeAttr('src')

            $('#titleInput').val('')
            $('#update_photo').css({'width':'0','height':'0'})

            $('#type_form').val('0')
            $('#foto').val('')
        }
        ;
       function formEditButton(id_) {

           $("#partner_form").attr('action','http://127.0.0.1:8000/cerificate/'+id_)
           $("#partner_form").append( `<input type="hidden" name="_method" value="PUT" id="hidden__">`)
           $('#partners_modalLabel').text('Sertifikat yenile')
           $.ajax({
               type: "GET",
               url: 'partners/'+id_,
                // serializes the form's elements.
               success: function(data)
               {
                   $('#titleInput').val(data.title)
                   $('#update_photo').css({'width':'80px','height':'80px'})
                   $('#update_photo').attr('src','/'+data.image)
                   $('#type_form').val(data.type)

                   console.log(data); // show response from the php script.
               }
           });
       }











    </script>
    @endsection
