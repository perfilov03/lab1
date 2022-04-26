const main = document.getElementById('main');
// var button = document.getElementById('button');



try {
    const exp = document.getElementById('expression').textContent;
    let answer = eval(exp);
    // function cl (x) {
    //     window.location.href = 'index.php?answer='+answer+'&exp='+exp;
    // }
    function cl(value) {
        document.querySelector('.button').value += value;
    }
    
    window.location.href = 'index.php?answer='+answer+'&exp='+exp;
    console.log(document.getElementById('answer').textContent);
}
catch(e){
    if(e instanceof SyntaxError || e instanceof ReferenceError) {
        window.location.href = 'index.php?error="error"';
    }
}