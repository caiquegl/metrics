<div style="margin: 0;
            padding:0px;
            box-sizing:border-box; 
            background: #022E03;
            font-family: Arial, Helvetica, sans-serif;">
    
    <div 
        class="container-mail" 
        style=" 
            height: 100vh; 
            width: 100%; 
            background-size:cover;">
            <br>
            <br>
        <div style="
          width: 100%;
          max-width: 500px;
          height: auto;
          background: white;
          border-radius: 10px;
          margin: 0 auto;">
          <div style="
                    display: grid;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    padding: 10px;
                    gap: 10px;">
            <div style="background: #036805;border-radius: 10px; text-align: center;">
                <img src="https://livinghnk.com/assets/images/living-hnk2.png" width="320" height="auto" alt="Icon living">
            </div>
              <h2 style="text-align: center;color: #036805;">Nova campanha para VIP's Living </h2>
              <p style="text-align: justify;padding: 10px;">Ative por aqui o seu QR Code e desfrute de benefícios que só um vip pode ter!</p>
              <br>

              <a style="height: 40px; 
                        width: 240px;
                        margin: 0 auto;
                      background: #036805;
                      padding: 10px;
                      text-decoration: none;
                      border-radius: 10px;
                      color: #fff;" href="{{ env('APP_URL')}}/living/qrcode_scan/{{ $vip }}">
                        <p style="margin-top: 10px !important;margin-left: 55px;">
                            Acessar seus beneficios
                        </p>
                    </a>
             <div style="padding-top: 16px; text-align: center;">
                <img src="https://livinghnk.com/assets/images/logo-heineken-4096.png" height="35" alt="heineken icon">
             </div>
          </div>
        </div>
    </div>
</div>
