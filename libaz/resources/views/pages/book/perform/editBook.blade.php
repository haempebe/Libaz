@section('topTitle', 'Edit Book')
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('head')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Edit Book'])
    <div class="card mx-4 my-3">
        <div class="card-header h4">
            <span><i class="fas fa-plus"></i></span> Add book
        </div>
        <div class="card-body">
            <form action="{{ route('book.book.update',$buku->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-9 pe-lg-5">
                        <div class="mb-3">
                            <label for="bookTitle" class="form-label">Book Title</label>
                            <input type="text" name="name" class="form-control" id="bookTitle autofocus"
                                value="{{ $buku->name }}">
                            @error('name')
                                <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <div class="mb-3">
                                <label for="publisherSelect" class="form-label">Publisher</label>
                                <select class="form-select" name="penerbit_id" id="publisherSelect">
                                    @foreach ($penerbit as $itemp)
                                        @if ($itemp->id === $buku->penerbit_id)
                                            <option value="{{ $itemp->id }}" selected>{{ $itemp->name }}</option>
                                        @else
                                            <option value="{{ $itemp->id }}">{{ $itemp->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('penerbit_id')
                                    <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="stock" class="form-label">Stock</label>
                                <input type="number" name="jumlah" class="form-control" min="0" id="stock"
                                    value="{{ $buku->jumlah }}">
                                @error('stok_buku')
                                    <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="year" class="form-label">publication Year</label>
                                <input type="number" name="tahun_terbit" class="form-control" min="0" id="year"
                                    value="{{ $buku->tahun_terbit }}">
                                @error('tahun_terbit')
                                    <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Description</label>
                            <div id="deskripsi" style="height:350px;">{!! $buku->deskripsi !!}</div>
                            <textarea class="form-control" name="deskripsi" id="content-textarea" hidden style="display: none;">{{ $buku->deskripsi }}</textarea>
                            @error('deskripsi')
                                <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="writerSelect" class="form-label">Writer</label>
                            <select class="form-select" name="penulis_id" id="writerSelect">
                                @foreach ($penulis as $itemw)
                                    @if ($itemw->id === $buku->penulis_id)
                                        <option value="{{ $itemw->id }}" selected>{{ $itemw->name }}</option>
                                    @else
                                        <option value="{{ $itemw->id }}">{{ $itemw->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('penulis_buku')
                                <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="categorySelect" class="form-label">Category</label>
                            <select class="form-select" name="kategori_id" id="categorySelect">
                                @foreach ($kategori as $itemk)
                                    @if ($itemk->id === $buku->kategori_id)
                                        <option value="{{ $itemk->id }}" selected>{{ $itemk->name }}</option>
                                    @else
                                        <option value="{{ $itemk->id }}">{{ $itemk->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('kategori_id')
                                <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="BookshelfSelect" class="form-label">Bookshelf</label>
                            <select class="form-select" name="rak_id" id="BookshelfSelect">
                                @foreach ($rak as $itemr)
                                    @if ($itemr->id === $buku->rak_id)
                                        <option value="{{ $itemr->id }}" selected>Rak nomor {{ $itemr->no }}
                                        </option>
                                    @else
                                        <option value="{{ $itemr->id }}">Rak nomor {{ $itemr->no }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('rak_id')
                                <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="card shadow-none border text-center p-3">
                                <label class="form-label border-dashed p-3 cursor-pointer" id="label"
                                    style="border-radius:10px;" for="imageFile">Upload Cover Book
                                    <img src="{{ asset('img/cover/' . $buku->cover) }}" class="img-preview img-fluid mb-2">
                                    <img src="" id="plusimg" class="img-fluid p-md-3" alt="">
                                    <input accept="image/*" type="file" name="cover" class="form-control mt-3"
                                        id="imageFile" onchange="previewImage()" value="{{ $buku->cover }}">
                                </label>
                                @error('cover')
                                    <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('book.book') }}" class="btn btn-secondary ">Cancel</a>
                <button type="submit" class="btn btn-dark">Update</button>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        function previewImage() {
            const imageFile = document.querySelector('#imageFile');
            const imgPreview = document.querySelector('.img-preview');
            const label = document.querySelector('#label');
            const img = document.querySelector('#plusimg');

            img.style.display = 'none';
            label.style.border = 0;
            imgPreview.style.display = 'block';

            const blob = URL.createObjectURL(imageFile.files[0]);
            imgPreview.src = blob;
        }
        var toolbarOptions = [
            [{
                'font': []
            }],
            [{
                'header': [1, 2, 3, 4, 5, 6, false]
            }],
            ['bold', 'italic', 'underline', 'strike'], // toggled buttons
            ['blockquote', 'code-block'],

            [{
                'list': 'ordered'
            }, {
                'list': 'bullet'
            }],
            [{
                'indent': '-1'
            }, {
                'indent': '+1'
            }],

            [{
                'color': []
            }, {
                'background': []
            }],
            [{
                'align': []
            }],

            ['clean']
        ];
        var quill = new Quill('#deskripsi', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
        });

        quill.on('text-change', function(delta, source) {
            updateHtmlOutput()
        })

        // When the convert button is clicked, update output
        $('#btn-convert').on('click', () => {
            updateHtmlOutput()
        })

        // Return the HTML content of the editor
        function getQuillHtml() {
            return quill.root.innerHTML;
        }

        // Highlight code output
        function updateHighlight() {
            hljs.highlightBlock(document.querySelector('#content-textarea'))
        }


        function updateHtmlOutput() {
            let html = getQuillHtml();
            console.log(html);
            document.getElementById('content-textarea').innerText = html;
            updateHighlight();
        }


        updateHtmlOutput()
    </script>
@endsection
