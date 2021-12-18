var App = {
    play: function () {
        var _self = this,
            intro = document.getElementById('intro'),
            logo = $('.header__media').find('.logo'),
            scroll = $('.header__media').find('.scrolldown'),
            skip = $('.header__media').find('.skip'),
            main = $('.main__container');

        skip.on('click', function () {
            intro.currentTime = 15;
        });

        intro.addEventListener('ended', (event) => {
            $(intro).addClass('hidden');
            skip.addClass('hidden');

            setTimeout(function (){
                logo.addClass('animate-in');
            }, 100);

            setTimeout(function (){
                scroll.addClass('animate-in');
                main.removeClass('hidden');
            }, 1000);
        });
    },
    onPlay: function () {

    }
};

var Checkout = {
    form: null,
    init: function () {
        var self = this;

        self.form = $('#checkoutForm');

        // Phone mask
        self.form.find("#orderform-phone").inputmask({
            mask: "+38 999 999 99 99",
            greedy: false,
            definitions: {
                '*': {
                    validator: "[0-9]",
                    cardinality: 1,
                    casing: "lower"
                }
            }
        });
    },
    getWareHouses: function (cityName) {
        if (!cityName || !cityName.length) {
            return false;
        }

        var self = this,
            select = self.form.find('#orderform-warehouse'),
            url = select.data('url') || '/site/search-warehouse';

        $.ajax({
            url: url,
            type: 'get',
            dataType: 'json',
            data: {
                term: cityName
            },
            success: function (response) {
                for (var i = 0; i < response.results.length; i++) {
                    var newOption = new Option(response.results[i].text, response.results[i].id, false, false);
                    select.append(newOption).trigger('change');
                }

                select.select2('open');
            },
            complete: function () {
                self.form.removeClass('loading');
            },
            beforeSend: function () {
                self.form.addClass('loading');
                self.clearWareHouses();
            }
        });
    },
    clearWareHouses: function () {
        var self = this,
            select = self.form.find('#orderform-warehouse'),
            newOption = new Option('-- Select --', null, false, false);;

        select.html(newOption).val(null).trigger('change');
    }
};

$(function () {
    App.play();
    Checkout.init();
});