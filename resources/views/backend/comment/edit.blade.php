@extends('backend.layout.app')
@section('title', $Edit->title.' | Yorum Düzenle')
@section('content')
    {{Form::model($Edit, ["route" => ["comment.update", $Edit->id],'enctype' => 'multipart/form-data'])}}
    @method('PUT')
    <div class="row">
        <div class="col-12 col-md-9">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="d-flex">
                        <h4 class="card-title justify-content-center align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            Yorum Düzenle [ {{$Edit->name }}]
                        </h4>
                    </div>
                    <div>
                        <a class="btn btn-tabler btn-sm p-2" href="{{  url()->previous() }}" title="Geri">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 18v-6a3 3 0 0 0 -3 -3h-10l4 -4m0 8l-4 -4" /></svg>
                            Geri
                        </a>
                        <button class="btn btn-tabler btn-sm p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="10" y1="14" x2="21" y2="3" /><path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" /></svg>
                            Kaydet
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <x-form-inputtext label="İsim Soyisim" name="name"/>
                    <x-form-select label="Ürün" name="product_id" :list="$Product"/>
                    <x-form-textarea label="Yorum" name="comment" ck="null" />
                </div>
            </div>
        </div>
    </div>
    {{Form::close()}}
@endsection

@section('customJS')
    <script src="/backend/ckeditor/ckeditor.js"></script>
    <script type="text/javascript">

        CKEDITOR.replace( 'aciklama', {
            filebrowserUploadUrl: "{{ route('product.postUpload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form',
            height : 300,
            allowContent: true,
            
        });
    </script>
@endsection
