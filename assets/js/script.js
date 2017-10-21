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
        colChoixUtilisateur = $('.col-choix-utilisateur'),
        colFormulaires = $('.col-formulaires'),
        assoc = typeUtilisateur.find('.prev'),
        expert = typeUtilisateur.find('.next');


    colFormulaires.addClass('hidden');

    assoc.click(function () {
       colFormulaires.removeClass('hidden');
    });

    expert.click(function () {
        colFormulaires.removeClass('hidden');
    });

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

$('.pictures-gallery').each(function () {
    $(this).magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled:true
        }
    });
});

$(function () {
    var trigger = $('#multi-choice-formulaires-trigger'),
        formulaires = $('.multi-choice-formulaires');


    trigger.on("change", function () {
        var value = $(this).val();
        formulaires.each(function () {
            $(this).addClass('hidden');
        });
        $(value).removeClass('hidden');
    })
})
