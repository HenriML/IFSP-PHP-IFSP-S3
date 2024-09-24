@include('component.cabecalho')
<style>
main {
  background-color: black;
}
.aa {
  color: red;
}

body {
  background-color: black;
}
</style>
<main>
<div class="container">
  <section class="section pb-3 wow fadeIn" data-wow-delay="0.3s">
  <h2 class="aa">.</h2>
  <h2 class="aa">.</h2>
  <h2 class="aa">Nossos produtos</h2>
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card card-ecommerce">
          <div class="view overlay z-depth-1">
            <img src="data:image/jpeg;base64,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" class="card-img-top"
              alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body text-center no-padding">
            <a href="" class="text-muted">
              <h5>ASUS</h5>
            </a>
            <h4 class="card-title">
              <strong>
                <a href="">RTX 3060 OC </a>
              </strong>
            </h4>
            <p class="card-text">A ASUS KO GeForce RTX 3060 V2 OC Edition 12GB GDDR6 adiciona um toque de elegância à experiência gaming de última geração.
            </p>
            <div class="card-footer">
              <span class="float-left">R$2,599.00
              </span>
              <span class="float-right">
                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                  <i class="fas fa-heart"></i>
                </a>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
<div class="card card-ecommerce">
  <div class="view overlay z-depth-1">
    <img src="https://images.kabum.com.br/produtos/fotos/101520/placa-de-video-gigabyte-nvidia-geforce-gtx-1650-oc-4g-gddr5-gv-n1650oc-4gd_placa-de-video-gigabyte-nvidia-geforce-gtx-1650-oc-4g-gddr5-gv-n1650oc-4gd_1556201331_g.jpg" class="card-img-top"
      alt="">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
  <div class="card-body text-center no-padding">
    <a href="" class="text-muted">
      <h5>Gigabyte</h5>
    </a>
    <h4 class="card-title">
      <strong>
        <a href=""> NVIDIA GTX 1650</a>
      </strong>
    </h4>
    <p class="card-text">Lâminas exclusivas de 80mm, ventilador giratório alternativo e ventilador ativo 3D, proporcionando uma dissipação de calor.
    </p>
    <div class="card-footer">
      <span class="float-left">R$ 1.799,99
      </span>
      <span class="float-right">
        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
          <i class="fas fa-heart"></i>
        </a>
      </span>
    </div>
  </div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="card card-ecommerce">
  <div class="view overlay z-depth-1">
    <img src="https://cf.shopee.com.br/file/458572fece0ab45f3472c2cd273c50a5" class="card-img-top"
      alt="">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
  <div class="card-body text-center no-padding">
    <a href="" class="text-muted">
      <h5>MSI</h5>
    </a>
    <h4 class="card-title">
      <strong>
        <a href="">MSI Geforce GTX 960</a>
      </strong>
    </h4>
    <p class="card-text">Intermediária de bom custo-benefício da geração anterior da Nvidia, a 960 é um ótimo custo benefício.
    </p>
    <div class="card-footer">
      <span class="float-left">R$2.279,90
      </span>
      <span class="float-right">
        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
          <i class="fas fa-heart"></i>
        </a>
      </span>
    </div>
  </div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="card card-ecommerce">
  <div class="view overlay z-depth-1">
    <img src="https://images.kabum.com.br/produtos/fotos/306130/placa-de-video-evga-nvidia-geforce-rtx-3050-xc-gaming-8gb-gddr6-lhr-dlss-ray-tracing-08g-p5-3553-kr_1643288740_original.jpg" class="card-img-top"
      alt="">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
  <div class="card-body text-center no-padding">
    <a href="" class="text-muted">
      <h5>EVGA</h5>
    </a>
    <h4 class="card-title">
      <strong>
        <a href="">RTX 3050 XC Gaming</a>
      </strong>
    </h4>
    <p class="card-text">A GeForce RTX 3050 foi desenvolvida com o poderoso desempenho gráfico da arquitetura NVIDIA Ampere.
    </p>
    <div class="card-footer">
      <span class="float-left">R$ 2.099,99
      </span>
      <span class="float-right">
        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
          <i class="fas fa-heart"></i>
        </a>
      </span>
    </div>
  </div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="card card-ecommerce">
  <div class="view overlay z-depth-1">
    <img src="https://wgtec.com.br/wp-content/uploads/2019/09/memoria-hyperx-fury-8gb-2666mhz-ddr4-cl16-preto-hx426c16fb2-8.jpg" class="card-img-top"
      alt="">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
  <div class="card-body text-center no-padding">
    <a href="" class="text-muted">
      <h5>Hyper X</h5>
    </a>
    <h4 class="card-title">
      <strong>
        <a href="">HyperX FURY 8GB 2666MHZ DDR4</a>
      </strong>
    </h4>
    <p class="card-text">FURY reconhece automaticamente sua plataforma host e faz o overclock automaticamente para a maior frequência publicada.
    </p>
    <div class="card-footer">
      <span class="float-left">R$216,90
      </span>
      <span class="float-right">
        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
          <i class="fas fa-heart"></i>
        </a>
      </span>
    </div>
  </div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="card card-ecommerce">
  <div class="view overlay z-depth-1">
    <img src="https://media.kingston.com/kingston/product/ktc-product-beast-ddr4-rgb-dimm-1-angled-zm-lg.jpg" class="card-img-top"
      alt="">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
  <div class="card-body text-center no-padding">
    <a href="" class="text-muted">
      <h5>Kingston</h5>
    </a>
    <h4 class="card-title">
      <strong>
        <a href="">Kingston FURY DDR4</a>
      </strong>
    </h4>
    <p class="card-text">Mantenha seus fluxos de transmissão estáveis e avance através de suas edições de vídeo com velocidades de até 5333MT/s 
    </p>
    <div class="card-footer">
      <span class="float-left">R$269,99
      </span>
      <span class="float-right">
        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
          <i class="fas fa-heart"></i>
        </a>
      </span>
    </div>
  </div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="card card-ecommerce">
  <div class="view overlay z-depth-1">
    <img src="https://www.brandimia.com/productos/BL16G32C16U4R-3.jpg" class="card-img-top"
      alt="">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
  <div class="card-body text-center no-padding">
    <a href="" class="text-muted">
      <h5>Crucial</h5>
    </a>
    <h4 class="card-title">
      <strong>
        <a href="">Ballistix 8GB 3200MHz DDR4</a>
      </strong>
    </h4>
    <p class="card-text">A memória para jogos da Crucial® Ballistix® foi desenvolvida para a execução de overclock de alta performance e é ideal para gamers.
    </p>
    <div class="card-footer">
      <span class="float-left">R$199,99
      </span>
      <span class="float-right">
        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
          <i class="fas fa-heart"></i>
        </a>
      </span>
    </div>
  </div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="card card-ecommerce">
  <div class="view overlay z-depth-1">
    <img src="https://media.ldlc.com/r1600/ld/products/00/04/92/07/LD0004920745_2_0004920768_0005000884_0005000930_0005629200.jpg" class="card-img-top"
      alt="">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
  <div class="card-body text-center no-padding">
    <a href="" class="text-muted">
      <h5>Corsair</h5>
    </a>
    <h4 class="card-title">
      <strong>
        <a href="">Vengeance RGB PRO Series 16 GB</a>
      </strong>
    </h4>
    <p class="card-text">Vengeance RGB PRO é otimizado para ampla compatibilidade com as placas-mãe Intel e AMD DDR4 com RGB.
    </p>
    <div class="card-footer">
      <span class="float-left">R$500,00
      </span>
      <span class="float-right">
        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
          <i class="fas fa-heart"></i>
        </a>
      </span>
    </div>
  </div>
