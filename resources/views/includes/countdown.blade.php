<div id="countdown">
    <button onclick="f()">Cuenta atrás</button>
</div>

@push('countdown')
<script>
    function f() {
        alert("hola");
    }
    // let cronometro = document.getElementById("countdown");
    // let final = Date.now() + 60000;
    // let elcrono = setInterval(tiempo,10);
    // function tiempo() {
    //     let diferencia= final-Date.now();
    //     let sg = diferencia/1000;
    //     if (diferencia<=0) {
    //         clearInterval(elcrono);
    //         cronometro.classList.add('rojo');
    //         sg=0.0;
    //     }
    //     cronometro.innerHTML=sg;
    // }
</script>
@endpush
