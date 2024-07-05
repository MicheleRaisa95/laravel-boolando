<header class="mr_bg-header">
    <div class="container">
        <div class="row text-withe">
            {{-- menu links --}}
            <div class="col fw-bold">
                <ul class="d-flex align-items-center mb-0 list-unstyled gap-3">
                    <li>
                        Donna
                    </li>
                    <li>
                        Uomo
                    </li>
                    <li>
                        Bambino
                    </li>
                </ul>
                {{-- menu links --}}
            </div>
                {{-- logo --}}
                <div class="col d-flex justify-content-center align items center">
                    <img class="img-fluid h-50" src="{{ Vite::asset('resources/img/boolean-logo.png')}}" alt="logo">
                </div>
                {{-- /logo --}}

                {{-- icone --}}
                <div class="col d-flex justify-content-end align-items-center gap-2 fs-4">
                <span>user</span>
                <span>&hearts;</span>
                <span>chart</span>
                </div>
                {{-- /icone --}}
        </div>
    </div>
</header>