@extends('user::admin.layouts.app')
@section('content')
	<div class="page-header">
		<h4 class="page-title">Shipment</h4>
		<ul class="breadcrumbs">
			<li class="nav-home">
				<a href="#">
					<i class="flaticon-home"></i>
				</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<li class="nav-item">
				<a href="#">Management</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<li class="nav-item">
				<a href="{{route('shipment.index')}}">Shipment</a>
			</li>
		</ul>
	</div>
	@include('user::admin.include.success')
	@include('user::admin.include.error')
	
	<div class="card">
		<div class="card-header">
			<div class="card-title" style="float: left; width: 50%;">Shipment</div>
			<div class="card-title" style="float: right; width: 50%;">
				<div style="float: right;">
					<a href="{{route("shipment.create")}}">Create</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>#</th>
							<th>Booking Id</th>
							<th>Customer Name</th>
							<th>Purchasing websites</th>
							<th>Items/order</th>
							<th>Order Value</th>
							<th>Currency Bill</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@php($i = 1)
						@if(isset($shipments) && count($shipments) > 0)
							@foreach($shipments as $shipment)
								<tr>
									<th scope="row">{{$i++}}</th>
									<td>{{$shipment->booking_number}}</td>

									<td>{{isset($shipment->bookingDetails[0]->customer_name)?$shipment->bookingDetails[0]->customer_name:''}}</td>

									<td>{{isset($shipment->bookingDetails[0]->purchasing_websites)?$shipment->bookingDetails[0]->purchasing_websites:''}}</td>

									<td>{{isset($shipment->bookingDetails[0]->items_order)?$shipment->bookingDetails[0]->items_order:''}}</td>

									<td>{{isset($shipment->bookingDetails[0]->order_value)?$shipment->bookingDetails[0]->order_value:''}}</td>
									
									<td>{{isset($shipment->bookingDetails[0]->currency_bill)?$shipment->bookingDetails[0]->currency_bill:''}}</td>

									<td>{{isset($shipment->status)?$shipment->status:''}}</td>

									<td>
										<div class="dropdown">
										    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
										    </button>
										    <div class="dropdown-menu">
										      {{-- <a class="dropdown-item" href="{{route('shipment.edit',$shipment->id)}}"> Edit</a> --}}
										      {{-- <a class="dropdown-item" href="{{route('shipment.view',$shipment->id)}}"> View</a> --}}
										      <a class="dropdown-item" href="{{route('shipment.destroy',$shipment->id)}}">Delete</a>
										    </div>								 
										 </div>
									</td>
								</tr>
							@endforeach
						@else
							<tr>
								<td colspan="25">
									<div style="text-align: center;">Data not found.</div>
								</td>
							</tr>								
						@endif
					</tbody>
				</table>

				@if(isset($shipments) && count($shipments) > 0)
					{{$shipments->links()}}
				@endif
			</div>
		</div>
	</div>
@endsection