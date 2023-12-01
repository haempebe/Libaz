@section('topTitle', 'Home')
@extends('layouts.app')

@section('content')
    <div class="bg-dark">
        <div class="container py-4">
            <form action="/library">
                <div class="bg-white border-radius-lg d-flex me-2">
                    <input type="search" class="form-control border-0 ps-3" name="search" placeholder="Search">
                    <button class="btn btn-dark my-1 me-1">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="mt-3 mx-xxl-8 mx-md-5 mx-3">
        <div class="row">
            <div class="col-xxl-3 mb-3">
                <div class="card">
                    <div class="card-header pb-1">
                        <p class="font-weight-bold h4"><i class="fas fa-filter"></i> Filter</p>
                    </div>
                    <div class="card-body">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header border-bottom">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Kategori Buku
                                        <i class="fas fa-chevron-down ms-3"></i>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <div role="group" aria-label="Basic checkbox toggle button group">
                                            @foreach ($allKategori as $pill)
                                                <input type="checkbox" class="btn-check" id="kategori{{ $pill->id }}"
                                                    autocomplete="off">
                                                <label class="btn btn-outline-dark"
                                                    for="kategori{{ $pill->id }}">{{ $pill->name }}</label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header border-bottom">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseTwo">
                                        Rak Buku
                                        <i class="fas fa-chevron-down ms-3"></i>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <div role="group" aria-label="Basic checkbox toggle button group">
                                            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                                            <label class="btn btn-outline-dark" for="btncheck1">komik</label>

                                            <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                            <label class="btn btn-outline-dark" for="btncheck2">Check</label>

                                            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                                            <label class="btn btn-outline-dark" for="btncheck3">Checkbox 3</label>

                                            <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                                            <label class="btn btn-outline-dark" for="btncheck4">Checkbox 3</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-9 col-md-8 mx-auto">
                <div class="row">
                    @foreach ($allBuku as $item)
                        <div class="col-xxl-3 col-md-4 col-6 mb-3">
                            <div class="card shadow-none border">
                                <img src="{{ asset('img/cover/' . $item->cover) }}" class="figure-img img-fluid rounded"
                                    style="object-fit:contain;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->name }}</h5>
                                    <p>{{$item->kategori->name}}</p>
                                    <a href="{{ url('library/' . $item->name) }}" class="btn btn-dark btn-sm">lihat</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-end">
                {{ $allBuku->links('components.paginate') }}
            </div>
        </div>
    </div>

@endsection
