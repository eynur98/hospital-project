@extends('back.layouts.master')
@section('style')
<style>
    .titlesParent input:not(:first-child){
        display: none;
     
    }
</style>
@endsection
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">

                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Xəbər Reyi</h4>
                         
                        </div>
                        <div class="card-body">
                            <table class="table table-nowrap">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Comment</th>
                                   
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $partner)
                                    <tr>

                                        <th scope="row"><a href="#" class="fw-semibold">#{{$partner->id}}</a></th>
                                        <td>{{$partner->text}}</td>
                                        
                                        <td>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox" role="switch" 
                                                {{$partner->status==1?'checked':''}}     id="flexSwitchCheckDefault" oninput="statusSet({{ $partner->id }})">
                                            </div>
                                           
                                    
                                         
                                        
                                        </td>
                                        <td>
                                            <div class="flex-wrap gap-3 hstack">

                                                 

                                            <form action="{{route('comment.destroy',$partner->id)}}" method="post">
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
{{-- custom tab --}}




            
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        // tab function

        function setTab(params,argument) {
            $('.title__input').css("display", "none");
            $('#'+params).css("display", "block")
            $('.nav-link').removeClass( 'active');
            $(argument).children('label').addClass( 'active');
        }
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

        function statusSet(id,status){
            $.ajax({
     
               type: "post",
               url: '/comment-status/'+id,
                // serializes the form's elements.
                data: {
                "status":$('#flexSwitchCheckDefault').prop('checked') ,
                "_token": "{{ csrf_token() }}",
    },
               success: function(data)
               {
                $('#flexSwitchCheckDefault').prop('checked', data.status=='1')
              
          }
           });
        }
       function formEditButton(id_) {
        $('#checkbox').prop("checked", false)
           $("#partner_form").attr('action','http://127.0.0.1:8000/doctor-position/'+id_)
           $("#partner_form").append( `<input type="hidden" name="_method" value="PUT" id="hidden__">`)
           $('#partners_modalLabel').text('Brendi yenilə')
           $.ajax({
               type: "GET",
               url: 'doctor-position/'+id_,
                // serializes the form's elements.
               success: function(data)
               {
                         
                   $('#titleInput').val(data.slug)
                   
             
                  
                 
                  
                   if (data.status=='1') {
            $('#checkbox').prop("checked", true);
          }
                   $('.titlesParent').html('')
                   $('.nav-link').removeClass( 'active');
          
          $('.nav-pills .nav-item:first-child .nav-link').addClass( 'active')
                   data.translations.forEach(item => {

                   $('.titlesParent').append($("<input/>").addClass('form-control title__input').attr({"id": 'titleInput'+item.locale, "name": 'title:'+item.locale,'value':item.title}))
                });
          }
           });
       }











    </script>
    @endsection
