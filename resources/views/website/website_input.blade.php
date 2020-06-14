@extends('include.app')
@section('title', 'Website Submit')
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

                                        <!-- Start Url: .from-group -->
                                        <div class="form-group">
                                            <label for="url">URL <font color="red">*</font></label>
                                            <input id="url"  type="text" class="form-control" name="ip" placeholder="ex: www.abc.xyz" required>
                                        </div>
                                        <!-- End Url: /.from-group -->

                                        <!-- Start Username: .from-group -->
                                        <div class="form-group">
                                            <label for="username">Username <font color="red">*</font></label>
                                            <input id="username" type="text" class="form-control" name="username" placeholder="romba.josue" required>
                                        </div>
                                        <!-- End Username: /.from-group -->

                                        <!-- Start Password: .from-group -->
                                        <div class="form-group">
                                            <label for="password">Password <font color="red">*</font></label>
                                            <input id="password" type="password" class="form-control" name="password" placeholder="abay" required>
                                        </div>
                                        <!-- End Password: /.from-group -->

                                        <!-- Start Commentaire: .from-group -->
                                        <div class="form-group">
                                            <label for="comment">Commentaire </label>
                                            <textarea class="form-control" name="comment" id="comment" ></textarea>
                                        </div>
                                        <!-- End Commentaire: /.from-group -->

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
