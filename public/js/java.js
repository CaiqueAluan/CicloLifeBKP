var login = document.getElementById('login');
window.addEventListener('mouseup', function(event){
    var clickIn = event.target.classList.contains('insideLogin')
    if(event.target != login && !clickIn){
        login.style.display = 'none';
    }
}); 

var btnEntrar = document.getElementById('btn-entrar');
btnEntrar.addEventListener('click',function(){
    login.style.display = 'block';
})