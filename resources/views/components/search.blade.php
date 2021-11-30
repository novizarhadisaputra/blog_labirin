<div class="offcanvas vh-100 offcanvas-top" tabindex="-1" id="offcanvasSearch" aria-labelledby="offcanvasSearchLabel">
    <div class="offcanvas-header">
        <h1></h1>
        <button type="button" class="icon-button" data-bs-dismiss="offcanvas" aria-label="Close"><i
                class="bi bi-x"></i></button>
    </div>
    <div class="offcanvas-body">
        <div class="h-100 d-flex justify-content-center align-items-center">
            <form class="row g-2 w-100 d-flex justify-content-center" action="{{ route('search.index') }}">
                <div class="col-8 col-md-4">
                    <input class="form-control me-2 rounded-pill" name="keyword" type="search" placeholder="Masukkan kata kunci"
                        aria-label="Search">
                </div>
                <div class="col-4 col-md-2 d-grid gap-2">
                    <button class="btn btn-primary d-grid gap-2 rounded-pill" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>
</div>
