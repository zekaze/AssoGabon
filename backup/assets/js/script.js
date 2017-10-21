$(function () {
    var rechercheAlphabetique = $('#recherche-alphabetique'),
        radios = rechercheAlphabetique.find('.hidden');

    radios.each(function () {
        var self = $(this);
        self.on('change',function () {
            rechercheAlphabetique.submit();
        })
    });

    $('.accordion').accordion({
        "transitionSpeed": 400
    });



})

$(function () {
    var formulaires = $('.formulaires'),
        typeUtilisateur = $('.type-utilisateur'),
        assoc = typeUtilisateur.find('.prev'),
        expert = typeUtilisateur.find('.next');

    formulaires.each(function () {
        var self = $(this);
        self.slick({
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            draggable: false,
            swipe: false,
            prevArrow: assoc,
            nextArrow: expert,
        });
    })


})
