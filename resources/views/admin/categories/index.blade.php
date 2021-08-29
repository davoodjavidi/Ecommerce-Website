@extends('admin.layouts.master')


@section('content')

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            List Of Categories
        </div>

{{--        @include('layouts.errors')--}}

        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>شماره</th>
                    <th>عنوان محصول</th>
                    <th>دسته والد</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>شماره</th>
                    <th>عنوان محصول</th>
                    <th>دسته والد</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </tfoot>
                <tbody>



                @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{optional($category->parent)->title}}</td>
                    <td><a href="/adminpanel/categories/{{$category->id}}/edit" class="btn btn-warning">ویرایش</a></td>
                    <td>
                        <form action="/adminpanel/categories/{{$category->id}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit"  class="btn btn-danger" value="حذف">
                        </form>


                    </td>


                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>


@endsection
