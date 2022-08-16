<section id="section1" class="flex flex-col lg:flex-row lg:mt-40 justify-between items-start bg-white">
  <!--Left Col-->
  <div class="flex flex-col w-full lg:w-2/5 justify-center text-center lg:text-left animated animatedFadeInUp fadeInUp">
    <h1 class="logonumero mb-4 uppercase text-7xl lg:text-9xl font-bold text-pros90lightblue">Carlos Lobato</h1>
    <h2 class="logonumero mb-4 text-3xl lg:text-7xl font-bold"> <span class="text-pros90orange">90</span><span
        class="text-pros90lightblue">000</span></h2>
    <img class="block lg:hidden rounded-tl-extraLarge rounded-br-extraLarge" width="600" height="718" alt="Imagem Carlos Lobato principal na home" src="@asset('images/Carlos Lobato foto perfil.png')" />
    <article class="mt-8 mb-8 prose lg:prose-2xl  prose-a:text-blue-800 prose-a:no-underline hover:prose-a:text-blue-500 hover:prose-a:underline">
      <p class="leading-normal text-xl mb-8">
        Candidato a Deputado Estadual pelo <a class="underline" target="_blank" href="https://pros90amapa.org.br">PROS Amapá</a> <strong>número 90000</strong>, advogado, psicólogo, sociólogo, jornalista e ex-âncora do Tribuna da Cidade na 101 FM.
      </p>
      <p class="leading-normal text-xl mb-8">
        Carlos Alberto Lobato Lima, nascido em Macapá no dia 16 de novembro de 1956, Carlos Lobato aprendeu desde cedo o valor de boas escolhas. Dedicado
        aos estudos, o menino pobre, que vendeu sacolas no Mercado Central, cresceu e passou em 22 vestibulares. Venceu na
        vida, tornou-se psicólogo, sociólogo, advogado e jornalista.
      </p>
      @include('partials/snippets.socialicons')
      @include('partials/snippets.fblikeshare')
      <div class="fbsnippet mt-8">
        @include('partials/snippets.facebook')
      </div>
    </article>
  </div>
    <!--Right Col desktop -->
  <div class="social hidden lg:block w-full pl-48">
    <img class="z-50 hidden lg:block rounded-tl-extraLarge rounded-br-extraLarge" width="600" height="718" alt="Imagem Carlos Lobato principal na home" src="@asset('images/Carlos Lobato foto perfil.png')" />
  </div>
  <!--Right Col mobile -->
</section>