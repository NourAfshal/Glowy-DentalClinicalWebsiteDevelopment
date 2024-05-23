const button=document.querySelector('button');
const popup=document.querySelector('.popup-wrapper');
const close=document.querySelector('.popup-close');

button.addEventListener('click' ,(event)=>{
    popup.style.display='block';
})

close.addEventListener('click' ,(event)=>{
    popup.style.display='none';
})

popup.addEventListener('click' ,(event)=>{
    popup.style.display='none';
})