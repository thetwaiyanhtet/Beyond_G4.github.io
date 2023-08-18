
const cardNumber = document.getElementById('cardNo');

document.getElementById('input_canva').addEventListener('input',(e) => {
    const digitsOnly = cardNumber.value.replace(/\D/g, '');
        const digit= digitsOnly.replace(/(.{4})/g, '$1 ');
    document.getElementById('cardno').textContent = digit;
    document.getElementById('cardholder').textContent = document.getElementById('cardHolder').value;
    document.getElementById('expmonth').textContent = document.getElementById('expMonth').value;
    document.getElementById('expyear').textContent = document.getElementById('expYear').value;
    document.getElementById('cvvpw').textContent = document.getElementById('cvv').value;
    console.log(document.getElementById('cvvpw').textContent);
} )

document.getElementById('cvv').addEventListener('mouseenter',(e)=>{
    document.getElementById('front').classList.add('hidden');
    document.getElementById('cvvs').classList.add('show');
    document.getElementById('cvvs').classList.remove('hidden');
    document.getElementById('front').style.transform = 'perspective(1000px) rotateY(-180deg)';
    document.getElementById('front').style.transition = 'transform 0.5s';
    document.getElementById('cvvs').style.transform = 'perspective(1000px) rotateY(0deg)';
});

document.getElementById('cvv').addEventListener('mouseleave',(e)=>{
    console.log("chit lar");
    document.getElementById('front').classList.remove('hidden');
    document.getElementById('cvvs').style.transform = 'perspective(1000px) rotateY(180deg)';
    document.getElementById('cvvs').style.transition = 'transform 0.5s';
    document.getElementById('front').style.transform = 'perspective(1000px) rotateY(0deg)';
    document.getElementById('cvvs').classList.add('hidden');
    
});