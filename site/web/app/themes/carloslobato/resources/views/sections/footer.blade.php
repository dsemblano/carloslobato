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

  @php(dynamic_sidebar('sidebar-footer'))
  {{-- @include('partials/home.section2') --}}
</footer>