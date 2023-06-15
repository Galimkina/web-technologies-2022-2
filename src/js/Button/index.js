export default class Button {
    container = null;
    price = 0;
    calories = 0;

    constructor(containerClass = '.js-button-render') {
        this.container = document.querySelector(containerClass);
    }

    render() {
        console.log(this.container);
        const sum = this.container.textContent.replace(/[^0-9,\s]/g, "").replace(/\s+/g, ' ').trim().split(' ');
        this.price += Number(sum[0]);
        if (sum[1]) {
            this.calories += Number(sum[1]);
        }
        this.container.textContent = '';
        this.container.innerHTML = `Добавить в корзину за <br>${this.price} ₽ (${this.calories} кКалл)`;
    }

    add(typeOfPizza) {
        this.price = typeOfPizza.price;
        this.calories = typeOfPizza.calories;
        this.container.textContent = '';
        this.render();
    }

    add(topping) {
        this.price = topping.price;
        this.calories = topping.calories;
        this.render();
    }

    addSize(elem) {
        if (elem == document.getElementById('small')) {
            this.price = -100;
            this.calories = -100;
            this.render();
        }
        if (elem == document.getElementById('big')) {
            this.price = 200;
            this.calories = 200;
            this.render();
        }
    }
}