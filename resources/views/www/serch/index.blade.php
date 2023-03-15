


@extends('www.layouts.layout')
@section('content')
@include('www.layouts.header')

<main>
    <div class="mod_dropnavi">
        <a href="javascript:void(0)">Menu02</a>
        <div class="mod_dropnavi_child">
            <ul>
                <li><a href="#">Menu02_Aのタイトルが長い場合</a></li>
                <li><a href="#">Menu02_B</a></li>
                <li><a href="#">Menu02_C</a></li>
            </ul>
        </div>
    </div>
</main>
@include('www.layouts.footer')
@endsection
