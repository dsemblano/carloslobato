<section id="section1" class="flex flex-col lg:flex-row lg:mt-40 justify-between items-start bg-white">
  <!--Left Col-->
  <div class="flex flex-col w-full lg:w-2/5 justify-center text-center lg:text-left animated animatedFadeInUp fadeInUp">
    <h1 class="mb-4 uppercase text-7xl lg:text-9xl font-bold text-pros90lightblue">Carlos Lobato</h1>
    <img class="block lg:hidden rounded-tl-extraLarge rounded-br-extraLarge" src="@asset('images/perfil.jpg')" />
    <article class="mt-8 mb-8">
      <p class="leading-normal text-xl mb-8">
        Pré-candidato a Deputado Estadual pelo <a class="underline" target="_blank" href="https://pros90amapa.org.br">PROS Amapá</a>, advogado, psicólogo, sociólogo, jornalista e ex âncora do Tribuna da Cidade na 101 FM
      </p>
      <p class="leading-normal text-xl mb-8">
        Carlos Alberto Lobato Lima, nascido em Macapá, no dia 16 de novembro de 1956, Carlos Lobato aprendeu desde cedo o valor de boas escolhas. Dedicado
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
    <img class="z-50 hidden lg:block rounded-tl-extraLarge rounded-br-extraLarge" src="@asset('images/perfil.jpg')" />
    {{-- <h2>Entre em contato</h2>
    @php(dynamic_sidebar('textos-primary')) --}}
  </div>
  <!--Right Col mobile -->
</section>