@isset($sublabel)
    {!! Form::label($name, '<div class="text-right">'.$label.' <span class="text-danger d-inline">*</span><br><span>'.$sublabel.'</span></div>', ['class' => 'col-12 col-form-label control-label pb-2 required'], false) !!}
@else
    {!! Form::label($name, '<div class="text-right">'.$label.' <span class="text-danger d-inline">*</span></div>', ['class' => 'col-12 col-form-label control-label pb-2 required'], false) !!}
@endif

<div class="@isset($class) {{ $class }} @else {{ 'col-12 control-input position-relative d-flex align-items-center' }} @endisset">
    @php
        $attributes = ['class' => 'form-control selectpicker', 'multiple'];
        if (!empty($readonly)) {
            $attributes['disabled'] = 'disabled'; // Disable select field if readonly is true
        }
    @endphp

    @isset($selected)
        {!! Form::select($name.'[]', $select, $selected, $attributes) !!}
    @else
        {!! Form::select($name.'[]', $select, [], $attributes) !!}
    @endif

    @if($errors->first($name))<div class="invalid-feedback d-block">{{ $errors->first($name) }}</div>@endif
</div>

@push('scripts')
    <link href="{{ asset('/js/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/bootstrap-select/bootstrap-select.min.js') }}" charset="utf-8"></script>
@endpush