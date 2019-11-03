const axios = require('axios');

axios.get('https://economia.awesomeapi.com.br/all/USD-BRL,EUR-BRL,GBP-BRL,ARS-BRL,BTC-BRL,LTC-BRL,ETH-BRL,XRP-BRL')
.then(function (response) {    
    let coins = response.data
    for (const coin in coins) {        
        const element = coins[coin]; 
        console.log(element)      
    }
    
})
.catch(function (error) {        
    console.log(error);
});  




    

