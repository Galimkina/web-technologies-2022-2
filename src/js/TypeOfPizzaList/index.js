import Button from "../Button";

export default class TypeOfPizzaList {
    list = [];
    container = null;
    button = null;

    constructor(containerClass = '.js-pizza-catalog') {
        this.container = document.querySelector(containerClass);
        this.container?.addEventListener('click', this.eventHandler.bind(this));
        this.button = new Button();
    }

    addToPizzaList(typeOfPizza) {
        this.list.push(typeOfPizza);
        return this;
    }

    render() {
        this.container.textContent = '';

        this.list.forEach((typeOfPizza) => {
            this.container.appendChild(typeOfPizza.render());
        });
    }

    eventHandler(event) {
        const cardElem = event.target.closest('.pizza-card');

        if (cardElem) {
            const typeOfPizza = this.list.find(item => item.id === +cardElem.dataset.id);
            this.button.add(typeOfPizza);
        }
    }
}