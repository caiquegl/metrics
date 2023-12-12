class PopFlags {
    constructor() {
        this.delay = 0;
        this.animationStarted = [];
        this.treeElement = [];
        this.currencyAnime = "";
    }

    add(el) {
        const animationType = {
            high: "anime-high",
            fade: "anime-fade",
            slide: "anime-slide",
        };

        if (this.delay === 0) {
            for (const key in animationType) {
                if (el.hasOwnProperty(key)) {
                    console.log(key);
                    el[key].forEach((item) => {
                        console.log(item);
                        item.classList.add(animationType[key]);
                    });
                }
            }
            return;
        }

        for (const key in animationType) {
            if (el.hasOwnProperty(key)) {
                el[key].forEach((item, index) => {
                    setTimeout(() => {
                        item.classList.add(animationType[key]);
                    }, this.delay * (index + 1));
                });
            }
        }
    }

    type(el) {
        el.forEach((rows) => {
            const typeTree = rows.dataset.pop;
            if (!this.treeElement[typeTree]) {
                this.treeElement[typeTree] = [];
            }
            this.treeElement[typeTree].push(rows);
        });

        this.add(this.treeElement);
    }

    ev() {
        this.type(this.animationStarted);
    }

    el(selector) {
        let elements = document.querySelectorAll(selector);
        this.animationStarted = elements;
    }

    init(obj) {
        this.delay = obj.delay;
        this.el(obj.selector);
        this.ev();
    }
}
