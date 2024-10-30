@extends('admin.layout')
@section('meta_title', '- '.$cardTitle)

@section('content')
    @if(Route::is('admin.city.edit'))
        <form method="POST" action="{{route('admin.city.update', $entry->id)}}" enctype="multipart/form-data">
            @method('PUT')
            @else
                <form method="POST" action="{{route('admin.city.store')}}" enctype="multipart/form-data">
                    @endif
                    @csrf
                    <div class="container">
                        <div class="card-head container">
                            <div class="row">
                                <div class="col-12 pl-0">
                                    <h4 class="page-title"><i class="fe-grid"></i><a href="{{route('admin.city.index')}}" class="p-0">Miasta</a><span class="d-inline-flex me-2 ms-2">/</span>{{ $cardTitle }}</h4>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                            @include('form-elements.back-route-button')

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="card-body control-col12">
                                @if(!Request::get('lang'))
                                <div class="row w-100 form-group">
                                    @include('form-elements.html-select', ['label' => 'Status', 'name' => 'active', 'selected' => $entry->active, 'select' => ['1' => 'Pokaż na liście', '0' => 'Ukryj na liście']])
                                </div>
                                    <div class="row w-100 form-group">
                                        @include('form-elements.html-select', ['label' => 'Pokaż w zrealizowanych', 'name' => 'completed', 'selected' => $entry->completed, 'select' => ['1' => 'Tak', '0' => 'Nie']])
                                    </div>
                                @endif

                                <div class="row w-100 form-group">
                                    @include('form-elements.html-input-text', ['label' => 'Nazwa', 'name' => 'name', 'value' => $entry->name, 'required' => 1])
                                </div>
                                    @if(!Request::get('lang'))
                                <div class="row w-100 form-group">
                                    @include('form-elements.html-input-text', ['label' => 'Adres e-mail', 'name' => 'email', 'value' => $entry->email, 'required' => 1])
                                </div>
                                    @endif
                                <div class="row w-100 form-group">
                                    @include('form-elements.html-input-text', ['label' => 'Nagłówek', 'sublabel' => 'Na podstronie Kontakt', 'name' => 'contact_title', 'value' => $entry->contact_title, 'required' => 1])
                                </div>
                                <div class="row w-100 form-group">
                                    @include('form-elements.html-textarea', ['label' => 'Treść', 'sublabel' => 'Kod HTML', 'name' => 'contact_text', 'value' => $entry->contact_text, 'required' => 1, 'rows' => 15, 'cols' => 10])
                                </div>
                                <div class="row w-100 form-group">
                                    @include('form-elements.html-textarea', ['label' => 'Stopka', 'sublabel' => 'Kod HTML', 'name' => 'footer', 'value' => $entry->footer, 'rows' => 15, 'cols' => 10])
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="lang" value="{{$current_locale}}">
                    @include('form-elements.submit', ['name' => 'submit', 'value' => 'Zapisz'])
                </form>
        @endsection
