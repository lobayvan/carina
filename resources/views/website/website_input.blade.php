@extends('include.app')
@section('title', 'VPS Submit')
@section('content')
    <div class="container py5">
        <h6 style="font-size: 8pt" class="mb-4">
            <a href="{{ route('home') }}" class="text-decoration-none">Home</a> > 
            <a href="{{ route('website') }}" class="text-decoration-none">Website</a> > 
            Submit
        </h6>
        <div class="ht-tm-cat">
            <h5 class="ht-tm-cat-title">Submit New WEBSITE</h5>
            <div class="ht-tm-codeblock">
                <div class="row">
                    <div class="col-xl-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="ht-tm-codeblock ht-tm-btn-replaceable ht-tm-element ht-tm-element-inner">
                            <form method="POST" action="">
                                @csrf
                                <div class="form-group">
                                    <label>URL <font color="red">*</font></label>
                                    <input type="text" class="form-control" name="ip" placeholder="ex: www.abc.xyz" required>
                                </div>
                                <div class="form-group">
                                    <label>Username <font color="red">*</font></label>
                                    <input type="text" class="form-control" name="username" placeholder="Romba Josué" required>
                                </div>
                                <div class="form-group">
                                    <label>Password <font color="red">*</font></label>
                                    <input type="text" class="form-control" name="password" placeholder="abay" required>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-outline-primary btn-sm">SUBMIT</button>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection