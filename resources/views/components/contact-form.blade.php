@props([
    'pageTitle' => 'Undefined',
    'action' => '',
    'method' => 'POST',
])


<form id="contact-form" autocomplete="off" class="contact-form validateForm" action="{{ $action }}"
    method="{{ $method }}">
    @csrf
    <input type="hidden" name="page" value="{{ $pageTitle }}">
    <div class="row">
        <div class="col-12">
            @if (session('success'))
                <div class="alert alert-success border-0 mb-3">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-warning border-0 mb-3">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        <div class="col-12">
            <div class="form-floating mb-2">
                <input placeholder="Imię i nazwisko" name="form_name" id="form_name"
                    class="validate[required] form-control @error('form_name') is-invalid @enderror" type="text"
                    value="{{ old('form_name') }}">
                <label for="form_name">Imię i nazwisko <span class="text-danger">*</span></label>

                @error('form_name')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
            <div class="form-floating mb-2">
                <input placeholder="Adres e-mail" name="form_email" id="form_email"
                    class="validate[required] form-control @error('form_email') is-invalid @enderror" type="text"
                    value="{{ old('form_email') }}">
                <label for="form_email">Adres e-mail <span class="text-danger">*</span></label>

                @error('form_email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
            <div class="form-floating mb-2">
                <input placeholder="Telefon" name="form_phone" id="form_phone"
                    class="validate[required] form-control @error('form_phone') is-invalid @enderror" type="text"
                    value="{{ old('form_phone') }}">
                <label for="form_phone">Telefon <span class="text-danger">*</span></label>

                @error('form_phone')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>


        <div class="col-12">
            <div class="form-floating">
                <textarea placeholder="Wiadomość" style='min-height: 100px;' rows="5" cols="1" name="form_message"
                    id="form_message" class="validate[required] form-control @error('form_message') is-invalid @enderror">{{ old('form_message') }}</textarea>
                <label for="form_message">Wiadomość <span class="text-danger">*</span></label>

                @error('form_message')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

        </div>
    </div>



    <div class="col-12">
        <div class="form-check text-start pt-2 pb-2">
            <input class="form-check-input validate[required] " type="checkbox" value="" id="terms-check1"
                name="terms1">
            <label class="form-check-label fs-10 fs-8 fs-md-10" for="terms-check1">
                Wyrażam zgodę na przetwarzanie moich danych osobowych zawartych w formularzu, zgodnie z przepisami RODO
                oraz zasadami <a class="link-hover-primary text-decoration-underline"
                    href="/polityka-prywatnosci.php">Polityki prywatności</a>, w celu odpowiedzi na moje zapytanie.
                Podmiotem przetwarzającym dane osobowe jest Kalter Nieruchomości Sp. z o.o.<span
                    class="text-danger">*</span>
            </label>
        </div>
        <div class="form-check text-start pt-2 pb-2">
            <input class="form-check-input validate[required]" type="checkbox" value="" id="terms-check2"
                name="terms2">
            <label class="form-check-label fs-10 fs-8 fs-md-10" for="terms-check2">
                Wyrażam zgodę na przetwarzanie moich danych osobowych zawartych w formularzu w celach marketingowych, w
                tym marketingu bezpośredniego oraz otrzymywanie na podany adres e-mail i numer telefonu informacji
                handlowych obejmujących produkty oraz usługi świadczone przez Kalter Nieruchomości Sp. z o.o. oraz
                spółki należące do Grupy Kalter(powiązane kapitałowo) współpracujące ze sobą w ramach prowadzonych
                inwestycji.<span class="text-danger">*</span>
            </label>
        </div>
        <div class="text-start fs-10 fs-8 fs-md-10">
            
                Wyrażona zgoda jest dobrowolna ale niezbędna, żeby zarejestrować Pana/Panią w bazie kontaktowej
                Administratora Danych. Mają Państwo prawo żądać wstrzymania przetwarzania lub usunięcia danych, które
                zebraliśmy za Państwa zgodą. Równocześnie mają Państwo prawo do wycofania zgody poprzez przesłanie
                odpowiedniego oświadczenia na adres: <a
                    href="mailto:bialystok@kalternieruchomosci.pl">bialystok@kalternieruchomosci.pl</a>.
                Administratorem danych jest Kalter Nieruchomości Sp. z o.o.. Wycofanie zgody nie wpływa na zgodność z
                prawem przetwarzania danych na podstawie zgody przed jej wycofaniem
            
        </div>
    </div>
    <div class="col-12 text-center text-md-start pt-md-3">
        <button data-btn-submit="" type="submit" class="btn btn-primary btn-with-icon ">
            Wyślij
            <svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062">
                <path id="chevron_right_FILL0_wght100_GRAD0_opsz24"
                    d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z"
                    transform="translate(-356 684)" fill="currentColor" />
            </svg>

        </button>
    </div>
</form>

@push('scripts')
    <script src="{{ asset('js/validation.js') }}" defer></script>
    <script src="{{ asset('js/pl.js') }}" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition:true,
                promptPosition : "bottomRight",
                autoPositionUpdate: false
            });
        });
    </script>
@endpush


