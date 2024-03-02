@extends('users.partials.master')
@section('content')

<div>
  <div class="hidden phone:block">
    <div class="relative">
      <img id="pecahan1" src="{{ asset('assets/pecahan/1.png') }}" alt="" class="w-full absolute z-10 transform transition">
    </div>
    <div class="relative">
      <img id="pecahan2" src="{{ asset('assets/pecahan/2.png') }}" alt="" class="w-full absolute z-10 transform transition">
    </div>
    <div class="relative">
      <img id="pecahan3" src="{{ asset('assets/pecahan/3.png') }}" alt="" class="w-full absolute z-10 transform transition">
    </div>
    <div class="relative">
      <img id="pecahan4" src="{{ asset('assets/pecahan/4.png') }}" alt="" class="w-full absolute z-10 transform transition">
    </div>
    <div class="relative">
      <img id="pecahan5" src="{{ asset('assets/pecahan/5.png') }}" alt="" class="w-full absolute z-10 transform transition">
    </div>
    <div class="relative">
      <img id="pecahan6" src="{{ asset('assets/pecahan/6.png') }}" alt="" class="w-full absolute z-10 transform transition">
    </div>
    <div class="relative">
      <img id="pecahan7" src="{{ asset('assets/pecahan/7.png') }}" alt="" class="w-full absolute z-10 transform transition">
    </div>
    <div class="relative">
      <img id="pecahan8" src="{{ asset('assets/pecahan/8.png') }}" alt="" class="w-full absolute z-10 transform transition">
    </div>
  </div>
  <div class="phone:hidden">
    <div class="relative">
      <img id="pecahan1-m" src="{{ asset('assets/pecahan/1-m.png') }}" alt="" class="w-full absolute z-10 transform transition">
    </div>
    <div class="relative">
      <img id="pecahan2-m" src="{{ asset('assets/pecahan/2-m.png') }}" alt="" class="w-full absolute z-10 transform transition">
    </div>
    <div class="relative">
      <img id="pecahan3-m" src="{{ asset('assets/pecahan/3-m.png') }}" alt="" class="w-full absolute z-10 transform transition">
    </div>
    <div class="relative">
      <img id="pecahan4-m" src="{{ asset('assets/pecahan/4-m.png') }}" alt="" class="w-full absolute z-10 transform transition">
    </div>
    <div class="relative">
      <img id="pecahan5-m" src="{{ asset('assets/pecahan/5-m.png') }}" alt="" class="w-full absolute z-10 transform transition">
    </div>
    <div class="relative">
      <img id="pecahan6-m" src="{{ asset('assets/pecahan/6-m.png') }}" alt="" class="w-full absolute z-10 transform transition">
    </div>
    <div class="relative">
      <img id="pecahan7-m" src="{{ asset('assets/pecahan/7-m.png') }}" alt="" class="w-full absolute z-10 transform transition">
    </div>
    <div class="relative">
      <img id="pecahan8-m" src="{{ asset('assets/pecahan/8-m.png') }}" alt="" class="w-full absolute z-10 transform transition">
    </div>
  </div>
  <div class="w-full h-full bg-opening flex justify-center items-center">
    <div id="bg-title" class="w-1/2 h-1/2 bg-main blur-opening rounded-full transition-all">
    </div>
    <h1 id="title" class="text-white font-jomhuria text-2xl phone:text-5xl tracking-wide absolute transition duration-700">ARTGEN-VERSE</h1>
  </div>
</div>

<div class="w-full bg-mainHeader flex gap-y-5 phone:gap-y-8 flex-col justify-center items-center text-white shadow-header">
  <p class="pt-5 phone:pt-10 font-nicomoji text-base text-center phone:text-2xl">Selamat datang dalam ART-GEN Universe!</p>
  <p class="pb-5 phone:pb-10 font-marcellus text-base text-center phone:text-2xl">Jelajahi aliran seni lukis 2D dan cari tahu aliran seni yang ada pada dirimu!</p>
</div>

