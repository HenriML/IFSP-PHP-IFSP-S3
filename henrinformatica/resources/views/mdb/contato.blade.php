@include ('component.cabecalho');
<!DOCTYPE html>
  <main>
    <div class="container-fluid mb-5">
      <div class="row" style="margin-top: -100px;">
        <div class="col-md-12">
          <div class="card pb-5">
            <div class="card-body">
              <div class="container">
                <section class="section">
                  <h2 class="font-weight-bold text-center h1 my-5">Fale conosco</h2>
                  <p class="text-center red-text font-weight-bold mb-5 mx-auto w-responsive">Aqui temos uma área reservada para você deixar o seu comentário ou sugestão</p>
                  <div class="row pt-5">
                    <div class="col-md-8 col-xl-9">
                      <form>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="md-form">
                              <input type="text" id="contact-name" class="form-control">
                              <label for="contact-name" class="">Seu nome</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="md-form">
                              <input type="text" id="contact-email" class="form-control">
                              <label for="contact-email" class="">Seu e-mail</label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="md-form">
                              <input type="text" id="contact-Subject" class="form-control">
                              <label for="contact-Subject" class="">Assunto</label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="md-form">
                              <textarea type="text" id="contact-message" class="md-textarea form-control" rows="3"></textarea>
                              <label for="contact-message">Sua mensagem</label>
                            </div>
                          </div>
                        </div>
                      </form>
                      <div class="text-center text-md-left my-4">
                        <a class="btn black">Enviar</a>
                      </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                      <ul class="contact-icons text-center list-unstyled">
                      <i class="fas fa-map-marker fa-2x black-text"></i>
                        <li>
                          <a href="loc">Av. Miguel Ignácio Curi, 111 - Artur Alvim, São Paulo - SP, 08295-005</a>
                        </li>
                        <li>
                          <i class="fas fa-phone fa-2x black-text"></i>
                          <p>+55 4002-8922</p>
                        </li>
                        <li>
                          <i class="fas fa-envelope fa-2x black-text"></i>
                          <p>faleconosco.henriform@gmail.com</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </section>
  </main>
</body>
</html>

@include ('component.rodape')