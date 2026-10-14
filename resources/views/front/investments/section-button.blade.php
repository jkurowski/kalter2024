{{-- Przycisk pod treścią sekcji opisu inwestycji (button_name + button_url z CMS) --}}
@php
    $sectionButton = $sections->firstWhere('id', $id);
    $buttonName = trim((string) ($sectionButton->button_name ?? ''));
    $buttonUrl = trim((string) ($sectionButton->button_url ?? ''));
    $buttonExternal = preg_match('#^https?://#i', $buttonUrl) && parse_url($buttonUrl, PHP_URL_HOST) !== request()->getHost();
@endphp
@if($buttonName !== '' && preg_match('#^(https?://|/|\#)#i', $buttonUrl))
    <div class="mt-4">
        <a href="{{ $buttonUrl }}" class="btn btn-secondary btn-with-icon" @if($buttonExternal) target="_blank" rel="noopener" @endif>
            {{ $buttonName }}
            <svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062" aria-hidden="true">
                <path d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(-356 684)" fill="currentColor" />
            </svg>
        </a>
    </div>
@endif
