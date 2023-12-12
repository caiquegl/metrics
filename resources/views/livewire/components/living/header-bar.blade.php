<div class="container-fluid h-header">
    <div class="row">
        <div class="col-6">
            <span class="search-container">
                <label for="search-bar" class="search-label">
                    <i class='bx bx-search icon-search'></i>
                </label>
                <input type="text" class="search-bar" name="search-bar" id="search-bar" maxlength="23" placeholder="Pesquisar...">
            </span>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <div class="col-xl-8 d-flex justify-content-end">
                <img src="{{ asset('/assets/images/logo-heineken-4096.png')}}" class="header-logo" width="229" height="45" alt="Heineken icon">
            </div>
            <div class="col-xl-2 d-flex">
                <span class="btn-act-group">
                    <button type="button" class="btn-header">
                        <span class="icon-content">
                            <img src="{{ asset('/assets/images/icon/notify-icon.svg')}}" alt="Notifify icon">
                        </span>
                    </button>
                    <!--<button type="button" class="btn-header bg-plus">
                        <span class="icon-content">
                            <i class='bx bx-plus text-white' ></i>
                        </span>
                    </button>-->
                </span>
            </div>
            
        </div>
    </div>
</div>
