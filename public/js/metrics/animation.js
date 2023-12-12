function onActionAnimation() {
    //Imports class
    const anime = new PopFlags();
    const currency = new MineCounter();
    const integer = new MineCounter();
    const float = new MineCounter();

    anime.init({
        selector: "[data-anime-popup]",
        type: "[data-pop]",
        delay: 200,
    });

    integer.init({
        selector: "[data-unid-counter]",
        type: "unid",
        formatt: "non",
        decimal: 7,
        delay: 2,
    });

    float.init({
        selector: "[data-float-counter]",
        type: "float",
        formatt: "currency-non-prefix",
        decimal: 7,
        delay: 2,
    });

    currency.init({
        selector: "[data-mine-counter]",
        type: "normal",
        mode: "async",
        formatt: "currency",
        decimal: 100,
        delay: 2,
    });
}

addEventListener("DOMContentLoaded", () => {
    onActionAnimation();
});

function handleScroll(event) {
    const scrollAmount = 50;
    const targetElements = document.querySelectorAll(
        '[data-perfect-scroll="true"]'
    );

    targetElements.forEach((element) => {
        const scrollDirection =
            event.key === "ArrowRight" ? scrollAmount : -scrollAmount;
        element.scrollLeft += scrollDirection;
    });
}

window.addEventListener("keydown", handleScroll);

function scrollPerfect(event) {
    const action = event.currentTarget.getAttribute("data-perfect-action");
    const targetRef = event.currentTarget.getAttribute("data-perfect-ref");
    const container = document.querySelector(targetRef);

    if (!container) {
        return; // Container não encontrado
    }

    const elements = container.querySelectorAll("[data-perfect-item]");
    const elementWidth = elements.length > 0 ? elements[0].offsetWidth : 0;
    const containerWidth = container.offsetWidth;
    const screenWidth = window.innerWidth;

    // Tamanho da tela maior ou igual a 600px
    container.style.scrollBehavior = "smooth"; // Transição suave

    if (screenWidth < 600) {
        // Tamanho da tela menor que 600px
        const numVisibleElements = Math.floor(screenWidth / elementWidth);
        const currentIndex = Math.floor(container.scrollLeft / elementWidth);

        if (action === "left") {
            const targetIndex = Math.max(currentIndex - 1, 0);
            container.scrollLeft = targetIndex * elementWidth;
        } else if (action === "right") {
            const targetIndex = Math.min(
                currentIndex + 1,
                elements.length - numVisibleElements
            );

            if (targetIndex === elements.length - numVisibleElements) {
                // Se for o último grupo de elementos visíveis, ajuste para o último elemento
                container.scrollLeft = (elements.length - 1) * elementWidth;
            } else {
                container.scrollLeft = targetIndex * elementWidth;
            }
        }
    } else {
        if (action === "left") {
            container.scrollLeft -= containerWidth / 2;
        } else if (action === "right") {
            container.scrollLeft += containerWidth / 2;
        }
    }
}

document.querySelectorAll("[data-perfect-action]").forEach((button) => {
    button.addEventListener("click", scrollPerfect);
});
