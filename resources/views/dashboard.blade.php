@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Welcome {{Auth::user()->name}}
                </div>

                <div class="card-body p-2">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-5 mx-auto">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <h3 class="text-center">
                                            <a href="/posts">
                                                Blog &nbsp; <i class="far fa-newspaper"></i>
                                            </a>
                                        </h3>
                                    </li>
                                    <li class="list-group-item">
                                            <h3 class="text-center">
                                                <a href="/posts/create">
                                                    Add a post &nbsp; <i class="fas fa-pen-fancy"></i>
                                                </a>
                                            </h3>
                                        </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


