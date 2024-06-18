@extends('admin.layouts.app')

@section('content')

@section('title')
Meals
@endsection

@section('subtilte')
List of Meals
@endsection

  <!-- Main content -->
  <section class="content">
    @include('flash::message')

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Daily Meals</h3>

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
            <i class="fa fa-plus mr-2"></i> Add Daily Meal
       </button>
        @if (count($meals))
        <div class="table-responsive">
            <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Thumbnail</th>
                <th class="col-md-2">Description</th>
                <th>Day</th>
                <th>Quantity</th>
                <th class="col-md-2">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($meals as $record)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$record->name_en}}</td>
                    <td>{{$record->price}} EGP</td>
                    <td><img src="{{asset('images/'.$record->thumbnail)}}" class="img-fluid img-thumbnail" style="width:200px;"></td>
                    <td>{{ \Illuminate\Support\Str::limit($record->description_en, 100)}}</td>
                    <td>{{date('l', strtotime($record->day))}}</td>
                    <td>{{$record->quantity}}</td>
                    <td class="text-center">
                    <a class="btn btn-dark btn-sm" href="{{ route('meals.show', $record->id) }}" target="_blank" title="show">
                                            <i class="fa fa-eye"></i>
                        </a>
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
                           <form  action="{{ route('meals.update', $record->id ) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                               <div class="modal-body">
                                   <div class="row">
                                       <div class="col">
                                           <input type="hidden" name="id" id="id" value="{{ $record->id }}">
                                           <label
                                               for="exampleInputEmail1">Name in English</label>
                                           <input type="text" class="form-control" id="name_en"
                                                  name="name_en" value="{{ $record->name_en }}"
                                                  required>

                                            <label
                                                  for="exampleInputEmail1">Name in arabic</label>
                                            <input type="text" class="form-control" id="name_ar"
                                                     name="name_ar" value="{{ $record->name_ar }}"
                                                     required>

                                            <label
                                                  for="exampleInputEmail1">Description in english</label>
                                            <textarea type="text" class="form-control" id="description_en"
                                                     name="description_en"
                                                     required>{{ $record->description_en }}</textarea>

                                            <label
                                                     for="exampleInputEmail1">Description in arabic</label>
                                            <textarea type="text" class="form-control" id="descriotion_ar"
                                                        name="description_ar"
                                                        required>{{ $record->description_ar }}</textarea>

                                            <label
                                                  for="exampleInputEmail1">Price</label>
                                            <input type="number" class="form-control" id="price"
                                                     name="price" value="{{ $record->price }}"
                                                     required>

                                            <label
                                                  for="exampleInputEmail1">Quantity</label>
                                            <input type="number" class="form-control" id="quantity"
                                                     name="quantity" value="{{ $record->quantity }}"
                                                     required>

                                                <label for="category_id">Choose a Special day(optional)</label>
                                            <select name="category_id" class="form-control" id="category_id">

                                                    @if ($record->category)
                                                      <option value="{{$record->category_id}}">{{$record->category->name_en}}</option>
                                                    @else
                                                      <option value="">Choose a Special day</option>
                                                    @endif

                                                @inject('categories', 'App\Models\Category' )
                                                @foreach ( $categories->all() as $category )
                                                <option value="{{$category->id}}">{{$category->name_en}}</option>
                                                @endforeach
                                            </select>


                                            <label for="cars">Choose a day:</label>
                                            <select name="day" class="form-control" id="day">
                                                <option>{{ $record->day }}</option>
                                                <option value="Saturday">Saturday</option>
                                                <option value="Sunday">Sunday</option>
                                                <option value="Monday">Monday</option>
                                                <option value="Tuesday">Tuesday</option>
                                                <option value="Wednesday">Wednesday</option>
                                                <option value="Thursday">Thursday</option>
                                                <option value="Friday">Friday</option>
                                            </select>


                                            <img src="{{asset('images/'.$record->thumbnail)}}" class="img-thumbnail mb-2" style="display:block; width:200px;">
                                            <label
                                                  for="exampleInputEmail1">Thumbnail</label>
                                            <input type="file" class="form-control" id="thumbnail"
                                                     name="thumbnail"
                                                     >

                                             @foreach ($record->images as $image)
                                             <img src="{{asset('images/'.$image->url)}}" class="img-thumbnail mb-2" style="width:200px;display:inline;">
                                             @endforeach
                                                  <label
                                                  for="exampleInputEmail1" style="display:block;">Images</label>
                                                <input type="file" class="form-control" id="images" style="display:inline;"
                                                name="images[]"
                                                multiple>

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
                        <form action="{{ route('meals.destroy', $record->id ) }}" method="post">
                            {{ method_field('delete') }}
                            {{ csrf_field() }}
                            <div class="modal-body">
                                <p>Do you really want to delete </p><br>
                                <input type="hidden" name="id" id="id" value="{{ $record->id }}">
                                <input class="form-control" name="title" id="title" type="text"
                                       value="{{ $record->name_en }}" readonly>
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
            NO Meals
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
                   id="exampleModalLabel">Add New Meal</h5>
               <button type="button" class="close" data-dismiss="modal"
                       aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           @include('admin.layouts.validation-errors')
           <form  action="{{ route('meals.store') }}" method="post" enctype="multipart/form-data">
            @csrf
               <div class="modal-body">
                   <div class="row">
                       <div class="col">
                           <label
                               for="exampleInputEmail1">Name in English</label>
                           <input type="text" class="form-control" id="name_en"
                                  name="name_en" value="{{ old('name_en') }}"
                                  required>

                            <label
                                  for="exampleInputEmail1">Name in arabic</label>
                            <input type="text" class="form-control" id="name_ar"
                                     name="name_ar" value="{{ old('name_ar') }}"
                                     required>

                            <label
                                  for="exampleInputEmail1">Description in english</label>
                            <textarea type="text" class="form-control" id="description_en"
                                     name="description_en"
                                     required>{{ old('description_en') }}</textarea>

                            <label
                                     for="exampleInputEmail1">Description in arabic</label>
                            <textarea type="text" class="form-control" id="descriotion_ar"
                                        name="description_ar"
                                        required>{{ old('description_ar') }}</textarea>

                            <label
                                  for="exampleInputEmail1">Price</label>
                            <input type="number" class="form-control" id="price"
                                     name="price" value="{{ old('price') }}"
                                     required>

                            <label
                                  for="exampleInputEmail1">Quantity</label>
                            <input type="number" class="form-control" id="quantity"
                                     name="quantity" value="{{ old('quantity') }}"
                                     required>

                            <label for="cars">Choose a day:</label>
                                     <select name="day" class="form-control" id="day">
                                        <option value="">Choose a day</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                     </select>

                                     <label for="category_id">Choose a Special day (optional)</label>
                                     <select name="category_id" class="form-control" id="category_id">
                                         <option value="">Choose a Special day</option>
                                         @inject('categories', 'App\Models\Category' )
                                         @foreach ( $categories->all() as $category )
                                         <option value="{{$category->id}}">{{$category->name_en}}</option>
                                         @endforeach
                                     </select>

                            <label
                                  for="exampleInputEmail1">Thumbnail</label>
                            <input type="file" class="form-control" id="thumbnail"
                                     name="thumbnail"
                                    required >

                            <label
                                  for="exampleInputEmail1">Images</label>
                            <input type="file" class="form-control" id="images"
                                     name="images[]"
                                     multiple>
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

 <!-- Default box -->
 <div class="card">
    <div class="card-header">
      <h3 class="card-title">All Week Meals</h3>

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
          data-toggle="modal" data-target="#addweek">
          <i class="fa fa-plus mr-2"></i> Add Weekly Meal
     </button>
      @if (count($wmeals))
      <div class="table-responsive">
          <table class="table table-bordered">
          <thead>
          <tr>
              <th>#</th>
              <th>Name</th>
              <th>Price</th>
              <th>Thumbnail</th>
              <th class="col-md-2">Description</th>
              <th>Days</th>
              <th>Quantity</th>
              <th class="col-md-2">Actions</th>
          </tr>
          </thead>
          <tbody>
              @foreach ($wmeals as $wmeal)
              <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$wmeal->name_en}}</td>
                  <td>{{$wmeal->price}} EGP</td>
                  <td><img src="{{asset('images/'.$wmeal->thumbnail)}}" class="img-fluid img-thumbnail" style="width:200px;"></td>
                  <td>{{ \Illuminate\Support\Str::limit($wmeal->description_en, 100)}}</td>
                  <td>
                      @foreach ($wmeal->days as $day)
                      {{$day->name}}<br>
                      @endforeach
                  </td>
                  <td>{{$wmeal->quantity}}</td>
                  <td class="text-center">
                  <a class="btn btn-dark btn-sm" href="{{ route('meals.wshow.client', $wmeal->id) }}" target="_blank" title="show">
                                          <i class="fa fa-eye"></i>
                      </a>
                      <a class="modal-effect btn btn-success btn-sm" data-effect="effect-scale"
                                         data-toggle="modal" href="#editweek{{ $wmeal->id }}" title="edit">
                                          <i class="fa fa-edit"></i>
                      </a>
                      <a class="modal-effect btn btn-danger btn-sm" data-effect="effect-scale"
                                         data-toggle="modal" href="#deleteweek{{ $wmeal->id }}" title="delete">
                                          <i class="fa fa-trash"></i>
                      </a>

                  </td>
              </tr>
              <!-- Edit -->
              <div class="modal fade" id="editweek{{ $wmeal->id }}" tabindex="-1" role="dialog"
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
                         <form  action="{{ route('meals.wupdate', $wmeal->id ) }}" method="post" enctype="multipart/form-data">
                          @csrf
                          @method('put')
                             <div class="modal-body">
                                 <div class="row">
                                     <div class="col">
                                         <input type="hidden" name="id" id="id" value="{{ $wmeal->id }}">
                                         <label
                                             for="exampleInputEmail1">Name in English</label>
                                         <input type="text" class="form-control" id="name_en"
                                                name="name_en" value="{{ $wmeal->name_en }}"
                                                required>

                                          <label
                                                for="exampleInputEmail1">Name in arabic</label>
                                          <input type="text" class="form-control" id="name_ar"
                                                   name="name_ar" value="{{ $wmeal->name_ar }}"
                                                   required>

                                          <label
                                                for="exampleInputEmail1">Description in english</label>
                                          <textarea type="text" class="form-control" id="description_en"
                                                   name="description_en"
                                                   required>{{ $wmeal->description_en }}</textarea>

                                          <label
                                                   for="exampleInputEmail1">Description in arabic</label>
                                          <textarea type="text" class="form-control" id="descriotion_ar"
                                                      name="description_ar"
                                                      required>{{ $wmeal->description_ar }}</textarea>

                                          <label
                                                for="exampleInputEmail1">Price</label>
                                          <input type="number" class="form-control" id="price"
                                                   name="price" value="{{ $wmeal->price }}"
                                                   required>

                                          <label
                                                for="exampleInputEmail1">Quantity</label>
                                          <input type="number" class="form-control" id="quantity"
                                                   name="quantity" value="{{ $wmeal->quantity }}"
                                                   required>

                                                   <label for="days">Choose days:</label>
                                                   <select name="days[]" class="form-control" id="days" multiple>
                                                      @foreach ($days as $day)
                                                      @if (in_array($day->id, $wmeal->days()->pluck('day_id')->toArray()))
                                                      <option value="{{$day->id}}" selected>{{$day->name}}</option>
                                                      @else
                                                      <option value="{{$day->id}}">{{$day->name}}</option>
                                                      @endif
                                                      @endforeach
                                                   </select>


                                          <img src="{{asset('images/'.$wmeal->thumbnail)}}" class="img-thumbnail mb-2" style="display:block; width:200px;">
                                          <label
                                                for="exampleInputEmail1">Thumbnail</label>
                                          <input type="file" class="form-control" id="thumbnail"
                                                   name="thumbnail"
                                                   >

                                           @foreach ($wmeal->images as $image)
                                           <img src="{{asset($image->url)}}" class="img-thumbnail mb-2" style="width:200px;display:inline;">
                                           @endforeach
                                                <label
                                                for="exampleInputEmail1" style="display:block;">Images</label>
                                              <input type="file" class="form-control" id="images" style="display:inline;"
                                              name="images[]"
                                              multiple>

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
             <div class="modal fade" id="deleteweek{{ $wmeal->id }}">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content modal-content-demo">
                      <div class="modal-header">
                          <h6 class="modal-title">Delete Meal</h6>
                          <button aria-label="Close" class="close" data-dismiss="modal"
                                  type="button"><span
                                  aria-hidden="true">&times;</span></button>
                      </div>
                      <form action="{{ route('meals.wdestroy', $wmeal->id ) }}" method="post">
                          {{ method_field('delete') }}
                          {{ csrf_field() }}
                          <div class="modal-body">
                              <p>Do you really want to delete </p><br>
                              <input type="hidden" name="id" id="id" value="{{ $wmeal->id }}">
                              <input class="form-control" name="title" id="title" type="text"
                                     value="{{ $wmeal->name_en }}" readonly>
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
          NO Meals
      </div>
      @endif
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  <!-- Add New -->
<div class="modal fade" id="addweek" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title"
                 id="exampleModalLabel">Add New week Meal</h5>
             <button type="button" class="close" data-dismiss="modal"
                     aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>
         @include('admin.layouts.validation-errors')
         <form  action="{{ route('meals.wstore') }}" method="post" enctype="multipart/form-data">
          @csrf
             <div class="modal-body">
                 <div class="row">
                     <div class="col">
                         <label
                             for="exampleInputEmail1">Name in English</label>
                         <input type="text" class="form-control" id="name_en"
                                name="name_en" value="{{ old('name_en') }}"
                                required>

                          <label
                                for="exampleInputEmail1">Name in arabic</label>
                          <input type="text" class="form-control" id="name_ar"
                                   name="name_ar" value="{{ old('name_ar') }}"
                                   required>

                          <label
                                for="exampleInputEmail1">Description in english</label>
                          <textarea type="text" class="form-control" id="description_en"
                                   name="description_en"
                                   required>{{ old('description_en') }}</textarea>

                          <label
                                   for="exampleInputEmail1">Description in arabic</label>
                          <textarea type="text" class="form-control" id="descriotion_ar"
                                      name="description_ar"
                                      required>{{ old('description_ar') }}</textarea>

                          <label
                                for="exampleInputEmail1">Price</label>
                          <input type="number" class="form-control" id="price"
                                   name="price" value="{{ old('price') }}"
                                   required>

                          <label
                                for="exampleInputEmail1">Quantity</label>
                          <input type="number" class="form-control" id="quantity"
                                   name="quantity" value="{{ old('quantity') }}"
                                   required>

                                   <label for="days">Choose days:</label>
                                   <select name="days[]" class="form-control" id="days" multiple>
                                      @foreach ($days as $day)
                                      <option value="{{$day->id}}">{{$day->name}}</option>
                                      @endforeach
                                   </select>

                          <label
                                for="exampleInputEmail1">Thumbnail</label>
                          <input type="file" class="form-control" id="thumbnail"
                                   name="thumbnail"
                                  required >

                          <label
                                for="exampleInputEmail1">Images</label>
                          <input type="file" class="form-control" id="images"
                                   name="images[]"
                                   multiple>
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
