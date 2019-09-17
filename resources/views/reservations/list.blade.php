@extends('layouts.app')

@section('content')
    <h2>{{$user->name}}'s Reservations</h2>
    @if($reservations->get()->count() == 0)
        <p>No reservations found</p>
    @else
        <p>{{$reservations->count()}}</p>
        <ul>
            @foreach ($reservations->get() as $reservation)
                <li>{{$reservation->id}}</li>
            @endforeach
        </ul>
        <nav aria-label="Pagination">
            <ul class="pagination">
                @if ($page > 1)
                <li class="page-item">
                    <a class="page-link" aria-label="Previous" href="{{route('user/reservations', ['user' => $user, 'page' => ($page > 2 ? $page - 1 : null)]) }}">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                @endif
                @for ($i = $paginationFrom; $i <= $paginationTo; $i++)
                    @if ($i != $page)
                            <li class="page-item">
                                <a class="page-link" href="{{route('user/reservations', ['user' => $user, 'page' => $i]) }}">{{$i}}</a>
                            </li>
                    @else
                        <li class="page-item active">
                            <a class="page-link">{{$i}}<span class="sr-only">(current)</span></a>
                        </li>
                    @endif
                @endfor
                @if ($page < $paginationTo)
                <li class="page-item">
                    <a class="page-link" aria-label="Next" href="{{route('user/reservations', ['user' => $user, 'page' => ($page < $paginationTo ? $page + 1 : $paginationTo)]) }}">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
    @endif
@endsection
