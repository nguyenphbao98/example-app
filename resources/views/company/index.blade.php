@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Companies</div>
                <div class="card-body">
                    <div>
                        <ul>
                            @foreach ($companies as $company)
                                <li>
                                    <div><a href="{{ route('companies.show',$company->id) }}">{{ $company->name }}</a></div>
                                    {{-- n + 1 issue --}}
                                    
                                    @forelse ($company->users as $user)
                                        <div class="ml-2">Users: {{ $user->name }}</div>
                                        {{-- @forelse ($user->posts as $post)
                                            <div class="ml-5">Post: {{ $post->title }}</div>
                                        @empty
                                            <div class="ml-5">Empty Post</div>
                                        @endforelse --}}
                                    @empty
                                        <div class="ml-2">Empty User</div>
                                    @endforelse
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection