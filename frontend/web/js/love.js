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

window.addEventListener('DOMContentLoaded', App.play, false);