@extends('admin.layouts.app')

@section('content')

@section('title')
Settings
@endsection

@section('subtilte')
Settings
@endsection

<section class="content">

    

  <!-- Default box -->

    @include('flash::message')

    <div class="row m-1">
    <div class="col-lg-12 col-12 bg-white rounded-top tab-head">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home Page</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About Page</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" id="menu-tab" data-toggle="tab" href="#menu" role="tab" aria-controls="menu" aria-selected="false">Menu Page</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact Page</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#footer" role="tab" aria-controls="contact" aria-selected="false">Footer</a>
    </li>
    </ul>
    </div>
    <div class="col-lg-12 bg-white p-3">
    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="form-group">
            <form action="{{ route('settings.update', $settings->id) }}" method="post">
                {{method_field('PUT')}}
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
               @endif                      
    
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label>First Headline In Arabic</label>
                        <input type="text" name="headline_ar_1" class="form-control mb-2" value="{{ $settings->headline_ar_1 }}" >
                        <label> First Description In Arabic</label>
                        <textarea name="desc_ar_1" class="form-control mb-2" rows="4">{!! $settings->desc_ar_1 !!}</textarea>
                        <label> Second Headline In Arabic</label>
                        <input type="text" name="headline_ar_2" class="form-control mb-2" value="{{ $settings->headline_ar_2 }}" >
                        <label> Second Description In Arabic</label>
                        <textarea name="desc_ar_2" class="form-control mb-2" rows="4">{!! $settings->desc_ar_2 !!}</textarea>                    
                        <label> Third Headline In Arabic</label>
                        <input type="text" name="headline_ar_3" class="form-control mb-2" value="{{ $settings->headline_ar_3 }}" >
                        <label>Third Description In Arabic</label>
                        <textarea name="desc_ar_3" class="form-control mb-2" rows="4">{!! $settings->desc_ar_3 !!}</textarea>                    
                    </div>
                    <div class="col-12 col-md-6">
                        <label> First Headline In English</label>
                        <input type="text" name="headline_en_1" class="form-control mb-2" value="{{ $settings->headline_en_1 }}" >
                        <label> First Description In English</label>
                        <textarea name="desc_en_1" class="form-control mb-2" rows="4">{!! $settings->desc_en_1 !!}</textarea>
                        <label> Second Headline In English</label>
                        <input type="text" name="headline_en_2" class="form-control mb-2" value="{{ $settings->headline_en_2 }}" >
                        <label> Second Description In English</label>
                        <textarea name="desc_en_2" class="form-control mb-2" rows="4">{!! $settings->desc_en_2 !!}</textarea>                    
                        <label> Third Headline In English</label>
                        <input type="text" name="headline_en_3" class="form-control mb-2" value="{{ $settings->headline_en_3 }}" >
                        <label> Third Description In English</label>
                        <textarea name="desc_en_3" class="form-control mb-2" rows="4">{!! $settings->desc_en_3 !!}</textarea> 
                    </div>
                </div>            
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
    <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
        <div class="form-group">
            <form action="{{ route('settings.update', $settings->id) }}" method="post" enctype="multipart/form-data">
                {{method_field('PUT')}}
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
               @endif
            <div class="row mb-3">
                <div class="col-12 col-md-12">
                <label for="image" class="d-block">Banner Photo:</label>
                <img src="{{asset('images/'. $settings->about_image)}}" class="img-thumbnail mb-2" style="display:block; margin-top:-8px; width:200px;">
                <input type="file" name="about_image" class="form-control">
                </div>
                <div class="col-12 col-md-12">
                    <label
                         for="exampleInputEmail1" style="display:block; margin-top:10px;">Our Story Photos:</label>
                    @foreach ($settings->images as $image)
                    <img src="{{asset('images/'.$image->url)}}" class="img-thumbnail mb-2" style="width:200px;display:inline;">
                    @endforeach
                         
                       <input type="file" class="form-control" id="images" style="display:inline;"
                       name="images[]"
                       multiple>
                  </div>
            </div>  
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label>Our Story In Arabic</label>
                        <textarea name="about_ar" class="form-control mb-2" rows="5">{!! $settings->about_ar !!}</textarea>
                    </div>
                    <div class="col-12 col-md-6">
                        <label>Our Story In English</label>
                        <textarea name="about_en" class="form-control mb-2" rows="5">{!! $settings->about_en !!}</textarea>
                    </div>
                </div>
    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </form>

            <button type="button" class="modal-effect btn btn-primary mb-2" data-effect="effect-scale"
            data-toggle="modal" data-target="#add">
            <i class="fa fa-plus mr-2"></i> Add Chefs
       </button>
        @if (count($chefs))
        <div class="table-responsive">
            <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Image</th>
                <th>Position</th>
                <th class="col-md-2">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($chefs as $chef)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$chef->name_en}}</td>
                    <td><img src="{{asset('images/'.$chef->image)}}" class="img-fluid img-thumbnail" style="width:200px;"></td>
                    <td>{{ $chef->description_en }}</td>
                    <td class="text-center">
                        <a class="modal-effect btn btn-success btn-sm" data-effect="effect-scale"
                                           data-toggle="modal" href="#edit{{ $chef->id }}" title="edit">
                                            <i class="fa fa-edit"></i>
                        </a>
                        <a class="modal-effect btn btn-danger btn-sm" data-effect="effect-scale"
                                           data-toggle="modal" href="#delete{{ $chef->id }}" title="delete">
                                            <i class="fa fa-trash"></i>
                        </a>

                    </td>
                </tr>
                <!-- Edit -->
                <div class="modal fade" id="edit{{ $chef->id }}" tabindex="-1" role="dialog"
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
                           <form  action="{{ route('chefs.update', $chef->id ) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                               <div class="modal-body">
                                   <div class="row">
                                       <div class="col">
                                           <input type="hidden" name="id" id="id" value="{{ $chef->id }}">
                                           <label
                                               for="exampleInputEmail1">Name in English</label>
                                           <input type="text" class="form-control" id="name_en"
                                                  name="name_en" value="{{ $chef->name_en }}"
                                                  required>

                                            <label
                                                  for="exampleInputEmail1">Name in arabic</label>
                                            <input type="text" class="form-control" id="name_ar"
                                                     name="name_ar" value="{{ $chef->name_ar }}"
                                                     required>

                                            <label
                                                  for="exampleInputEmail1">Position in english</label>
                                            <textarea type="text" class="form-control" id="description_en"
                                                     name="description_en"
                                                     required>{{ $chef->description_en }}</textarea>

                                            <label
                                                     for="exampleInputEmail1">Position in arabic</label>
                                            <textarea type="text" class="form-control" id="descriotion_ar"
                                                        name="description_ar"
                                                        required>{{ $chef->description_ar }}</textarea>

                                                        <fieldset class="form-group col-md-12 border p-3">
                                                            <legend class="w-auto px-2">Social Media</legend>
                                                            <div class="row">
                                                            <div class="col-12 col-md-12">
                                                                <label>FACEBOOK</label>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="basic-addon3">https://</span>
                                                                      </div>
                                                                    <input type="text" name="facebook" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ $chef->fb_link }}">                                       
                                                                  </div>
                                                                  <label>TWITTER</label>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="basic-addon3">https://</span>
                                                                      </div>
                                                                    <input type="text" name="twitter" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ $chef->tw_link }}">
                                                                </div>
                                                                  <label>INSTAGRAM</label>
                                                                  <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="basic-addon3">https://</span>
                                                                      </div>
                                                                      <input type="text" name="instagram" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ $chef->insta_link }}">
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
        
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
               <div class="modal fade" id="delete{{ $chef->id }}">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Delete Meal</h6>
                            <button aria-label="Close" class="close" data-dismiss="modal"
                                    type="button"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <form action="{{ route('chefs.destroy', $chef->id ) }}" method="post">
                            {{ method_field('delete') }}
                            {{ csrf_field() }}
                            <div class="modal-body">
                                <p>Do you really want to delete </p><br>
                                <input type="hidden" name="id" id="id" value="{{ $chef->id }}">
                                <input class="form-control" name="title" id="title" type="text"
                                       value="{{ $chef->name_en }}" readonly>
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
            NO chefs
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
                   id="exampleModalLabel">Add New Chef</h5>
               <button type="button" class="close" data-dismiss="modal"
                       aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           @include('admin.layouts.validation-errors')
           <form  action="{{ route('chefs.store') }}" method="post" enctype="multipart/form-data">
            @csrf
               <div class="modal-body">
                   <div class="row">
                       <div class="col">

                        <label
                        for="exampleInputEmail1">Image</label>
                       <input type="file" class="form-control" id="thumbnail"
                           name="thumbnail"
                          required >

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
                                  for="exampleInputEmail1">Position in english</label>
                            <textarea type="text" class="form-control" id="description_en"
                                     name="description_en"
                                     required>{{ old('description_en') }}</textarea>

                            <label
                                     for="exampleInputEmail1">Position in arabic</label>
                            <textarea type="text" class="form-control" id="descriotion_ar"
                                        name="description_ar"
                                        required>{{ old('description_ar') }}</textarea>
                       </div>
                   </div>

                   <fieldset class="form-group col-md-12 border p-3">
                    <legend class="w-auto px-2">Social Media</legend>
                    <div class="row">
                    <div class="col-12 col-md-12">
                        <label>FACEBOOK</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">https://</span>
                              </div>
                            <input type="text" name="facebook" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="">                                       
                          </div>
                          <label>TWITTER</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">https://</span>
                              </div>
                            <input type="text" name="twitter" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="">
                        </div>
                          <label>INSTAGRAM</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">https://</span>
                              </div>
                              <input type="text" name="instagram" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="">
                            </div>
                    </div>
                </div>
            </fieldset>

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


  <div class="tab-pane fade" id="menu" role="tabpanel" aria-labelledby="menu-tab">
    <div class="row mb-3">
        <form action="{{ route('settings.update', $settings->id) }}" method="post" enctype="multipart/form-data">
            {{method_field('PUT')}}
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
           @endif
        <div class="col-12 col-md-12">
        <label for="image" class="d-block">Banner Photo:</label>
        <img src="{{asset('images/'. $settings->menu_image)}}" class="img-thumbnail mb-2" style="display:block; margin-top:-8px; width:200px;">
        <input type="file" name="menu_image" class="form-control">
        </div>
    </div>  
        <div class="row">
            <div class="col-12 col-md-6">
                <label>Menu Description In Arabic</label>
                <textarea name="menu_text_ar" class="form-control mb-2" rows="5">{{ $settings->menu_text_ar }}</textarea>
            </div>
            <div class="col-12 col-md-6">
                <label>Menu Description In English</label>
                <textarea name="menu_text_en" class="form-control mb-2" rows="5">{{ $settings->menu_text_en }}</textarea>
            </div>
        </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
    </form>
  </div>


  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <div class="form-group">
        <form action="{{ route('settings.update', $settings->id) }}" method="post" enctype="multipart/form-data">
            {{method_field('PUT')}}
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
           @endif
        <div class="row mb-3">
            <div class="col-12 col-md-12">
            <label for="image" class="d-block">Banner Photo:</label>
            <img src="{{asset('images/'. $settings->contact_image)}}" class="img-thumbnail mb-2" style="display:block; margin-top:-8px; width:200px;">
            <input type="file" name="contact_image" class="form-control">
            </div>
            <div class="col-12 col-md-12">
                <label for="image" class="d-block">Form Photo:</label>
                <img src="{{asset('images/'. $settings->form_image)}}" class="img-thumbnail mb-2" style="display:block; margin-top:-8px; width:200px;">
                <input type="file" name="form_image" class="form-control">
            </div>
        </div>
        
        <fieldset class="form-group col-md-12 border p-3">
            <legend class="w-auto px-2">Social Media</legend>
            <div class="row">
            <div class="col-12 col-md-6">
                <label>FACEBOOK</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">https://</span>
                      </div>
                    <input type="text" name="fb_link" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ $settings->fb_link }}">                                       
                  </div>
                  <label>TWITTER</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">https://</span>
                      </div>
                    <input type="text" name="tw_link" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ $settings->tw_link }}">
                </div>
            </div>
            <div class="col-12 col-md-6">
                  <label>INSTAGRAM</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">https://</span>
                      </div>
                      <input type="text" name="insta_link" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ $settings->insta_link }}">
                    </div>
                    <label>WhatsApp</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">https://</span>
                      </div>
                      <input type="text" name="whatsapp" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ $settings->whatsapp }}">
                    </div>
            </div>
        </div>
    </fieldset>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>   
  </div>
  <!-- /.card-body -->
