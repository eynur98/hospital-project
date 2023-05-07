@extends('back.layouts.master')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">

                    <div class="card">
                    
                        <div class="card-body">
                            <table class="table table-nowrap">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Ad, Soyad</th>
                                    <th scope="col">Telefon</th>
                                  
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($list as $item)
                                    <tr>

                                        <th scope="row"><a href="#" class="fw-semibold">#{{$item->id}}</a></th>
                                        <td>{{$item->full_name}}</td>
                                      <td>{{ $item->created_at }}</td>
                                        <td>
                                            <div class="flex-wrap gap-3 hstack">

                                                  

                                            <form action="{{route('appointment.destroy',$item->id)}}" method="post">
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

                
            </div>
        </div>
    </div>

@endsection

  
 