<div>
  <div>
    <div id="fixedBackground" class="relative flex phone:justify-center">
      <img src="{{ asset('assets/pecahan/vector1.png') }}" alt="" class="absolute -z-20 mt-3 phone:mt-7 phone:w-1/2">
      <img src="{{ asset('assets/pecahan/vector2.png') }}" alt="" class="absolute -z-10 phone:w-1/2">
    </div>
    <ul id="fixedNavbar" class="text-white py-5 flex gap-x-1 phone:gap-x-3 justify-center font-kronaOne">
      <li>
        <div class="relative z-20">
          <div>
            <button id="menu-button" class="px-4 py-2 phone:px-14 phone:py-5 shadow-navbar bg-bgNavbar rounded-full border-2 border-white border-opacity-35 hover:bg-navbarHover hover:shadow-navbarHover transition duration-300 text-phone phone:text-base">ALIRAN</button>
          </div>
  
          <div id="dropdown" class="hidden absolute z-20 mt-2 ml-2 phone:ml-0 w-48 origin-top-right rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <div class="py-1 text-center" role="none">
              <a href="/aliran/neoklasik" class="text-white block px-4 py-2 text-sm hover:bg-navbarHover" role="menuitem" tabindex="-1" id="menu-item-0">NEO KLASIK</a>
              <a href="/aliran/romantisme" class="text-white block px-4 py-2 text-sm hover:bg-navbarHover" role="menuitem" tabindex="-1" id="menu-item-1">ROMANTISME</a>
              <a href="/aliran/realisme" class="text-white block px-4 py-2 text-sm hover:bg-navbarHover" role="menuitem" tabindex="-1" id="menu-item-2">REALISME</a>
              <a href="/aliran/naturalisme" class="text-white block px-4 py-2 text-sm hover:bg-navbarHover" role="menuitem" tabindex="-1" id="menu-item-2">NATURALISME</a>
              <a href="/aliran/ekspresionisme" class="text-white block px-4 py-2 text-sm hover:bg-navbarHover" role="menuitem" tabindex="-1" id="menu-item-2">EKSPRESIONISME</a>
              <a href="/aliran/impresionisme" class="text-white block px-4 py-2 text-sm hover:bg-navbarHover" role="menuitem" tabindex="-1" id="menu-item-2">IMPRESIONISME</a>
              <a href="/aliran/surealisme" class="text-white block px-4 py-2 text-sm hover:bg-navbarHover" role="menuitem" tabindex="-1" id="menu-item-2">SUREALISME</a>
              <a href="/aliran/kubisme" class="text-white block px-4 py-2 text-sm hover:bg-navbarHover" role="menuitem" tabindex="-1" id="menu-item-2">KUBISME</a>
              <a href="/aliran/abstrak-ekspresionisme" class="text-white block px-4 py-2 text-sm hover:bg-navbarHover" role="menuitem" tabindex="-1" id="menu-item-2">ABSTRAK</a>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="relative z-20">
          <button class="px-4 py-2 phone:px-14 phone:py-5 shadow-navbar bg-bgNavbar rounded-full border-2 border-white border-opacity-35 hover:bg-navbarHover hover:shadow-navbarHover transition duration-300 text-phone phone:text-base" onclick="location.href='/timeline'">TIMELINE</button>
        </div>
      </li>
      <li>
        <div class="relative z-20">
          <div>
            <button id="menu-button2" class="px-4 py-2 phone:px-14 phone:py-5 shadow-navbar bg-bgNavbar rounded-full border-2 border-white border-opacity-35 hover:bg-navbarHover hover:shadow-navbarHover transition duration-300 text-phone phone:text-base">SENIMAN</button>
          </div>

          <div id="dropdown2" class="hidden absolute z-10 mt-5 -ml-24 phone:-ml-0 w-[260px] phone:w-[500px] origin-top-right" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <div class="flex gap-x-3 phone:gap-x-5 overflow-x-scroll scrollbar-thin pb-3">

              <div class="w-48 phone:w-64 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                <div id="artistContainer" class="relative cursor-pointer hover:scale-105 transition duration-300">
                  <img src="{{ asset('assets/seniman/frida-kahlo/frida-kahlo.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                  <h2 class="absolute bottom-3 text-white font-bold w-full text-center tracking-widest text-sm phone:text-base">FRIDA KAHLO</h2>
                </div>
                <div id="artistDetails" class="w-full hidden bg-senimanBg text-black rounded-xl items-center text-center">
                  <h2 class="py-3 text-sm phone:text-base">PELUKIS MEKSIKO</h2>
                  <h2 class="pb-3 text-sm phone:text-base">Surealisme, Magic Realisme</h2>
                  <div class="h-44 phone:h-80 flex flex-col gap-y-3 overflow-y-scroll scrollbar-thin mb-5">
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/frida-kahlo/frida-art1.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Frieda and Diego Rivera, 1931</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/frida-kahlo/frida-art2.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Henry Ford Hospital, 1932</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/frida-kahlo/frida-art3.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">What the Water Gave Me, 1938</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/frida-kahlo/frida-art4.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">The Wounded Deer, 1946</h2>
                    </div>
                  </div>
                </div>
              </div>

              <div class="w-48 phone:w-64 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                <div id="artistContainer2" class="relative cursor-pointer hover:scale-105 transition duration-300">
                  <img src="{{ asset('assets/seniman/jackson-pollock/jackson-pollock.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                  <h2 class="absolute bottom-3 text-white font-bold w-full text-center tracking-widest text-sm phone:text-base">JACKSON POLLOCK</h2>
                </div>
                <div id="artistDetails2" class="w-full hidden bg-senimanBg text-black rounded-xl items-center text-center">
                  <h2 class="py-3 text-sm phone:text-base">PELUKIS AMERIKA</h2>
                  <h2 class="pb-3 text-sm phone:text-base">Abstrak, Ekspresionisme, Surealisme</h2>
                  <div class="h-44 phone:h-80 flex flex-col gap-y-3 overflow-y-scroll scrollbar-thin mb-5">
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/jackson-pollock/jackson-art1.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Authumn Rhythm: Number 30, 1950</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/jackson-pollock/jackson-art2.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Ocean Greyness, 1953</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/jackson-pollock/jackson-art3.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">The She Wolf, 1943</h2>
                    </div>
                  </div>
                </div>
              </div>

              <div class="w-48 phone:w-64 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                <div id="artistContainer3" class="relative cursor-pointer hover:scale-105 transition duration-300">
                  <img src="{{ asset('assets/seniman/salvador-dali/salvador-dali.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                  <h2 class="absolute bottom-3 text-white font-bold w-full text-center tracking-widest text-sm phone:text-base">SALVADOR DALI</h2>
                </div>
                <div id="artistDetails3" class="w-full hidden bg-senimanBg text-black rounded-xl items-center text-center">
                  <h2 class="py-3 text-sm phone:text-base">PELUKIS SPANYOL</h2>
                  <h2 class="pb-3 text-sm phone:text-base">Surealisme</h2>
                  <div class="h-44 phone:h-80 flex flex-col gap-y-3 overflow-y-scroll scrollbar-thin mb-5">
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/salvador-dali/salvador-art1.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Persistent of Memory, 1931</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/salvador-dali/salvador-art2.webp') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Great Masturbator, 1929</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/salvador-dali/salvador-art3.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">The Enigma of My Desire, 1929</h2>
                    </div>
                  </div>
                </div>
              </div>

              <div class="w-48 phone:w-64 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                <div id="artistContainer4" class="relative cursor-pointer hover:scale-105 transition duration-300">
                  <img src="{{ asset('assets/seniman/leonardo-da-vinci/leonardo-da-vinci.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                  <h2 class="absolute bottom-3 text-white font-bold w-full text-center tracking-widest text-sm phone:text-base">LEONARDO DA VINCI</h2>
                </div>
                <div id="artistDetails4" class="w-full hidden bg-senimanBg text-black rounded-xl items-center text-center">
                  <h2 class="py-3 text-sm phone:text-base">PELUKIS ITALI</h2>
                  <h2 class="pb-3 text-sm phone:text-base">Renaisans</h2>
                  <div class="h-44 phone:h-80 flex flex-col gap-y-3 overflow-y-scroll scrollbar-thin mb-5">
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/leonardo-da-vinci/leonardo-art1.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Ginevra de' Benci, 1474</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/leonardo-da-vinci/leonardo-art2.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Virgin of The Rocks, 1483</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/leonardo-da-vinci/leonardo-art3.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Lady with an Ermine, 1489</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/leonardo-da-vinci/leonardo-art4.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Salvator Mundi, 1500</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/leonardo-da-vinci/leonardo-art5.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Mona Lisa, 1503</h2>
                    </div>
                  </div>
                </div>
              </div>

              <div class="w-48 phone:w-64 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                <div id="artistContainer5" class="relative cursor-pointer hover:scale-105 transition duration-300">
                  <img src="{{ asset('assets/seniman/vincent-van-gogh/vincent-van-gogh.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                  <h2 class="absolute bottom-3 text-white font-bold w-full text-center tracking-widest text-sm phone:text-base">VINCENT VAN GOGH</h2>
                </div>
                <div id="artistDetails5" class="w-full hidden bg-senimanBg text-black rounded-xl items-center text-center">
                  <h2 class="py-3 text-sm phone:text-base">PELUKIS BELANDA</h2>
                  <h2 class="pb-3 text-sm phone:text-base">Impresionisme</h2>
                  <div class="h-44 phone:h-80 flex flex-col gap-y-3 overflow-y-scroll scrollbar-thin mb-5">
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/vincent-van-gogh/vincent-art1.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">The Potato Eaters, 1885</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/vincent-van-gogh/vincent-art2.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">The Courtesan (After Eisen), 1887</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/vincent-van-gogh/vincent-art3.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Café Terrace At Night, 1888</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/vincent-van-gogh/vincent-art4.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Sunflower, 1888</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/vincent-van-gogh/vincent-art5.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Self-Portrait with Bandaged Ear, 1889</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/vincent-van-gogh/vincent-art6.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Starry Night, 1889</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/vincent-van-gogh/vincent-art7.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Paul Ferdinand Gachet, 1890</h2>
                    </div>
                  </div>
                </div>
              </div>

              <div class="w-48 phone:w-64 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                <div id="artistContainer6" class="relative cursor-pointer hover:scale-105 transition duration-300">
                  <img src="{{ asset('assets/seniman/pablo-picasso/pablo-picasso.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                  <h2 class="absolute bottom-3 text-white font-bold w-full text-center tracking-widest text-sm phone:text-base">PABLO PICASSO</h2>
                </div>
                <div id="artistDetails6" class="w-full hidden bg-senimanBg text-black rounded-xl items-center text-center">
                  <h2 class="py-3 text-sm phone:text-base">PELUKIS SPANYOL</h2>
                  <h2 class="pb-3 text-sm phone:text-base">Kubisme, Surealisme</h2>
                  <div class="h-44 phone:h-80 flex flex-col gap-y-3 overflow-y-scroll scrollbar-thin mb-5">
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/pablo-picasso/pablo-art1.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">The Soup, 1902</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/pablo-picasso/pablo-art2.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Portrait of Gertrude Stain, 1905</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/pablo-picasso/pablo-art3.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Les Demoiselles d'Avignon, 1907</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/pablo-picasso/pablo-art4.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">The Three Musicians, 1921</h2>
                    </div>
                  </div>
                </div>
              </div>

              <div class="w-48 phone:w-64 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                <div id="artistContainer7" class="relative cursor-pointer hover:scale-105 transition duration-300">
                  <img src="{{ asset('assets/seniman/raden-saleh/raden-saleh.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                  <h2 class="absolute bottom-3 text-white font-bold w-full text-center tracking-widest px-3 text-sm phone:text-base">RADEN SALEH SJARIF BUSTAMAN</h2>
                </div>
                <div id="artistDetails7" class="w-full hidden bg-senimanBg text-black rounded-xl items-center text-center">
                  <h2 class="py-3 text-sm phone:text-base">PELUKIS dari SEMARANG</h2>
                  <h2 class="pb-3 text-sm phone:text-base">Romantisme</h2>
                  <div class="h-44 phone:h-80 flex flex-col gap-y-3 overflow-y-scroll scrollbar-thin mb-5">
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/raden-saleh/raden-art1.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Perburuan Banteng, 1855</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/raden-saleh/raden-art2.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Penangkapan Pangeran Diponegoro, 1857</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/raden-saleh/raden-art3.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Enam Pengendara Kuda Mengejar Rusa, 1860</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/raden-saleh/raden-art4.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Banjir di Jawa, 1876</h2>
                    </div>
                  </div>
                </div>
              </div>

              <div class="w-48 phone:w-64 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                <div id="artistContainer8" class="relative cursor-pointer hover:scale-105 transition duration-300">
                  <img src="{{ asset('assets/seniman/basoeki-abdul/basoeki-abdul.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                  <h2 class="absolute bottom-3 text-white font-bold w-full text-center tracking-widest px-3 text-sm phone:text-base">FRANSISKUS XAVERIUS BASOEKI ABDULLAH</h2>
                </div>
                <div id="artistDetails8" class="w-full hidden bg-senimanBg text-black rounded-xl items-center text-center">
                  <h2 class="py-3 text-sm phone:text-base">PELUKIS dari SOLO</h2>
                  <h2 class="pb-3 text-sm phone:text-base">Realisme, Naturalisme</h2>
                  <div class="h-44 phone:h-80 flex flex-col gap-y-3 overflow-y-scroll scrollbar-thin mb-5">
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/basoeki-abdul/basoeki-art1.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Diponegoro Memimpin Pertempuran, 1940-1960</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/basoeki-abdul/basoeki-art2.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Upatjara Pembakaran Djenazah di Bali, 1940-1960</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/basoeki-abdul/basoeki-art3.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Dr. Ir. Soekarno Presiden Rebuplik Indonesia, 1945-1964</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/basoeki-abdul/basoeki-art4.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Njai Loro Kidul, 1950-1964</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/basoeki-abdul/basoeki-art5.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Pemandangan di Kintamani, 1950-1964</h2>
                    </div>
                  </div>
                </div>
              </div>

              <div class="w-48 phone:w-64 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                <div id="artistContainer9" class="relative cursor-pointer hover:scale-105 transition duration-300">
                  <img src="{{ asset('assets/seniman/affandi-koesoema/affandi-koesoema.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                  <h2 class="absolute bottom-3 text-white font-bold w-full text-center tracking-widest text-sm phone:text-base">AFFANDI KOESOEMA</h2>
                </div>
                <div id="artistDetails9" class="w-full hidden bg-senimanBg text-black rounded-xl items-center text-center">
                  <h2 class="py-3 text-sm phone:text-base">PELUKIS dari CIREBON</h2>
                  <h2 class="pb-3 text-sm phone:text-base">Ekspresionisme, Abstrak</h2>
                  <div class="h-44 phone:h-80 flex flex-col gap-y-3 overflow-y-scroll scrollbar-thin mb-5">
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/affandi-koesoema/affandi-art1.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Crab Eating, 1963</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/affandi-koesoema/affandi-art2.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Proas of Kusamba, Bali, 1963</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/affandi-koesoema/affandi-art3.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Horse Riding I, 1963</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/affandi-koesoema/affandi-art4.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Rangda, 1963</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/affandi-koesoema/affandi-art5.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Self-Potrait, 1964</h2>
                    </div>
                  </div>
                </div>
              </div>

              <div class="w-48 phone:w-64 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                <div id="artistContainer10" class="relative cursor-pointer hover:scale-105 transition duration-300">
                  <img src="{{ asset('assets/seniman/sindoedarsono/sindoedarsono.png') }}" alt="" class="w-full rounded-xl" draggable="false">
                  <h2 class="absolute bottom-3 text-white font-bold w-full text-center tracking-widest text-sm phone:text-base">SINDOEDARSONO SOEDJOJONO</h2>
                </div>
                <div id="artistDetails10" class="w-full hidden bg-senimanBg text-black rounded-xl items-center text-center">
                  <h2 class="py-3 text-sm phone:text-base">PELUKIS dari SUMATERA UTARA</h2>
                  <h2 class="pb-3 text-sm phone:text-base">Ekspresionisme</h2>
                  <div class="h-44 phone:h-80 flex flex-col gap-y-3 overflow-y-scroll scrollbar-thin mb-5">
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/sindoedarsono/sindoedarsono-art1.gif') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Di Depan Kelambu Terbuka, 1939</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/sindoedarsono/sindoedarsono-art2.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Tjap Go Meh, 1940</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/sindoedarsono/sindoedarsono-art3.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Mengungsi, 1950</h2>
                    </div>
                  </div>
                </div>
              </div>

              <div class="w-48 phone:w-64 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                <div id="artistContainer11" class="relative cursor-pointer hover:scale-105 transition duration-300">
                  <img src="{{ asset('assets/seniman/agus-djaja/agus-djaja.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                  <h2 class="absolute bottom-3 text-white font-bold w-full text-center tracking-widest px-3 text-sm phone:text-base">AGUS DJAJA SUMINTA</h2>
                </div>
                <div id="artistDetails11" class="w-full hidden bg-senimanBg text-black rounded-xl items-center text-center">
                  <h2 class="py-3 text-sm phone:text-base">PENDIRI DAN KETUA PERSAGI</h2>
                  <h2 class="pb-3 text-sm phone:text-base">Potrait, Abstrak, Semi-Abstrak</h2>
                  <div class="h-44 phone:h-80 flex flex-col gap-y-3 overflow-y-scroll scrollbar-thin mb-5">
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/agus-djaja/agus-art1.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Gadis Bali, 1955</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/agus-djaja/agus-art2.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Kuda Kepang, 1965</h2>
                    </div>
                    <div class="relative mx-5">
                      <img src="{{ asset('assets/seniman/agus-djaja/agus-art3.jpg') }}" alt="" class="w-full rounded-xl" draggable="false">
                      <h2 class="absolute bottom-3 text-white w-full text-center text-xs phone:text-sm">Dogs in Full Moon, 1976</h2>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="relative z-20">
          <div>
            <button id="menu-button3" class="px-4 py-2 phone:px-14 phone:py-5 shadow-navbar bg-bgNavbar rounded-full border-2 border-white border-opacity-35 hover:bg-navbarHover hover:shadow-navbarHover transition duration-300 text-phone phone:text-base">LAINNYA</button>
          </div>
  
          <div id="dropdown3" class="hidden absolute z-10 mt-2 -ml-32 phone:-ml-0 w-52 origin-top-right rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <div class="py-1 text-center" role="none">
              <a href="#" class="text-white block px-4 py-2 text-md hover:bg-navbarHover" role="menuitem" tabindex="-1" id="menu-item-0">MY ARTGEN</a>
              <a href="#" class="text-white block px-4 py-2 text-md hover:bg-navbarHover" role="menuitem" tabindex="-1" id="menu-item-1">PRETEST</a>
              <a href="#" class="text-white block px-4 py-2 text-md hover:bg-navbarHover" role="menuitem" tabindex="-1" id="menu-item-2">POST-TEST</a>
              <a href="#" class="text-white block px-4 py-2 text-md hover:bg-navbarHover" role="menuitem" tabindex="-1" id="menu-item-2">Tentang Artgen-Verse</a>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>

  <div id="bg-blur" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur2" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur3" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  
  <div class="flex justify-center items-center mt-10 phone:mt-40">
    <div class="w-full phone:w-1/2 flex justify-start">
      <div class="w-5/12 phone:w-3/5 flex">
        <img src="{{ asset('assets/karakter/neoklasik.png') }}" alt="" class="w-[550px] hidden phone:block cursor-pointer">
        <img src="{{ asset('assets/karakter/neoklasik-m.png') }}" alt="" class="w-full phone:hidden">
      </div>
      <div class="w-7/12 phone:w-2/5 flex flex-col gap-y-3 phone:gap-y-7 justify-center items-start font-kronaOne">
        <h1 class="text-base phone:text-4xl text-neoklasik"><span class="text-3xl phone:text-8xl">N</span>EO KLASIK</h1>
        <button class="px-4 py-2 phone:px-14 phone:py-5 shadow-navbar bg-bgNavbar rounded-full border-2 border-white border-opacity-35 text-white text-phone phone:text-xs hover:bg-navbarHover hover:shadow-navbarHover transition duration-300" onclick="location.href='/aliran/neoklasik'">JELAJAHI</button>
        <div class="flex gap-x-2 phone:gap-x-5 overflow-x-scroll scrollbar-thin h-28 phone:h-44 mt-3">
          <img src="{{ asset('assets/neoklasik/neoclassicism_1.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/neoklasik/neoclassicism_2.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/neoklasik/neoclassicism_3.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/neoklasik/neoclassicism_4.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
        </div>
      </div>
    </div>
  </div>
  
  <div class="flex justify-center items-center mt-10 phone:mt-40">
    <div class="w-full phone:w-1/2 flex">
      <div class="w-7/12 phone:w-2/5 flex flex-col gap-y-3 phone:gap-y-7 justify-center items-end font-kronaOne">
        <h1 class="text-base phone:text-4xl text-bgNavbar"><span class="text-3xl phone:text-8xl">R</span>OMANTISME</h1>
        <button class="px-4 py-2 phone:px-14 phone:py-5 shadow-navbar bg-bgNavbar rounded-full border-2 border-white border-opacity-35 text-white text-phone phone:text-xs hover:bg-navbarHover hover:shadow-navbarHover transition duration-300" onclick="location.href='/aliran/romantisme'">JELAJAHI</button>
        <div class="flex flex-row-reverse gap-x-2 phone:gap-x-5 overflow-x-scroll scrollbar-thin h-28 phone:h-44 mt-3">
          <img src="{{ asset('assets/romantisme/romanticism_1.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/romantisme/romanticism_2.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/romantisme/romanticism_3.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/romantisme/romanticism_4.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
        </div>
      </div>
      <div class="w-5/12 phone:w-3/5 flex justify-end">
        <img src="{{ asset('assets/karakter/romantisme.png') }}" alt="" class="w-[400px]">
      </div>
    </div>
  </div>
  
  <div class="flex justify-center items-center mt-10 phone:mt-40">
    <div class="w-full phone:w-1/2 flex justify-start">
      <div class="w-7/12 phone:w-3/5 flex">
        <img src="{{ asset('assets/karakter/realisme.png') }}" alt="" class="w-[550px]">
      </div>
      <div class="w-5/12 phone:w-2/5 flex flex-col gap-y-3 phone:gap-y-7 justify-center items-start font-kronaOne">
        <h1 class="text-base phone:text-4xl text-realisme"><span class="text-3xl phone:text-8xl">R</span>EALISME</h1>
        <button class="px-4 py-2 phone:px-14 phone:py-5 shadow-navbar bg-bgNavbar rounded-full border-2 border-white border-opacity-35 text-white text-phone phone:text-xs hover:bg-navbarHover hover:shadow-navbarHover transition duration-300" onclick="location.href='/aliran/realisme'">JELAJAHI</button>
        <div class="flex gap-x-2 phone:gap-x-5 overflow-x-scroll scrollbar-thin h-28 phone:h-44 mt-3">
          <img src="{{ asset('assets/realisme/realism_1.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/realisme/realism_2.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/realisme/realism_3.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/realisme/realism_4.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
        </div>
      </div>
    </div>
  </div>
  
  <div class="flex justify-center items-center mt-10 phone:mt-40">
    <div class="w-full phone:w-1/2 flex">
      <div class="w-7/12 phone:w-2/5 flex flex-col gap-y-3 phone:gap-y-7 justify-center items-end font-kronaOne">
        <h1 class="text-base phone:text-4xl text-naturalisme"><span class="text-3xl phone:text-8xl">N</span>ATURALISME</h1>
        <button class="px-4 py-2 phone:px-14 phone:py-5 shadow-navbar bg-bgNavbar rounded-full border-2 border-white border-opacity-35 text-white text-phone phone:text-xs hover:bg-navbarHover hover:shadow-navbarHover transition duration-300" onclick="location.href='/aliran/naturalisme'">JELAJAHI</button>
        <div class="flex flex-row-reverse gap-x-2 phone:gap-x-5 overflow-x-scroll scrollbar-thin h-28 phone:h-44 mt-3">
          <img src="{{ asset('assets/naturalisme/naturalism_1.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/naturalisme/naturalism_2.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/naturalisme/naturalism_3.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/naturalisme/naturalism_4.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/naturalisme/naturalism_5.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
        </div>
      </div>
      <div class="w-5/12 phone:w-3/5 flex justify-end">
        <img src="{{ asset('assets/karakter/naturalis.png') }}" alt="" class="w-[450px]">
      </div>
    </div>
  </div>
  
  <div class="flex justify-center items-center mt-10 phone:mt-40">
    <div class="w-full phone:w-1/2 flex justify-start">
      <div class="w-5/12 phone:w-6/12 flex">
        <img src="{{ asset('assets/karakter/ekspresionisme.png') }}" alt="" class="w-[500px]">
      </div>
      <div class="w-7/12 phone:w-6/12 flex flex-col gap-y-3 phone:gap-y-7 justify-center items-start font-kronaOne">
        <h1 class="text-base phone:text-4xl text-ekspresionisme"><span class="text-3xl phone:text-8xl">E</span>KSPRESIONISME</h1>
        <button class="px-4 py-2 phone:px-14 phone:py-5 shadow-navbar bg-bgNavbar rounded-full border-2 border-white border-opacity-35 text-white text-phone phone:text-xs hover:bg-navbarHover hover:shadow-navbarHover transition duration-300" onclick="location.href='/aliran/ekspresionisme'">JELAJAHI</button>
        <div class="flex gap-x-2 phone:gap-x-5 overflow-x-scroll scrollbar-thin h-28 phone:h-44 mt-3">
          <img src="{{ asset('assets/ekspresionisme/expressionism_1.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/ekspresionisme/expressionism_2.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/ekspresionisme/expressionism_3.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/ekspresionisme/expressionism_4.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
        </div>
      </div>
    </div>
  </div>
  
  <div class="flex justify-center items-center mt-10 phone:mt-40">
    <div class="w-full phone:w-1/2 flex">
      <div class="w-6/12 phone:w-2/5 flex flex-col gap-y-3 phone:gap-y-7 justify-center items-end font-kronaOne">
        <h1 class="text-base phone:text-4xl text-impresionisme"><span class="text-3xl phone:text-8xl">I</span>MPRESIONISME</h1>
        <button class="px-4 py-2 phone:px-14 phone:py-5 shadow-navbar bg-bgNavbar rounded-full border-2 border-white border-opacity-35 text-white text-phone phone:text-xs hover:bg-navbarHover hover:shadow-navbarHover transition duration-300" onclick="location.href='/aliran/impresionisme'">JELAJAHI</button>
        <div class="flex flex-row-reverse gap-x-2 phone:gap-x-5 overflow-x-scroll scrollbar-thin h-28 phone:h-44 mt-3">
          <img src="{{ asset('assets/impresionisme/impressionism_1.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/impresionisme/impressionism_2.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/impresionisme/impressionism_3.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/impresionisme/impressionism_4.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
        </div>
      </div>
      <div class="w-6/12 phone:w-3/5 flex justify-end">
        <img src="{{ asset('assets/karakter/impresionisme.png') }}" alt="" class="w-[450px]">
      </div>
    </div>
  </div>
  
  <div class="flex justify-center items-center mt-10 phone:mt-40">
    <div class="w-full phone:w-1/2 flex justify-start">
      <div class="w-6/12 phone:w-7/12 flex">
        <img src="{{ asset('assets/karakter/surealisme.png') }}" alt="" class="w-[550px]">
      </div>
      <div class="w-6/12 phone:w-5/12 flex flex-col gap-y-3 phone:gap-y-7 justify-center items-start font-kronaOne">
        <h1 class="text-base phone:text-4xl text-surealisme"><span class="text-3xl phone:text-8xl">S</span>UREALISME</h1>
        <button class="px-4 py-2 phone:px-14 phone:py-5 shadow-navbar bg-bgNavbar rounded-full border-2 border-white border-opacity-35 text-white text-phone phone:text-xs hover:bg-navbarHover hover:shadow-navbarHover transition duration-300" onclick="location.href='/aliran/surealisme'">JELAJAHI</button>
        <div class="flex gap-x-2 phone:gap-x-5 overflow-x-scroll scrollbar-thin h-28 phone:h-44 mt-3">
          <img src="{{ asset('assets/surealisme/surrealism_1.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/surealisme/surrealism_2.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/surealisme/surrealism_3.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/surealisme/surrealism_4.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
        </div>
      </div>
    </div>
  </div>
  
  <div class="flex justify-center items-center mt-10 phone:mt-40">
    <div class="w-full phone:w-1/2 flex">
      <div class="w-7/12 flex flex-col gap-y-3 phone:gap-y-7 justify-center items-end font-kronaOne">
        <h1 class="text-base phone:text-4xl text-kubisme"><span class="text-3xl phone:text-8xl">K</span>UBIS<span class="text-kubisme2">M</span>E</h1>
        <button class="px-4 py-2 phone:px-14 phone:py-5 shadow-navbar bg-bgNavbar rounded-full border-2 border-white border-opacity-35 text-white text-phone phone:text-xs hover:bg-navbarHover hover:shadow-navbarHover transition duration-300" onclick="location.href='/aliran/kubisme'">JELAJAHI</button>
        <div class="flex flex-row-reverse gap-x-2 phone:gap-x-5 overflow-x-scroll scrollbar-thin h-28 phone:h-44 mt-3">
          <img src="{{ asset('assets/kubisme/cubism_1.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/kubisme/cubism_2.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/kubisme/cubism_3.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/kubisme/cubism_4.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/kubisme/cubism_5.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
        </div>
      </div>
      <div class="w-5/12 flex justify-end">
        <img src="{{ asset('assets/karakter/kubisme.png') }}" alt="" class="w-[300px]">
      </div>
    </div>
  </div>
  
  <div class="flex justify-center items-center mt-10 phone:mt-40 mb-40">
    <div class="w-full phone:w-1/2 flex justify-start">
      <div class="w-5/12 phone:w-7/12 flex">
        <img src="{{ asset('assets/karakter/abstrak.png') }}" alt="" class="w-[500px]">
      </div>
      <div class="w-7/12 phone:w-5/12 flex flex-col gap-y-3 phone:gap-y-7 justify-center items-start font-kronaOne">
        <h1 class="text-base phone:text-4xl">
          <span class="text-3xl phone:text-8xl text-[#977E2B]">A</span><span class="text-[#F1802F]">B</span><span class="text-[#09001E]">S</span><span class="text-[#C9C9C8]">T</span><span class="text-[#79952C]">R</span><span class="text-[#666563]">A</span><span class="text-[#542C93]">K</span>
        </h1>
        <h1 class="text-base phone:text-4xl text-surealisme">EKSPRESIONISME</h1>
        <button class="px-4 py-2 phone:px-14 phone:py-5 shadow-navbar bg-bgNavbar rounded-full border-2 border-white border-opacity-35 text-white text-phone phone:text-xs hover:bg-navbarHover hover:shadow-navbarHover transition duration-300" onclick="location.href='/aliran/abstrak-ekspresionisme'">JELAJAHI</button>
        <div class="flex gap-x-2 phone:gap-x-5 overflow-x-scroll scrollbar-thin h-28 phone:h-44 mt-3">
          <img src="{{ asset('assets/abstrak/abstract_1.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/abstrak/abstract_2.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/abstrak/abstract_3.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
          <img src="{{ asset('assets/abstrak/abstract_4.jpg') }}" alt="" class="rounded-xl w-64 h-full object-cover" draggable="false">
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