</div>

<div class="tab-pane fade" id="footer" role="tabpanel" aria-labelledby="footer-tab">
    <div class="form-group">
        <form action="{{ route('settings.update', $settings->id) }}" method="post" enctype="multipart/form-data">
            {{method_field('PUT')}}
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
           @endif
        <div class="row mb-3">
            <div class="col-12 col-md-12">
            <label for="image" class="d-block">Footer Photo:</label>
            <img src="{{asset('images/'. $settings->footer_image)}}" class="img-thumbnail mb-2" style="display:block; margin-top:-8px; width:200px;">
            <input type="file" name="footer_image" class="form-control">
            </div>

            <div class="col-12 col-md-12 mt-3">
            <label for="tax">TAX REGISTRATION:</label>
            <input type="number" name="tax" class="form-control" value="{{ $settings->tax }}">
            </div>
        </div>
        
        <fieldset class="form-group col-md-12 border p-3">
            <legend class="w-auto px-2">DELIVERY TIME​</legend>
            <div class="row">
            <div class="col-12 col-md-6">
                <label>From (day)</label>
                <select class="custom-select" name="start_day">
                    <option selected>{{ $settings->start_day }}</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                  </select>
                  <label>From (hour)</label>
                <div class="input-group mb-3">
                    <input type="time" name="start_hour" class="form-control" value="{{ $settings->start_hour }}">
                </div>
            </div>
            <div class="col-12 col-md-6">
                  <label>To (day)</label>
                  <select class="custom-select" name="end_day">
                    <option selected>{{ $settings->end_day }}</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                  </select>
                    <label>To (hour)</label>
                  <div class="input-group mb-3">
                    <input type="time" name="end_hour" class="form-control" value="{{ $settings->end_hour }}">
                </div>
            </div>
        </div>
    </fieldset>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>   
  </div>
  <!-- /.card-body -->
</div>

</div>
</div>
</div>






</section>
    <!-- /.card -->

@endsection

@push('scripts')
<script>
   if (location.hash) {
  $('a[href=\'' + location.hash + '\']').tab('show');
}
var activeTab = localStorage.getItem('activeTab');
if (activeTab) {
  $('a[href="' + activeTab + '"]').tab('show');
}

$('body').on('click', 'a[data-toggle=\'tab\']', function (e) {
  e.preventDefault()
  var tab_name = this.getAttribute('href')
  if (history.pushState) {
    history.pushState(null, null, tab_name)
  }
  else {
    location.hash = tab_name
  }
  localStorage.setItem('activeTab', tab_name)

  $(this).tab('show');
  return false;
});
$(window).on('popstate', function () {
  var anchor = location.hash ||
    $('a[data-toggle=\'tab\']').first().attr('href');
  $('a[href=\'' + anchor + '\']').tab('show');
});
</script>    
@endpush