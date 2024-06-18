@extends('admin.layouts.app')

@section('content')

@section('title')
Users
@endsection

@section('subtilte')
List of users
@endsection

  <!-- Main content -->
  <section class="content">


  <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">List of users</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <button type="button" class="modal-effect btn btn-primary mb-2" data-effect="effect-scale"
            data-toggle="modal" data-target="#add">
            <i class="fa fa-plus mr-2"></i> Add User
       </button>
        @include('flash::message')
        @if (count($records))
        <div class="table-responsive">
            <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>email</th>
                <th class="col-md-2">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$record->name}}</td>
                    <td>{{$record->email}}</td>
                    <td class="text-center">
                        <a class="modal-effect btn btn-success btn-sm" data-effect="effect-scale"
                                           data-toggle="modal" href="#edit{{ $record->id }}" title="edit">
                                            <i class="fa fa-edit"></i>
                        </a>
                        <a class="modal-effect btn btn-danger btn-sm" data-effect="effect-scale"
                                           data-toggle="modal" href="#delete{{ $record->id }}" title="delete">
                                            <i class="fa fa-trash"></i>
                        </a>

                    </td>
                </tr>
                <!-- Edit -->
                <div class="modal fade" id="edit{{ $record->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                   <div class="modal-dialog" role="document">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h5 class="modal-title"
                                   id="exampleModalLabel">Edit Meal</h5>
                               <button type="button" class="close" data-dismiss="modal"
                                       aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                           <form  action="{{ route('users.update', $record->id ) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                               <div class="modal-body">
                                   <div class="row">
                                       <div class="col">
                                           <input type="hidden" name="id" id="id" value="{{ $record->id }}">
                                           <label
                                               for="exampleInputEmail1">Name</label>
                                           <input type="text" class="form-control" id="name"
                                                  name="name" value="{{ $record->name }}"
                                                  required>

                                            <label
                                                  for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                     name="email" value="{{ $record->email }}"
                                                     required>

                                            <label
                                                  for="exampleInputEmail1">Password</label>
                                            <input type="password" class="form-control" id="password"
                                                     name="password"
                                                     >

                                            <label
                                                     for="exampleInputEmail1">Password Confirmation</label>
                                            <input type="password" class="form-control" id="password_confirmation"
                                                        name="password_confirmation"
                                                        >
                                       </div>
                                   </div>
                               </div>
                               <div class="modal-footer">
                                   <button type="submit" class="btn btn-primary">Submit</button>
                                   <button type="button" class="btn btn-secondary"
                                           data-dismiss="modal">Close</button>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
               <!-- Edit -->

               <!-- Delete -->
               <div class="modal fade" id="delete{{ $record->id }}">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Delete Meal</h6>
                            <button aria-label="Close" class="close" data-dismiss="modal"
                                    type="button"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <form action="{{ route('users.destroy', $record->id ) }}" method="post">
                            {{ method_field('delete') }}
                            {{ csrf_field() }}
                            <div class="modal-body">
                                <p>Do you really want to delete </p><br>
                                <input type="hidden" name="id" id="id" value="{{ $record->id }}">
                                <input class="form-control" name="title" id="title" type="text"
                                       value="{{ $record->name }}" readonly>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Close</button>
                                <button type="submit"
                                        class="btn btn-danger">Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Delete -->
                @endforeach
            </tbody>
            </table>
        </div>
        @else
        <div>
            NO Data
        </div>
        @endif
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <!-- Add New -->
  <div class="modal fade" id="add" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title"
                   id="exampleModalLabel">Add New User</h5>
               <button type="button" class="close" data-dismiss="modal"
                       aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           @include('admin.layouts.validation-errors')
           <form  action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
            @csrf
               <div class="modal-body">
                   <div class="row">
                       <div class="col">
                        <label
                        for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="name"
                           name="name"
                           required>

                     <label
                           for="exampleInputEmail1">Email</label>
                     <input type="email" class="form-control" id="email"
                              name="email"
                              required>

                     <label
                           for="exampleInputEmail1">Password</label>
                     <input type="password" class="form-control" id="password"
                              name="password"
                              required>

                     <label
                              for="exampleInputEmail1">Password Confirmation</label>
                     <input type="password" class="form-control" id="password_confirmation"
                                 name="password_confirmation"
                                 required>
                       </div>
                   </div>
               </div>
               <div class="modal-footer">
                   <button type="submit" class="btn btn-primary">ADD</button>
                   <button type="button" class="btn btn-secondary"
                           data-dismiss="modal">Close</button>
               </div>
           </form>
       </div>
   </div>
</div>
<!-- Add new Meal -->
  </section>
  <!-- /.content -->
@endsection
