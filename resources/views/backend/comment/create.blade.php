@extends('backend.layout.app')
@section('title', 'Yorum Ekle')
@section('content')
    <div class="col-12 col-md-9">
        <div class="card">
            {{Form::open(['route' => 'comment.store'])}}
                <div class="card-header d-flex justify-content-between">
                    <x-add title="Yorum"></x-add>
                    <div>
                        <x-back></x-back>
                        <x-save></x-save>
                    </div>
                </div>
                <div class="card-body">
                <x-form-inputtext label="İsim Soyisim" name="name"/>
                <x-form-select label="Ürün" name="product_id" :list="$Product"/>
                <x-form-textarea label="Yorum" name="comment" ck="null" />

            </div>
            {{Form::close()}}
        </div>
    </div>

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
