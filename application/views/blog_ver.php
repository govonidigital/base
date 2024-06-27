<div class="bg-white py-5">
     <div class='container'>
          <div class='row'>
               <?php 
                    foreach ($blog as $bl){
                    echo " 
                    <div class='col-12'>
                         <img src='" . base_url('assets/img/blog/' . $bl->imagem) . "' class='img-fluid'>
                         <div class='text-left mt-4'>
                              <p>$bl->data</p>
                         </div>
                              <div class='text-center my-4'>
                                   <h1>$bl->nome</h1><br>
                              </div>
                              $bl->texto</p>
                    </div>";
                    }
               ?>     
          </div>
     </div>
</div>