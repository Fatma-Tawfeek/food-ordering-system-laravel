@extends('admin.layouts.app')

@section('content')

@section('title')
Previous Orders
@endsection

@section('subtilte')
Previous Orders
@endsection

  <!-- Main content -->
  <section class="content">


  <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">List of previous orders</h3>

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

        @include('flash::message')
        @if (count($records))
        <div class="table-responsive">
            <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Meal</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Preffered Time</th>
                <th>Notes</th>
                <th>State</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{date('j-m-Y h:i A', strtotime($record->created_at))}}</td>
                    <td>{{$record->name}}</td>
                    <td>{{$record->phone}}</td>
                    <td>{{$record->address}}</td>
                    <td>
                      @if ($record->meal)
                      {{$record->meal->name_en}}
                      @elseif ($record->wmeal)
                      {{$record->wmeal->name_en}}
                      @else
                      no meal
                      @endif
                  </td>
                  <td>{{$record->quantity}}</td>
                  <td>
                      @if ($record->meal)
                      {{($record->quantity)*($record->meal->price)}} LE
                      @elseif ($record->wmeal)
                      {{($record->quantity)*($record->wmeal->price)}} LE
                      @else
                      0
                      @endif
                  </td>
                    <td>
                        @if ($record->meal)
                        {{date('h:i A', strtotime($record->preferred_delivery_time))}}
                        @else
                        {{$record->day}}<br>
                        {{date('h:i A', strtotime($record->preferred_delivery_time))}}
                        @endif
                    </td>
                    <td>{{$record->notes}}</td>
                    <td>
                        @if ($record->state == 'completed')
                           <span class="badge badge-success">{{$record->state}}</span>
                        @else
                          <span class="badge badge-danger">{{$record->state}}</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <a class="modal-effect btn btn-danger btn-sm" data-effect="effect-scale"
                                           data-toggle="modal" href="#delete{{ $record->id }}" title="delete">
                                            <i class="fa fa-trash"></i>
                        </a>

                    </td>
                </tr>
                <!-- Delete -->
                <div class="modal fade" id="delete{{ $record->id }}">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">Delete Order</h6>
                                <button aria-label="Close" class="close" data-dismiss="modal"
                                        type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <form action="{{ route('orders.destroy', $record->id) }}" method="post">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                <div class="modal-body">
                                    <p>Do you really want to delete this order?</p><br>
                                    <input type="hidden" name="id" id="id" value="{{ $record->id }}">
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
        {{ $records->links() }}
        @else
        <div>
            NO Orders
        </div>
        @endif
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
@endsection
