<footer class="content-info bg-pros90blue mt-7 py-4 px-10">
  <div class="text-center text-white fill-white">
    @include('partials/snippets.whatsapp')
  </div>
  <div class="text-center text-white fill-white">    
    @include('partials/snippets.socialicons')
    <div class="text-center text-white fill-white">
      Eleição 20222 Carlos Alberto Lobato Lima Deputado Estadual | CNPJ: 47.316.155/0001-03 | Partido Isolado: PROS
    </div>
    <div class="text-center text-white fill-white">
      Carlos Lobato © Todos os direitos reservados. {{ date('Y') }}
    </div>
  </div>
  <div class="flex flex-col text-white text-center mb-6">
    <div id="eleicoesfaltam" class="mt-6">
      @include('partials/snippets.eleicoesfaltam')
    </div>
    <hr class="my-4 w-2/4 relative left-1/4">
    <div class="flex flex-col">
      PROS Amapá © <br class="block lg:hidden">Todos os direitos reservados. {{ date('Y') }}
      <p>CNPJ: 19.225.311/0001-87</p>
      <p>Av. Henrique Galúcio, 1081 Macapá - AP, 68900-115</p>
    </div>
  </div>

  @php(dynamic_sidebar('sidebar-footer'))
  {{-- @include('partials/home.section2') --}}
</footer>