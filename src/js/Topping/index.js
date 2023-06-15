export default class Topping {
    id;
    price = 0;
    calories = 0;
    title = '';
    img = '';

    constructor(props) {
        this.id = props.id;
        this.title = props.title;
        this.img = props.img;
        this.price = props.price;
        this.calories = props.calories;
    }

    render() {
        const elem = document.createElement('div');
        elem.classList.add('js-pizza-topping-card');
        elem.dataset.id = this.id;
        elem.innerHTML = `
            <div class="pizza-topping-card">
                <div class="pizza-topping-card_img">
                    <img src="${this.img}" alt="${this.title}">
                </div>
                <span class="pizza-topping-card_title">${this.title}</span>
                <span class="pizza-topping-card_price">${this.price} ₽</span>
            </div>
            `;
        return elem;
    }
}