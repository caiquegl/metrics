<div>
   
    <div class="load-beer">
        <div class="load-beer-animation">
            <svg version="1.1"
                x="0px" y="0px" width="51px" height="198.6px" viewBox="0 0 51 198.6" style="enable-background:new 0 0 51 198.6;"
                xml:space="preserve">
                <defs>
                    <mask id="liquidMask">
                        <path id="maskLiq" fill="#ffffff" class="st0" d="M31.5,5L32,8.7c0,0.1,1.5,11.5,2.7,22.6c0.2,1.8,0.3,3.7,0.3,5.6c0.2,5.5,0.4,10.6,3.3,14.3
                            c6.7,8.5,6.9,16,6.9,16.1c0.9,40.6,1.2,86.3,0.1,91.2c-0.2,0.9-0.4,1.8-0.6,2.7c-0.7,3.2-1,4.5-2.5,5.5c-1.8,1.3-6.1,2.8-16.8,2.8
                            c-10.6,0-15-1.5-16.8-2.8c-1.4-1-1.8-2.3-2.5-5.5c-0.2-0.9-0.4-1.8-0.6-2.7c-1.1-4.8-0.8-50.6,0.1-91.1c0-0.3,0.3-7.7,6.9-16.2
                            c2.9-3.6,3.1-8.8,3.3-14.3c0.1-1.9,0.1-3.8,0.3-5.6C17.5,20.1,19,8.7,19,8.6L19.5,5H31.5z"/> <!-- CenterMask -->
                        <g id="bubblesGroup" fill="#000000">
                        <circle id="XMLID_40_" class="st0" cx="29.3" cy="181.3" r="3.5"/>
                        <circle id="XMLID_39_" class="st0" cx="15.3" cy="181.3" r="5.3"/>
                        <circle id="XMLID_38_" class="st0" cx="19.3" cy="191.3" r="3"/>
                        <circle id="XMLID_37_" class="st0" cx="9.3" cy="191.3" r="1.4"/>
                        <circle id="XMLID_36_" class="st0" cx="14.3" cy="195.3" r="1.4"/>
                        <circle id="XMLID_35_" class="st0" cx="25.3" cy="197.3" r="1.4"/>
                        <circle id="XMLID_34_" class="st0" cx="29.3" cy="191.3" r="1.4"/>
                        <circle id="XMLID_33_" class="st0" cx="39.3" cy="197.3" r="1.4"/>
                        <circle id="XMLID_32_" class="st0" cx="38.3" cy="192.3" r="1.4"/>
                        <circle id="XMLID_31_" class="st0" cx="38.3" cy="186.3" r="3"/>
                        </g>  <!-- Bubbles Group -->
                    </mask>
                </defs>
                <g id="XMLID_41_" mask="url(#liquidMask)">
                    <path id="liquid" fill="#bf2e2e" d="M57.2,201.8H0V5c0,0,11.2-6.2,28.6-2.5C49.1,6.9,57.2,0,57.2,0V201.8z"/>   
                </g>
            </svg>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <!-- Banner start -->
            <div class="col-8 reset-pad-mag position-relative" style="height: 100%;">
                <div class="banner-card">
                    <img src="{{ asset('/assets/images/imagelogin.png') }}" alt="banner heineken">
                </div>
                <div class="txt-portal">
                    <h4 class="title-protal text-white">Portal Living HNK</h4>
                    <p class="text-white paragraph-living">
                        Espaço exclusivo para gerenciamento de campanhas, cadastro de clientes e acompanhamento de resultados.
                    </p>
                    <p class="text-white paragraph-living col-10">
                        KAOP Heineken®
                    </p>
                    <hr class="text-white hr-width opacity-none">
                </div>
            </div>  <!-- Banner end -->
            <!-- Form start -->
            <div class="col-4 bg-primary position-relative">
                <div class="row">
                    <div class="col-12 living-stand">
                        <img src="{{ asset('/assets/images/living-hnk2.png')}}" class="dimension-image" alt="Logo app form">
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <h4 class="text-white paragraph-living fs-24">Acessar conta</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <form wire:submit="login">
                                    <div class="container">
                                        @csrf
                                        <div class="mb-2">
                                            <label for="" class="form-label text-white">
                                                Email ID
                                            </label>
                                            <input 
                                                wire:model="email"
                                                type="email" 
                                                name="email_user" 
                                                class="form-login-living form-control"
                                                placeholder="seuemailempresa@empresa.com">
                                                <div>
                                                    @error('email') <span class="error" style="color: red;">{{ $message }}</span> @enderror 
                                                </div>
                                        </div>
                                        <div class="mb-2">
                                            <label for="" class="form-label text-white">
                                                Senha
                                            </label>
                                            <input 
                                                wire:model="password"
                                                type="password" 
                                                name="password_user" 
                                                class="form-login-living form-control"
                                                placeholder="*************">
                                                <div>
                                                    @error('password') <span class="error" style="color: red;">{{ $message }}</span> @enderror 
                                                </div>
                                        </div>
                                        <div class="mb-2 form-check d-flex">
                                            <input type="checkbox" name="sec_user_connection" class="form-check-input form-login-living-check" id="sec_connection">
                                            <label class="form-check-label txt-second mx-2" for="sec_connection">Manter conectado</label>
                                        </div>
                                        @if (session()->has('error'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ session('error') }}
                                            </div>
                                        @endif
                                        <div class="row justify-content-center">
                                            <div class="col-8 d-flex justify-content-center">
                                                <!-- element ref tagg <a> is test -->
                                                    <button class="button-living btn-login-living my-5" type="submit">Entrar</button>
                                                <!-- <a type="submit" class="btn btn-login-living my-5">Entrar</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 foot-post">
                        <div class="container">
                            <div class="row justify-content-center">
                                <img src="{{ asset('/assets/images/logo-heineken-4096.png')}}" class="foot-image" alt="Logo app form">
                                <span class="d-flex justify-content-center">
                                    <p class="txt-hnk-muted">2023 Copyrights © </p>&nbsp;
                                    <p class="txt-hnk-green">Heineken®</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  <!-- Form start -->
        </div>
    </div>
</div>
