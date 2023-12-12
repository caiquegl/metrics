function onloadBeerAnimation() {
    var tl = new TimelineMax();
    tl.staggerTo(
        "#bubblesGroup circle",
        3,
        {
            attr: {
                cy: -1,
            },
            ease: Power2.easeIn,
            repeat: -1,
        },
        0.6
    );

    tl.from("#liquid", 4, { y: 170, ease: Power2.easeInOut }, 0);

    setTimeout(function () {
        var elementToRemove = document.querySelector(".load-beer");
        if (elementToRemove) {
            elementToRemove.remove();
        }
    }, 3500);
}

addEventListener("livewire:navigated", function () {
    onloadBeerAnimation();
});