</div>
</div>  
      <div class="row">
<div class="col-lg-3 col-md-6 mb-4">
  <div class="card card-ecommerce">
    <div class="view overlay z-depth-1">
      <img src="https://images.kabum.com.br/produtos/fotos/241050/processador-intel-core-i9-12900k-cache-30mb-3-2ghz-5-2ghz-max-turbo-lga-1700-bx8071512900k_1635255797_original.jpg" class="card-img-top"
        alt="">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <div class="card-body text-center no-padding">
      <a href="" class="text-muted">
        <h5>Intel</h5>
      </a>
      <h4 class="card-title">
        <strong>
          <a href="">Intel Core i9-12900K 3.2GHz</a>
        </strong>
      </h4>
      <p class="card-text">Desempenho revolucionário e capacidade para multitarefas com as mais elevadas velocidades do clock e uma nova arquitetura revolucionária.
      </p>
      <div class="card-footer">
        <span class="float-left">R$ 3.999,99
        </span>
        <span class="float-right">
          <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
            <i class="fas fa-heart"></i>
          </a>
        </span>
      </div>
    </div>
  </div>
</div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card card-ecommerce">
          <div class="view overlay z-depth-1">
            <img src="https://img.terabyteshop.com.br/produto/g/processador-amd-ryzen-9-5900x-37ghz-48ghz-turbo-12-cores-24-threads-am4-sem-cooler_108384.jpg" class="card-img-top"
              alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body text-center no-padding">

            <a href="" class="text-muted">
              <h5>AMD</h5>
            </a>
            <h4 class="card-title">
              <strong>
                <a href="">AMD RYZEN 9 5900X</a>
              </strong>
            </h4>
            <p class="card-text">O Ryzen 9 5900X conta com 12 núcleos para alimentar jogos. Os processadores AMD Ryzen série 5000 capacitam a próxima geração de jogos exigentes.
            </p>
            <div class="card-footer">
              <span class="float-left">R$ 2.899,00
              </span>
              <span class="float-right">
                <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                  <i class="fas fa-heart"></i>
                </a>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card card-ecommerce">
          <div class="view overlay z-depth-1">
            <img src="https://img.terabyteshop.com.br/produto/g/processador-amd-ryzen-7-5800x-38ghz-47ghz-turbo-8-cores-16-threads-am4-sem-cooler_108383.jpg" class="card-img-top"
              alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body text-center no-padding">
            <a href="" class="text-muted">
              <h5>AMD</h5>
            </a>
            <h4 class="card-title">
              <strong>
                <a href="">AMD Ryzen 7 5800X 3.8GHz</a>
              </strong>
            </h4>
            <p class="card-text">O Ryzen 7 5800X conta com 8 núcleos otimizados. Os processadores AMD Ryzen capacitam a próxima geração de jogos exigentes
            </p>
            <div class="card-footer">
              <span class="float-left">R$ 2.199,90
              </span>
              <span class="float-right">
                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                  <i class="fas fa-heart"></i>
                </a>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card card-ecommerce">
          <div class="view overlay z-depth-1">
            <img src="https://images.kabum.com.br/produtos/fotos/113000/processador-intel-core-i9-10900k-cache-20mb-3-7ghz-5-3ghz-max-turbo-lga-1200-bx8070110900k_1637699992_original.jpg" class="card-img-top"
              alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body text-center no-padding">
            <a href="" class="text-muted">
              <h5>INTEL</h5>
            </a>
            <h4 class="card-title">
              <strong>
                <a href="">Intel Core i9-10900K, 3.7GHz</a>
              </strong>
            </h4>
            <p class="card-text">Recursos de desempenho inteligente integrados aprendem e se adaptam ao que você faz, potência e dinamica onde mais necessária.
            </p>
            <div class="card-footer">
              <span class="float-left">R$ 2.699,99
              </span>
              <span class="float-right">
                <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                  <i class="fas fa-heart"></i>
                </a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@include('component.rodape')