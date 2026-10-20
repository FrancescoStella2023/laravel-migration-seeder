@extends("layouts.master")

@section("title", "Treni")

@section("header")
    <nav class="navbar px-2 border-bottom border-2 text-white bg-dark">
        <h1 class="m-1 fw-bold">
            Lista treni in arrivo
        </h1>
        <div>
            <a href="#" class="btn btn-primary">Home</a>
            <a href="#" class="btn btn-primary">Buy tickets</a>
            <a href="#" class="btn btn-primary">Account</a>
        </div>
    </nav>
@endsection

@section("Content")
    <div class="container m-3 mt-5 bg-dark text-white rounded-3 shadow p-4">
        <ul class="list-unstyled mb-0">
            @foreach ($trains as $train)
                <li class="py-3 px-2 border-bottom border-secondary">
                    <span class="fw-bold text-info">
                        {{ $train['company'] }}
                    </span>
                    <span class="text-light ms-3">
                        {{ $train['arrival_time'] }} - {{ $train['departure_time'] }}
                    </span>
                    @if ($train['cancelled'])
                        <span class="text-danger fw-bold ms-3">
                            ● Cancelled
                        </span>
                    @elseif ($train['on_time'])
                        <span class="text-success fw-bold ms-3">
                            ● On time
                        </span>
                    @else
                        <span class="text-warning fw-bold ms-3">
                            ● Delayed
                        </span>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>

@endsection