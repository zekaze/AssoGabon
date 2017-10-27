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

var bindCroppie = $('#bind_croppie'),
    enregistrer = $('#enregistrer');

bindCroppie.click(function () {
    bindCroppie.addClass('hidden');
    enregistrer.removeClass('hidden')
    $('.croppie').each(function () {
        var container = $(this),
            img = container.attr('data-image');

        container.croppie({
            url: img,
            viewport: container
        });
    })

});

$(function () {
    var photoProfilForm = $('.photo-profil'),
        form = photoProfilForm.find('form'),
        input = photoProfilForm.find('input');

    input.on("change",function () {
        form.submit();
    })
});

$(function () {
    var photoCoverForm = $('#cover-photo-form'),
        input = photoCoverForm.find('input');

    input.on("change",function () {
        photoCoverForm.submit();
    })
});

enregistrer.click(function () {
    var croppieResult = $('#croppie-result');
    $('.croppie').each(function () {
        var container = $(this),
            img = container.attr('data-image');

        container.croppie('result',{
            type: 'canvas',
            size: 'viewport',
            format: 'jpeg'
        }).then(function(html) {
            console.log(html);
            /*croppieResult[0].appendChild(html);*/
        });
    })
});



