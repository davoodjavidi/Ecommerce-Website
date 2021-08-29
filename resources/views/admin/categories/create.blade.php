@extends('admin.layouts.master')

@section('content')
    <main>
        <div class="container-fluid px-4">
            {{--                <h1 class="mt-4">Create Post</h1>--}}
            {{--                <ol class="breadcrumb mb-4">--}}
            {{--                    <li class="breadcrumb-item active">create</li>--}}
            {{--                </ol>--}}

            {{--Create Post                --}}
            <div class="row">
                <div id="layoutAuthentication_content">
                    <main>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Category</h3></div>
                                        <div class="card-body">

                                            @include('admin.layouts.errors')


                                            <form action="/adminpanel/categories" method="post">
                                                @csrf
                                                <div class="row mb-3">
                                                    <div class="col-md-12 mb-3">

                                                        <div class="form-group">
                                                            <label for="category_id">دسته والد</label>
                                                            <select name="category_id" id="category_id" class="form-control mb-2">
                                                                <option value="" selected>دسته والد را انتخاب کنید</option>
                                                                @foreach($categories as $category)
                                                                    <option value="{{$category->id}}" >{{$category->title}}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                        <div class="form-floating mb-md-0">
                                                            <input name="title" class="form-control" id="inputTitle" type="text" placeholder="Enter Post Title Here" />
                                                            <label for="inputTitle">Title</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4 mb-0">
                                                    <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Create Category</button></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            {{--Create Post   Ennnd             --}}
        </div>
    </main>

@endsection


