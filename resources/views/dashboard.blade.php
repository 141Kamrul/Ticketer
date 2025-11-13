@extends('layouts.app')

@section('title', 'Dashboard')
@section('title-icon', 'fa-tachometer-alt')

@section('header-actions')
    <a href="{{ route('tickets.create') }}" class="btn btn-primary">
        <i class="fas fa-plus me-1"></i>New Ticket
    </a>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h5 class="card-title">Open Tickets</h5>
                    <h2>12</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title">Closed Tickets</h5>
                    <h2>45</h2>
                </div>
            </div>
        </div>
    </div>
@endsection