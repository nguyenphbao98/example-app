@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Company : {{ $company->name }}</div>

                    <div class="card-body">
                        <div>
                            <ul>
                                @forelse ($company->users as $user)
                                    <li class="ml-2">User: {{ $user->name }}</li>
                                @empty
                                    <li class="ml-2">Empty</li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
