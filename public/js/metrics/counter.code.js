class MineCounter {
    constructor() {
        this.setting = {};
        this.elements = [];
    }

    formatt(val) {
        if ("formatt" in this.setting && this.setting.formatt == "currency") {
            return val.toLocaleString("pt-BR", {
                style: this.setting.formatt,
                currency: "BRL",
                minimumFractionDigits: 2,
            });
        }

        if (
            "formatt" in this.setting &&
            this.setting.formatt == "currency-non-prefix"
        ) {
            return val.toFixed(3);
        }

        if ("formatt" in this.setting && this.setting.formatt == "float") {
            return parseFloat(val).toFixed(2);
        }

        if ("formatt" in this.setting && this.setting.formatt == "integer") {
            return val;
        }

        return parseInt(val);
    }

    isFloat(val) {
        return !Number.isInteger(val);
    }

    async normalAsyncCounter() {
        await Promise.all(
            this.elements.map(async (el, index) => {
                let limit = el.dataset.mineCounter;

                let increment = 1;

                if (limit > 100) {
                    if ("decimal" in this.setting) {
                        increment = this.setting.decimal;
                    } else {
                        increment = 2000;
                    }
                }

                for (let i = 0; i <= limit; i += increment) {
                    await new Promise((resolve) => {
                        setTimeout(() => {
                            el.innerHTML = this.formatt(i);
                            resolve();
                        }, this.setting.delay * (index + 1));
                    });

                    if (limit - i <= 300) {
                        increment = 1;
                    }
                }

                if (this.isFloat(limit)) {
                    el.innerHTML = this.formatt(parseFloat(limit));
                }
            })
        );
    }

    normalIrregularCounter() {
        this.elements.forEach((el, index) => {
            let limit = parseFloat(el.dataset.mineCounter);

            let increment = 1;

            if (limit > 500) {
                if ("decimal" in this.setting) {
                    increment = this.setting.decimal;
                } else {
                    increment = 2000;
                }
            }

            for (let i = 0; i <= limit; i += increment) {
                setTimeout(() => {
                    el.innerHTML = this.formatt(i);
                }, this.setting.delay * (index + 1));

                if (limit - i <= 300) {
                    increment = 1;
                }
            }

            if (this.isFloat(limit)) {
                el.innerHTML = this.formatt(parseFloat(limit));
            }
        });
    }

    async unidCounter() {
        await Promise.all(
            this.elements.map(async (el, index) => {
                let limit = el.dataset.unidCounter;

                let increment = 1;

                if (limit > 500) {
                    if ("decimal" in this.setting) {
                        increment = this.setting.decimal;
                    } else {
                        increment = 2000;
                    }
                }

                for (let i = 0; i <= limit; i += increment) {
                    await new Promise((resolve) => {
                        setTimeout(() => {
                            el.innerHTML = this.formatt(i);
                            resolve();
                        }, this.setting.delay * (index + 1));
                    });

                    if (limit - i <= 1) {
                        increment = 1;
                    }
                }

                if (this.isFloat(limit)) {
                    el.innerHTML = this.formatt(parseFloat(limit));
                }
            })
        );
    }

    async floatCounter() {
        await Promise.all(
            this.elements.map(async (el, index) => {
                let limit = el.dataset.floatCounter;

                let increment = 1;

                if (limit > 500) {
                    if ("decimal" in this.setting) {
                        increment = this.setting.decimal;
                    } else {
                        increment = 2500;
                    }
                }

                for (let i = 0; i <= limit; i += increment) {
                    await new Promise((resolve) => {
                        setTimeout(() => {
                            el.innerHTML = this.formatt(i);
                            resolve();
                        }, this.setting.delay * (index + 1));
                    });

                    if (limit - i <= 300) {
                        increment = 1;
                    }
                }

                if (this.isFloat(limit)) {
                    el.innerHTML = this.formatt(parseFloat(limit));
                }
            })
        );
    }

    async normalCounter() {
        if ("mode" in this.setting && this.setting.mode == "async") {
            return this.normalAsyncCounter();
        }

        return this.normalIrregularCounter();
    }

    settingCounting() {
        if ("type" in this.setting) {
            switch (this.setting.type) {
                case "normal":
                    this.normalCounter();
                    break;
                case "unid":
                    this.unidCounter();
                    break;
                case "float":
                    this.floatCounter();
                    break;
                default:
                    this.normalCounter();
                    break;
            }
        }
    }

    el() {
        if (!this.setting.selector) {
            return console.error("Error: seletor de elementos não definido");
        }

        this.elements = Array.from(
            document.querySelectorAll(this.setting.selector)
        );
    }

    init(setting) {
        this.setting = setting;
        this.el();
        this.settingCounting();
    }
}
