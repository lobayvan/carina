@extends('include.app')
@section('title', 'Websites List')
@section('content')
    <div class="container py5">
        <h6 style="font-size: 10pt" class="mb-4">
            <a href="{{ route('home') }}" class="text-decoration-none">Home</a> >
            Websites
        </h6>
        <div class="ht-tm-cat">
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control col-md-6 mb-1" placeholder="{{ (isset($_GET['keyword']) !== false) ? $_GET['keyword'] : 'Domain, Website Name, Server Info' }}" name="keyword">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-outline-primary btn-sm" type="button">Search</button>
                    </div>
                </div>
            </form>
            <h5 class="ht-tm-cat-title mb-3">
                Websites List <a href="{{ route('website') }}/new" class="btn btn-outline-primary btn-sm mb-2 pull-right" title="Submit New Website"><span class="fa fa fa-plus-square fa-fw"></span> Submit New</a>
            </h5>

            @if($message = Session::get('alert'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                {{ $message }}
            </div>
            @endif
            <div id="message"></div>
            <div class="ht-tm-codeblock" style="max-width: 100%; overflow: scroll;">
                <table class="table table-hover table-striped ht-tm-element border">
                    <thead class="thead-dark">
                        <tr>
                        <th width="30">#</th>
                        <th width="250">Url</th>
                        <th width="auto">Username</th>
                        <th width="auto">Password</th>
                        <th width="100">Commentaire</th>
                        <th width="50" class="text-center">Status</th>
                        <th class="text-center" width="250">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $d)
                        @php
                        @endphp
                        <tr>
                            <td> {{$loop->index +1}} </td>
                            <td> {{ $d->url }} </td>
                            <td> {{ $d->username }} </td>
                            <td> {{ $d->password }} </td>
                            <td>  </td>
                            <td class="text-center">
                                <i class="{{ ($d->status == 'active') ? "fa fa-check-circle-o text-success" : "fa fa-close text-danger"  }}"></i>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('website') }}/delete" class="float-right">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ Crypt::encryptString($d->id) }}">
                                    <button class="btn btn-outline-primary btn-sm" title="Delete Shell" onclick="return confirm('Are you sure?')"><span class="fa fa-trash fa-fw"></span></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $data->links() !!}
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
</script>
@endsection
