export default class TypeOfPizza {
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
        elem.classList.add('pizza-card');
        elem.dataset.id = this.id;
        elem.innerHTML = `
            <div class="pizza-card" data-id="${elem.dataset.id}">
                <div class="pizza-card_img">
                    <img src="${this.img}" alt="${this.title}">
                </div>
                <h5 class="pizza-card_title">${this.title}</h5>
            </div>
            `;
        return elem;
    }
}
