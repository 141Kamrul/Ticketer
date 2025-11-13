@php
    $user = Auth::user();
    $isAdmin = $user && $user->hasRole('admin');
    $isAgent = $user && $user->hasRole('agent');
    $isUser  = $user && $user->hasRole('user');
@endphp

<div class="col-md-3 col-lg-2 sidebar p-3">
    <!-- Quick Actions -->
    <div class="card mb-3">
        <div class="card-header">
            <h6 class="mb-0"><i class="fas fa-bolt me-1"></i>Quick Actions</h6>
        </div>
        <div class="card-body">
            <a href="{{-- route('tickets.create') --}}" class="btn btn-primary btn-sm w-100 mb-2">
                <i class="fas fa-plus me-1"></i>New Ticket
            </a>
            @if($isAdmin || $isAgent)
                <a href="{{-- route('tickets.index', ['status' => 'open']) --}}" 
                   class="btn btn-outline-success btn-sm w-100 mb-2">
                    <i class="fas fa-clock me-1"></i>Open Tickets
                </a>
            @endif
        </div>
    </div>

    <!-- Ticket Statistics -->
    <div class="card mb-3">
        <div class="card-header">
            <h6 class="mb-0"><i class="fas fa-chart-bar me-1"></i>Ticket Stats</h6>
        </div>
        <div class="card-body">
            @if($isUser)
                <div class="d-flex justify-content-between mb-2">
                    <span>My Open Tickets:</span>
                    <strong class="text-warning">{{-- $user->tickets()->where('status', 'open')->count() --}}</strong>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span>My Closed Tickets:</span>
                    <strong class="text-success">{{-- $user->tickets()->where('status', 'closed')->count() --}}</strong>
                </div>
            @endif
        </div>
    </div>

    <!-- Navigation Menu -->
    <div class="card mb-3">
        <div class="card-header">
            <h6 class="mb-0"><i class="fas fa-compass me-1"></i>Navigation</h6>
        </div>
        <div class="list-group list-group-flush">
            <a href="{{-- route('dashboard') --}}" class="list-group-item list-group-item-action">
                <i class="fas fa-tachometer-alt me-1"></i>Dashboard
            </a>

            @if($isAdmin)
                <a href="{{-- route('users.index') --}}" class="list-group-item list-group-item-action">
                    <i class="fas fa-users me-1"></i>User Management
                </a>
            @endif
        </div>
    </div>
</div>
