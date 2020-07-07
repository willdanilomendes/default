   <footer>
       <div class="container">
           <div class="row">
               <div class="col-md-3 col-12 text-center text-sm-left">
                   <figure>
                       <img src="<?php echo U?>src/img/logo.svg" alt="" class="">
                   </figure>
               </div>
               <div class="col-md-3 col-12 text-center text-sm-left">
                   <h6>Forge Design</h6>
                   <ul class="list-unstyled">
                       <li>
                           <a href="#home">Home</a>
                       </li>
                       <li>
                           <a href="#oquefazemos">O que fazemos?</a>
                       </li>
                       <li>
                           <a href="#comotrabalhamos">Como Trabalhamos</a>
                       </li>
                       <li>
                           <a href="#nossoscases">Nossos Cases</a>
                       </li>
                   </ul>
               </div>
               <div class="col-md-3 col-12 text-center text-sm-left">
                   <h6>Links úteis</h6>
                   <ul class="list-unstyled">
                       <li>
                           <a href="https://www.behance.net/forge-design" target="_blank" class="behance"></a>
                       </li>
                       <li>
                           <a href="http://instagram.com/agenciaforgedesign" target="_blank" class="instagram"></a>
                       </li>
                   </ul>
               </div>
               <div class="col-md-3 col-12 text-center text-sm-left">
                   <h6>Fale Conosco</h6>
                   <ul class="list-unstyled">
                       <li>
                           <a>Horário de atendimento das 09:00 às 17
                               :00
                           </a>
                       </li>
                       <li>
                           <a class="d-block my-2 whatsapp"
                               onclick="window.open('https://api.whatsapp.com/send?phone=5515991011659','Fale com o Willian ForgeDesign','width=500,height=600')"
                               href="javascript:void(0)">(15) 9 9101.1659</a>
                       </li>
                       <li>
                           <a class="d-block my-2 whatsapp"
                               onclick="window.open('https://api.whatsapp.com/send?phone=5515981000739','Fale com o Michael ForgeDesign','width=500,height=600')"
                               href="javascript:void(0)">(15) 9 8100.0739</a>
                       </li>
                       <li>
                           <a class="email" href="mailto:contato@forgedesign.com.br">contato@forgedesign.com.br</a>
                       </li>
                   </ul>
               </div>

           </div>
       </div>
   </footer>

   <section class="copy">
       <div class="container">
           <div class="row align-items-center">
               <div class="col-md-6 text-md-left text-center">
                   <span class="text-white">Todos direitos reservados @ ForgeDesign - CNPJ -
                       37.147.564/0001-61</span>
               </div>
               <div class="col-md-6 col-12 text-md-right text-center">
                   <a href="https://www.forgedesign.com.br" target="_blank" class="footer__subTitutlo"
                       title="Forge Design Agência Web Sorocaba. Criação de Sites, Loja Virtual, Designer Gráfico, Criação de interfaces, Logomarcas, Gerenciamento de Rede Social.">
                       Desenvolvimento de sites | <a href="https://www.forgedesign.com.br" target="_blank"
                           class="footer__subTitutlo"
                           title="Forge Design Agência Web Sorocaba. Criação de Sites, Loja Virtual, Designer Gráfico, Criação de interfaces, Logomarcas, Gerenciamento de Rede Social.">
                           ForgeDesign</a>
               </div>
           </div>
       </div>
   </section>

   <!-- jQuery Modal -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
   <!-- jQuery Modal -->
   <script src="<?php echo U?>src/vendors/jquery/jquery-3.3.1.min.js"></script>
   <script src="<?php echo U?>src/vendors/jquery/jquery.mask.min.js"></script>
   <!-- AOS -->
   <!-- Swiper -->
   <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script src="<?php echo U?>src/vendors/mask/jquery.mask.min.js"></script>
   <script>
       AOS.init();
   </script>
   <!-- AOS -->
   <!-- <script src="//code.jivosite.com/widget/Hk89U7tR6Z" async></script> -->

   <!-- Initialize Swiper -->
   <script>
       var swiper = new Swiper('.swiper-container', {
           slidesPerView: 3,
           spaceBetween: 30,
           pagination: {
               el: '.swiper-pagination',
               clickable: true,
           },
           // Responsive breakpoints
           breakpoints: {
               // when window width is >= 320px
               320: {
                   slidesPerView: 1,
                   spaceBetween: 20
               },
               // when window width is >= 480px
               480: {
                   slidesPerView: 1,
                   spaceBetween: 30
               },
               // when window width is >= 640px
               640: {
                   slidesPerView: 3,
                   spaceBetween: 40
               }
           }
       });
   </script>

   <script>
       $(document).ready(function () {
           $('.whats').mask('(00) 0 0000-0000');
       });
   </script>


   </body>

   </html>