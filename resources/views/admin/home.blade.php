@extends('admin.layouts.app')

@section('content')

@section('title')
Dashboard
@endsection

@section('subtilte')
Statistics
@endsection

  <!-- Main content -->
  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $orders->count()}}</h3>
              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{ route('orders.new')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
            @inject('meals', 'App\Models\Meal')
            @inject('wmeals', 'App\Models\Wmeal')
             <h3>{{($meals->count()+$wmeals->count())}}</h3>

              <p>Meals</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{ route('meals.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
                @inject('users', 'App\Models\User')
              <h3>{{$users->count()}}</h3>

              <p>Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ route('users.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
             @inject('contacts', 'App\Models\Contact')
              <h3>{{ $contacts->count() }}</h3>

              <p>Messages</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{ route('contacts.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Default box -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">List of new orders</h3>

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
                        {{$record->preferred_delivery_time}}
                        @else
                        {{$record->day}}<br>
                        {{$record->preferred_delivery_time}}
                        @endif
                    </td>
                      <td>{{$record->notes}}</td>
                      <td><span class="badge badge-secondary">{{$record->state}}</span></td>
                      <td class="text-center">
                          <a href="{{route('orders.update', [
                              'id' => $record->id,
                              'state' => 'accepted'
                              ])}}"
                              class="btn btn-success btn-sm">
                              <i class="fa fa-check"></i> Accept
                          </a>
                          <a href="{{route('orders.update', [
                              'id' => $record->id,
                              'state' => 'rejected'
                              ])}}"
                              class="btn btn-danger btn-sm">
                              <i class="fa fa-ban"></i> Reject
                          </a>
                      </td>
                  </tr>
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