<script>
  document.addEventListener("DOMContentLoaded", function() {
    var pecahan1 = document.getElementById("pecahan1");
    var pecahan2 = document.getElementById("pecahan2");
    var pecahan3 = document.getElementById("pecahan3");
    var pecahan4 = document.getElementById("pecahan4");
    var pecahan5 = document.getElementById("pecahan5");
    var pecahan6 = document.getElementById("pecahan6");
    var pecahan7 = document.getElementById("pecahan7");
    var pecahan8 = document.getElementById("pecahan8");
    var title = document.getElementById("title");
    var bgTitle = document.getElementById("bg-title");

    setTimeout(function() {
      pecahan1.classList.add("-translate-x-[50px]");
      pecahan2.classList.add("-translate-x-[50px]", "translate-y-[50px]");
      pecahan3.classList.add("translate-y-[50px]");
      pecahan4.classList.add("translate-x-[50px]", "translate-y-[50px]");
      pecahan5.classList.add("translate-x-[50px]");
      pecahan6.classList.add("translate-x-[50px]", "-translate-y-[50px]");
      pecahan7.classList.add("translate-x-[30px]", "-translate-y-[50px]");
      pecahan8.classList.add("-translate-y-[50px]");
    }, 500);

    setTimeout(function() {
      pecahan1.classList.remove("-translate-x-[50px]"); 
      pecahan2.classList.remove("-translate-x-[50px]", "translate-y-[50px]"); 
      pecahan3.classList.remove("translate-y-[50px]"); 
      pecahan4.classList.remove("translate-x-[50px]", "translate-y-[50px]"); 
      pecahan5.classList.remove("translate-x-[50px]"); 
      pecahan6.classList.remove("translate-x-[50px]", "-translate-y-[50px]"); 
      pecahan7.classList.remove("translate-x-[30px]", "-translate-y-[50px]"); 
      pecahan8.classList.remove("-translate-y-[50px]"); 

      pecahan1.classList.add("-translate-x-[100px]"); 
      pecahan2.classList.add("-translate-x-[100px]", "translate-y-[100px]"); 
      pecahan3.classList.add("translate-y-[100px]"); 
      pecahan4.classList.add("translate-x-[100px]", "translate-y-[100px]"); 
      pecahan5.classList.add("translate-x-[100px]"); 
      pecahan6.classList.add("translate-x-[100px]", "-translate-y-[100px]"); 
      pecahan7.classList.add("translate-x-[60px]", "-translate-y-[100px]"); 
      pecahan8.classList.add("-translate-y-[100px]"); 
    }, 1000);

    setTimeout(function() {
      pecahan1.classList.remove("-translate-x-[100px]"); 
      pecahan2.classList.remove("-translate-x-[100px]", "translate-y-[100px]"); 
      pecahan3.classList.remove("translate-y-[100px]"); 
      pecahan4.classList.remove("translate-x-[100px]", "translate-y-[100px]"); 
      pecahan5.classList.remove("translate-x-[100px]"); 
      pecahan6.classList.remove("translate-x-[100px]", "-translate-y-[100px]"); 
      pecahan7.classList.remove("translate-x-[60px]", "-translate-y-[100px]"); 
      pecahan8.classList.remove("-translate-y-[100px]");  

      pecahan1.classList.add("-translate-x-[5000px]", "duration-[1000ms]");
      pecahan2.classList.add("-translate-x-[5000px]", "translate-y-[5000px]", "duration-[1000ms]");
      pecahan3.classList.add("translate-y-[5000px]", "duration-[1000ms]");
      pecahan4.classList.add("translate-x-[5000px]", "translate-y-[5000px]", "duration-[1000ms]");
      pecahan5.classList.add("translate-x-[5000px]", "duration-[1000ms]");
      pecahan6.classList.add("translate-x-[5000px]", "-translate-y-[5000px]", "duration-[1000ms]");
      pecahan7.classList.add("translate-x-[5000px]", "-translate-y-[5000px]", "duration-[1000ms]");
      pecahan8.classList.add("-translate-y-[5000px]", "duration-[1000ms]");
    }, 1500);

    setTimeout(function() {
      pecahan1.classList.remove("-translate-x-[5000px]", "duration-[1000ms]");
      pecahan2.classList.remove("-translate-x-[5000px]", "translate-y-[5000px]", "duration-[1000ms]");
      pecahan3.classList.remove("translate-y-[5000px]", "duration-[1000ms]");
      pecahan4.classList.remove("translate-x-[5000px]", "translate-y-[5000px]", "duration-[1000ms]");
      pecahan5.classList.remove("translate-x-[5000px]", "duration-[1000ms]");
      pecahan6.classList.remove("translate-x-[5000px]", "-translate-y-[5000px]", "duration-[1000ms]");
      pecahan7.classList.remove("translate-x-[5000px]", "-translate-y-[5000px]", "duration-[1000ms]");
      pecahan8.classList.remove("-translate-y-[5000px]", "duration-[1000ms]");

      pecahan1.classList.add("hidden");
      pecahan2.classList.add("hidden");
      pecahan3.classList.add("hidden");
      pecahan4.classList.add("hidden");
      pecahan5.classList.add("hidden");
      pecahan6.classList.add("hidden");
      pecahan7.classList.add("hidden");
      pecahan8.classList.add("hidden");

      title.classList.add("scale-300");
      bgTitle.classList.add("w-full", "h-full");
    }, 2000);
    
    setTimeout(function() {
      bgTitle.classList.remove("blur-opening", "rounded-full");
    }, 1950);
  });

  document.addEventListener("DOMContentLoaded", function() {
    var pecahan1 = document.getElementById("pecahan1-m");
    var pecahan2 = document.getElementById("pecahan2-m");
    var pecahan3 = document.getElementById("pecahan3-m");
    var pecahan4 = document.getElementById("pecahan4-m");
    var pecahan5 = document.getElementById("pecahan5-m");
    var pecahan6 = document.getElementById("pecahan6-m");
    var pecahan7 = document.getElementById("pecahan7-m");
    var pecahan8 = document.getElementById("pecahan8-m");
    var title = document.getElementById("title");
    var bgTitle = document.getElementById("bg-title");

    setTimeout(function() {
      pecahan1.classList.add("-translate-x-[50px]");
      pecahan2.classList.add("-translate-x-[50px]", "translate-y-[50px]");
      pecahan3.classList.add("translate-y-[50px]");
      pecahan4.classList.add("translate-x-[50px]", "translate-y-[50px]");
      pecahan5.classList.add("translate-x-[50px]");
      pecahan6.classList.add("translate-x-[50px]", "-translate-y-[50px]");
      pecahan7.classList.add("translate-x-[30px]", "-translate-y-[50px]");
      pecahan8.classList.add("-translate-y-[50px]");
    }, 500);

    setTimeout(function() {
      pecahan1.classList.remove("-translate-x-[50px]"); 
      pecahan2.classList.remove("-translate-x-[50px]", "translate-y-[50px]"); 
      pecahan3.classList.remove("translate-y-[50px]"); 
      pecahan4.classList.remove("translate-x-[50px]", "translate-y-[50px]"); 
      pecahan5.classList.remove("translate-x-[50px]"); 
      pecahan6.classList.remove("translate-x-[50px]", "-translate-y-[50px]"); 
      pecahan7.classList.remove("translate-x-[30px]", "-translate-y-[50px]"); 
      pecahan8.classList.remove("-translate-y-[50px]"); 

      pecahan1.classList.add("-translate-x-[100px]"); 
      pecahan2.classList.add("-translate-x-[100px]", "translate-y-[100px]"); 
      pecahan3.classList.add("translate-y-[100px]"); 
      pecahan4.classList.add("translate-x-[100px]", "translate-y-[100px]"); 
      pecahan5.classList.add("translate-x-[100px]"); 
      pecahan6.classList.add("translate-x-[100px]", "-translate-y-[100px]"); 
      pecahan7.classList.add("translate-x-[60px]", "-translate-y-[100px]"); 
      pecahan8.classList.add("-translate-y-[100px]"); 
    }, 1000);

    setTimeout(function() {
      pecahan1.classList.remove("-translate-x-[100px]"); 
      pecahan2.classList.remove("-translate-x-[100px]", "translate-y-[100px]"); 
      pecahan3.classList.remove("translate-y-[100px]"); 
      pecahan4.classList.remove("translate-x-[100px]", "translate-y-[100px]"); 
      pecahan5.classList.remove("translate-x-[100px]"); 
      pecahan6.classList.remove("translate-x-[100px]", "-translate-y-[100px]"); 
      pecahan7.classList.remove("translate-x-[60px]", "-translate-y-[100px]"); 
      pecahan8.classList.remove("-translate-y-[100px]");  

      pecahan1.classList.add("-translate-x-[5000px]", "duration-[1000ms]");
      pecahan2.classList.add("-translate-x-[5000px]", "translate-y-[5000px]", "duration-[1000ms]");
      pecahan3.classList.add("translate-y-[5000px]", "duration-[1000ms]");
      pecahan4.classList.add("translate-x-[5000px]", "translate-y-[5000px]", "duration-[1000ms]");
      pecahan5.classList.add("translate-x-[5000px]", "duration-[1000ms]");
      pecahan6.classList.add("translate-x-[5000px]", "-translate-y-[5000px]", "duration-[1000ms]");
      pecahan7.classList.add("translate-x-[5000px]", "-translate-y-[5000px]", "duration-[1000ms]");
      pecahan8.classList.add("-translate-y-[5000px]", "duration-[1000ms]");
    }, 1500);

    setTimeout(function() {
      pecahan1.classList.remove("-translate-x-[5000px]", "duration-[1000ms]");
      pecahan2.classList.remove("-translate-x-[5000px]", "translate-y-[5000px]", "duration-[1000ms]");
      pecahan3.classList.remove("translate-y-[5000px]", "duration-[1000ms]");
      pecahan4.classList.remove("translate-x-[5000px]", "translate-y-[5000px]", "duration-[1000ms]");
      pecahan5.classList.remove("translate-x-[5000px]", "duration-[1000ms]");
      pecahan6.classList.remove("translate-x-[5000px]", "-translate-y-[5000px]", "duration-[1000ms]");
      pecahan7.classList.remove("translate-x-[5000px]", "-translate-y-[5000px]", "duration-[1000ms]");
      pecahan8.classList.remove("-translate-y-[5000px]", "duration-[1000ms]");

      pecahan1.classList.add("hidden");
      pecahan2.classList.add("hidden");
      pecahan3.classList.add("hidden");
      pecahan4.classList.add("hidden");
      pecahan5.classList.add("hidden");
      pecahan6.classList.add("hidden");
      pecahan7.classList.add("hidden");
      pecahan8.classList.add("hidden");

      title.classList.add("scale-300");
      bgTitle.classList.add("w-full", "h-full");
    }, 2000);
    
    setTimeout(function() {
      bgTitle.classList.remove("blur-opening", "rounded-full");
    }, 1950);
  });

  document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("fixedNavbar");
    const background = document.getElementById("fixedBackground");
    const navbarOffset = navbar.offsetTop;
    const backgroundOffset = background.offsetTop;

    function handleScroll() {
      if (window.pageYOffset >= navbarOffset) {
        navbar.classList.add("fixed", "top-0", "w-full", "z-20");
        background.classList.add("fixed", "top-0", "w-full", "-z-10");
        background.classList.remove("relative");
      } else {
        navbar.classList.remove("fixed", "top-0", "w-full");
        background.classList.remove("fixed", "top-0", "w-full", "-z-10");
      }
    }

    window.addEventListener("scroll", handleScroll);
  });

  document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('menu-button');
    const dropdown = document.getElementById('dropdown');
    const bgBlur = document.getElementById('bg-blur');

    button.addEventListener('click', function () {
      const expanded = button.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown.classList.add('hidden');
        button.setAttribute('aria-expanded', 'false');
        button.classList.remove('bg-navbarHover', 'shadow-navbarHover');
        bgBlur.classList.add('hidden');
      } else {
        dropdown.classList.remove('hidden');
        button.setAttribute('aria-expanded', 'true');
        button.classList.add('bg-navbarHover', 'shadow-navbarHover');
        bgBlur.classList.remove('hidden');
      }
    });

    document.addEventListener('click', function (event) {
      if (!button.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.classList.add('hidden');
        button.setAttribute('aria-expanded', 'false');
        button.classList.remove('bg-navbarHover', 'shadow-navbarHover');
        bgBlur.classList.add('hidden');
      }
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('menu-button2');
    const dropdown = document.getElementById('dropdown2');
    const bgBlur = document.getElementById('bg-blur2');

    button.addEventListener('click', function () {
      const expanded = button.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown.classList.add('hidden');
        button.setAttribute('aria-expanded', 'false');
        button.classList.remove('bg-navbarHover', 'shadow-navbarHover');
        bgBlur.classList.add('hidden');
      } else {
        dropdown.classList.remove('hidden');
        button.setAttribute('aria-expanded', 'true');
        button.classList.add('bg-navbarHover', 'shadow-navbarHover');
        bgBlur.classList.remove('hidden');
      }
    });

    document.addEventListener('click', function (event) {
      if (!button.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.classList.add('hidden');
        button.setAttribute('aria-expanded', 'false');
        button.classList.remove('bg-navbarHover', 'shadow-navbarHover');
        bgBlur.classList.add('hidden');
      }
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('menu-button3');
    const dropdown = document.getElementById('dropdown3');
    const bgBlur = document.getElementById('bg-blur3');

    button.addEventListener('click', function () {
      const expanded = button.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown.classList.add('hidden');
        button.setAttribute('aria-expanded', 'false');
        button.classList.remove('bg-navbarHover', 'shadow-navbarHover');
        bgBlur.classList.add('hidden');
      } else {
        dropdown.classList.remove('hidden');
        button.setAttribute('aria-expanded', 'true');
        button.classList.add('bg-navbarHover', 'shadow-navbarHover');
        bgBlur.classList.remove('hidden');
      }
    });

    document.addEventListener('click', function (event) {
      if (!button.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.classList.add('hidden');
        button.setAttribute('aria-expanded', 'false');
        button.classList.remove('bg-navbarHover', 'shadow-navbarHover');
        bgBlur.classList.add('hidden');
      }
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    const artistContainer = document.getElementById('artistContainer');
    const artistDetails = document.getElementById('artistDetails');

    artistContainer.addEventListener('click', function () {
      artistDetails.classList.toggle('hidden');
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    const artistContainer = document.getElementById('artistContainer2');
    const artistDetails = document.getElementById('artistDetails2');

    artistContainer.addEventListener('click', function () {
      artistDetails.classList.toggle('hidden');
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    const artistContainer = document.getElementById('artistContainer3');
    const artistDetails = document.getElementById('artistDetails3');

    artistContainer.addEventListener('click', function () {
      artistDetails.classList.toggle('hidden');
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    const artistContainer = document.getElementById('artistContainer4');
    const artistDetails = document.getElementById('artistDetails4');

    artistContainer.addEventListener('click', function () {
      artistDetails.classList.toggle('hidden');
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    const artistContainer = document.getElementById('artistContainer5');
    const artistDetails = document.getElementById('artistDetails5');

    artistContainer.addEventListener('click', function () {
      artistDetails.classList.toggle('hidden');
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    const artistContainer = document.getElementById('artistContainer6');
    const artistDetails = document.getElementById('artistDetails6');

    artistContainer.addEventListener('click', function () {
      artistDetails.classList.toggle('hidden');
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    const artistContainer = document.getElementById('artistContainer7');
    const artistDetails = document.getElementById('artistDetails7');

    artistContainer.addEventListener('click', function () {
      artistDetails.classList.toggle('hidden');
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    const artistContainer = document.getElementById('artistContainer8');
    const artistDetails = document.getElementById('artistDetails8');

    artistContainer.addEventListener('click', function () {
      artistDetails.classList.toggle('hidden');
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    const artistContainer = document.getElementById('artistContainer9');
    const artistDetails = document.getElementById('artistDetails9');

    artistContainer.addEventListener('click', function () {
      artistDetails.classList.toggle('hidden');
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    const artistContainer = document.getElementById('artistContainer10');
    const artistDetails = document.getElementById('artistDetails10');

    artistContainer.addEventListener('click', function () {
      artistDetails.classList.toggle('hidden');
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    const artistContainer = document.getElementById('artistContainer11');
    const artistDetails = document.getElementById('artistDetails11');

    artistContainer.addEventListener('click', function () {
      artistDetails.classList.toggle('hidden');
    });
  });
</script>