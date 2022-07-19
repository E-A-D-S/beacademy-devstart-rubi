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
            </div>
        </div>
    </div>
    <section>
        <div class="modal fade" id="JanelaModal1" tabindex="-1" role="dialog" aria-labelledby="#JanelaModal1" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Vinho 1</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="card-img-top" src="assets/img/products/wine/vinho-avvocato.jpg" alt="Card image cap">
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
</main>

@endsection