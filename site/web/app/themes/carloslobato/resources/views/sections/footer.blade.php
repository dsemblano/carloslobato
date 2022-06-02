<footer class="content-info bg-pros90orange mt-7 py-8 px-10">
  <div class="text-center text-white">
    <a href="https://api.whatsapp.com/send?phone=5596981086567" title="Mande sua mensagem via Whatsapp para nossa equipe!"
    target="_blank" class="inline-block whatslink" aria-label="Whatsapp mensagem">Whatsapp: (96) 98108-6567
    </a>
    <br> 
    <span>Carlos Lobato © Todos os direitos reservados. {{ date('Y') }}</span>
  </div>
  <div class="text-center text-white fill-white mt-4">
    @include('partials/snippets.socialicons')
  </div>
  @php(dynamic_sidebar('sidebar-footer'))
  {{-- @include('partials/home.section2') --}}
</footer>