<section id="section1" class="container px-8 lg:px-16 flex flex-col lg:flex-row lg:mt-40 justify-between items-start bg-white relative">
  <!--Left Col-->
  <div class="flex flex-col w-full lg:w-2/5 justify-center text-center lg:text-left animate__animated animate__fadeInLeftBig">
    <h1 class="logonumero gradient-text mb-4 uppercase text-7xl lg:text-9xl font-bold text-logoblue">Carlos Lobato</h1>
    <h2 class="logonumero gradient-text mb-4 text-6xl lg:text-8xl font-bold text-center text-logoorange">90000</h2>
    <figure class="animate__animated animate__fadeInUpBig">
      <img class="block lg:hidden" width="600" height="718" alt="Imagem Carlos Lobato principal na home" src="@asset('images/CLperfil.png')" />
      <img class="block lg:hidden hrdec" src="@asset('images/hr_brand.png')" alt="linha decorativa">
    </figure>
    <article class="mt-8 mb-8 prose lg:prose-2xl  prose-a:text-blue-800 prose-a:no-underline hover:prose-a:text-blue-500 hover:prose-a:underline">
      <p class="leading-normal text-xl mb-8">
        Candidato a Deputado Estadual no Amapá pelo <a class="underline" target="_blank" href="https://pros90amapa.org.br">PROS AP</a> número <strong>90.000 (noventa mil)</strong>, advogado, psicólogo, sociólogo, jornalista e ex-âncora do Tribuna da Cidade na 101 FM.
      </p>
      <p class="leading-normal text-xl mb-8">
        Carlos Lobato, natural de Macapá, aprendeu desde cedo o valor de boas escolhas. Dedicado
        aos estudos, o menino pobre, que vendeu sacolas no Mercado Central, cresceu e passou em 22 vestibulares. Venceu na
        vida, tornou-se psicólogo, sociólogo, advogado e jornalista.
      </p>
      
      @include('partials/snippets.socialicons')
      @include('partials/snippets.fblikeshare')
    </article>
  </div>
    <!--Right Col desktop -->
  <div class="social hidden lg:block w-full lg:w-3/5 pl-48 animate__animated animate__fadeInUpBig">
    <img class="z-50 hidden lg:block" width="600" height="718" alt="Imagem Carlos Lobato principal na home" src="@asset('images/CLperfil.png')" />
    <img class="z-50 hidden lg:block hrdec" src="@asset('images/hr_brand.png')" alt="linha decorativa">
  </div>
  <!--Right Col mobile -->
</section>