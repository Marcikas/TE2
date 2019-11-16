const axios = require('axios');

axios.get('https://economia.awesomeapi.com.br/all/USD-BRL,EUR-BRL,GBP-BRL,ARS-BRL,BTC-BRL,LTC-BRL,ETH-BRL,XRP-BRL')
.then(function (response) {    
    var arrayCoins = Object.values(response.data)
    
    let dolar = arrayCoins[0]
    let euro = arrayCoins[1]
    let libra = arrayCoins[2]
    let peso = arrayCoins[3]
    let litecoin = arrayCoins[5]
    let bitcoin = arrayCoins[4]
    let ethereum = arrayCoins[6]
    let ripple = arrayCoins[7]    

    //dolar
    document.getElementById('dolarHigh').innerHTML = '$'+dolar.high
    document.getElementById('dolarLow').innerHTML = '$'+dolar.low
    document.getElementById('dolarCompra').innerHTML = '$'+dolar.ask
    document.getElementById('dolarVenda').innerHTML = '$'+dolar.bid
    document.getElementById('dolarSigla').innerHTML = dolar.code
    let dolarDate = new Date(dolar.create_date)
    document.getElementById('dolarUpdate').innerHTML = dolarDate.toLocaleString()
    let dolarChange = document.getElementById('dolarChangeValue')
    dolarChange.innerHTML = '%'+dolar.pctChange
    
    //euro
    document.getElementById('euroHigh').innerHTML = '$'+euro.high
    document.getElementById('euroLow').innerHTML = '$'+euro.low
    document.getElementById('euroCompra').innerHTML = '$'+euro.ask
    document.getElementById('euroVenda').innerHTML = '$'+euro.bid
    document.getElementById('euroSigla').innerHTML = euro.code
    let euroDate = new Date(euro.create_date)
    document.getElementById('euroUpdate').innerHTML = euroDate.toLocaleString()
    let euroChange = document.getElementById('euroChangeValue')
    euroChange.innerHTML = '%'+euro.pctChange
    
    //libra
    document.getElementById('libraHigh').innerHTML = '$'+libra.high
    document.getElementById('libraLow').innerHTML = '$'+libra.low
    document.getElementById('libraCompra').innerHTML = '$'+libra.ask
    document.getElementById('libraVenda').innerHTML = '$'+libra.bid
    document.getElementById('libraSigla').innerHTML = libra.code
    let libraDate = new Date(libra.create_date)
    document.getElementById('libraUpdate').innerHTML = libraDate.toLocaleString()
    let libraChange = document.getElementById('libraChangeValue')
    libraChange.innerHTML = '%'+libra.pctChange
    
    //peso
    document.getElementById('pesoHigh').innerHTML = '$'+peso.high
    document.getElementById('pesoLow').innerHTML = '$'+peso.low
    document.getElementById('pesoCompra').innerHTML = '$'+peso.ask
    document.getElementById('pesoVenda').innerHTML = '$'+peso.bid
    document.getElementById('pesoSigla').innerHTML = peso.code
    let pesoDate = new Date(peso.create_date)
    document.getElementById('pesoUpdate').innerHTML = pesoDate.toLocaleString()
    let pesoChange = document.getElementById('pesoChangeValue')
    pesoChange.innerHTML = '%'+peso.pctChange

    //litecoin
    document.getElementById('litecoinValue').innerHTML = 'R$'+litecoin.bid
    //bitcoin
    document.getElementById('bitcoinValue').innerHTML = 'R$'+bitcoin.bid
    //ethereum
    document.getElementById('ethereumValue').innerHTML = 'R$'+ethereum.bid
    //ripple
    document.getElementById('rippleValue').innerHTML = 'R$'+ripple.bid   
  
})
.catch(function (error) {        
    console.log(error);
});  




    

