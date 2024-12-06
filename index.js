let check = ()=>{
    let solution = document.getElementById('solution').value;
    let ask = document.getElementById('Ask');
    let container = document.querySelector('.container');
    
    if (solution === 'Warrior Ghost'){  
        ask.style.display = 'none';
        container.style.display = 'block';
    }else{
        document.getElementById('solution').value = 'WHO ARE YOU?'
    }
};