@section('topTitle', 'Add Book')
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('head')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Add Book'])
    <div class="card mx-4 my-3">
        <div class="card-header h4">
            <span><i class="fas fa-plus"></i></span> Add book
        </div>
        <div class="card-body">
            <form action="{{ route('book.book.perform') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-9 pe-lg-5">
                        <div class="mb-3">
                            <label for="bookTitle" class="form-label">Book Title</label>
                            <input type="text" name="name" class="form-control" id="bookTitle autofocus">
                            @error('name')
                                <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <div class="mb-3">
                                <label for="publisherSelect" class="form-label">Publisher</label>
                                <select class="form-select" name="penerbit_id" id="publisherSelect">
                                    <option value="" selected="">-- Select the Publisher --</option>
                                    @foreach ($penerbit as $penerbit)
                                        <option value="{{ $penerbit->id }}">{{ $penerbit->name }}</option>
                                    @endforeach
                                </select>
                                @error('penerbit_id')
                                    <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="stock" class="form-label">Book Amount</label>
                                <input type="number" name="jumlah" class="form-control" min="0" id="stock">
                                @error('jumlah')
                                    <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="year" class="form-label">publication Year</label>
                                <select class="form-select" name="tahun_terbit" id="year">
                                    <option value="{{ now()->year }}" selected="">{{ now()->year }}</option>
                                    @php
                                        $index = now()->year-1
                                    @endphp
                                    @for ($i = 0; $i <= 100; $i++)
                                        <option value="{{ $index }}">{{ $index-- }}</option>
                                    @endfor
                                </select>
                                @error('tahun_terbit')
                                    <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Description</label>
                            <div id="deskripsi" style="height:350px;"></div>
                            <textarea class="form-control" name="deskripsi" id="content-textarea" hidden style="display: none;"></textarea>
                            @error('deskripsi')
                                <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="writerSelect" class="form-label">Writer</label>
                            <select class="form-select" name="penulis_id" id="writerSelect">
                                <option value="" selected="">-- Select the Writer --</option>
                                @foreach ($penulis as $penulis)
                                    <option value="{{ $penulis->id }}">{{ $penulis->name }}</option>
                                @endforeach
                            </select>
                            @error('penulis_id')
                                <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="categorySelect" class="form-label">Category</label>
                            <select class="form-select" name="kategori_id" id="categorySelect">
                                <option value="" selected="">-- Select the Category --</option>
                                @foreach ($kategori as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                                @endforeach
                            </select>
                            @error('kategori_id')
                                <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="BookshelfSelect" class="form-label">Bookshelf</label>
                            <select class="form-select" name="rak_id" id="BookshelfSelect">
                                <option value="" selected="">-- Select the Bookshelf --</option>
                                @foreach ($rak as $rak)
                                    <option value="{{ $rak->id }}">Rak no {{ $rak->no }}</option>
                                @endforeach
                            </select>
                            @error('rak_id')
                                <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="card shadow-none border text-center p-3">
                                <label class="form-label border-dashed p-3 cursor-pointer" id="label"
                                    style="border-radius:10px;" for="imageFile">Upload Cover Book
                                    <img class="img-preview img-fluid mb-2">
                                    <img src="{{ asset('img/imageplus.png') }}" id="plusimg" class="img-fluid p-md-3"
                                        alt="">
                                    <input accept="image/*" type="file" name="cover" class="form-control mt-3"
                                        id="imageFile" onchange="previewImage()">
                                </label>
                                @error('cover')
                                    <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('book.book') }}" class="btn btn-secondary ">Cancel</a>
                <button type="submit" class="btn btn-dark">Add</button>
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
