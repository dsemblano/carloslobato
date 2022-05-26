<section class="section1 flex flex-wrap flex-col md:flex-row items-center bg-white border-bs container">
  <!--Left Col-->
  <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
    <h1 class="my-4 text-5xl font-bold leading-tight">Carlos Lobato</h1>
    <p class="leading-normal text-2xl mb-8">
      Advogado, radialista e jornalista, nascido em 16/11/1956 é pré candidato a Deputado Estadual pelo Pros 90 Amapá.
    </p>
    <div class="social hidden lg:block w-full">
        @include('partials/snippets.social')
        @include('partials/snippets.facebook')
      {{-- <h2>Entre em contato</h2>
      @php(dynamic_sidebar('textos-primary')) --}}
    </div>

  </div>
  <!--Right Col-->
  <div class="w-full md:w-3/5 py-6 text-center">
    <img class="w-full md:w-4/5 z-50 rounded-tl-extraLarge rounded-br-extraLarge" src="@asset('images/perfil.jpg')" />
  </div>
  <div class="social block lg:hidden text-center w-full">
      @include('partials/snippets.social')
      @include('partials/snippets.facebook')
  </div>
</section>