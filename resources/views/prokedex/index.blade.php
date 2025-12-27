@extends('template.default')

@section('content')

{{-- Import Font --}}
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">

<div class="main-bg py-5">
    <div class="container">

        {{-- Header Section --}}
        <div class="row mb-4 align-items-center">
            <div class="col">
                <h2 class="fw-bolder text-white text-shadow">
                    <span style="font-size: 1.5em;">🔴</span> Pokedéx Manager
                </h2>
                <p class="text-white-50 mb-0">Manage your Pokémon collection easily.</p>
            </div>
        </div>

        <div class="row g-4">
            {{-- 🟢 FORM CREATE SECTION --}}
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg rounded-4 form-card sticky-top" style="top: 20px; z-index: 10;">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            {{-- ไอคอนหัวข้อฟอร์ม --}}
                            <div class="form-icon-header mb-2 d-flex align-items-center justify-content-center">
                                ⚡
                            </div>
                            <h4 class="fw-bold text-dark">Add New Pokémon</h4>
                            <p class="text-muted small">Enter the details below</p>
                        </div>

                        <form action="{{ url('/prokedex') }}" method="POST">
                            @csrf

                            {{-- Name --}}
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" id="name" name="name" placeholder="Pikachu" required>
                                <label for="name">Pokémon Name</label>
                            </div>

                            {{-- Type & Species --}}
                            <div class="row g-2 mb-3">
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control rounded-3" id="type" name="type" placeholder="Electric" required>
                                        <label for="type">Type</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control rounded-3" id="species" name="species" placeholder="Mouse">
                                        <label for="species">Species</label>
                                    </div>
                                </div>
                            </div>

                            {{-- Dimensions --}}
                            <div class="input-group mb-3 shadow-sm rounded-3 overflow-hidden">
                                <span class="input-group-text bg-light border-0"><i class="bi bi-arrows-vertical"></i></span>
                                <input type="number" step="0.01" class="form-control border-0 bg-light" name="height" placeholder="Height (m)">
                                <span class="input-group-text bg-light border-0"><i class="bi bi-speedometer2"></i></span>
                                <input type="number" step="0.01" class="form-control border-0 bg-light" name="weight" placeholder="Weight (kg)">
                            </div>

                            {{-- Stats --}}
                            <label class="form-label fw-bold text-secondary small text-uppercase">Base Stats</label>
                            <div class="row g-2 mb-3">
                                <div class="col-4">
                                    <input type="number" class="form-control text-center stat-input hp" name="hp" placeholder="HP">
                                </div>
                                <div class="col-4">
                                    <input type="number" class="form-control text-center stat-input atk" name="attack" placeholder="ATK">
                                </div>
                                <div class="col-4">
                                    <input type="number" class="form-control text-center stat-input def" name="defense" placeholder="DEF">
                                </div>
                            </div>

                            {{-- Image URL --}}
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control rounded-3" id="image_url" name="image_url" placeholder="https://...">
                                <label for="image_url">Image URL</label>
                            </div>

                            <button class="btn btn-primary w-100 py-3 rounded-3 fw-bold shadow-sm btn-save">
                                Catch 'em All! (Save)
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- 🟡 TABLE SECTION --}}
            <div class="col-lg-8">
                @include('prokedex.table')
            </div>
        </div>
    </div>
</div>

{{-- 🎨 Custom CSS --}}
<style>
    body {
        font-family: 'Nunito', sans-serif;
        background-color: #f3f4f6;
    }

    .main-bg {
        /* Gradient พื้นหลัง */
        background: linear-gradient(135deg, #FF6B6B 0%, #556270 100%);
        min-height: 100vh;
    }

    .text-shadow {
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    /* --- Form Styles --- */
    .form-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
    }

    /* 🔥 1. ขนาดรูป/ไอคอน หัวข้อฟอร์ม */
    .form-icon-header {
        font-size: 3rem;
        background: #fff3cd;
        width: 80px;
        height: 80px;
        line-height: 80px;
        border-radius: 50%;
        margin: 0 auto;
        box-shadow: 0 4px 15px rgba(255, 193, 7, 0.3);
    }

    .form-control:focus {
        border-color: #FF6B6B;
        box-shadow: 0 0 0 0.25rem rgba(255, 107, 107, 0.25);
    }
    .stat-input {
        border: 2px solid transparent;
        background: #f8f9fa;
        font-weight: bold;
    }
    .stat-input:focus { background: white; }
    .stat-input.hp { border-bottom: 3px solid #dc3545; }
    .stat-input.atk { border-bottom: 3px solid #ffc107; }
    .stat-input.def { border-bottom: 3px solid #0dcaf0; }

    .btn-save {
        background: linear-gradient(45deg, #FF6B6B, #FF8E53);
        border: none;
        transition: transform 0.2s;
    }
    .btn-save:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(255, 107, 107, 0.4);
    }

    /* --- Table Styles --- */

    /* 🔥 2. ขนาดรูปในตาราง (เหมือนหน้า Edit เป๊ะ) */
    .avatar-wrapper {
        width: 50px;
        height: 50px;
        background: #f8f9fa;
        border-radius: 50%;
        border: 2px solid #fff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }
    .avatar-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        padding: 3px;
        transition: transform 0.3s;
    }
    .pokemon-row:hover .avatar-wrapper img {
        transform: scale(1.1);
    }
    .pokemon-row {
        transition: all 0.2s ease;
    }
    .pokemon-row:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        z-index: 1;
        position: relative;
    }
    .type-badge {
        background-color: #e0f7fa;
        color: #006064;
        border: 1px solid #b2ebf2;
    }
    .stats-pill {
        background: #f8f9fa;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
        display: inline-flex;
    }
    .btn-icon {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.2s;
    }
    .btn-icon:hover {
        transform: scale(1.1);
    }
    .no-img {
        font-size: 1.2rem;
        color: #ccc;
        font-weight: bold;
    }
</style>
@endsection
