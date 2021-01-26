@if (env('PASSWORDS_SHOWING') == 'N')
    <input type="password" id="{{ $id }}" name="{{ $name }}" class="form-control {{ $class }}">
@elseif (env('PASSWORDS_SHOWING') == 'B')
    <div class="input-group">
        <input type="password" id="{{ $id }}" name="{{ $name }}" class="form-control {{ $class }}">
        <div class="input-group-append">
            <span class="link-pointer pw-icon input-group-text" data-id="{{ $id }}">
                <i class="fa fa-eye"></i>
            </span>
        </div>
    </div>
@else
    <input type="text" id="{{ $id }}" name="{{ $name }}" class="form-control {{ $class }}">
@endif
