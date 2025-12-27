<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    <div class="card-header bg-white border-0 py-3 px-4 d-flex justify-content-between align-items-center">
        <h5 class="mb-0 fw-bold text-secondary">
            <span class="me-2">📋</span> รายชื่อโปเกมอน
        </h5>
        <span class="badge rounded-pill bg-primary bg-opacity-10 text-primary px-3 py-2">
            Total: {{ count($pokedex) }}
        </span>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0 custom-table">
            <thead class="bg-light text-secondary text-uppercase text-xs fw-bolder">
                <tr class="text-center">
                    <th class="py-3">#</th>
                    <th>Sprite</th>
                    <th class="text-start">Name</th>
                    <th>Type</th>
                    <th>Species</th>
                    <th>Base Stats</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody class="text-center bg-white">
                @foreach($pokedex as $items)
                <tr class="pokemon-row">
                    <td class="text-muted fw-bold">{{ $loop->iteration }}</td>

                    <td>
                        {{-- 🔥🔥 จุดสำคัญ: ต้องมี div class="avatar-wrapper" ครอบรูปครับ --}}
                        <div class="avatar-wrapper mx-auto">
                            @if($items->image_url)
                                <img src="{{ $items->image_url }}" alt="{{ $items->name }}">
                            @else
                                <span class="no-img">?</span>
                            @endif
                        </div>
                    </td>

                    <td class="text-start">
                        <div class="fw-bold text-dark fs-5">{{ $items->name }}</div>
                        <small class="text-muted">ID: #{{ str_pad($items->id, 4, '0', STR_PAD_LEFT) }}</small>
                    </td>

                    <td>
                        <span class="badge rounded-pill type-badge px-3 py-2">
                            {{ $items->type }}
                        </span>
                    </td>

                    <td class="text-secondary fw-semibold">{{ $items->species }}</td>

                    <td>
                        <div class="d-flex justify-content-center gap-2 stats-pill">
                            <span title="HP" class="text-danger"><i class="bi bi-heart-fill"></i> {{ $items->hp }}</span>
                            <span class="text-muted">|</span>
                            <span title="Attack" class="text-warning"><i class="bi bi-lightning-fill"></i> {{ $items->attack }}</span>
                            <span class="text-muted">|</span>
                            <span title="Defense" class="text-info"><i class="bi bi-shield-fill"></i> {{ $items->defense }}</span>
                        </div>
                    </td>

                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="/prokedex/{{ $items->id }}/edit"
                               class="btn btn-icon btn-light text-warning shadow-sm"
                               title="Edit">
                                ✏️
                            </a>

                            <form action="/prokedex/{{ $items->id }}" method="post" class="d-inline"
                                  onsubmit="return confirm('⚠️ คุณแน่ใจหรือไม่ที่จะปล่อยโปเกมอนตัวนี้คืนสู่ป่า?')">
                                @csrf
                                @method('delete')
                                <button class="btn btn-icon btn-light text-danger shadow-sm" title="Delete">
                                    🗑
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
