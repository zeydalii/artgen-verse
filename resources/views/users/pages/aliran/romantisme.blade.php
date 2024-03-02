@extends('users.partials.master')
@section('content')

<div id="knock" class="h-screen w-full flex items-center justify-center bg-mainHeader relative">
  <h2 id="knock2" class="font-kronaOne text-white animate-scaleLarger">KNOCK KNOCK!</h2>
  <img id="knock3" src="{{ asset('assets/pecahan/knock1.png') }}" alt="" class="hidden absolute inset-0 w-full h-full object-cover">
  <img id="knock3-m" src="{{ asset('assets/pecahan/knock1-m.png') }}" alt="" class="hidden absolute inset-0 w-full h-full object-cover">
  <img id="knock4" src="{{ asset('assets/pecahan/knock2.png') }}" alt="" class="hidden absolute inset-0 w-full h-full object-cover">
  <img id="knock4-m" src="{{ asset('assets/pecahan/knock2-m.png') }}" alt="" class="hidden absolute inset-0 w-full h-full object-cover">
</div>

<div id="container" class="hidden">
  <div class="w-full flex items-center py-3 phone:py-0">
    <div class="w-full flex flex-col phone:flex-row gap-y-3 gap-x-5 justify-end">
      <button class="font-kronaOne text-phone phone:text-base bg-senimanBg p-2 mx-auto phone:mx-0" onclick="location.href='/'">HOME</button>
      <button class="hidden phone:block font-kronaOne text-phone phone:text-base bg-senimanBg p-2 mx-auto phone:mx-0" onclick="location.href='/timeline'">TIMELINE</button>
    </div>
    <div class="phone:hidden w-full flex justify-center">
      <button class="font-kronaOne text-phone phone:text-base bg-senimanBg p-2 mx-auto phone:mx-0" onclick="location.href='/timeline'">TIMELINE</button>
    </div>
    <h1 class="hidden phone:block w-full text-3xl phone:text-4xl font-kronaOne text-bgNavbar text-center"><span class="text-5xl phone:text-8xl">R</span>OMANTISME</h1>
    <div class="w-full flex justify-end phone:justify-start">
      <input id="playButton" type="hidden" value="PLAY" onclick="play()">
      <input id="pauseButton" type="hidden" value="PAUSE" onclick="pause()">
      <div class="flex gap-x-5 mr-5 phone:mr-0">
        <img id="playIcon" src="{{ asset('assets/pecahan/play-button.png') }}" alt="" class="w-5 phone:w-7 cursor-pointer" onclick="document.getElementById('playButton').click()">
        <img id="pauseIcon" src="{{ asset('assets/pecahan/pause-button.png') }}" alt="" class="hidden w-5 phone:w-7 cursor-pointer" onclick="document.getElementById('pauseButton').click()">
      </div>
      <audio id="audio" src="{{ asset('assets/audios/romantisme/romantisme-main.mp3') }}"></audio>
    </div>
  </div>
  
  <div>
    <h1 class="phone:hidden w-full text-3xl font-kronaOne text-bgNavbar text-center"><span class="text-5xl">R</span>OMANTISME</h1>
  </div>
  
  <img src="{{ asset('assets/pecahan/ellipse1.png') }}" alt="" class="hidden phone:block absolute top-0 left-0 -z-20" draggable="false">
  <img src="{{ asset('assets/pecahan/ellipse1.png') }}" alt="" class="phone:hidden w-40 absolute top-0 left-0 -z-20" draggable="false">
  <img src="{{ asset('assets/pecahan/traps1.png') }}" alt="" class="hidden phone:block absolute top-0 right-60 -z-20" draggable="false">
  <img src="{{ asset('assets/pecahan/traps22.png') }}" alt="" class="phone:hidden w-28 absolute -top-12 right-0 -z-20" draggable="false">
  <img src="{{ asset('assets/pecahan/ellipse3.png') }}" alt="" class="hidden phone:block absolute bottom-0 left-0 -z-20" draggable="false">
  <img src="{{ asset('assets/pecahan/ellipse3.png') }}" alt="" class="phone:hidden w-40 absolute bottom-0 left-0 -z-20" draggable="false">
  
  <img src="{{ asset('assets/pecahan/ellipse2.png') }}" alt="" class="hidden phone:block absolute right-0 bottom-0 -z-20" draggable="false">
  <img src="{{ asset('assets/pecahan/ellipse2.png') }}" alt="" class="phone:hidden w-40 absolute right-0 bottom-40 -z-20" draggable="false">
  <img src="{{ asset('assets/pecahan/traps2.png') }}" alt="" class="hidden phone:block absolute right-0 bottom-80 -z-20" draggable="false">
  <img src="{{ asset('assets/pecahan/traps33.png') }}" alt="" class="phone:hidden w-28 absolute right-0 bottom-80 -z-20" draggable="false">
  <img src="{{ asset('assets/pecahan/traps3.png') }}" alt="" class="hidden phone:block absolute right-0 bottom-0 -z-20" draggable="false">
  <img src="{{ asset('assets/pecahan/traps3.png') }}" alt="" class="phone:hidden w-40 absolute right-0 bottom-0 -z-20" draggable="false">
  <img src="{{ asset('assets/karakter/romantisme.png') }}" alt="" class="phone:hidden w-[220px] absolute right-0 bottom-0 -z-20" draggable="false">
  
  <div class="h-[calc(100vh-128px)] w-full hidden phone:flex justify-between items-center">
    <div id="wheel-container" class="relative h-[750px] w-[750px] -left-[400px] rounded-full transform origin-center transition-transform ease-in-out duration-300">
      <img id="1" src="{{ asset('assets/pecahan/wheel1.png') }}" alt="" class="wheel-img w-[300px] absolute left-[390px] cursor-pointer" draggable="false">
      <img id="2" src="{{ asset('assets/pecahan/wheel2.png') }}" alt="" class="wheel-img w-[240px] absolute top-[200px] left-[510px] cursor-pointer" draggable="false">
      <img id="3" src="{{ asset('assets/pecahan/wheel3.png') }}" alt="" class="wheel-img w-[300px] absolute top-[470px] left-[390px] cursor-pointer" draggable="false">
      <img id="4" src="{{ asset('assets/pecahan/wheel4.png') }}" alt="" class="wheel-img w-[300px] absolute top-[470px] left-[60px] cursor-pointer" draggable="false">
      <img id="5" src="{{ asset('assets/pecahan/wheel5.png') }}" alt="" class="wheel-img w-[240px] absolute top-[200px] cursor-pointer" draggable="false">
      <img id="6" src="{{ asset('assets/pecahan/wheel6.png') }}" alt="" class="wheel-img w-[300px] absolute left-[60px] cursor-pointer" draggable="false">
      <img id="1-1" src="{{ asset('assets/pecahan/wheel1-red.png') }}" alt="" class="hidden w-[300px] absolute left-[390px] cursor-pointer scale-[1.15]" draggable="false">
      <img id="2-1" src="{{ asset('assets/pecahan/wheel2-red.png') }}" alt="" class="w-[240px] absolute top-[200px] left-[515px] cursor-pointer scale-[1.15]" draggable="false">
      <img id="3-1" src="{{ asset('assets/pecahan/wheel3-red.png') }}" alt="" class="hidden w-[300px] absolute top-[470px] left-[390px] cursor-pointer scale-[1.15]" draggable="false">
      <img id="4-1" src="{{ asset('assets/pecahan/wheel4-red.png') }}" alt="" class="hidden w-[300px] absolute top-[470px] left-[60px] cursor-pointer scale-[1.15]" draggable="false">
      <img id="5-1" src="{{ asset('assets/pecahan/wheel5-red.png') }}" alt="" class="hidden w-[240px] absolute top-[200px] cursor-pointer scale-[1.15]" draggable="false">
      <img id="6-1" src="{{ asset('assets/pecahan/wheel6-red.png') }}" alt="" class="hidden w-[300px] absolute left-[60px] cursor-pointer scale-[1.15]" draggable="false">
    </div>
    <div>
      <img src="{{ asset('assets/karakter/romantisme.png') }}" alt="" class="w-[350px]">
    </div>
  </div>
  
  <div class="h-[calc(100vh-103px)] w-full phone:hidden justify-between items-center">
    <div id="wheel-container2" class="relative h-[500px] w-[500px] -left-[290px] transform origin-center transition-transform ease-in-out duration-300">
      <img id="1-m" src="{{ asset('assets/pecahan/wheel1.png') }}" alt="" class="wheel-img2 w-[200px] absolute left-[260px] cursor-pointer" draggable="false">
      <img id="2-m" src="{{ asset('assets/pecahan/wheel2.png') }}" alt="" class="wheel-img2 w-[160px] absolute top-[130px] left-[340px] cursor-pointer" draggable="false">
      <img id="3-m" src="{{ asset('assets/pecahan/wheel3.png') }}" alt="" class="wheel-img2 w-[200px] absolute top-[310px] left-[260px] cursor-pointer" draggable="false">
      <img id="4-m" src="{{ asset('assets/pecahan/wheel4.png') }}" alt="" class="wheel-img2 w-[200px] absolute top-[310px] left-[40px] cursor-pointer" draggable="false">
      <img id="5-m" src="{{ asset('assets/pecahan/wheel5.png') }}" alt="" class="wheel-img2 w-[160px] absolute top-[130px] cursor-pointer" draggable="false">
      <img id="6-m" src="{{ asset('assets/pecahan/wheel6.png') }}" alt="" class="wheel-img2 w-[200px] absolute left-[40px] cursor-pointer" draggable="false">
      <img id="1-1-m" src="{{ asset('assets/pecahan/wheel1-red.png') }}" alt="" class="hidden w-[200px] absolute left-[260px] cursor-pointer scale-[1.15]" draggable="false">
      <img id="2-1-m" src="{{ asset('assets/pecahan/wheel2-red.png') }}" alt="" class="w-[160px] absolute top-[130px] left-[340px] cursor-pointer scale-[1.15]" draggable="false">
      <img id="3-1-m" src="{{ asset('assets/pecahan/wheel3-red.png') }}" alt="" class="hidden w-[200px] absolute top-[310px] left-[260px] cursor-pointer scale-[1.15]" draggable="false">
      <img id="4-1-m" src="{{ asset('assets/pecahan/wheel4-red.png') }}" alt="" class="hidden w-[200px] absolute top-[310px] left-[40px] cursor-pointer scale-[1.15]" draggable="false">
      <img id="5-1-m" src="{{ asset('assets/pecahan/wheel5-red.png') }}" alt="" class="hidden w-[160px] absolute top-[130px] cursor-pointer scale-[1.15]" draggable="false">
      <img id="6-1-m" src="{{ asset('assets/pecahan/wheel6-red.png') }}" alt="" class="hidden w-[200px] absolute left-[40px] cursor-pointer scale-[1.15]" draggable="false">
    </div>
  </div>
  
  <div id="bg-blur" class="fixed hidden w-full h-screen z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur-m" class="fixed hidden w-full h-screen z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur2" class="fixed hidden w-full h-screen z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur2-m" class="fixed hidden w-full h-screen z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur3" class="fixed hidden w-full h-screen z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur3-m" class="fixed hidden w-full h-screen z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur4" class="fixed hidden w-full h-screen z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur4-m" class="fixed hidden w-full h-screen z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur5" class="fixed hidden w-full h-screen z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur5-m" class="fixed hidden w-full h-screen z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur6" class="fixed hidden w-full h-screen z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  <div id="bg-blur6-m" class="fixed hidden w-full h-screen z-10 bg-black/45 top-0 right-0 left-0 bottom-0"></div>
  
  <div id="tab-open" class="z-20 fixed hidden transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
    <div class="flex items-center justify-center w-full h-full">
      <div class="bg-bgNavbar/70 w-[800px] h-[400px] flex flex-col gap-y-5 items-center justify-center">
        <div class="overflow-y-auto text-black px-10 h-[280px] font-manuale text-start text-lg">
          <p class="bg-senimanBg font-bold p-5 rounded-xl shadow-aliran">Romantisisme itu seperti roller coaster emosi! Mereka suka <span class="text-mainHeader text-xl font-extrabold">mengekspresikan perasaan yang kuat</span>, mulai dari cinta yang membara hingga kepedihan yang mendalam. Jadi, bayangkan lukisan-lukisan yang penuh dengan drama dan ekspresi wajah yang mendalam.</p><br>
          <p class="bg-senimanBg font-bold p-5 rounded-xl shadow-aliran">Romantisisme itu seperti membaca novel petualangan yang seru! Mereka suka menciptakan karya-karya yang penuh dengan misteri dan keajaiban. Jadi, bayangkan lukisan-lukisan dengan <span class="text-mainHeader text-xl font-extrabold">adegan-adegan yang menegangkan atau patung-patung yang memikat dengan tema-tema mitologis.</span></p><br>
          <p class="bg-senimanBg font-bold p-5 rounded-xl shadow-aliran">Romantisisme menggembar-gemborkan semangat kebebasan! Mereka mengagungkan ide-ide tentang <span class="text-mainHeader text-xl font-extrabold">kebebasan individual, kemandirian, dan pengorbanan</span>. Jadi, ketika Anda melihat karya seni Romantisisme, Anda bisa merasakan semangat pemberontakan dan keberanian.</p>
        </div>
        <div>
          <input id="playButton2" type="hidden" value="PLAY" onclick="play2()">
          <input id="pauseButton2" type="hidden" value="PAUSE" onclick="pause2()">
          <div class="flex gap-x-5">
            <img id="playIcon2" src="{{ asset('assets/pecahan/play-button-grey.png') }}" alt="" class="w-7 cursor-pointer mix-blend-screen" onclick="document.getElementById('playButton2').click()">
            <img id="pauseIcon2" src="{{ asset('assets/pecahan/pause-button-grey.png') }}" alt="" class="hidden w-7 cursor-pointer mix-blend-screen" onclick="document.getElementById('pauseButton2').click()">
          </div>
          <audio id="audio2" src="{{ asset('assets/audios/romantisme/romantisme-record.mp3') }}"></audio>
        </div>
      </div>
    </div>
  </div>
  <div id="tab-open2" class="z-20 fixed hidden transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
    <div class="flex items-center justify-center w-full h-full">
      <div class="bg-bgNavbar/70 w-[800px] h-[420px] flex flex-col gap-y-5 items-center justify-center">
        <div class="overflow-y-auto text-white px-10 h-[300px] font-manuale text-center text-lg">
          <div class="container mx-auto my-8">
            <video id="customVideo" class="w-full h-52">
              <source src="{{ asset('assets/videos/romantisme.mp4') }}" type="video/mp4">
            </video>
          </div>
          <p>Istilah Romantisisme pertama kali muncul di Jerman pada akhir abad ke-18, ketika kritikus August dan Friedrich Schlegal menulis tentang romantische Poesie ("puisi romantis"). William Blake dari Inggris dan Francisco Goya dari Spanyol, disebut "bapak" Romantisisme oleh banyak sarjana karena fokus karya mereka pada pandangan pribadi, kekuatan imajinasi, dan kesadaran politik yang sering kali sangat kritis. Di Perancis, pelukis Antoine-Jean Gros memengaruhi seniman Théodore Géricault dan Eugène Delacroix, yang kemudian memimpin serta mengembangkan gerakan Romantisisme di sana. Gerakan Romantisisme mereka berkembang selama Revolusi Perancis, dan  karyanya tidak jauh berhubungan dengan semangat revolusioner dan pemberontakan.</p><br>
          <p>Romantisme di Indonesia berkembang saat pendudukan Belanda. Saat itu Raden Saleh, seorang pelopor seni lukis Indonesia mendapat tawaran belajar melukis di Belanda. Akhirnya dari Raden Saleh, gerakan Romantisme sampai di Indonesia. Tema-tema Romantisme di Indonesia cenderung ke arah “kerakyatan”, idealisme, kebebasan, kemerdekaan.</p>
        </div>
        <div>
          <img id="playVidButton" src="{{ asset('assets/pecahan/play-button-grey.png') }}" alt="" class="w-7 cursor-pointer mix-blend-screen">
          <img id="pauseVidButton" src="{{ asset('assets/pecahan/pause-button-grey.png') }}" alt="" class="hidden w-7 cursor-pointer mix-blend-screen">
        </div>
      </div>
    </div>
  </div>
  <div id="tab-open3" class="z-20 fixed hidden transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
    <div class="flex items-center justify-center w-full h-full">
      <div class="bg-bgNavbar/70 w-[800px] h-[400px] flex flex-col gap-y-5 items-center justify-center">
        <div class="overflow-y-auto text-white px-16 h-[280px] font-manuale text-center text-lg flex flex-col gap-y-10">
          <div class="flex gap-x-5 items-center">
            <img src="{{ asset('assets/romantisme/romantisme-p1.jpg') }}" alt="" class="w-2/5" draggable="false">
            <div class="w-3/5">
              <h2 class="font-bold text-2xl">Eugène Delacroix</h2>
              <p class="text-xl">Pemimpin gerakan Romantis dalam seni Prancis abad ke -19</p>
            </div>
          </div>
          <div class="flex gap-x-5 items-center">
            <img src="{{ asset('assets/romantisme/romantisme-p2.jpg') }}" alt="" class="w-2/5" draggable="false">
            <div class="w-3/5">
              <h2 class="font-bold text-2xl">Théodore Géricault</h2>
              <p class="text-xl">Karyanya yang paling terkenal, The Raft of the Medusa. Karyanya juga terkenal eksotik, emosional, dan luhur.</p>
            </div>
          </div>
          <div class="flex gap-x-5 items-center">
            <img src="{{ asset('assets/romantisme/romantisme-p3.jpg') }}" alt="" class="w-2/5" draggable="false">
            <div class="w-3/5">
              <h2 class="font-bold text-2xl">Francisco Goya</h2>
              <p class="text-xl">Karya seninya mewujudkan penekanan Romantisisme pada subjektivitas, imajinasi, dan emosi, karakteristik</p>
            </div>
          </div>
          <div class="flex gap-x-5 items-center">
            <img src="{{ asset('assets/romantisme/romantisme-p4.jpg') }}" alt="" class="w-2/5" draggable="false">
            <div class="w-3/5">
              <h2 class="font-bold text-2xl">Antoine Jean Gros</h2>
              <p class="text-xl">Penggambaran realistisnya tentang tentara yang tewas, korban wabah, atau pejuang</p>
            </div>
          </div>
          <div class="flex gap-x-5 items-center">
            <img src="{{ asset('assets/romantisme/romantisme-p5.jpg') }}" alt="" class="w-2/5" draggable="false">
            <div class="w-3/5">
              <h2 class="font-bold text-2xl">Raden Saleh</h2>
              <p class="text-xl">Merupakan pelukis utama Neoklasik yang mengabdi pada monarki Louis XVI</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="tab-open4" class="z-20 fixed hidden transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
    <div class="flex items-center justify-center w-full h-full">
      <div class="bg-bgNavbar/70 w-[800px] h-[400px] flex flex-col gap-y-5 items-center justify-center">
        <div class="overflow-y-auto text-white px-16 h-[280px] font-manuale text-center text-lg flex flex-col gap-y-10">
          <div class="flex gap-x-5 items-center">
            <img src="{{ asset('assets/romantisme/romantisme2-p1.jpg') }}" alt="" class="w-2/5" draggable="false">
            <div class="w-3/5">
              <p class="font-bold text-2xl">28 July: Liberty Leading the People (1830)</p>
              <h2 class="text-xl">Eugène Delacroix</h2>
            </div>
          </div>
          <div class="flex gap-x-5 items-center">
            <img src="{{ asset('assets/romantisme/romantisme2-p2.jpg') }}" alt="" class="w-2/5" draggable="false">
            <div class="w-3/5">
              <p class="font-bold text-2xl">The Raft of the Medusa (1818-19)</p>
              <h2 class="text-xl">Théodore Géricault</h2>
            </div>
          </div>
          <div class="flex gap-x-5 items-center">
            <img src="{{ asset('assets/romantisme/romantisme2-p3.jpg') }}" alt="" class="w-2/5" draggable="false">
            <div class="w-3/5">
              <p class="font-bold text-2xl">The Third of May 1808 (1814)</p>
              <h2 class="text-xl">Francisco Goya</h2>
            </div>
          </div>
          <div class="flex gap-x-5 items-center">
            <img src="{{ asset('assets/romantisme/romantisme2-p4.jpg') }}" alt="" class="w-2/5" draggable="false">
            <div class="w-3/5">
              <p class="font-bold text-2xl">Napoleon on the Battlefield of Eylau, (1807)</p>
              <h2 class="text-xl">Antoine-Jean Gros</h2>
            </div>
          </div>
          <div class="flex gap-x-5 items-center">
            <img src="{{ asset('assets/romantisme/romantisme2-p5.jpg') }}" alt="" class="w-2/5" draggable="false">
            <div class="w-3/5">
              <p class="font-bold text-2xl">Penangkapan Pangeran Diponegoro (1857)</p>
              <h2 class="text-xl">Raden Saleh</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="tab-open5" class="z-20 fixed hidden transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
    <div class="flex items-center justify-center w-full h-full">
      <div class="bg-bgNavbar/70 w-[800px] h-[200px] flex flex-col gap-y-5 items-center justify-center font-manuale text-xl text-white">
        <p><span class="text-2xl font-bold">Awal</span> pergerakan: 1780</p>
        <p><span class="text-2xl font-bold">Akhir</span> pergerakan: 1830</p>
      </div>
    </div>
  </div>
  <div id="tab-open6" class="z-20 fixed hidden transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
    <div class="flex items-center justify-center w-full h-full">
      <div class="bg-bgNavbar/70 w-[800px] h-[400px] flex items-center justify-center">
        <div class="overflow-y-auto text-white px-10 h-[280px] font-manuale text-center text-lg">
          <p>Gaya Romantisme mulai redup di berbagai tempat, tapi kalo masuk tahun 1830-an, ada hal baru yang mulai muncul. Nah, waktu itu fotografi lagi jadi tren dan kota-kota juga makin ramai dengan industri dan perkotaan, jadi seni mulai berubah ke arah yang lebih nyata, alias Realisme.</p><br>
  
          <p>Karya-karya dari seniman keren kayak Turner dan Delacroix dengan warna-warni kuat dari sapuan kuas mereka, akhirnya bikin banyak pengaruh buat perkembangan Impresionisme. Mereka lebih fokus pada warna daripada garis sebagai cara utama buat mengatur komposisi. Dan ini juga ngaruh banget buat perkembangan Neo-Impresionisme sama teori warna karya Georges Seurat, lo!</p>
        </div>
      </div>
    </div>
  </div>
  
  <div id="tab-open-m" class="z-20 fixed hidden bottom-0">
    <div class="flex items-center justify-center w-full h-full">
      <div class="bg-bgNavbar/70 w-full h-[500px] flex flex-col gap-y-5 items-center justify-center">
        <div class="overflow-y-auto text-black px-5 h-[400px] font-manuale text-start text-lg">
          <p class="bg-senimanBg font-bold p-5 rounded-xl shadow-aliran">Romantisisme itu seperti roller coaster emosi! Mereka suka <span class="text-mainHeader text-xl font-extrabold">mengekspresikan perasaan yang kuat</span>, mulai dari cinta yang membara hingga kepedihan yang mendalam. Jadi, bayangkan lukisan-lukisan yang penuh dengan drama dan ekspresi wajah yang mendalam.</p><br>
          <p class="bg-senimanBg font-bold p-5 rounded-xl shadow-aliran">Romantisisme itu seperti membaca novel petualangan yang seru! Mereka suka menciptakan karya-karya yang penuh dengan misteri dan keajaiban. Jadi, bayangkan lukisan-lukisan dengan <span class="text-mainHeader text-xl font-extrabold">adegan-adegan yang menegangkan atau patung-patung yang memikat dengan tema-tema mitologis.</span></p><br>
          <p class="bg-senimanBg font-bold p-5 rounded-xl shadow-aliran">Romantisisme menggembar-gemborkan semangat kebebasan! Mereka mengagungkan ide-ide tentang <span class="text-mainHeader text-xl font-extrabold">kebebasan individual, kemandirian, dan pengorbanan</span>. Jadi, ketika Anda melihat karya seni Romantisisme, Anda bisa merasakan semangat pemberontakan dan keberanian.</p>
        </div>
        <div>
          <input id="playButton2-m" type="hidden" value="PLAY" onclick="play2M()">
          <input id="pauseButton2-m" type="hidden" value="PAUSE" onclick="pause2M()">
          <div class="flex gap-x-5">
            <img id="playIcon2-m" src="{{ asset('assets/pecahan/play-button-grey.png') }}" alt="" class="w-7 cursor-pointer mix-blend-screen" onclick="document.getElementById('playButton2-m').click()">
            <img id="pauseIcon2-m" src="{{ asset('assets/pecahan/pause-button-grey.png') }}" alt="" class="hidden w-7 cursor-pointer mix-blend-screen" onclick="document.getElementById('pauseButton2-m').click()">
          </div>
          <audio id="audio2-m" src="{{ asset('assets/audios/romantisme/romantisme-record.mp3') }}"></audio>
        </div>
      </div>
    </div>
  </div>
  <div id="tab-open2-m" class="z-20 fixed hidden bottom-0">
    <div class="flex items-center justify-center w-full h-full">
      <div class="bg-bgNavbar/70 w-full h-[500px] flex flex-col gap-y-5 items-center justify-center">
        <div class="overflow-y-auto text-white px-5 h-[400px] font-manuale text-center text-lg">
          <div class="container mx-auto my-8">
            <video id="customVideo-m" class="w-full h-52">
              <source src="{{ asset('assets/videos/romantisme.mp4') }}" type="video/mp4">
            </video>
          </div>
          <p>Istilah Romantisisme pertama kali muncul di Jerman pada akhir abad ke-18, ketika kritikus August dan Friedrich Schlegal menulis tentang romantische Poesie ("puisi romantis"). William Blake dari Inggris dan Francisco Goya dari Spanyol, disebut "bapak" Romantisisme oleh banyak sarjana karena fokus karya mereka pada pandangan pribadi, kekuatan imajinasi, dan kesadaran politik yang sering kali sangat kritis. Di Perancis, pelukis Antoine-Jean Gros memengaruhi seniman Théodore Géricault dan Eugène Delacroix, yang kemudian memimpin serta mengembangkan gerakan Romantisisme di sana. Gerakan Romantisisme mereka berkembang selama Revolusi Perancis, dan  karyanya tidak jauh berhubungan dengan semangat revolusioner dan pemberontakan.</p><br>
          <p>Romantisme di Indonesia berkembang saat pendudukan Belanda. Saat itu Raden Saleh, seorang pelopor seni lukis Indonesia mendapat tawaran belajar melukis di Belanda. Akhirnya dari Raden Saleh, gerakan Romantisme sampai di Indonesia. Tema-tema Romantisme di Indonesia cenderung ke arah “kerakyatan”, idealisme, kebebasan, kemerdekaan.</p>
        </div>
        <div>
          <img id="playVidButton-m" src="{{ asset('assets/pecahan/play-button-grey.png') }}" alt="" class="w-7 cursor-pointer mix-blend-screen">
          <img id="pauseVidButton-m" src="{{ asset('assets/pecahan/pause-button-grey.png') }}" alt="" class="hidden w-7 cursor-pointer mix-blend-screen">
        </div>
      </div>
    </div>
  </div>
  <div id="tab-open3-m" class="z-20 fixed hidden bottom-0">
    <div class="flex items-center justify-center w-full h-full">
      <div class="bg-bgNavbar/70  w-full h-[500px] flex flex-col gap-y-5 items-center justify-center">
        <div class="overflow-y-auto text-white px-5 h-[400px] font-manuale text-center text-lg flex flex-col gap-y-5">
          <div class="flex gap-x-5 items-center">
            <img src="{{ asset('assets/romantisme/romantisme-p1.jpg') }}" alt="" class="w-2/5" draggable="false">
            <div class="w-3/5">
              <h2 class="font-bold text-xl">Eugène Delacroix</h2>
              <p class="text-lg">Pemimpin gerakan Romantis dalam seni Prancis abad ke -19</p>
            </div>
          </div>
          <div class="flex gap-x-5 items-center">
            <img src="{{ asset('assets/romantisme/romantisme-p2.jpg') }}" alt="" class="w-2/5" draggable="false">
            <div class="w-3/5">
              <h2 class="font-bold text-xl">Théodore Géricault</h2>
              <p class="text-lg">Karyanya yang paling terkenal, The Raft of the Medusa. Karyanya juga terkenal eksotik, emosional, dan luhur.</p>
            </div>
          </div>
          <div class="flex gap-x-5 items-center">
            <img src="{{ asset('assets/romantisme/romantisme-p3.jpg') }}" alt="" class="w-2/5" draggable="false">
            <div class="w-3/5">
              <h2 class="font-bold text-xl">Francisco Goya</h2>
              <p class="text-lg">Karya seninya mewujudkan penekanan Romantisisme pada subjektivitas, imajinasi, dan emosi, karakteristik</p>
            </div>
          </div>
          <div class="flex gap-x-5 items-center">
            <img src="{{ asset('assets/romantisme/romantisme-p4.jpg') }}" alt="" class="w-2/5" draggable="false">
            <div class="w-3/5">
              <h2 class="font-bold text-xl">Antoine Jean Gros</h2>
              <p class="text-lg">Penggambaran realistisnya tentang tentara yang tewas, korban wabah, atau pejuang</p>
            </div>
          </div>
          <div class="flex gap-x-5 items-center">
            <img src="{{ asset('assets/romantisme/romantisme-p5.jpg') }}" alt="" class="w-2/5" draggable="false">
            <div class="w-3/5">
              <h2 class="font-bold text-xl">Raden Saleh</h2>
              <p class="text-lg">Merupakan pelukis utama Neoklasik yang mengabdi pada monarki Louis XVI</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="tab-open4-m" class="z-20 fixed hidden bottom-0">
    <div class="flex items-center justify-center w-full h-full">
      <div class="bg-bgNavbar/70 w-full h-[500px] flex flex-col gap-y-5 items-center justify-center">
        <div class="overflow-y-auto text-white px-5 h-[400px] font-manuale text-center text-lg flex flex-col gap-y-5">
          <div class="flex gap-x-5 items-center">
            <img src="{{ asset('assets/romantisme/romantisme2-p1.jpg') }}" alt="" class="w-2/5" draggable="false">
            <div class="w-3/5">
              <p class="font-bold text-lg">28 July: Liberty Leading the People (1830)</p>
              <h2 class="text-base">Eugène Delacroix</h2>
            </div>
          </div>
          <div class="flex gap-x-5 items-center">
            <img src="{{ asset('assets/romantisme/romantisme2-p2.jpg') }}" alt="" class="w-2/5" draggable="false">
            <div class="w-3/5">
              <p class="font-bold text-lg">The Raft of the Medusa (1818-19)</p>
              <h2 class="text-base">Théodore Géricault</h2>
            </div>
          </div>
          <div class="flex gap-x-5 items-center">
            <img src="{{ asset('assets/romantisme/romantisme2-p3.jpg') }}" alt="" class="w-2/5" draggable="false">
            <div class="w-3/5">
              <p class="font-bold text-lg">The Third of May 1808 (1814)</p>
              <h2 class="text-base">Francisco Goya</h2>
            </div>
          </div>
          <div class="flex gap-x-5 items-center">
            <img src="{{ asset('assets/romantisme/romantisme2-p4.jpg') }}" alt="" class="w-2/5" draggable="false">
            <div class="w-3/5">
              <p class="font-bold text-lg">Napoleon on the Battlefield of Eylau, (1807)</p>
              <h2 class="text-base">Antoine-Jean Gros</h2>
            </div>
          </div>
          <div class="flex gap-x-5 items-center">
            <img src="{{ asset('assets/romantisme/romantisme2-p5.jpg') }}" alt="" class="w-2/5" draggable="false">
            <div class="w-3/5">
              <p class="font-bold text-lg">Penangkapan Pangeran Diponegoro (1857)</p>
              <h2 class="text-base">Raden Saleh</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="tab-open5-m" class="z-20 fixed hidden bottom-0 right-0 left-0">
    <div class="flex items-center justify-center w-full h-full bg-bgNavbar/70">
      <div class="w-full h-[300px] flex flex-col gap-y-5 items-center justify-center font-manuale text-xl text-white">
        <h2 class=""><span class="text-2xl font-bold">Awal</span> pergerakan: 1780</h2>
        <h2 class=""><span class="text-2xl font-bold">Akhir</span> pergerakan: 1830</h2>
      </div>
    </div>
  </div>
  <div id="tab-open6-m" class="z-20 fixed hidden bottom-0 right-0 left-0">
    <div class="flex items-center justify-center w-full h-full">
      <div class="bg-bgNavbar/70 w-full h-[500px] flex items-center justify-center">
        <div class="overflow-y-auto text-white px-5 h-[400px] font-manuale text-center text-lg">
          <p>Gaya Romantisme mulai redup di berbagai tempat, tapi kalo masuk tahun 1830-an, ada hal baru yang mulai muncul. Nah, waktu itu fotografi lagi jadi tren dan kota-kota juga makin ramai dengan industri dan perkotaan, jadi seni mulai berubah ke arah yang lebih nyata, alias Realisme.</p><br>
  
          <p>Karya-karya dari seniman keren kayak Turner dan Delacroix dengan warna-warni kuat dari sapuan kuas mereka, akhirnya bikin banyak pengaruh buat perkembangan Impresionisme. Mereka lebih fokus pada warna daripada garis sebagai cara utama buat mengatur komposisi. Dan ini juga ngaruh banget buat perkembangan Neo-Impresionisme sama teori warna karya Georges Seurat, lo!</p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const knock = document.getElementById('knock');
    const container = document.getElementById('container');
    const knock2 = document.getElementById('knock2');
    const knock3 = document.getElementById('knock3');
    const knock3M = document.getElementById('knock3-m');
    const knock4 = document.getElementById('knock4');
    const knock4M = document.getElementById('knock4-m');

    knock.addEventListener('click', function () {
      knock2.classList.add('hidden');
      knock3.classList.remove('hidden');
      knock3.classList.add('hidden', 'phone:block');
      knock3M.classList.remove('hidden');
      knock3M.classList.add('block', 'phone:hidden');
    });

    knock3.addEventListener('click', function () {
      knock3.classList.remove('phone:block');
      knock4.classList.remove('hidden');
    });

    knock3M.addEventListener('click', function () {
      knock3M.classList.remove('block', 'phone:hidden');
      knock3M.classList.add('hidden');
      knock4M.classList.remove('hidden');
    });

    knock4.addEventListener('click', function () {
      knock4.classList.add('hidden');
      knock.classList.add('hidden');
      container.classList.remove('hidden');
    });

    knock4M.addEventListener('click', function () {
      knock4M.classList.add('hidden');
      knock.classList.add('hidden');
      container.classList.remove('hidden');
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    const wheelContainer = document.getElementById('wheel-container');
    const wheelImages = document.querySelectorAll('.wheel-img');

    wheelImages.forEach((image, index) => {
      image.addEventListener('click', function () {
        rotateWheel(index + 1); // Adding 1 to index to match your 1-based indexing
      });
    });

    function rotateWheel(level) {
      const rotationDegree = -(level - 2) * 60; // Assuming the default rotation is -60 deg for level 2

      wheelContainer.style.transform = `rotate(${rotationDegree}deg)`;

      wheelImages.forEach((image) => {
        image.classList.remove('scale-110');
      });

      // Add active class to the clicked image
      const activeImage = wheelImages[level - 1];
      // activeImage.classList.add('scale-110');

      // Toggle visibility of the second image based on the clicked image
      const red1 = document.getElementById('1-1');
      const red2 = document.getElementById('2-1');
      const red3 = document.getElementById('3-1');
      const red4 = document.getElementById('4-1');
      const red5 = document.getElementById('5-1');
      const red6 = document.getElementById('6-1');
      if (activeImage.id === '1') {
        red1.classList.remove('hidden');
        red2.classList.add('hidden');
        red3.classList.add('hidden');
        red4.classList.add('hidden');
        red5.classList.add('hidden');
        red6.classList.add('hidden');
      } else if (activeImage.id === '2') {
        red2.classList.remove('hidden');
        red1.classList.add('hidden');
        red3.classList.add('hidden');
        red4.classList.add('hidden');
        red5.classList.add('hidden');
        red6.classList.add('hidden');
      } else if (activeImage.id === '3') {
        red3.classList.remove('hidden');
        red1.classList.add('hidden');
        red2.classList.add('hidden');
        red4.classList.add('hidden');
        red5.classList.add('hidden');
        red6.classList.add('hidden');
      } else if (activeImage.id === '4') {
        red4.classList.remove('hidden');
        red1.classList.add('hidden');
        red2.classList.add('hidden');
        red3.classList.add('hidden');
        red5.classList.add('hidden');
        red6.classList.add('hidden');
      } else if (activeImage.id === '5') {
        red5.classList.remove('hidden');
        red1.classList.add('hidden');
        red2.classList.add('hidden');
        red3.classList.add('hidden');
        red4.classList.add('hidden');
        red6.classList.add('hidden');
      } else {
        red6.classList.remove('hidden');
        red1.classList.add('hidden');
        red2.classList.add('hidden');
        red3.classList.add('hidden');
        red4.classList.add('hidden');
        red5.classList.add('hidden');
      }
    }
  });

  document.addEventListener('DOMContentLoaded', function () {
    const wheelContainer2 = document.getElementById('wheel-container2');
    const wheelImages2 = document.querySelectorAll('.wheel-img2');

    wheelImages2.forEach((image, index) => {
      image.addEventListener('click', function () {
        rotateWheel2(index + 1); // Adding 1 to index to match your 1-based indexing
      });
    });

    function rotateWheel2(level) {
      const rotationDegree = -(level - 2) * 60; // Assuming the default rotation is -60 deg for level 2

      wheelContainer2.style.transform = `rotate(${rotationDegree}deg)`;

      // Add active class to the clicked image
      const activeImage2 = wheelImages2[level - 1];

      // Toggle visibility of the second image based on the clicked image
      const red1m = document.getElementById('1-1-m');
      const red2m = document.getElementById('2-1-m');
      const red3m = document.getElementById('3-1-m');
      const red4m = document.getElementById('4-1-m');
      const red5m = document.getElementById('5-1-m');
      const red6m = document.getElementById('6-1-m');
      if (activeImage2.id === '1-m') {
        red1m.classList.remove('hidden');
        red2m.classList.add('hidden');
        red3m.classList.add('hidden');
        red4m.classList.add('hidden');
        red5m.classList.add('hidden');
        red6m.classList.add('hidden');
      } 
      else if (activeImage2.id === '2-m') {
        red2m.classList.remove('hidden');
        red1m.classList.add('hidden');
        red3m.classList.add('hidden');
        red4m.classList.add('hidden');
        red5m.classList.add('hidden');
        red6m.classList.add('hidden');
      } else if (activeImage2.id === '3-m') {
        red3m.classList.remove('hidden');
        red1m.classList.add('hidden');
        red2m.classList.add('hidden');
        red4m.classList.add('hidden');
        red5m.classList.add('hidden');
        red6m.classList.add('hidden');
      } else if (activeImage2.id === '4-m') {
        red4m.classList.remove('hidden');
        red1m.classList.add('hidden');
        red2m.classList.add('hidden');
        red3m.classList.add('hidden');
        red5m.classList.add('hidden');
        red6m.classList.add('hidden');
      } else if (activeImage2.id === '5-m') {
        red5m.classList.remove('hidden');
        red1m.classList.add('hidden');
        red2m.classList.add('hidden');
        red3m.classList.add('hidden');
        red4m.classList.add('hidden');
        red6m.classList.add('hidden');
      } else {
        red6m.classList.remove('hidden');
        red1m.classList.add('hidden');
        red2m.classList.add('hidden');
        red3m.classList.add('hidden');
        red4m.classList.add('hidden');
        red5m.classList.add('hidden');
      }
    }
  });

  function play() {
    var audio = document.getElementById("audio");
    var playIcon = document.getElementById("playIcon");
    var pauseIcon = document.getElementById("pauseIcon");
    playIcon.classList.add('hidden');
    pauseIcon.classList.remove('hidden');
    audio.play();
  }
  
  function pause() {
    var audio = document.getElementById("audio");
    var playIcon = document.getElementById("playIcon");
    var pauseIcon = document.getElementById("pauseIcon");
    pauseIcon.classList.add('hidden');
    playIcon.classList.remove('hidden');
    audio.pause();
  }

  function play2() {
    var audio2 = document.getElementById("audio2");
    var playIcon2 = document.getElementById("playIcon2");
    var pauseIcon2 = document.getElementById("pauseIcon2");
    playIcon2.classList.add('hidden');
    pauseIcon2.classList.remove('hidden');
    audio2.play();
  }

  function play2M() {
    var audio2 = document.getElementById("audio2-m");
    var playIcon2 = document.getElementById("playIcon2-m");
    var pauseIcon2 = document.getElementById("pauseIcon2-m");
    playIcon2.classList.add('hidden');
    pauseIcon2.classList.remove('hidden');
    audio2.play();
  }

  function pause2() {
    var audio2 = document.getElementById("audio2");
    var playIcon2 = document.getElementById("playIcon2");
    var pauseIcon2 = document.getElementById("pauseIcon2");
    pauseIcon2.classList.add('hidden');
    playIcon2.classList.remove('hidden');
    audio2.pause();
  }

  function pause2M() {
    var audio2 = document.getElementById("audio2-m");
    var playIcon2 = document.getElementById("playIcon2-m");
    var pauseIcon2 = document.getElementById("pauseIcon2-m");
    pauseIcon2.classList.add('hidden');
    playIcon2.classList.remove('hidden');
    audio2.pause();
  }

  document.addEventListener('DOMContentLoaded', function () {
    const tabButton = document.getElementById('1-1');
    const tabButton2 = document.getElementById('2-1');
    const tabButton3 = document.getElementById('3-1');
    const tabButton4 = document.getElementById('4-1');
    const tabButton5 = document.getElementById('5-1');
    const tabButton6 = document.getElementById('6-1');
    const tabOpen = document.getElementById('tab-open');
    const tabOpen2 = document.getElementById('tab-open2');
    const tabOpen3 = document.getElementById('tab-open3');
    const tabOpen4 = document.getElementById('tab-open4');
    const tabOpen5 = document.getElementById('tab-open5');
    const tabOpen6 = document.getElementById('tab-open6');
    const bgBlur = document.getElementById('bg-blur');
    const bgBlur2 = document.getElementById('bg-blur2');
    const bgBlur3 = document.getElementById('bg-blur3');
    const bgBlur4 = document.getElementById('bg-blur4');
    const bgBlur5 = document.getElementById('bg-blur5');
    const bgBlur6 = document.getElementById('bg-blur6');

    tabButton.addEventListener('click', function () {
      const expanded = tabButton.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        tabOpen.classList.add('hidden');
        tabButton.setAttribute('aria-expanded', 'false');
        bgBlur.classList.add('hidden');
      } else {
        tabOpen.classList.remove('hidden');
        tabButton.setAttribute('aria-expanded', 'true');
        bgBlur.classList.remove('hidden');
      }
    });

    tabButton2.addEventListener('click', function () {
      const expanded = tabButton2.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        tabOpen2.classList.add('hidden');
        tabButton2.setAttribute('aria-expanded', 'false');
        bgBlur2.classList.add('hidden');
      } else {
        tabOpen2.classList.remove('hidden');
        tabButton2.setAttribute('aria-expanded', 'true');
        bgBlur2.classList.remove('hidden');
      }
    });

    tabButton3.addEventListener('click', function () {
      const expanded = tabButton3.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        tabOpen3.classList.add('hidden');
        tabButton3.setAttribute('aria-expanded', 'false');
        bgBlur3.classList.add('hidden');
      } else {
        tabOpen3.classList.remove('hidden');
        tabButton3.setAttribute('aria-expanded', 'true');
        bgBlur3.classList.remove('hidden');
      }
    });

    tabButton4.addEventListener('click', function () {
      const expanded = tabButton4.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        tabOpen4.classList.add('hidden');
        tabButton4.setAttribute('aria-expanded', 'false');
        bgBlur4.classList.add('hidden');
      } else {
        tabOpen4.classList.remove('hidden');
        tabButton4.setAttribute('aria-expanded', 'true');
        bgBlur4.classList.remove('hidden');
      }
    });

    tabButton5.addEventListener('click', function () {
      const expanded = tabButton5.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        tabOpen5.classList.add('hidden');
        tabButton5.setAttribute('aria-expanded', 'false');
        bgBlur5.classList.add('hidden');
      } else {
        tabOpen5.classList.remove('hidden');
        tabButton5.setAttribute('aria-expanded', 'true');
        bgBlur5.classList.remove('hidden');
      }
    });

    tabButton6.addEventListener('click', function () {
      const expanded = tabButton6.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        tabOpen6.classList.add('hidden');
        tabButton6.setAttribute('aria-expanded', 'false');
        bgBlur6.classList.add('hidden');
      } else {
        tabOpen6.classList.remove('hidden');
        tabButton6.setAttribute('aria-expanded', 'true');
        bgBlur6.classList.remove('hidden');
      }
    });

    document.addEventListener('click', function (event) {
      if (!tabButton.contains(event.target) && !tabOpen.contains(event.target)) {
        tabOpen.classList.add('hidden');
        tabButton.setAttribute('aria-expanded', 'false');
        bgBlur.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!tabButton2.contains(event.target) && !tabOpen2.contains(event.target)) {
        tabOpen2.classList.add('hidden');
        tabButton2.setAttribute('aria-expanded', 'false');
        bgBlur2.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!tabButton3.contains(event.target) && !tabOpen3.contains(event.target)) {
        tabOpen3.classList.add('hidden');
        tabButton3.setAttribute('aria-expanded', 'false');
        bgBlur3.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!tabButton4.contains(event.target) && !tabOpen4.contains(event.target)) {
        tabOpen4.classList.add('hidden');
        tabButton4.setAttribute('aria-expanded', 'false');
        bgBlur4.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!tabButton5.contains(event.target) && !tabOpen5.contains(event.target)) {
        tabOpen5.classList.add('hidden');
        tabButton5.setAttribute('aria-expanded', 'false');
        bgBlur5.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!tabButton6.contains(event.target) && !tabOpen6.contains(event.target)) {
        tabOpen6.classList.add('hidden');
        tabButton6.setAttribute('aria-expanded', 'false');
        bgBlur6.classList.add('hidden');
      }
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    const tabButton = document.getElementById('1-1-m');
    const tabButton2 = document.getElementById('2-1-m');
    const tabButton3 = document.getElementById('3-1-m');
    const tabButton4 = document.getElementById('4-1-m');
    const tabButton5 = document.getElementById('5-1-m');
    const tabButton6 = document.getElementById('6-1-m');
    const tabOpen = document.getElementById('tab-open-m');
    const tabOpen2 = document.getElementById('tab-open2-m');
    const tabOpen3 = document.getElementById('tab-open3-m');
    const tabOpen4 = document.getElementById('tab-open4-m');
    const tabOpen5 = document.getElementById('tab-open5-m');
    const tabOpen6 = document.getElementById('tab-open6-m');
    const bgBlur = document.getElementById('bg-blur-m');
    const bgBlur2 = document.getElementById('bg-blur2-m');
    const bgBlur3 = document.getElementById('bg-blur3-m');
    const bgBlur4 = document.getElementById('bg-blur4-m');
    const bgBlur5 = document.getElementById('bg-blur5-m');
    const bgBlur6 = document.getElementById('bg-blur6-m');

    tabButton.addEventListener('click', function () {
      const expanded = tabButton.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        tabOpen.classList.add('hidden');
        tabButton.setAttribute('aria-expanded', 'false');
        bgBlur.classList.add('hidden');
      } else {
        tabOpen.classList.remove('hidden');
        tabButton.setAttribute('aria-expanded', 'true');
        bgBlur.classList.remove('hidden');
      }
    });

    tabButton2.addEventListener('click', function () {
      const expanded = tabButton2.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        tabOpen2.classList.add('hidden');
        tabButton2.setAttribute('aria-expanded', 'false');
        bgBlur2.classList.add('hidden');
      } else {
        tabOpen2.classList.remove('hidden');
        tabButton2.setAttribute('aria-expanded', 'true');
        bgBlur2.classList.remove('hidden');
      }
    });

    tabButton3.addEventListener('click', function () {
      const expanded = tabButton3.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        tabOpen3.classList.add('hidden');
        tabButton3.setAttribute('aria-expanded', 'false');
        bgBlur3.classList.add('hidden');
      } else {
        tabOpen3.classList.remove('hidden');
        tabButton3.setAttribute('aria-expanded', 'true');
        bgBlur3.classList.remove('hidden');
      }
    });

    tabButton4.addEventListener('click', function () {
      const expanded = tabButton4.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        tabOpen4.classList.add('hidden');
        tabButton4.setAttribute('aria-expanded', 'false');
        bgBlur4.classList.add('hidden');
      } else {
        tabOpen4.classList.remove('hidden');
        tabButton4.setAttribute('aria-expanded', 'true');
        bgBlur4.classList.remove('hidden');
      }
    });

    tabButton5.addEventListener('click', function () {
      const expanded = tabButton5.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        tabOpen5.classList.add('hidden');
        tabButton5.setAttribute('aria-expanded', 'false');
        bgBlur5.classList.add('hidden');
      } else {
        tabOpen5.classList.remove('hidden');
        tabButton5.setAttribute('aria-expanded', 'true');
        bgBlur5.classList.remove('hidden');
      }
    });

    tabButton6.addEventListener('click', function () {
      const expanded = tabButton6.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        tabOpen6.classList.add('hidden');
        tabButton6.setAttribute('aria-expanded', 'false');
        bgBlur6.classList.add('hidden');
      } else {
        tabOpen6.classList.remove('hidden');
        tabButton6.setAttribute('aria-expanded', 'true');
        bgBlur6.classList.remove('hidden');
      }
    });

    document.addEventListener('click', function (event) {
      if (!tabButton.contains(event.target) && !tabOpen.contains(event.target)) {
        tabOpen.classList.add('hidden');
        tabButton.setAttribute('aria-expanded', 'false');
        bgBlur.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!tabButton2.contains(event.target) && !tabOpen2.contains(event.target)) {
        tabOpen2.classList.add('hidden');
        tabButton2.setAttribute('aria-expanded', 'false');
        bgBlur2.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!tabButton3.contains(event.target) && !tabOpen3.contains(event.target)) {
        tabOpen3.classList.add('hidden');
        tabButton3.setAttribute('aria-expanded', 'false');
        bgBlur3.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!tabButton4.contains(event.target) && !tabOpen4.contains(event.target)) {
        tabOpen4.classList.add('hidden');
        tabButton4.setAttribute('aria-expanded', 'false');
        bgBlur4.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!tabButton5.contains(event.target) && !tabOpen5.contains(event.target)) {
        tabOpen5.classList.add('hidden');
        tabButton5.setAttribute('aria-expanded', 'false');
        bgBlur5.classList.add('hidden');
      }
    });
    document.addEventListener('click', function (event) {
      if (!tabButton6.contains(event.target) && !tabOpen6.contains(event.target)) {
        tabOpen6.classList.add('hidden');
        tabButton6.setAttribute('aria-expanded', 'false');
        bgBlur6.classList.add('hidden');
      }
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    var video = document.getElementById('customVideo');
    var videoM = document.getElementById('customVideo-m');
    var playButton = document.getElementById('playVidButton');
    var playButtonM = document.getElementById('playVidButton-m');
    var pauseButton = document.getElementById('pauseVidButton');
    var pauseButtonM = document.getElementById('pauseVidButton-m');

    playButton.addEventListener('click', function () {
        if (video.paused || video.ended) {
            video.play();
            playButton.style.display = 'none';
            pauseButton.style.display = 'block';
        } else {
            video.pause();
            playButton.style.display = 'block';
            pauseButton.style.display = 'none'; 
        }
    });

    playButtonM.addEventListener('click', function () {
        if (videoM.paused || videoM.ended) {
            videoM.play();
            playButtonM.style.display = 'none';
            pauseButtonM.style.display = 'block';
        } else {
            videoM.pause();
            playButtonM.style.display = 'block';
            pauseButtonM.style.display = 'none'; 
        }
    });

    pauseButton.addEventListener('click', function () {
        if (!video.paused || !video.ended) {
            video.pause();
            playButton.style.display = 'block';
            pauseButton.style.display = 'none';
        }
    });

    pauseButtonM.addEventListener('click', function () {
        if (!videoM.paused || !videoM.ended) {
            videoM.pause();
            playButtonM.style.display = 'block';
            pauseButtonM.style.display = 'none';
        }
    });

    video.addEventListener('play', function () {
        playButton.style.display = 'none';
        pauseButton.style.display = 'block';
    });

    videoM.addEventListener('play', function () {
        playButtonM.style.display = 'none';
        pauseButtonM.style.display = 'block';
    });

    video.addEventListener('pause', function () {
        playButton.style.display = 'block'; 
        pauseButton.style.display = 'none'; 
    });

    videoM.addEventListener('pause', function () {
        playButtonM.style.display = 'block'; 
        pauseButtonM.style.display = 'none'; 
    });

    video.addEventListener('ended', function () {
        playButton.style.display = 'block';
        pauseButton.style.display = 'none';
    });

    videoM.addEventListener('ended', function () {
        playButtonM.style.display = 'block';
        pauseButtonM.style.display = 'none';
    });
  });
</script>