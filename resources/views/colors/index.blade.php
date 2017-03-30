@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table id="color-table" class="display" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>이름</th>
                        <th>묘사</th>
                        {{--<th>관리</th>--}}
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>이름</th>
                        <th>묘사</th>
                        {{--<th>관리</th>--}}
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($colors as $color)
                        <tr>

                            <td>{{$color->name}}</td>
                            <td>{{$color->desc}}</td>
                            {{--<td>--}}
                                {{--<form action="/admin/semesters/{{$semester->id}}" method="post" class="pull-right"--}}
                                      {{--style="margin-left: 10px">--}}
                                    {{--{{method_field('DELETE')}}--}}
                                    {{--{{ csrf_field() }}--}}
                                    {{--<button class="btn btn-danger">삭제</button>--}}
                                {{--</form>--}}


                                {{--<a class="pull-right" href="/admin/semesters/{{$semester->id}}" style="margin-left: 10px">--}}
                                    {{--<button class="btn btn-default">자세히 보기</button>--}}
                                {{--</a>--}}

                                {{--<a class="pull-right" href="/admin/semesters/{{$semester->id}}/edit" style="margin-left: 10px">--}}
                                    {{--<button class="btn btn-default">수정</button>--}}
                                {{--</a>--}}
                            {{--</td>--}}

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection