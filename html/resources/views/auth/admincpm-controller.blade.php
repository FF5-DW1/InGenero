

@extends('layouts.app')

@section('content')


<div class="flex justify-center w-full items-center min-h-screen">
     <div class="w-96 max-w-sm"> 
        <div class="text-black text-3xl font-bold -mt-8 my-8 mx-8 ms-8 me-8 text-center "><br> Crear Perfil</div>
        {{-- <div class="CrearPerfilAdmin w-[613px] h-[450px] mx-auto"> --}}
            <div class=" h-96 w-96 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col items-center pb-10">
   
                   <br>
                   <br>
                    {{-- <div class="flex flex-col mt-4 space-y-3 md:mt-6">
     --}}
                        <a href="#" class="inline-flex items-center justify-center w-full px-4 py-2 text-lg font-medium text-center text-white bg-red-400 hover:bg-red-500 rounded-lg focus:ring-4 focus:outline-none focus:ring-red-300">Estrella</a>
                        <br>
                        <br>
                        <a href="#" class="inline-flex items-center justify-center w-full px-4 py-2 text-lg font-medium text-center text-white bg-red-400 hover:bg-red-500 border-gray-300 rounded-lg  focus:ring-4 focus:outline-none focus:ring-red-400  dark:text-white dark:border-red-400 dark:hover:bg-gray-700 dark:hover:border-red-400 dark:focus:ring-red-300">Madrina</a>
                        <div class="flex flex-col items-center justify-between mt-4">
                          
                
                        </div>
                    {{-- </div> --}}
                </div>
            {{-- </div> --}}
        </div>

      
     </div> 
    </div>

   
    {{-- <button class="bg-red-400 hover:bg-red-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="submit">
        Acceder
    </button> --}}

{{-- <div class="flex justify-center items-center h-screen">
    <div class="CrearPerfilAdmin w-[613px] h-[450px] mx-auto">
        <div class=" h-96 w-96 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-col items-center pb-10">
                <h5 class="mb-1 text-2xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
               
                <div class="flex flex-col mt-4 space-y-3 md:mt-6">

                    <a href="#" class="inline-flex items-center justify-center px-4 py-2 text-lg font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add friend</a>
                    <a href="#" class="inline-flex items-center justify-center px-4 py-2 text-lg font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Message</a>

                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection









{{-- 
<div class="CrearPerfilAdmin w-[476px] h-[374px] relative">
    <div class="Login w-[476px] h-[374px] left-0 top-0 absolute">
      <div class="CrearPerfil w-[260px] h-[54px] left-[108px] top-0 absolute text-black text-[42px] font-black">Crear perfil</div>
      <div class="Group8 w-[476px] h-20 left-0 top-[134px] absolute justify-center items-center inline-flex">
        <div class="Image6 w-[476px] h-20 bg-red-500 bg-opacity-70 rounded-[25px]"></div>
      </div>
      <div class="Group9 w-[476px] h-20 left-0 top-[294px] absolute justify-center items-center inline-flex">
        <div class="Image6 w-[476px] h-20 bg-red-500 bg-opacity-70 rounded-[25px]"></div>
      </div>
    </div>
    <div class="Estrella w-[152px] h-12 left-[162px] top-[150px] absolute text-white text-[42px] font-black">Estrella</div>
    <div class="Madrina w-[180px] h-12 left-[162px] top-[310px] absolute text-white text-[42px] font-black">Madrina</div>
  </div> --}}









{{-- 
<div class="CrearPerfilDesktop w-[1320px] h-[700px]  bg-white">

    <div class="w-96 max-w-sm">
    <div class="text-black text-3xl font-bold -mt-8 my-8 mx-8 ms-8 me-8 text-center "><br> Iniciar sesión</div>
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Default</button>
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Default</button>
    </div>
    </div> --}}




{{-- <div class="mb-6">
    <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Large input</label>
    <input type="text" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
</div>
<div class="mb-6">
    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Base input</label>
    <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
</div>
<div>
    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Small input</label>
    <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
</div> --}}

















{{-- <div class="CrearPerfilDesktop w-[1920px] h-[1896px] relative bg-white">
    <div class="CrearPerfilAdmin w-[476px] h-[374px] left-[730px] top-[444px] absolute">
      <div class="Login w-[476px] h-[374px] left-0 top-0 absolute">
        <div class="CrearPerfil w-[260px] h-[54px] left-[108px] top-0 absolute text-black text-[42px] font-black">Crear perfil</div>
        <div class="Group8 w-[476px] h-20 left-0 top-[134px] absolute justify-center items-center inline-flex">
          <div class="Image6 w-[476px] h-20 bg-red-500 bg-opacity-70 rounded-[25px]"></div>
        </div>
        <div class="Group9 w-[476px] h-20 left-0 top-[294px] absolute justify-center items-center inline-flex">
          <div class="Image6 w-[476px] h-20 bg-red-500 bg-opacity-70 rounded-[25px]"></div>
        </div>
      </div>
      <div class="Estrella w-[152px] h-12 left-[162px] top-[150px] absolute text-white text-[42px] font-black">Estrella</div>
      <div class="Madrina w-[180px] h-12 left-[162px] top-[310px] absolute text-white text-[42px] font-black">Madrina</div>
    </div>
    <div class="Navbar w-[1955px] h-[382.65px] left-[-35px] top-[-78px] absolute">
      <div class="FondoHeader w-[1920px] h-[173px] left-0 top-[75px] absolute bg-emerald-300 bg-opacity-20"></div>
      <div class="LogotipoIngNero w-[271.43px] h-[101.44px] left-[56px] top-[101.88px] absolute">
        <div class="VivirEsPuroTeatro w-[146.32px] h-[100.84px] left-[125.11px] top-[0.12px] absolute text-black text-[30px] font-black">Vivir es puro teatro</div>
        <div class="G860 w-[112.06px] h-[101.44px] left-0 top-0 absolute">
        </div>
      </div>
      <div class="BotonNosotrS w-[147px] h-[62px] pt-2 pb-[1px] left-[1009px] top-[149px] absolute justify-center items-center inline-flex">
        <div class="BtnNosotrS w-[162px] h-[53px] relative flex-col justify-start items-start flex">
          <div class="Rectangle65 w-[162px] h-[53px] bg-emerald-300 bg-opacity-0"></div>
          <div class="NosotrS w-[133px] h-[38px] text-black text-[28px] font-black">Nosotr@s</div>
        </div>
      </div>
      <div class="BtnInicio w-[162px] h-[53px] left-[709px] top-[157px] absolute">
        <div class="Rectangle65 w-[162px] h-[53px] left-0 top-0 absolute bg-emerald-300 bg-opacity-0"></div>
        <div class="Inicio w-[104px] h-[38px] left-[29px] top-[7px] absolute text-black text-[28px] font-black">Inicio</div>
      </div>
      <div class="BtnPerfiles w-[162px] h-[53px] left-[842px] top-[158px] absolute">
        <div class="Rectangle65 w-[162px] h-[53px] left-0 top-0 absolute bg-emerald-300 bg-opacity-0"></div>
        <div class="Perfiles w-[104px] h-[38px] left-[29px] top-[7px] absolute text-black text-[28px] font-black">Perfiles</div>
      </div>
      <div class="BtnUsuaria w-[162px] h-[53px] left-[1170px] top-[156px] absolute">
        <div class="Rectangle65 w-[162px] h-[53px] left-0 top-0 absolute bg-emerald-300 bg-opacity-0"></div>
        <div class="Usuaria w-[104px] h-[38px] left-[29px] top-[7px] absolute text-rose-800 text-[28px] font-black">Admin</div>
      </div>
      <div class="Arcoiris w-[300px] h-[382.65px] left-[1655px] top-0 absolute">
        <div class="G860 origin-top-left rotate-180 w-[260.91px] h-[293.25px] left-[300px] top-0 absolute">
        </div>
      </div>
    </div>
    <div class="Footer w-[1920px] h-[716px] left-0 top-[1180px] absolute">
      <div class="Group22 w-[1920px] h-[716px] left-0 top-0 absolute">
        <div class="RedesSociales w-[208.37px] h-[92.09px] left-[896px] top-[406px] absolute">
          <div class="RrssLogotipos w-[208.33px] h-[38.46px] left-[0.04px] top-[53.38px] absolute">
            <div class="InstagramLogo w-[39.06px] h-[38.46px] left-[112.85px] top-[0.13px] absolute">
              <div class="Rectangle18 w-[39.06px] h-[38.46px] left-[-0px] top-0 absolute bg-red-500 rounded-lg"></div>
              <div class="SocialIcons w-[19.53px] h-[19.23px] left-[9.76px] top-[9.63px] absolute"></div>
            </div>
            <div class="YoutubeLogo w-[39.06px] h-[38.46px] left-[169.27px] top-[0.20px] absolute">
              <div class="Rectangle19 w-[39.06px] h-[38.46px] left-[-0px] top-0 absolute bg-red-500 rounded-lg"></div>
              <div class="SocialIcons w-[19.53px] h-[19.23px] py-[2.85px] left-[9.76px] top-[9.63px] absolute justify-center items-center inline-flex"></div>
            </div>
            <div class="TwitterLogo w-[39.06px] h-[38.46px] left-0 top-0 absolute">
              <div class="Rectangle16 w-[39.06px] h-[38.46px] left-0 top-0 absolute bg-red-500 rounded-lg"></div>
              <div class="SocialIcons w-[18.83px] h-[19.23px] py-[1.80px] left-[9.76px] top-[9.63px] absolute flex-col justify-center items-center inline-flex"></div>
            </div>
            <div class="FacebookLogo w-[39.06px] h-[38.46px] left-[56.42px] top-[0.07px] absolute">
              <div class="Rectangle17 w-[39.06px] h-[38.46px] left-0 top-0 absolute bg-red-500 rounded-lg"></div>
              <div class="SocialIcons w-[19.53px] h-[19.23px] pb-[0.12px] left-[9.76px] top-[9.63px] absolute justify-center items-center inline-flex"></div>
            </div>
          </div>
          <div class="RedesSociales w-[198px] h-[43.81px] left-0 top-0 absolute text-black text-[18px] font-normal">Redes Sociales</div>
        </div>
        <div class="IngeneroTodosLosDerechosReservados2023 w-[438px] h-[33.45px] left-[751px] top-[674.19px] absolute text-black text-[18px] font-normal">InGenero - todos los derechos reservados @2023</div>
      </div>
      <img class="Logo1 w-[497px] h-[149px] left-[98px] top-[378px] absolute" src="https://via.placeholder.com/497x149" />
      <img class="FirmaDistritoCentroMadridPantoneazul1 w-[485px] h-[143px] left-[1369px] top-[378px] absolute" src="https://via.placeholder.com/485x143" />
    </div>
  </div> --}}

