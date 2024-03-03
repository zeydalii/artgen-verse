@extends('users.partials.master')
@section('content')

<div class="w-full font-bold">
  <div class="w-full flex items-center">
    <div class="w-full text-end">
      <button class="mr-5 phone:mr-28 text-phone phone:text-base font-montserrat bg-senimanBg p-2" onclick="location.href='/'">HOME</button>
    </div>
    <h2 class="text-3xl phone:text-5xl font-montserrat font-extrabold text-center py-10 text-neoklasik">TIMELINES</h2>
    <div class="w-full"></div>
  </div>
  
  <img src="{{ asset('assets/pecahan/ellipse1.png') }}" alt="" class="hidden phone:block absolute top-0 left-0 -z-20" draggable="false">
  <img src="{{ asset('assets/pecahan/ellipse1.png') }}" alt="" class="phone:hidden w-40 absolute top-0 left-0 -z-20" draggable="false">
  <img src="{{ asset('assets/pecahan/traps1.png') }}" alt="" class="hidden phone:block absolute left-10 -z-20" draggable="false">
  <img src="{{ asset('assets/pecahan/traps1.png') }}" alt="" class="phone:hidden w-32 absolute top-20 -z-20" draggable="false">

  <img src="{{ asset('assets/pecahan/ellipse2.png') }}" alt="" class="hidden phone:block absolute right-0 bottom-0 -z-20" draggable="false">
  <img src="{{ asset('assets/pecahan/ellipse2.png') }}" alt="" class="phone:hidden w-48 absolute right-0 bottom-0 -z-20" draggable="false">
  <img src="{{ asset('assets/pecahan/traps2.png') }}" alt="" class="hidden phone:block absolute right-0 bottom-40 -z-20" draggable="false">
  <img src="{{ asset('assets/pecahan/traps2.png') }}" alt="" class="phone:hidden w-40 absolute right-0 bottom-20 -z-20" draggable="false">

  <div id="bg-blur" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur2" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur3" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur4" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur5" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur6" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur7" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur8" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur9" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur10" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur11" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur12" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur13" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur14" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur15" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur16" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur17" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur18" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur19" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur20" class="fixed hidden z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>

  <div class="h-[calc(100vh-128px)] flex justify-center">
    <div class="w-[768px] h-[calc(100vh-208px)] phone:p-10 flex flex-col overflow-y-scroll">
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full">
        </div>
        <div class="">
          <button id="tab-button" class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]"></button>
          <div class="relative">
            <div id="tab-open" class="hidden absolute z-20 mt-2 -ml-40 phone:-ml-56 w-[348px] phone:w-[480px] rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="pt-4 px-4 pb-2 text-center font-montserrat" role="none">
                <div class="flex gap-x-3 phone:gap-x-5 overflow-x-scroll scrollbar-thin pb-3">
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/romanesque/romanesque-1.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">The Temptation of Eve (1130-an)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Giselbertus</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/romanesque/romanesque-2.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Christ Pantocrator (1123-an)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Master of Taüll</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/romanesque/romanesque-3.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Moses Expounding the Law (1135)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Master <br> Hugo</h2>
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full">
          <h5 class="text-xs phone:text-base font-montserrat">Romanesque</h5>
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full text-end">
          <h5 class="text-xs phone:text-base font-montserrat">Gothic</h5>
        </div>
        <div class="">
          <button id="tab-button2" class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]"></button>
          <div class="relative">
            <div id="tab-open2" class="hidden absolute z-20 mt-2 -ml-40 phone:-ml-56 w-[348px] phone:w-[480px] rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="pt-4 px-4 pb-2 text-center font-montserrat" role="none">
                <div class="flex gap-x-3 phone:gap-x-5 overflow-x-scroll scrollbar-thin pb-3">
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/gothic/gothic-1.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Annunciation and Visitation (1225-45)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Prancis</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/gothic/gothic-2.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Lamentation (1304-06)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Giotto</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/gothic/gothic-3.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Annunciation with St. Margaret and St. Ansanus (1333)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Simon Martini and <br> Lippo Memmi</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full">
        </div>
        <div class="">
          <button id="tab-button3" class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]"></button>
          <div class="relative">
            <div id="tab-open3" class="hidden absolute z-20 mt-2 -ml-40 phone:-ml-56 w-[348px] phone:w-[480px] rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="pt-4 px-4 pb-2 text-center font-montserrat" role="none">
                <div class="flex gap-x-3 phone:gap-x-5 overflow-x-scroll scrollbar-thin pb-3">
                  <div class="h-40 phone:h-48 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/renaisans/renaisans-1.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">The Last Supper (1498)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Leonardo da Vinci</h2>
                  </div>
                  <div class="h-40 phone:h-48 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/renaisans/renaisans-2.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Pietà (1498-99)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Michelangelo</h2>
                  </div>
                  <div class="h-40 phone:h-48 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/renaisans/renaisans-3.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">The School of Athens (1509-11)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Raphael</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full">
          <h5 class="text-xs phone:text-base font-montserrat">Renaisans</h5>
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full text-end">
          <h5 class="text-xs phone:text-base font-montserrat">Mannerisme</h5>
        </div>
        <div class="">
          <button id="tab-button4" class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]"></button>
          <div class="relative">
            <div id="tab-open4" class="hidden absolute z-20 mt-2 -ml-40 phone:-ml-56 w-[348px] phone:w-[480px] rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="pt-4 px-4 pb-2 text-center font-montserrat" role="none">
                <div class="flex gap-x-3 phone:gap-x-5 overflow-x-scroll scrollbar-thin pb-3">
                  <div class="h-40 phone:h-48 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/mannerisme/mannerisme-1.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Self-Portrait in a Convex Mirror (1524)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Parmigianino</h2>
                  </div>
                  <div class="h-40 phone:h-48 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/mannerisme/mannerisme-2.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Eleanor of Toledo (1545)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Bronzino</h2>
                  </div>
                  <div class="h-40 phone:h-48 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/mannerisme/mannerisme-3.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">The Burial of the Count of Orgaz (1586)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">El Greco</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full">
        </div>
        <div class="">
          <button id="tab-button5" class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]"></button>
          <div class="relative">
            <div id="tab-open5" class="hidden absolute z-20 mt-2 -ml-40 phone:-ml-56 w-[348px] phone:w-[480px] rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="pt-4 px-4 pb-2 text-center font-montserrat" role="none">
                <div class="flex gap-x-3 phone:gap-x-5 overflow-x-scroll scrollbar-thin pb-3">
                  <div class="h-40 phone:h-52 flex flex-col justify-center gap-y-3 phone:gap-y-5 shrink-0">
                    <h2 class="text-white uppercase text-xs phone:text-sm">Barok</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/barok-rococo/barok-1.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">The Calling of St Matthew (1599-1600)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Caravaggio</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/barok-rococo/barok-2.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Judith and Holovernes (1620-21)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Artemisia <br> Gentileschi</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/barok-rococo/barok-3.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">The Night Watch (1642)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Rembrandt Van <br> Rijn</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/barok-rococo/barok-4.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Embarkation of the Queen of Sheba (1648)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Claude Lorrain</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col justify-center gap-y-3 phone:gap-y-5 shrink-0">
                    <h2 class="text-white uppercase text-xs phone:text-sm">Rococo</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/barok-rococo/rococo-1.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">The Embarkation for Cythera (1717)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Jean-Antoine <br> Watteau</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/barok-rococo/rococo-2.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Portrait of Madame de Pompadour (1756)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">François <br> Boucher</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/barok-rococo/rococo-3.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">The Swing (1767-68)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Jean- <br> Honoré F</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full">
          <h5 class="text-xs phone:text-base font-montserrat">Barok-Rococo</h5>
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full text-end">
          <h5 class="text-xs phone:text-base font-montserrat">Neoklasik</h5>
        </div>
        <div class="">
          <button class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]" onclick="location.href='/aliran/neoklasik'"></button>
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full">
        </div>
        <div class="">
          <button class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]" onclick="location.href='/aliran/romantisme'"></button>
        </div>
        <div class="w-full">
          <h5 class="text-xs phone:text-base font-montserrat">Romantisme</h5>
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full text-end">
          <h5 class="text-xs phone:text-base font-montserrat">Realisme</h5>
        </div>
        <div class="">
          <button class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]" onclick="location.href='/aliran/realisme'"></button>
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full">
        </div>
        <div class="">
          <button id="tab-button6" class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]"></button>
          <div class="relative">
            <div id="tab-open6" class="hidden absolute z-20 mt-2 -ml-40 phone:-ml-56 w-[348px] phone:w-[480px] rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="pt-4 px-4 pb-2 text-center font-montserrat" role="none">
                <div class="flex gap-x-3 phone:gap-x-5 overflow-x-scroll scrollbar-thin pb-3">
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/pra-raphaelites/pra-raphaelites-1.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">The Girlhood of Mary Virgin (1852-49)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Dante Gabriel <br> Rossetti</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/pra-raphaelites/pra-raphaelites-2.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Ophelia (1851-52)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">John Everett <br> Millais</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/pra-raphaelites/pra-raphaelites-3.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Our English Coasts (Strayed Sheep) (1852)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">William Holman <br> Hunt</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full">
          <h5 class="text-xs phone:text-base font-montserrat">Pra-Raphaelite</h5>
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full text-end">
          <h5 class="text-xs phone:text-base font-montserrat">Impresionisme</h5>
        </div>
        <div class="">
          <button class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]" onclick="location.href='/aliran/impresionisme'"></button>
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full">
        </div>
        <div class="">
          <button class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]" onclick="location.href='/aliran/naturalisme'"></button>
        </div>
        <div class="w-full">
          <h5 class="text-xs phone:text-base font-montserrat">Naturalisme</h5>
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full text-end">
          <h5 class="text-xs phone:text-base font-montserrat">Post-Impresionisme</h5>
        </div>
        <div class="">
          <button id="tab-button7" class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]"></button>
          <div class="relative">
            <div id="tab-open7" class="hidden absolute z-20 mt-2 -ml-40 phone:-ml-56 w-[348px] phone:w-[480px] rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="pt-4 px-4 pb-2 text-center font-montserrat" role="none">
                <div class="flex gap-x-3 phone:gap-x-5 overflow-x-scroll scrollbar-thin pb-3">
                  <div class="h-40 phone:h-48 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/post-impresionisme/post-impresionisme-1.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Sunday Afternoon on the Island of La Grande Jatte (1884-86)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Georges Seurat</h2>
                  </div>
                  <div class="h-40 phone:h-48 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/post-impresionisme/post-impresionisme-2.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Vision After the Sermon (1888)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Paul Gauguin</h2>
                  </div>
                  <div class="h-40 phone:h-48 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/post-impresionisme/post-impresionisme-3.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">The Large Bathers (1900-1906)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Paul Cézanne</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full">
        </div>
        <div class="">
          <button id="tab-button8" class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]"></button>
          <div class="relative">
            <div id="tab-open8" class="hidden absolute z-20 mt-2 -ml-40 phone:-ml-56 w-[348px] phone:w-[480px] rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="pt-4 px-4 pb-2 text-center font-montserrat" role="none">
                <div class="flex gap-x-3 phone:gap-x-5 overflow-x-scroll scrollbar-thin pb-3">
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/simbolisme/simbolisme-1.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Jupiter and Semele (1895)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Gustave <br> Moreau</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/simbolisme/simbolisme-2.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">The Eye Like a Strange Balloon Mounts Toward Infinity</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Odilon <br> Redon</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/simbolisme/simbolisme-3.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">The Three Brides (1893)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Jan Toorop</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full">
          <h5 class="text-xs phone:text-base font-montserrat">Simbolisme</h5>
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full text-end">
          <h5 class="text-xs phone:text-base font-montserrat">Ekspresionisme</h5>
        </div>
        <div class="">
          <button class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]" onclick="location.href='/aliran/ekspresionisme'"></button>
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full">
        </div>
        <div class="">
          <button id="tab-button9" class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]"></button>
          <div class="relative">
            <div id="tab-open9" class="hidden absolute z-20 mt-2 -ml-40 phone:-ml-56 w-[348px] phone:w-[480px] rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="pt-4 px-4 pb-2 text-center font-montserrat" role="none">
                <div class="flex gap-x-3 phone:gap-x-5 overflow-x-auto scrollbar-thin pb-3">
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/art-noveau/art-noveau-1.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Cover design for Wren's City Churches (1883)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Mackmurdo</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/art-noveau/art-noveau-2.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">La Goulue at the Moulin Rouge (1891)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Toulouse- <br> Lautrec</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/art-noveau/art-noveau-3.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">The Peacock Skirt (1894)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Aubrey <br> Beardsley</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full">
          <h5 class="text-xs phone:text-base font-montserrat">Art Noveau</h5>
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full text-end">
          <h5 class="text-xs phone:text-base font-montserrat">Kubisme</h5>
        </div>
        <div class="">
          <button class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]" onclick="location.href='/aliran/kubisme'"></button>
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full">
        </div>
        <div class="">
          <button id="tab-button10" class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]"></button>
          <div class="relative">
            <div id="tab-open10" class="hidden absolute z-20 mt-2 -ml-40 phone:-ml-56 w-[348px] phone:w-[480px] rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="pt-4 px-4 pb-2 text-center font-montserrat" role="none">
                <div class="flex gap-x-3 phone:gap-x-5 overflow-x-scroll scrollbar-thin pb-3">
                  <div class="h-40 phone:h-48 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/futurisme/futurisme-1.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">The City Rises (1910)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Umberto Boccioni</h2>
                  </div>
                  <div class="h-40 phone:h-48 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/futurisme/futurisme-2.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Funeral of the Anarchist Galli (1910-11)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Carlo Carrà</h2>
                  </div>
                  <div class="h-40 phone:h-48 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/futurisme/futurisme-3.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Dynamism of a Dog on a Leash (1912)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Giacomo Balla</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full">
          <h5 class="text-xs phone:text-base font-montserrat">Futurisme</h5>
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full text-end">
          <h5 class="text-xs phone:text-base font-montserrat">Dadaisme</h5>
        </div>
        <div class="">
          <button id="tab-button11" class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]"></button>
          <div class="relative">
            <div id="tab-open11" class="hidden absolute z-20 mt-2 -ml-40 phone:-ml-56 w-[348px] phone:w-[480px] rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="pt-4 px-4 pb-2 text-center font-montserrat" role="none">
                <div class="flex gap-x-3 phone:gap-x-5 overflow-x-scroll scrollbar-thin pb-3">
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div class="h-full flex gap-x-3 phone:gap-x-5">
                      <div id="artistContainer" class="relative">
                        <img src="{{ asset('assets/timelines/dadaisme/dadaisme-1.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                        <h2 class="absolute bottom-3 text-white text-timeline phone:text-xs w-full text-center">Fountain (1917)</h2>
                      </div>
                      <div id="artistContainer" class="relative">
                        <img src="{{ asset('assets/timelines/dadaisme/dadaisme-2.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                        <h2 class="absolute bottom-3 text-white text-timeline phone:text-xs w-full text-center">LHOOQ (1919)</h2>
                      </div>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Marcel Duchamp</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/dadaisme/dadaisme-3.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Merzpicture 46A. The Skittle Picture (1921)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Kurt <br> Schwitters</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full">
        </div>
        <div class="">
          <button id="tab-button12" class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]"></button>
          <div class="relative">
            <div id="tab-open12" class="hidden absolute z-20 mt-2 -ml-40 phone:-ml-56 w-[348px] phone:w-[480px] rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="pt-4 px-4 pb-2 text-center font-montserrat" role="none">
                <div class="flex gap-x-3 phone:gap-x-5 overflow-x-auto scrollbar-thin pb-3">
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/new-objectivity/new-objectivity-1.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">The Night (1918-19)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Max Beckmann</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/new-objectivity/new-objectivity-2.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Verwundeter (Wounded Soldier) (1924)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Otto Dix</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/new-objectivity/new-objectivity-3.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Eclipse of the Sun (1926)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">George <br> Grosz</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full">
          <h5 class="text-xs phone:text-base font-montserrat">New Objectivity</h5>
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full text-end">
          <h5 class="text-xs phone:text-base font-montserrat">Presisiisme</h5>
        </div>
        <div class="">
          <button id="tab-button13" class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]"></button>
          <div class="relative">
            <div id="tab-open13" class="hidden absolute z-20 mt-2 -ml-40 phone:-ml-56 w-[348px] phone:w-[480px] rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="pt-4 px-4 pb-2 text-center font-montserrat" role="none">
                <div class="flex gap-x-3 phone:gap-x-5 overflow-x-scroll scrollbar-thin pb-3">
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/presisiisme/presisiisme-1.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Brooklyn Bridge (1919-20)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Joseph <br> Stella</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/presisiisme/presisiisme-2.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Factory (1920)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Preston <br> Dickinson</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/presisiisme/presisiisme-3.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Skyscrapers (1922)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Charles <br> Sheeler</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full">
        </div>
        <div class="">
          <button id="tab-button14" class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]"></button>
          <div class="relative">
            <div id="tab-open14" class="hidden absolute z-20 mt-2 -ml-40 phone:-ml-56 w-[348px] phone:w-[480px] rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="pt-4 px-4 pb-2 text-center font-montserrat" role="none">
                <div class="flex gap-x-3 phone:gap-x-5 overflow-x-auto scrollbar-thin pb-3">
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/art-deco/art-deco-1.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Victoire (1928)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">René Lalique</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/art-deco/art-deco-2.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">État Cabinet (1922)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Émile-Jacques <br> Ruhlmann</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/art-deco/art-deco-3.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Chrysler Building (selesai tahun 1930)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">William Van Alen</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full">
          <h5 class="text-xs phone:text-base font-montserrat">Art Deco</h5>
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full text-end">
          <h5 class="text-xs phone:text-base font-montserrat">Bauhaus</h5>
        </div>
        <div class="">
          <button id="tab-button15" class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]"></button>
          <div class="relative">
            <div id="tab-open15" class="hidden absolute z-20 mt-2 -ml-40 phone:-ml-56 w-[348px] phone:w-[480px] rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="pt-4 px-4 pb-2 text-center font-montserrat" role="none">
                <div class="flex gap-x-3 phone:gap-x-5 overflow-x-scroll scrollbar-thin pb-3">
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/bauhaus/bauhaus-1.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Red Balloon (1922)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Paul Klee</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/bauhaus/bauhaus-2.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Yellow-Red-Blue (1925)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Wassily Kandinsky</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/bauhaus/bauhaus-3.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Photogram (1926)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">László <br> Moholy-N</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full">
        </div>
        <div class="">
          <button class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]" onclick="location.href='/aliran/surealisme'"></button>
        </div>
        <div class="w-full">
          <h5 class="text-xs phone:text-base font-montserrat">Surealisme</h5>
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full text-end">
          <h5 class="text-xs phone:text-base font-montserrat">Abstrak <br> Ekspresionisme</h5>
        </div>
        <div class="">
          <button class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]" onclick="location.href='/aliran/abstrak-ekspresionisme'"></button>
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full">
        </div>
        <div class="">
          <button id="tab-button16" class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]"></button>
          <div class="relative">
            <div id="tab-open16" class="hidden absolute z-20 mt-2 -ml-40 phone:-ml-56 w-[348px] phone:w-[480px] rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="pt-4 px-4 pb-2 text-center font-montserrat" role="none">
                <div class="flex gap-x-3 phone:gap-x-5 overflow-x-auto scrollbar-thin pb-3">
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/pop-art/pop-art-1.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">President Elect (1960-61)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">James Rosenquist</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/pop-art/pop-art-2.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Drowning Girl (1963)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Roy Lichtenstein</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/pop-art/pop-art-3.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Campbell's Soup I (1968)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Andy <br> Warhol</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full">
          <h5 class="text-xs phone:text-base font-montserrat">Pop-Art</h5>
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full text-end">
          <h5 class="text-xs phone:text-base font-montserrat">Arte Povera</h5>
        </div>
        <div class="">
          <button id="tab-button17" class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]"></button>
          <div class="relative">
            <div id="tab-open17" class="hidden absolute z-20 mt-2 -ml-40 phone:-ml-56 w-[348px] phone:w-[480px] rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="pt-4 px-4 pb-2 text-center font-montserrat" role="none">
                <div class="flex gap-x-3 phone:gap-x-5 overflow-x-scroll scrollbar-thin pb-3">
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/arte-povera/arte-povera-1.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Living Structures (1966)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Marisa Merz</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/arte-povera/arte-povera-2.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Venus of the rags (1967)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Michelangelo <br> Pistoletto</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/arte-povera/arte-povera-3.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Floor tautology (1967)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Luciano Fabro</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full">
        </div>
        <div class="">
          <button id="tab-button18" class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]"></button>
          <div class="relative">
            <div id="tab-open18" class="hidden absolute z-20 mt-2 -ml-40 phone:-ml-56 w-[348px] phone:w-[480px] rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="pt-4 px-4 pb-2 text-center font-montserrat" role="none">
                <div class="flex gap-x-3 phone:gap-x-5 overflow-x-auto scrollbar-thin pb-3">
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/minimalisme/minimalisme-1.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Tanpa judul (kubus cermin) (1965-71)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Robert Morris</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/minimalisme/minimalisme-2.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">White Cubes (1991)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Sol LeWitt</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/minimalisme/minimalisme-3.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">The X (1965)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Ronald <br> Bladen</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full">
          <h5 class="text-xs phone:text-base font-montserrat">Minimalisme</h5>
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full text-end">
          <h5 class="text-xs phone:text-base font-montserrat">Fotorealisme</h5>
        </div>
        <div class="">
          <button id="tab-button19" class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]"></button>
          <div class="relative">
            <div id="tab-open19" class="hidden absolute z-20 mt-2 -ml-40 phone:-ml-56 w-[348px] phone:w-[480px] rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="pt-4 px-4 pb-2 text-center font-montserrat" role="none">
                <div class="flex gap-x-3 phone:gap-x-5 overflow-x-scroll scrollbar-thin pb-3">
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/fotorealisme/fotorealisme-1.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Self-Portrait (1967-68)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Chuck Close</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/fotorealisme/fotorealisme-2.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">The Woman Eating (1971)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Duane <br> Hanson</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/fotorealisme/fotorealisme-3.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Circus Act (1995)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Charles Bell</h2>
                  </div>
                  <div class="h-40 phone:h-52 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/fotorealisme/fotorealisme-4.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">World War II (Vanitas) (1977-78)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Audrey Flack</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px]">
        </div>
        <div class="w-full">
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-8">
        <div class="w-full">
        </div>
        <div class="">
          <button id="tab-button20" class="rounded-full bg-mainHeader p-3.5 phone:p-4 blur-[1px]"></button>
          <div class="relative">
            <div id="tab-open20" class="hidden absolute z-20 -mt-[250px] phone:-mt-[300px] -ml-40 phone:-ml-56 w-[348px] phone:w-[480px] rounded-md bg-mainHeader shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <div class="pt-4 px-4 pb-2 text-center font-montserrat" role="none">
                <div class="flex gap-x-3 phone:gap-x-5 overflow-x-auto scrollbar-thin pb-3">
                  <div class="h-40 phone:h-48 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/seni-kontemporer/seni-kontemporer-1.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Tanpa judul (kubus cermin) (1965-71)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">YAYOI KUSAMA</h2>
                  </div>
                  <div class="h-40 phone:h-48 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/seni-kontemporer/seni-kontemporer-2.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Ballon Dog Blue (1994- 2000)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Jeff Koons</h2>
                  </div>
                  <div class="h-40 phone:h-48 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/seni-kontemporer/seni-kontemporer-3.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Forever Bicycles (2011)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Ai Weiwei</h2>
                  </div>
                  <div class="h-40 phone:h-48 flex flex-col gap-y-3 phone:gap-y-5 shrink-0">
                    <div id="artistContainer" class="relative">
                      <img src="{{ asset('assets/timelines/seni-kontemporer/seni-kontemporer-4.jpg') }}" alt="" class="h-32 phone:h-40 rounded-xl" draggable="false">
                      <h2 class="absolute bottom-2 text-white text-timeline phone:text-xs w-full text-center">Banana Duct Tape (2019)</h2>
                    </div>
                    <h2 class="text-white uppercase text-xs phone:text-sm">Maurizio Cattelan</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full">
          <h5 class="text-xs phone:text-base font-montserrat">Seni Kontemporer</h5>
        </div>
      </div>
      <div class="w-full flex gap-x-3 phone:gap-x-5 items-center h-[125px]">
        <div class="w-full">
        </div>
        <div class="bg-black py-16 px-[4px] phone:px-[5px] rounded-b-xl">
        </div>
        <div class="w-full">
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('tab-button');
    const button2 = document.getElementById('tab-button2');
    const button3 = document.getElementById('tab-button3');
    const button4 = document.getElementById('tab-button4');
    const button5 = document.getElementById('tab-button5');
    const button6 = document.getElementById('tab-button6');
    const button7 = document.getElementById('tab-button7');
    const button8 = document.getElementById('tab-button8');
    const button9 = document.getElementById('tab-button9');
    const button10 = document.getElementById('tab-button10');
    const button11 = document.getElementById('tab-button11');
    const button12 = document.getElementById('tab-button12');
    const button13 = document.getElementById('tab-button13');
    const button14 = document.getElementById('tab-button14');
    const button15 = document.getElementById('tab-button15');
    const button16 = document.getElementById('tab-button16');
    const button17 = document.getElementById('tab-button17');
    const button18 = document.getElementById('tab-button18');
    const button19 = document.getElementById('tab-button19');
    const button20 = document.getElementById('tab-button20');
    const dropdown = document.getElementById('tab-open');
    const dropdown2 = document.getElementById('tab-open2');
    const dropdown3 = document.getElementById('tab-open3');
    const dropdown4 = document.getElementById('tab-open4');
    const dropdown5 = document.getElementById('tab-open5');
    const dropdown6 = document.getElementById('tab-open6');
    const dropdown7 = document.getElementById('tab-open7');
    const dropdown8 = document.getElementById('tab-open8');
    const dropdown9 = document.getElementById('tab-open9');
    const dropdown10 = document.getElementById('tab-open10');
    const dropdown11 = document.getElementById('tab-open11');
    const dropdown12 = document.getElementById('tab-open12');
    const dropdown13 = document.getElementById('tab-open13');
    const dropdown14 = document.getElementById('tab-open14');
    const dropdown15 = document.getElementById('tab-open15');
    const dropdown16 = document.getElementById('tab-open16');
    const dropdown17 = document.getElementById('tab-open17');
    const dropdown18 = document.getElementById('tab-open18');
    const dropdown19 = document.getElementById('tab-open19');
    const dropdown20 = document.getElementById('tab-open20');
    const bgBlur = document.getElementById('bg-blur');
    const bgBlur2 = document.getElementById('bg-blur2');
    const bgBlur3 = document.getElementById('bg-blur3');
    const bgBlur4 = document.getElementById('bg-blur4');
    const bgBlur5 = document.getElementById('bg-blur5');
    const bgBlur6 = document.getElementById('bg-blur6');
    const bgBlur7 = document.getElementById('bg-blur7');
    const bgBlur8 = document.getElementById('bg-blur8');
    const bgBlur9 = document.getElementById('bg-blur9');
    const bgBlur10 = document.getElementById('bg-blur10');
    const bgBlur11 = document.getElementById('bg-blur11');
    const bgBlur12 = document.getElementById('bg-blur12');
    const bgBlur13 = document.getElementById('bg-blur13');
    const bgBlur14 = document.getElementById('bg-blur14');
    const bgBlur15 = document.getElementById('bg-blur15');
    const bgBlur16 = document.getElementById('bg-blur16');
    const bgBlur17 = document.getElementById('bg-blur17');
    const bgBlur18 = document.getElementById('bg-blur18');
    const bgBlur19 = document.getElementById('bg-blur19');
    const bgBlur20 = document.getElementById('bg-blur20');

    button.addEventListener('click', function () {
      const expanded = button.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown.classList.add('hidden');
        button.setAttribute('aria-expanded', 'false');
        bgBlur.classList.add('hidden');
      } else {
        dropdown.classList.remove('hidden');
        button.setAttribute('aria-expanded', 'true');
        bgBlur.classList.remove('hidden');
      }
    });

    button2.addEventListener('click', function () {
      const expanded = button2.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown2.classList.add('hidden');
        button2.setAttribute('aria-expanded', 'false');
        bgBlur2.classList.add('hidden');
      } else {
        dropdown2.classList.remove('hidden');
        button2.setAttribute('aria-expanded', 'true');
        bgBlur2.classList.remove('hidden');
      }
    });

    button3.addEventListener('click', function () {
      const expanded = button3.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown3.classList.add('hidden');
        button3.setAttribute('aria-expanded', 'false');
        bgBlur3.classList.add('hidden');
      } else {
        dropdown3.classList.remove('hidden');
        button3.setAttribute('aria-expanded', 'true');
        bgBlur3.classList.remove('hidden');
      }
    });

    button4.addEventListener('click', function () {
      const expanded = button4.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown4.classList.add('hidden');
        button4.setAttribute('aria-expanded', 'false');
        bgBlur4.classList.add('hidden');
      } else {
        dropdown4.classList.remove('hidden');
        button4.setAttribute('aria-expanded', 'true');
        bgBlur4.classList.remove('hidden');
      }
    });

    button5.addEventListener('click', function () {
      const expanded = button5.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown5.classList.add('hidden');
        button5.setAttribute('aria-expanded', 'false');
        bgBlur5.classList.add('hidden');
      } else {
        dropdown5.classList.remove('hidden');
        button5.setAttribute('aria-expanded', 'true');
        bgBlur5.classList.remove('hidden');
      }
    });

    button6.addEventListener('click', function () {
      const expanded = button6.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown6.classList.add('hidden');
        button6.setAttribute('aria-expanded', 'false');
        bgBlur6.classList.add('hidden');
      } else {
        dropdown6.classList.remove('hidden');
        button6.setAttribute('aria-expanded', 'true');
        bgBlur6.classList.remove('hidden');
      }
    });

    button7.addEventListener('click', function () {
      const expanded = button7.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown7.classList.add('hidden');
        button7.setAttribute('aria-expanded', 'false');
        bgBlur7.classList.add('hidden');
      } else {
        dropdown7.classList.remove('hidden');
        button7.setAttribute('aria-expanded', 'true');
        bgBlur7.classList.remove('hidden');
      }
    });

    button8.addEventListener('click', function () {
      const expanded = button8.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown8.classList.add('hidden');
        button8.setAttribute('aria-expanded', 'false');
        bgBlur8.classList.add('hidden');
      } else {
        dropdown8.classList.remove('hidden');
        button8.setAttribute('aria-expanded', 'true');
        bgBlur8.classList.remove('hidden');
      }
    });

    button9.addEventListener('click', function () {
      const expanded = button9.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown9.classList.add('hidden');
        button9.setAttribute('aria-expanded', 'false');
        bgBlur9.classList.add('hidden');
      } else {
        dropdown9.classList.remove('hidden');
        button9.setAttribute('aria-expanded', 'true');
        bgBlur9.classList.remove('hidden');
      }
    });

    button10.addEventListener('click', function () {
      const expanded = button10.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown10.classList.add('hidden');
        button10.setAttribute('aria-expanded', 'false');
        bgBlur10.classList.add('hidden');
      } else {
        dropdown10.classList.remove('hidden');
        button10.setAttribute('aria-expanded', 'true');
        bgBlur10.classList.remove('hidden');
      }
    });

    button11.addEventListener('click', function () {
      const expanded = button11.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown11.classList.add('hidden');
        button11.setAttribute('aria-expanded', 'false');
        bgBlur11.classList.add('hidden');
      } else {
        dropdown11.classList.remove('hidden');
        button11.setAttribute('aria-expanded', 'true');
        bgBlur11.classList.remove('hidden');
      }
    });

    button12.addEventListener('click', function () {
      const expanded = button12.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown12.classList.add('hidden');
        button12.setAttribute('aria-expanded', 'false');
        bgBlur12.classList.add('hidden');
      } else {
        dropdown12.classList.remove('hidden');
        button12.setAttribute('aria-expanded', 'true');
        bgBlur12.classList.remove('hidden');
      }
    });

    button13.addEventListener('click', function () {
      const expanded = button13.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown13.classList.add('hidden');
        button13.setAttribute('aria-expanded', 'false');
        bgBlur13.classList.add('hidden');
      } else {
        dropdown13.classList.remove('hidden');
        button13.setAttribute('aria-expanded', 'true');
        bgBlur13.classList.remove('hidden');
      }
    });

    button14.addEventListener('click', function () {
      const expanded = button14.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown14.classList.add('hidden');
        button14.setAttribute('aria-expanded', 'false');
        bgBlur14.classList.add('hidden');
      } else {
        dropdown14.classList.remove('hidden');
        button14.setAttribute('aria-expanded', 'true');
        bgBlur14.classList.remove('hidden');
      }
    });

    button15.addEventListener('click', function () {
      const expanded = button15.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown15.classList.add('hidden');
        button15.setAttribute('aria-expanded', 'false');
        bgBlur15.classList.add('hidden');
      } else {
        dropdown15.classList.remove('hidden');
        button15.setAttribute('aria-expanded', 'true');
        bgBlur15.classList.remove('hidden');
      }
    });

    button16.addEventListener('click', function () {
      const expanded = button16.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown16.classList.add('hidden');
        button16.setAttribute('aria-expanded', 'false');
        bgBlur16.classList.add('hidden');
      } else {
        dropdown16.classList.remove('hidden');
        button16.setAttribute('aria-expanded', 'true');
        bgBlur16.classList.remove('hidden');
      }
    });

    button17.addEventListener('click', function () {
      const expanded = button17.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown17.classList.add('hidden');
        button17.setAttribute('aria-expanded', 'false');
        bgBlur17.classList.add('hidden');
      } else {
        dropdown17.classList.remove('hidden');
        button17.setAttribute('aria-expanded', 'true');
        bgBlur17.classList.remove('hidden');
      }
    });

    button18.addEventListener('click', function () {
      const expanded = button18.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown18.classList.add('hidden');
        button18.setAttribute('aria-expanded', 'false');
        bgBlur18.classList.add('hidden');
      } else {
        dropdown18.classList.remove('hidden');
        button18.setAttribute('aria-expanded', 'true');
        bgBlur18.classList.remove('hidden');
      }
    });

    button19.addEventListener('click', function () {
      const expanded = button19.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown19.classList.add('hidden');
        button19.setAttribute('aria-expanded', 'false');
        bgBlur19.classList.add('hidden');
      } else {
        dropdown19.classList.remove('hidden');
        button19.setAttribute('aria-expanded', 'true');
        bgBlur19.classList.remove('hidden');
      }
    });

    button20.addEventListener('click', function () {
      const expanded = button20.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        dropdown20.classList.add('hidden');
        button20.setAttribute('aria-expanded', 'false');
        bgBlur20.classList.add('hidden');
      } else {
        dropdown20.classList.remove('hidden');
        button20.setAttribute('aria-expanded', 'true');
        bgBlur20.classList.remove('hidden');
      }
    });

    document.addEventListener('click', function (event) {
      if (!button.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.classList.add('hidden');
        button.setAttribute('aria-expanded', 'false');
        bgBlur.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!button2.contains(event.target) && !dropdown2.contains(event.target)) {
        dropdown2.classList.add('hidden');
        button2.setAttribute('aria-expanded', 'false');
        bgBlur2.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!button3.contains(event.target) && !dropdown3.contains(event.target)) {
        dropdown3.classList.add('hidden');
        button3.setAttribute('aria-expanded', 'false');
        bgBlur3.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!button4.contains(event.target) && !dropdown4.contains(event.target)) {
        dropdown4.classList.add('hidden');
        button4.setAttribute('aria-expanded', 'false');
        bgBlur4.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!button5.contains(event.target) && !dropdown5.contains(event.target)) {
        dropdown5.classList.add('hidden');
        button5.setAttribute('aria-expanded', 'false');
        bgBlur5.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!button6.contains(event.target) && !dropdown6.contains(event.target)) {
        dropdown6.classList.add('hidden');
        button6.setAttribute('aria-expanded', 'false');
        bgBlur6.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!button7.contains(event.target) && !dropdown7.contains(event.target)) {
        dropdown7.classList.add('hidden');
        button7.setAttribute('aria-expanded', 'false');
        bgBlur7.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!button8.contains(event.target) && !dropdown8.contains(event.target)) {
        dropdown8.classList.add('hidden');
        button8.setAttribute('aria-expanded', 'false');
        bgBlur8.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!button9.contains(event.target) && !dropdown9.contains(event.target)) {
        dropdown9.classList.add('hidden');
        button9.setAttribute('aria-expanded', 'false');
        bgBlur9.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!button10.contains(event.target) && !dropdown10.contains(event.target)) {
        dropdown10.classList.add('hidden');
        button10.setAttribute('aria-expanded', 'false');
        bgBlur10.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!button11.contains(event.target) && !dropdown11.contains(event.target)) {
        dropdown11.classList.add('hidden');
        button11.setAttribute('aria-expanded', 'false');
        bgBlur11.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!button12.contains(event.target) && !dropdown12.contains(event.target)) {
        dropdown12.classList.add('hidden');
        button12.setAttribute('aria-expanded', 'false');
        bgBlur12.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!button13.contains(event.target) && !dropdown13.contains(event.target)) {
        dropdown13.classList.add('hidden');
        button13.setAttribute('aria-expanded', 'false');
        bgBlur13.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!button14.contains(event.target) && !dropdown14.contains(event.target)) {
        dropdown14.classList.add('hidden');
        button14.setAttribute('aria-expanded', 'false');
        bgBlur14.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!button15.contains(event.target) && !dropdown15.contains(event.target)) {
        dropdown15.classList.add('hidden');
        button15.setAttribute('aria-expanded', 'false');
        bgBlur15.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!button16.contains(event.target) && !dropdown16.contains(event.target)) {
        dropdown16.classList.add('hidden');
        button16.setAttribute('aria-expanded', 'false');
        bgBlur16.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!button17.contains(event.target) && !dropdown17.contains(event.target)) {
        dropdown17.classList.add('hidden');
        button17.setAttribute('aria-expanded', 'false');
        bgBlur17.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!button18.contains(event.target) && !dropdown18.contains(event.target)) {
        dropdown18.classList.add('hidden');
        button18.setAttribute('aria-expanded', 'false');
        bgBlur18.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!button19.contains(event.target) && !dropdown19.contains(event.target)) {
        dropdown19.classList.add('hidden');
        button19.setAttribute('aria-expanded', 'false');
        bgBlur19.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!button20.contains(event.target) && !dropdown20.contains(event.target)) {
        dropdown20.classList.add('hidden');
        button20.setAttribute('aria-expanded', 'false');
        bgBlur20.classList.add('hidden');
      }
    });
  });
</script>