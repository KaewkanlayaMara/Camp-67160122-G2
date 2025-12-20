@extends('Template.default')
@section('title', 'ข้อมูลผู้ใช้')

@section('content')

@php

    $genre_thai = match ($genre ?? '') {
        'life' => 'เพลงเพื่อเธอ',
        'brokenheart' => 'เพลงจมกับคนเก่า',
        'rap' => 'เพลงแรปเทสดีไปรักเธอ',
        'other' => 'อื่นๆ',
        default => $genre ?? '-',
    };
    $color_map = [
        'Red'    => '#FF0000',
        'Green'  => '#008000',
        'Blue'   => '#0000FF',
        'Yellow' => '#FFD700',
        'Purple' => '#800080'
    ];
    $clean_color = ucfirst(strtolower(trim($color ?? '')));
    $bg_color = $color_map[$clean_color] ?? '#cccccc';
@endphp

<div class="container pt-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm">
                <div class="card-header text-center" style="background-color: #eccbf0c0;">
                    <h3 class="mb-0" style="color: #555;">✨ ข้อมูลผู้ใช้ ✨</h3>
                </div>

                <div class="card-body" style="color: #227850e4; font-size: 1.1rem;">

                    <div class="text-center mb-4">
                        @if(isset($photo_path) && $photo_path)
                            <img src="{{ asset('storage/' . $photo_path) }}"
                                 style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%; border: 4px solid #fff; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                        @else
                            <div style="width: 150px; height: 150px; background-color: #eee; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center;">
                                ไม่มีรูป
                            </div>
                        @endif
                    </div>

                    <div class="row mb-2">
                        <div class="col-sm-4 text-end fw-bold">ชื่อ - สกุล :</div>
                        <div class="col-sm-8">{{ $fname }} {{ $lname }}</div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-sm-4 text-end fw-bold">วันเกิด :</div>
                        <div class="col-sm-8">{{ $date }} (อายุ {{ $age }} ปี)</div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-sm-4 text-end fw-bold">เพศ :</div>
                        <div class="col-sm-8">
                            @if(isset($sex) && $sex == 'male') 👦 ชาย
                            @elseif(isset($sex) && $sex == 'female') 👧 หญิง
                            @else - @endif
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-sm-4 text-end fw-bold">ที่อยู่ :</div>
                        <div class="col-sm-8">{{ $address }}</div>
                    </div>

                    <hr>

                    <div class="row mb-2 align-items-center">
                        <div class="col-sm-4 text-end fw-bold">สีที่ชอบ :</div>
                        <div class="col-sm-8 d-flex align-items-center">
                            <div style="
                                display: inline-block;
                                width: 25px;
                                height: 25px;
                                background-color: {{ $bg_color }};
                                border-radius: 50%;
                                border: 1px solid #999;
                                margin-right: 10px;">
                            </div>
                            {{ $color }}
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-sm-4 text-end fw-bold">แนวเพลง :</div>
                        <div class="col-sm-8">
                            🎵 {{ $genre_thai }}
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-sm-4 text-end fw-bold">สถานะ :</div>
                        <div class="col-sm-8">
                            @if(isset($consent) && $consent == 1)
                                <span class="badge bg-success">✅ ยินยอมให้เก็บข้อมูล</span>
                            @else
                                <span class="badge bg-danger">❌ ไม่ยินยอม</span>
                            @endif
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>
</div>

@endsection
