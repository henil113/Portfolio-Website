console.log('dd')
 let theme = localStorage.getItem('theme')

 if (theme == null){
     settheme('dark')
 }
 else{
     settheme(theme)
 }
let themedots = document.getElementsByClassName('tough')
for(var i=0; themedots.length>i; i++){

    themedots[i].addEventListener('click',function(){
        let mode = this.dataset.mode
        console.log('OP',mode)
        settheme(mode)
    })
}

function settheme(mode){
    if(mode=='light'){
        document.getElementById('themes').href='default.css'
    }
    if(mode=='dark'){
        document.getElementById('themes').href='indigo.css'
    }
        localStorage.setItem('theme',mode)
}