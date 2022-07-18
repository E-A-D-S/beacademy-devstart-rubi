@extends("template.layout")
@section("title", "inicio projeto empresarial")
@section("content")
<main>
    <div class="container mt-5">
        <div class="card-deck ">
            <div class="row justify-content-between">
                <div class="card mb-3" style="width: 18rem;">
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#JanelaModal1">
                        <img class="card-img-top md" src="assets/img/products/wine/vinho-avvocato.jpg" alt="Card image cap">
                    </button>
                    <div class="card-body">
                        <h5 class="card-title">Vinho 1</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <div>
                            <hr/>
                                <p>de: <s>368,90 Reais</s></p>
                                <p>por: <strong><i>279,80 Reais</i></strong></p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Comprar</a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">Carrinho</a>
                        </div> 
                    </div>
                </div>

                <div class="card mb-3" style="width: 18rem;">
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#JanelaModal2">
                        <img class="card-img-top" src="assets/img/products/wine/vinho-fabian.jpg" alt="Card image cap">
                    </button>
                    <div class="card-body">
                        <h5 class="card-title">Vinho 2</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div>
                            <hr/>
                                <p>de: <s>368,90 Reais</s></p>
                                <p>por: <strong><i>279,80 Reais</i></strong></p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Comprar</a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">Carrinho</a>
                        </div> 
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <small class="text-muted">
                            <div class="rating-container">
                                <input type="radio" name="1rating" id="1star-1">
                                <label for="1star-1">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="1rating" id="1star-2">
                                <label for="1star-2">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="1rating" id="1star-3">
                                <label for="1star-3">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="1rating" id="1star-4">
                                <label for="1star-4">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="1rating" id="1star-5">
                                <label for="1star-5">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                            </div>
                        </small>
                    </div>
                </div>

                <div class="card mb-3" style="width: 18rem;">
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#JanelaModal"/>
                        <img class="card-img-top" src="assets/img/products/wine/vinho-gheller.jpg" alt="Card image cap">
                    </button>
                    <div class="card-body">
                        <h5 class="card-title">Vinho 3</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <div>
                            <hr/>
                                <p>de: <s>368,90 Reais</s></p>
                                <p>por: <strong><i>279,80 Reais</i></strong></p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Comprar</a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">Carrinho</a>
                        </div> 
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <small class="text-muted">
                            <div class="rating-container">
                                <input type="radio" name="2rating" id="2star-1">
                                <label for="2star-1">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="2rating" id="2star-2">
                                <label for="2star-2">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="2rating" id="2star-3">
                                <label for="2star-3">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="2rating" id="2star-4">
                                <label for="2star-4">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="2rating" id="2star-5">
                                <label for="2star-5">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                            </div>
                        </small>
                    </div>
                </div>

                <div class="card mb-3" style="width: 18rem;">
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#JanelaModal"/>
                        <img class="card-img-top" src="assets/img/products/wine/vinho-marco.jpg" alt="Card image cap">
                    </button>
                    <div class="card-body">
                        <h5 class="card-title">Vinho 4</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <div>
                            <hr/>
                                <p>de: <s>368,90 Reais</s></p>
                                <p>por: <strong><i>279,80 Reais</i></strong></p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Comprar</a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">Carrinho</a>
                        </div> 
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <small class="text-muted">
                            <div class="rating-container">
                                <input type="radio" name="3rating" id="3star-1">
                                <label for="3star-1">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="3rating" id="3star-2">
                                <label for="3star-2">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="3rating" id="3star-3">
                                <label for="3star-3">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="3rating" id="3star-4">
                                <label for="3star-4">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="3rating" id="3star-5">
                                <label for="3star-5">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                            </div>
                        </small>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card-deck">
            <div class="row justify-content-between">
                <div class="card mb-3" style="width: 18rem;">
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#JanelaModal"/>
                        <img class="card-img-top" src="assets/img/products/wine/vinho-viapiana-rose.jpg" alt="Card image cap">
                    </button>
                    <div class="card-body">
                        <h5 class="card-title">Vinho 5</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <div>
                            <hr/>
                                <p>de: <s>368,90 Reais</s></p>
                                <p>por: <strong><i>279,80 Reais</i></strong></p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Comprar</a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">Carrinho</a>
                        </div> 
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <small class="text-muted">
                            <div class="rating-container">
                                <input type="radio" name="4rating" id="4star-1">
                                <label for="4star-1">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="4rating" id="4star-2">
                                <label for="4star-2">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="4rating" id="4star-3">
                                <label for="4star-3">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="4rating" id="4star-4">
                                <label for="4star-4">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="4rating" id="4star-5">
                                <label for="4star-5">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                            </div>
                        </small>
                    </div>
                </div>

                <div class="card mb-3" style="width: 18rem;">
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#JanelaModal"/>
                        <img class="card-img-top" src="assets/img/products/wine/vinho-avvocato.jpg" alt="Card image cap">
                    </button>
                    <div class="card-body">
                        <h5 class="card-title">Vinho 6</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <div>
                            <hr/>
                                <p>de: <s>368,90 Reais</s></p>
                                <p>por: <strong><i>279,80 Reais</i></strong></p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Comprar</a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">Carrinho</a>
                        </div> 
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <small class="text-muted">
                            <div class="rating-container">
                                <input type="radio" name="5rating" id="5star-1">
                                <label for="5star-1">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="5rating" id="5star-2">
                                <label for="5star-2">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="5rating" id="5star-3">
                                <label for="5star-3">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="5rating" id="5star-4">
                                <label for="5star-4">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="5rating" id="5star-5">
                                <label for="5star-5">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                            </div>
                        </small>
                    </div>
                </div>

                <div class="card mb-3" style="width: 18rem;">
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#JanelaModal"/>
                        <img class="card-img-top" src="assets/img/products/wine/vinho-fabian.jpg" alt="Card image cap">
                    </button>
                    <div class="card-body">
                        <h5 class="card-title">Vinho 7</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div>
                            <hr/>
                                <p>de: <s>368,90 Reais</s></p>
                                <p>por: <strong><i>279,80 Reais</i></strong></p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Comprar</a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">Carrinho</a>
                        </div> 
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <small class="text-muted">
                            <div class="rating-container">
                                <input type="radio" name="6rating" id="6star-1">
                                <label for="6star-1">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="6rating" id="6star-2">
                                <label for="6star-2">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="6rating" id="6star-3">
                                <label for="6star-3">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="6rating" id="6star-4">
                                <label for="6star-4">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="6rating" id="6star-5">
                                <label for="6star-5">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                            </div>
                        </small>
                    </div>
                </div>

                <div class="card mb-3" style="width: 18rem;">
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#JanelaModal"/>
                        <img class="card-img-top" src="assets/img/products/wine/vinho-gheller.jpg" alt="Card image cap">
                    </button>
                    <div class="card-body">
                        <h5 class="card-title">Vinho 8</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <div>
                            <hr/>
                                <p>de: <s>368,90 Reais</s></p>
                                <p>por: <strong><i>279,80 Reais</i></strong></p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Comprar</a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">Carrinho</a>
                        </div> 
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <small class="text-muted">
                            <div class="rating-container">
                                <input type="radio" name="7rating" id="7star-1">
                                <label for="7star-1">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="7rating" id="7star-2">
                                <label for="7star-2">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="7rating" id="7star-3">
                                <label for="7star-3">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="7rating" id="7star-4">
                                <label for="7star-4">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input type="radio" name="7rating" id="7star-5">
                                <label for="7star-5">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                            </div>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<section class="modals">
    <!-- Modal Vinho 1 -->
    <div class="modal fade" id="JanelaModal1" tabindex="-1" role="dialog" aria-labelledby="#JanelaModal1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Vinho 1</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
                <img class="card-img-top md" src="assets/img/products/wine/vinho-avvocato.jpg" alt="Card image cap">

                <ul class="list-group list-group-flush text-center mt-5">
                    <li class="list-group-item">Descrição do vinho... Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quis, cum error sunt voluptates inventore necessitatibus fugiat labore provident porro.</li>
                    <li class="list-group-item">De: <s>368,90 Reais</s> por: <strong><i>279,80 Reais</i></strong></li>
                </ul>
            </div>
    
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal Vinho 2 -->
    <div class="modal fade" id="JanelaModal2" tabindex="-1" role="dialog" aria-labelledby="#JanelaModal2" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Vinho 2</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
                <img class="card-img-top" src="assets/img/products/wine/vinho-fabian.jpg" alt="Card image cap">

                <ul class="list-group list-group-flush text-center mt-5">
                    <li class="list-group-item">Descrição do vinho... Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quis, cum error sunt voluptates inventore necessitatibus fugiat labore provident porro.</li>
                    <li class="list-group-item">De: <s>368,90 Reais</s> por: <strong><i>279,80 Reais</i></strong></li>
                </ul>
            </div>
    
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
            </div>
            </div>
        </div>
    </div>
</section>

@endsection