var $element = $('#bubble');
var phrases = [
    'Создаём красивый и современный дизайн с нуля',
    'Отлично смотрится на всех устройствах',
    'Современная реклама',
    '-N- NetSystems.',];
var index = -1;
(function loopAnimation() {
    index = (index + 1) % phrases.length;
    bubbleText({
        element: $element,
        newText: phrases[index],
        letterSpeed: 70,
        callback: function() {
            setTimeout(loopAnimation, 1000);
        },
    });
})();