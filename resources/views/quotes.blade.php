@extends('layouts.app')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Cotações</h1>
        <p class="mb-4">Cotações da moeda em tempo real(atualiza a cada 3 minutos).</p>
        <!-- Content Row -->
        <h4 class="mb-4">Moedas comuns</h4>

        <div class="row" id="coinRow">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">          
                      
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-1">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Moeda</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">Dólar</div>
                        </div>
                        <div class="col mr-1">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sigla</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800" id="dolarSigla"></div>
                        </div>                       
                        <div class="col mr-1">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Última Atualização</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800" id="dolarUpdate"></div>
                        </div>                       
                        <div class="col mr-1">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Variação</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800" id="dolarChange">
                            <p id="dolarChangeValue"></p>
                          </div>
                        </div>                       
                      </div><br> 
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Máxima(dia)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="dolarHigh"></div>
                          </div>
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Mínima(dia)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="dolarLow"></div>
                          </div>
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Compra</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="dolarCompra"></div>
                          </div>
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Venda</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="dolarVenda"></div>
                          </div>
                        </div>                     
                    </div>
                  </div>
                </div>
    
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
                  <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-1">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Moeda</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">Euro</div>
                        </div>
                        <div class="col mr-1">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sigla</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800" id="euroSigla"></div>
                        </div>                       
                        <div class="col mr-1">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Última Atualização</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800" id="euroUpdate"></div>
                        </div>                       
                        <div class="col mr-1">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Variação</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800" id="euroChange">
                            <p id="euroChangeValue"></p>
                          </div>
                        </div>                       
                      </div><br> 
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Máxima(dia)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="euroHigh"></div>
                          </div>
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Mínima(dia)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="euroLow"></div>
                          </div>
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Compra</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="euroCompra"></div>
                          </div>
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Venda</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="euroVenda"></div>
                          </div>
                        </div> 
                    </div>
                  </div>
                </div>
    
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
                  <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-1">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Moeda</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">Libra</div>
                        </div>
                        <div class="col mr-1">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sigla</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800" id="libraSigla"></div>
                        </div>                       
                        <div class="col mr-1">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Última Atualização</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800" id="libraUpdate"></div>
                        </div>                       
                        <div class="col mr-1">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Variação</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800" id="libraChange">
                            <p id="libraChangeValue"></p>
                          </div>
                        </div>                       
                      </div><br> 
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Máxima(dia)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="libraHigh"></div>
                          </div>
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Mínima(dia)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="libraLow"></div>
                          </div>
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Compra</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="libraCompra"></div>
                          </div>
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Venda</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="libraVenda"></div>
                          </div>
                        </div> 
                    </div>
                  </div>
                </div>
    
                <!-- Pending Requests Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
                  <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-1">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Moeda</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">Peso(ARG)</div>
                        </div>
                        <div class="col mr-1">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sigla</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800" id="pesoSigla"></div>
                        </div>                       
                        <div class="col mr-1">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Última Atualização</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800" id="pesoUpdate"></div>
                        </div>                       
                        <div class="col mr-1">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Variação</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800" id="pesoChange">
                            <p id="pesoChangeValue"></p>
                          </div>
                        </div>                       
                      </div><br> 
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Máxima(dia)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="pesoHigh"></div>
                          </div>
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Mínima(dia)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="pesoLow"></div>
                          </div>
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Compra</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="pesoCompra"></div>
                          </div>
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Venda</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="pesoVenda"></div>
                          </div>
                        </div> 
                    </div>
                  </div>
                </div>
            </div>    
            <!-- Content Row -->
            <h4 class="mb-4">Criptomoedas</h4>
        <!-- Content Row -->
        <div class="row" id="cryptoRow">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Litecoin</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800" id="litecoinValue"></div>
                        </div>
                        <div class="col-auto">
                          <i class="fab fa-bitcoin fa-2x text-gray-300"></i>
                        </div>
                      </div>                      
                    </div>
                  </div>
                </div>
    
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Bitcoin</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800" id="bitcoinValue"></div>
                        </div>
                        <div class="col-auto">
                          <i class="fab fa-btc fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
    
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Ethereum</div>
                          <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="ethereumValue"></div>
                            </div>
                            <div class="col">
                              
                            </div>
                          </div>
                        </div>
                        <div class="col-auto">
                          <i class="fab fa-ethereum fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
    
                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Ripple</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800" id="rippleValue"></div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>    
            <!-- Content Row -->
        
    </div>     
@endsection