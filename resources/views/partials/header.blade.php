<div class="mr_bg-header">
    <div class="container">
        <div class="row">
            {{-- menu links --}}
            <div class="col fw-bold">
                <ul class="d-flex align-items-center mb-0 list-unstyled gap-3">
                    <li>
                        <a class="text-decoration-none text-white" href="#">Donna</a>
                    </li>
                    <li>
                        <a class="text-decoration-none text-white" href="#">Uomo</a>
                    </li>
                    <li>
                        <a class="text-decoration-none text-white" href="#">Bambino</a>
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
</div>