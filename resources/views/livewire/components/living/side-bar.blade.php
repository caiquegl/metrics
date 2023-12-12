<div class="col-xxl-2 col-xl-3 reset-pad-mag" id="sidebar" style="min-height: 920px">
    <div class="side-bar position-relative">
        <div class="row justify-content-center mx-3">
            <div class="col-xl-12 d-flex justify-content-center mt-40">
                <img src="{{ asset('/assets/images/living-hnk2.png')}}" class="pic-side text-center my-1" width="100%"
                height="74px" alt="Logo app form">
            </div>
        </div>
        
        <div class="container" style="min-height: 70vh">
            <div class="side-element-center my-4">
                @livewire('components.living.button-side-bar',
                    ['route' => route('home'), 
                    'icon' => ($current == 'home' ? asset('/assets/images/icon/store-icon-white.svg') : asset('/assets/images/icon/store-icon.svg')), 
                    'text' => 'Home', 
                    'active' => ($current == 'home' ? 'active-link' : '')
                    ])
                @livewire('components.living.button-side-bar', 
                    ['route' => route('campaign'), 
                    'icon' => ($current == 'campaign' ? asset('/assets/images/icon/megaphone-white.svg') : asset('/assets/images/icon/megaphone.svg')), 
                    'text' => 'Campanhas',
                    'active' => ($current == 'campaign' ? 'active-link' : '')
                    ])
                @livewire('components.living.button-side-bar', 
                    ['route' => route('clients'), 
                    'icon' =>  ($current == 'clients' ? asset('/assets/images/icon/crown-white.svg') : asset('/assets/images/icon/crown.svg')), 
                    'text' => 'Clientes',
                    'active' => ($current == 'clients' ? 'active-link' : '')
                    ])
                @livewire('components.living.button-side-bar', 
                    ['route' => route('loginl'), 
                    'icon' => asset('/assets/images/icon/signout.svg'), 
                    'text' => 'Log Out'])
            </div>
        </div>
           
        <div class="col-12">
            <div class="img-hnk-side position-relative">
                <img src="{{ asset('/assets/images/side-hnk.png')}}" class="pt-4 my-1" width="100%">
            </div>
        </div>
    </div>
</div>
