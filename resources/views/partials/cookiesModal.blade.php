    {{-- Cookies --}}
    <script>
        const ShowCoockies = async function(){
            const cookiesModal = await Swal.fire({
            title: 'Cookies',
            allowOutsideClick: false,
            html:`
                <div class="mb-4">
                    <strong>Este sitio web usa cookies</strong>
                    <p class="mt-4">Hacemos uso de las cookies para poder hacer funcionar correctamente este sitio web, vea nuestra <a class="text-old-gold" href="{{route('legal.cookies')}}">Politica de cookies.</a> para mas información</p>
                </div>
                <div style="height:0 ;display:none; padding:.5rem" id="select_cookies">
                    <div class="flex items-center">
                        <input checked disabled class="mr-3 w-5 h-5 rounded border-neutral text-primary focus-visible:ring focus-visible:ring-primary motion-safe:transition opacity-50" type="checkbox" name="functional" id="functional_cookies"> 
                        <div class="flex flex-col text-left">
                            <label for="functional"><strong> Functional cookies </strong></label>
                            <p>Estas cookies son necesarias para el funcionamiento del sitio y no pueden ser desactivadas</p>
                        </div>
                    </div>
                    <br>
                    <div class="flex items-center">
                        <input class="mr-3 w-5 h-5 rounded border-neutral text-primary focus-visible:ring focus-visible:ring-primary motion-safe:transition opacity-50" type="checkbox" name="analytics" id="analytics_cookies"> 
                        <div class="flex flex-col text-left">
                            <label for="analytics"><strong> Analytics cookies </strong></label>
                            <p>Cookies de terceros que sirven para que podamos medir las analiticas del sitio</p>
                        </div>
                    </div>
                </div>
            `,
            showDenyButton: true,
            denyButtonText: 'Manage Cookies',
            denyButtonColor: '#3C4045',
            confirmButtonText:'Allow',
            confirmButtonColor: '#aaa173',
            preDeny: () => {
                document.getElementById('select_cookies').style.height = 'auto';
                document.getElementById('select_cookies').style.display = 'block';
                return false;
            },
            inputValidator: (result) => {
                return !result && 'You need to agree with T&C'
            }
            }).then( (result) => {
                console.log(result);
                if(result.isDenied){
                    console.log('Debe Aceptar las cookies por defecto');
                }else if(result.isConfirmed){
                    Cookies('consentCookie', true);
                    Cookies('consentCookieDate', new Date());
                    const acceptAnalytics = document.getElementById('analytics_cookies').checked;
                    Cookies('analyticCookie', acceptAnalytics);
                }
            })
        }

        function Cookies(key,value){
            localStorage.setItem(key,value);
            return localStorage.getItem(key);
        }

        function getCookies(key){
            return !!localStorage.getItem(key);
        }

        if(!getCookies('consentCookie')){
            ShowCoockies();
        }

    </script>