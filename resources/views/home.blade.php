@extends('layouts.landing')

@section('title', 'Home')

@section('navbar')
<nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">Titan</a>
      </div>
      <div class="collapse navbar-collapse" id="custom-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown"><a href="{{ url('/')}}">Início</a>            
          </li>
        <li class="dropdown"><a href="{{ url('/acesso')}}">Cadastro/Login</a>            
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="home-section home-parallax home-fade bg-dark-30" id="home" data-background="{{ url('img/bitcoin.jpg') }}">
    <div class="titan-caption">
      <div class="caption-content">
        <div class="font-alt mb-30 titan-title-size-1">Bem vindos!</div>
        <div class="font-alt mb-40 titan-title-size-2">Deseja ter informações de moedas de forma rápida e prática?</div><a class="section-scroll btn btn-border-w btn-round" href="#about">Inscreva-se</a>
      </div>
    </div>
  </section>  
@endsection

@section('content')
<div class="main">
    <section class="module" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <h2 class="module-title font-alt">Olá!</h2>
            <div class="module-subtitle font-serif large-text">Somos uma agência situada em São Paulo, com o propósito de guiar financeiramente nossos clientes.</div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2 col-sm-offset-5">
            <div class="large-text align-center"><a class="section-scroll" href="#services"><i class="fa fa-angle-down"></i></a></div>
          </div>
        </div>
      </div>
    </section>
    <hr class="divider-w">
    <section class="module" id="services">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <h2 class="module-title font-alt">Nossos serviços</h2>
            <div class="module-subtitle font-serif">“Às vezes nós olhamos tanto tempo para uma porta que se fecha que vemos muito tarde outra que está aberta.”</div>
          </div>
        </div>
        <div class="row multi-columns-row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="features-item">
              <div class="features-icon"><span class="fa fa-money"></span></div>
              <h3 class="features-title font-alt">Cotações</h3>
              <p>Exibimos a cotação de moedas em tempo real e com um tempo de resposta bem curto</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="features-item">
              <div class="features-icon"><span class="fa fa-bitcoin"></span></div>
              <h3 class="features-title font-alt">Suporte a criptomoedas</h3>
              <p>Também exibimos os valores atuais das criptomoedas mais negociadas no mercado financeiro.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="features-item">
              <div class="features-icon"><span class="fa fa-desktop"></span></div>
              <h3 class="features-title font-alt">Design &amp; interface</h3>
              <p>Provemos uma interface bem simples e intuitiva para que todos nossos clientes tenham facilidade de utilizar o sistema.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="features-item">
              <div class="features-icon"><span class="fa fa-lock"></span></div>
              <h3 class="features-title font-alt">Segurança</h3>
              <p>Nossa plataforma é segura e seus dados estão protegidos com as melhores praticas de segurança da atualidade, e senhas criptografadas.</p>
            </div>
          </div>         
        </div>
      </div>
    </section>    
    <div class="module-small bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <div class="widget">
              <h5 class="widget-title font-alt">Sobre nós</h5>              
              <p>Telefone: +55 (11)11111-1111</p>
              <p>Email:<a href="#"> exemplo@exemplo.com</a></p>
            </div>
          </div>          
        </div>
      </div>
    </div>
    <hr class="divider-d">
    <footer class="footer bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p class="copyright font-alt">&copy; 2019&nbsp;, All Rights Reserved</p>
          </div>          
        </div>
      </div>
    </footer>
  </div>
@endsection
    