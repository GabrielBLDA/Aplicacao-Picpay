@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="border: 1px solid orange;">
        <div class="col-md-4">
            <div class="transfer-card p-5" style="border: 1px solid blue;"> <!-- Começo Card -->
                <div class="row">
                    <div class="col-md-7" style="font-size: 1.24rem;">
                        Minha Carteira
                    </div>
                    <div class="col-md-5 text-right">
                        Seu Saldo
                    </div>
                </div>

                <div class="row mt-4 ml-1" style="font-size: 0.8rem;">
                    <div class="col-md-12">
                        empresa - Atualizado XX:XX
                    </div>
                </div> 

                <div class="row mt-3 ml-1">
                  <div class="col-md-12 mt-3" style="font-size: 1.3rem;">
                    <bold>R$9.990,00</bold>
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-md-12 mt-2">
                    <div class="pay_component">
                        <img src="caminho-para-imagem-deposito.png" class="pay_icon" alt="Ícone de depósito">
                        <span class="pay_text">Depositar</span>
                        <span class="pay_arrow"> &gt; </span>
                    </div>
                  </div>

                  <div class="col-md-12 mt-2">
                      <div class="pay_component">
                          <img src="caminho-para-imagem-deposito.png" class="pay_icon" alt="Ícone de depósito">
                          <span class="pay_text">Pagar</span>
                          <span class="pay_arrow"> &gt; </span>
                      </div>
                  </div>

                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
