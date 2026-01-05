@extends('template.default')

@section('content')

<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">

<div class="main-bg py-5">
    <div class="container">

        {{-- Header --}}
        <div class="row mb-4 align-items-center">
            <div class="col">
                <h2 class="fw-bolder text-white text-shadow">
                    <span style="font-size: 1.5em;">🟠</span> Edit Mode
                </h2>
                <p class="text-white-50 mb-0">Updating: <strong>{{ $pokedex_update->name }}</strong></p>
            </div>
            <div class="col-auto">
                <a href="{{ url('/prokedexs') }}" class="btn btn-light text-primary fw-bold shadow-sm rounded-pill px-4">
                    <i class="bi bi-arrow-left"></i> Back
                </a>
            </div>
        </div>

        <div class="row g-4">
            {{-- 🟠 FORM EDIT --}}
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg rounded-4 form-card sticky-top" style="top: 20px; z-index: 10;">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">

                            {{-- รูปหัวข้อฟอร์ม (ควบคุมขนาดด้วย CSS .form-icon-header) --}}
                            <div class="form-icon-header mb-2 d-flex align-items-center justify-content-center overflow-hidden">
                                @if($pokedex_update->image_url)
                                    <img src="{{ $pokedex_update->image_url }}" alt="current image">
                                @else
                                    📝
                                @endif
                            </div>

                            <h4 class="fw-bold text-dark">Edit Pokémon</h4>
                            <span class="badge bg-warning text-dark">ID: #{{ str_pad($pokedex_update->id, 4, '0', STR_PAD_LEFT) }}</span>
                        </div>

                        <form action="{{ url('/prokedex/'.$pokedex_update->id) }}" method="POST">
                            @csrf
                            @method('put')

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" id="name" name="name"
                                       value="{{ $pokedex_update->name }}" required>
                                <label>Name</label>
                            </div>

                            <div class="row g-2 mb-3">
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control rounded-3" id="type" name="type"
                                               value="{{ $pokedex_update->type }}" required>
                                        <label>Type</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control rounded-3" id="species" name="species"
                                               value="{{ $pokedex_update->species }}">
                                        <label>Species</label>
                                    </div>
                                </div>
                            </div>

                            <div class="input-group mb-3 shadow-sm rounded-3 overflow-hidden">
                                <span class="input-group-text bg-light border-0"><i class="bi bi-arrows-vertical"></i></span>
                                <input type="number" step="0.01" class="form-control border-0 bg-light" name="height"
                                       value="{{ $pokedex_update->height }}" placeholder="Height">
                                <span class="input-group-text bg-light border-0"><i class="bi bi-speedometer2"></i></span>
                                <input type="number" step="0.01" class="form-control border-0 bg-light" name="weight"
                                       value="{{ $pokedex_update->weight }}" placeholder="Weight">
                            </div>

                            <label class="form-label fw-bold text-secondary small text-uppercase">Base Stats</label>
                            <div class="row g-2 mb-3">
                                <div class="col-4"><input type="number" class="form-control text-center stat-input hp" name="hp" value="{{ $pokedex_update->hp }}" placeholder="HP"></div>
                                <div class="col-4"><input type="number" class="form-control text-center stat-input atk" name="attack" value="{{ $pokedex_update->attack }}" placeholder="ATK"></div>
                                <div class="col-4"><input type="number" class="form-control text-center stat-input def" name="defense" value="{{ $pokedex_update->defense }}" placeholder="DEF"></div>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="text" class="form-control rounded-3" id="image_url" name="image_url"
                                       value="{{ $pokedex_update->image_url }}" placeholder="URL">
                                <label>Image URL</label>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-warning w-100 py-3 rounded-3 fw-bold shadow-sm btn-update text-white">
                                    Update Data 💾
                                </button>
                            </div>
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

<style>
    body { font-family: 'Nunito', sans-serif; background-color: #f3f4f6; }
    .main-bg { background: linear-gradient(135deg, #FF9966 0%, #556270 100%); min-height: 100vh; }
    .text-shadow { text-shadow: 2px 2px 4px rgba(0,0,0,0.3); }

    /* --- Form Styles --- */
    .form-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border: 2px solid #ffcc80 !important;
    }

    /* 🔥 1. แก้ขนาดรูปหัวข้อฟอร์มตรงนี้ */
    .form-icon-header {
        width: 80px;
        height: 80px;
        background: #fff3cd;
        border-radius: 50%;
        margin: 0 auto;
        box-shadow: 0 4px 15px rgba(255, 193, 7, 0.3);
        font-size: 2rem;
    }
    .form-icon-header img {
        width: 100%;
        height: 100%;
        object-fit: contain; /* รูปจะไม่ล้น */
        padding: 10px;
    }

    .form-control:focus { border-color: #FF9966; box-shadow: 0 0 0 0.25rem rgba(255, 153, 102, 0.25); }
    .stat-input { background: #f8f9fa; font-weight: bold; border: 2px solid transparent; }
    .stat-input:focus { background: white; }
    .stat-input.hp { border-bottom: 3px solid #dc3545; }
    .stat-input.atk { border-bottom: 3px solid #ffc107; }
    .stat-input.def { border-bottom: 3px solid #0dcaf0; }

    .btn-update {
        background: linear-gradient(45deg, #FF9966, #FF5E62);
        border: none;
        transition: transform 0.2s;
    }
    .btn-update:hover { transform: translateY(-2px); box-shadow: 0 10px 20px rgba(255, 94, 98, 0.4); color: white; }

    /* --- Table Styles --- */

    /* 🔥 2. แก้ขนาดรูปในตารางตรงนี้ */
    .avatar-wrapper {
        width: 50px;  /* ขนาดเล็กพอดี */
        height: 50px;
        background: #f8f9fa;
        border-radius: 50%;
        border: 2px solid #fff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        overflow: hidden;
        display: flex; align-items: center; justify-content: center;
        margin: 0 auto;
    }
    .avatar-wrapper img {
        width: 100%; height: 100%; object-fit: contain; padding: 3px;
        transition: transform 0.3s;
    }

    .pokemon-row:hover .avatar-wrapper img { transform: scale(1.1); }
    .pokemon-row { transition: all 0.2s ease; }
    .pokemon-row:hover { transform: translateY(-3px); box-shadow: 0 5px 15px rgba(0,0,0,0.05); z-index: 1; position: relative; }
    .type-badge { background-color: #e0f7fa; color: #006064; border: 1px solid #b2ebf2; }
    .stats-pill { background: #f8f9fa; padding: 5px 10px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; display: inline-flex; }
    .btn-icon { width: 35px; height: 35px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: 0.2s; }
    .btn-icon:hover { transform: scale(1.1); }
    .no-img { font-size: 1.2rem; color: #ccc; font-weight: bold; }
</style>
@endsection
