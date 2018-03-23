$(document).ready(function (){
    $('.delete').on('click', function(){
        return confirm('Voulez-vous vraiment supprimer cet élement ?');
    })
    var posi = 0;
    //Haut, haut, bas, bas, gauche, droite, gauche, droite, B, A
    var k = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65],
    n = 0;
    $(document).keydown(function (e) {
        if (e.keyCode === k[n++]) {
            if (n === k.length) {
                konami();
                n = 0;
                return false;
            }
        }
        else {
            n = 0;
        }
    });
    function konami() {
        $('header').css('background-color', 'rgb(117, 9, 9)');
        $('body').css('background-color', 'rgb(82, 158, 163)');
        $('.td1').css('background-color', 'rgb(253, 245, 0)');
        $('.td2').css('background-color', 'rgb(187, 255, 0)');
    }
});
